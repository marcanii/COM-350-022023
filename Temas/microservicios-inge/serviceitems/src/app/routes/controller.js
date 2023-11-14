var VerifyToken = require('./VerifyToken');
var dbConnection = require('../../config/dbConnection').pool;
var config = require('../../config/config');
var logger = require('../../config/log');
var secrets = require('../../config/secrets');
var jwt = require('jsonwebtoken');
var bcrypt = require('bcryptjs');
var dateFormat = require('dateformat');
var mysql = require('mysql');
var fileUpload = require('express-fileupload')
var multer = require('multer');
var cloudinary = require('cloudinary');
var bodyParser = require('body-parser');

var upload = multer({ dest: './photos/' })

module.exports = app => {
    app.use(function(item, req, res, next) {
        console.log(item);
        res.status(200).send(item);
    });

    cloudinary.config(secrets.cloudinary);

    /* GET items listing. */
    app.get('/api/v1/items',  (req, res) => {     
        logger.info("GET: /api/v1/items");
        console.log("GET: /api/v1/items");

        var sql = "";
        var filter = "";
        if (typeof req.query.categoryid != 'undefined'){
            if (filter == "")
                filter = " categoryid = " + req.query.categoryid;
            else
                filter = " AND categoryid = " + req.query.categoryid;
        }
        if (typeof req.query.userid != 'undefined'){
            if (filter == "")
                filter = " userid = '" + req.query.userid + "'";
            else
                filter = " AND userid = '" + req.query.userid + "'";
        }
        if (typeof req.query.name != 'undefined'){
            if (filter == "")
                filter = " name LIKE '%" + req.query.name + "%'";
            else
                filter = " AND name LIKE '%" + req.query.name + "%'";
        }
        if (typeof req.query.state != 'undefined'){
            if (filter == "")
                filter = " state = " + req.query.state;
            else
                filter = " AND state = " + req.query.state;
        }

        var fields = "*";
        if(typeof req.query.fields != 'undefined') {
            fields = req.query.fields;
        }

        var sort = "";
        if(typeof req.query.sort != 'undefined') {
            sort = " ORDER BY " + req.query.sort;
            if(typeof req.query.order != 'undefined') {
                sort += " " + req.query.order;
            }
        }

        var limit = "";
        if(typeof req.query.limit != 'undefined') {
            limit = " LIMIT " + req.query.limit;
        }

        if (filter == "")
            sql = "SELECT " + fields + " FROM item " + sort + limit;
        else
            sql = "SELECT " + fields + " FROM item WHERE " + filter + sort + limit;

        console.log(sql);
        logger.info("Consulta" + sql);

        dbConnection.getConnection(function(err, connection) {
            connection.query(sql, (err, result) => {
                res.json(result);
                console.log("Query items by " + req.userId);
                logger.info("Query items by " + req.userId);
            });
            connection.release();
        });
    });

    /* GET a item. */
    app.get('/api/v1/items/:id', VerifyToken, (req, res) => {     
        logger.info("GET: /api/v1/items/:id");

        var fields = "*";
        if(typeof req.query.fields != 'undefined') {
            fields = req.query.fields;
        }

        var sql = "SELECT " + fields + " FROM item WHERE id=" + req.params.id + ";";
        console.log(sql);

        dbConnection.getConnection(function(err, connection) {
            connection.query(sql, (err, result) => {
                res.json(result);
                console.log("Query items by " + req.userId);
                logger.info("Query items by " + req.userId);
            });
            connection.release();
        });
    });

    /* POST item creating. */
    app.post('/api/v1/items', VerifyToken, upload.single('photo'), (req, res) => {     
        logger.info("POST: /api/v1/items");

        var publicationDate = dateFormat(new Date(), "yyyy-mm-dd HH:MM:ss");
        console.log(req.body);
        const body = req.body;
        var sql = "";
        var photourl = "";

        console.log(req.file);

        if (!req.file) {
            console.log("No file received");

            sql = "INSERT INTO item (categoryid, userid, name, description, price, publicationdate) VALUES (" +
            body.categoryid + ", '" + req.userId + "', '" + body.name +  "', '" + body.description +
            "', " + body.price + ", '" + publicationDate + "');";

            console.log(sql);
            dbConnection.getConnection(function(err, connection){
                connection.query(sql, function(err, result) {
                    if (err) {
                        res.json({ error: err })
                    };   
                    console.log("Item created without photo by " + req.userId);
                    logger.info("Item created without photo by " + req.userId);             
                });
                res.end();
                connection.release();
            });  
        } else {
            console.log('file received');
            
            cloudinary.uploader.upload(req.file.path, function(resultclo) {
                console.log(resultclo) 
                photourl = resultclo.url;

                sql = "INSERT INTO item (categoryid, userid, name, description, price, photo, publicationdate) VALUES (" +
                    body.categoryid + ", '" + req.userId + "', '" + body.name +  "', '" + body.description +
                    "', " + body.price + ", '" + photourl + "', '" + publicationDate + "');";

                console.log(sql);
                dbConnection.getConnection(function(err, connection){
                    connection.query(sql, function(err, result) {
                        if (err) {
                            res.json({ error: err })
                        };
                        console.log("Item created with photo by " + req.userId);
                        logger.info("Item created with photo by " + req.userId);            
                    });
                    res.end();
                    connection.release();
                });  
            });
        }
    });

    /* PUT item updating. */
    app.put('/api/v1/items/:id', VerifyToken, (req, res) => {     
        logger.info("PUT: /api/v1/items/:id");

        const body = req.body;
        var sql = "UPDATE item SET categoryid=" + body.categoryid + ", name='" + body.name + 
                "', description='" + body.description + "', price=" + body.price + ", photo='" + body.photo + 
                "' WHERE id=" + req.params.id + ";";
        console.log(sql);

        dbConnection.getConnection(function(err, connection){
            connection.query(sql, function(err, result) {
                if (err) {
                    res.json({ error: err })
                };
                console.log("Item updated by " + req.userId);
                logger.info("Item updated by " + req.userId);                               
            });
            res.end();
            connection.release();
        });
    });

    /* DELETE item. */
    app.delete('/api/v1/items/:id', VerifyToken, (req, res) => {     
        logger.info("DELETE: /api/v1/items/:id");

        const body = req.body;
        var sql = "DELETE FROM  item WHERE id=" + req.params.id + ";";
        console.log(sql);

        dbConnection.getConnection(function(err, connection){
            connection.query(sql, function(err, result) {
                if (err) {
                    res.json({ error: err })
                };
                logger.info("Item deleted by " + req.userId);
                console.log("Item deleted by " + req.userId);                
            });
            res.end();
            connection.release();
        });
    });
        
    /* PATCH item. */
    app.patch('/api/v1/items/', VerifyToken, (req, res) => {
        logger.info("PATCH: /api/v1/items/");

        const body = req.body;
        var sqlCheckItem = "SELECT userid, state FROM dbtantakatu.item WHERE id = "+ body.itemId + ";"

        var itemUserId = "";
        var itemState = -1;
        dbConnection.getConnection(function(err, connection) {
            connection.query(sqlCheckItem, function(err, result) {
                if (err) {
                    res.json({ error: err })
                };
                console.log(result);
                itemUserId = result[0].userid;
                itemState  = result[0].state;
                console.log("Item user id " + itemUserId);
                console.log("Buyer user id " + req.userId);

                if (itemUserId == req.userId)
                {
                    console.log("Buyer and Seller are the same");
                    res.end();
                    connection.release();
                }
                else if (itemState == 0)
                {
                    console.log("Item is already sold !");
                    res.end();
                    connection.release();
                }
                else
                {
                 var sqlPurchase = "INSERT INTO purchase (ItemId, UserId, purchaseDate) VALUES (" + body.itemId + ", '" + req.userId + "', NOW());";
                        console.log(sqlPurchase);
                        var sqlUpdateItem = "UPDATE item SET state = 0 WHERE id = "+ body.itemId + ";";
                        console.log(sqlUpdateItem);
                        dbConnection.getConnection(function(err, connection) {
                            connection.query(sqlPurchase, function(err, result) {
                                if (err) {
                                    res.json({ error: err })
                                };
                                console.log("purchase performed");
                                logger.info("purchase performed");
                            });
                            connection.query(sqlUpdateItem, function(err, result) {
                                if (err) {
                                    res.json({ error: err })
                                };
                                console.log("purchase performed");
                                logger.info("purchase performed");
                            });            
                            res.end();
                            connection.release();
                        });
                };
            });
            });
    
        logger.info("End purchase perform");

        });
};