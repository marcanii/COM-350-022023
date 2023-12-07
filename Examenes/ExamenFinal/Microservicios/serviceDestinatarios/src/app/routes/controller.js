var VerifyToken = require('./VerifyToken');
var dbConnection = require('../../config/dbConnection').pool;

var logger = require('../../config/log');
var secrets = require('../../config/secrets');
var cloudinary = require('cloudinary');

module.exports = app => {
    app.use(function(item, req, res, next) {
        console.log(item);
        res.status(200).send(item);
    });

    cloudinary.config(secrets.cloudinary);

    app.get('/api/v1/destinatarios', (req, res) => {
        logger.info("GET: /api/v1/destinatarios");
        console.log("GET: /api/v1/destinatarios");

        var sql = "";


        sql = "SELECT id_destinatario,nombre,cargo FROM destinatarios";
        
       

        dbConnection.getConnection(function (err, connection) {
            connection.query(sql, (err, result) => {
                res.json(result);
                console.log("Query destinatarios by " + req.userid);
                logger.info("Query destinatarios by " + req.userid);
            });
            connection.release();
        });
    });


    app.post('/api/v1/destinatarios', (req, res) => {
        const body = req.body;
        var sql = `INSERT INTO destinatarios (nombre, cargo) 
                   VALUES ('${body.nombre}', '${body.cargo}')`; // Added a closing parenthesis ;
        
        dbConnection.getConnection(function (err, connection) {
            if (err) {
                // If there's an error obtaining the connection, return the response immediately
                return res.json({ error: err.message });
            }
    
            connection.query(sql, function (err, result) {
                // Be sure to release the connection first
                connection.release();
                
                if (err) {
                    // If there's an error in the query, return the response immediately
                    return res.json({ error: err.message });
                }
                
                // If everything is fine, send the response
                res.status(201).json({ message: 'Destinatario creado con éxito', result: result });
            });
        });
    });
    
    



    app.put('/api/v1/destinatarios/:id', (req, res) => {     
        logger.info("PUT: /api/v1/destinatarios/:id");
    
        const body = req.body;
        
        var sql = "UPDATE destinatarios SET nombre='" + body.nombre + "', cargo='" + body.cargo +  "' WHERE id_destinatario=" + req.params.id + ";";
        console.log(sql);
    
        dbConnection.getConnection(function(err, connection){
            if (err) {
                // Si hay un error obteniendo la conexión, devolver la respuesta de inmediato
                return res.json({ error: err.message });
            };
            
            connection.query(sql, function(err, result) {
                if (err) {
                    // Liberar la conexión en caso de error y devolver respuesta
                    connection.release();
                    return res.json({ error: err.message });
                };
                // Si la consulta fue exitosa, liberar conexión y enviar respuesta
                connection.release();
                console.log("destinario updated by " + req.params.id);
                logger.info("destinario updated by " + req.params.id);
                res.status(200).json({ message: 'destinario actualizado con éxito', result: result });
            });
        });
    });
    
    

    /* DELETE item. */
    app.delete('/api/v1/destinatarios/:id', VerifyToken, (req, res) => {     
        logger.info("DELETE: /api/v1/destinatarios/:id");

        const body = req.body;
        var sql = "DELETE FROM  destinatarios WHERE id_destinatario=" + req.params.id + ";";
        console.log(sql);

        dbConnection.getConnection(function(err, connection){
            if (err) {
                // Si hay un error obteniendo la conexión, devolver la respuesta de inmediato
                return res.json({ error: err.message });
            };
            
            connection.query(sql, function(err, result) {
                if (err) {
                    // Liberar la conexión en caso de error y devolver respuesta
                    connection.release();
                    return res.json({ error: err.message });
                };
                // Si la consulta fue exitosa, liberar conexión y enviar respuesta
                connection.release();
                console.log("destinatario deleted by " + req.params.id);
                logger.info("destinatario delted by " + req.params.id);
                res.status(200).json({ message: 'destinatario eliminado con éxito', result: result });
            });
        });
    });
};