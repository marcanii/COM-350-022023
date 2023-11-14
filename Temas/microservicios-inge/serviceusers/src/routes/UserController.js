var VerifyToken = require('./VerifyToken');
var express = require('express');
var router = express.Router();
var bodyParser = require('body-parser');
router.use(bodyParser.urlencoded({ extended: true }));
router.use(bodyParser.json());
var User = require('../user/User');

var jwt = require('jsonwebtoken');
var bcrypt = require('bcryptjs');
var config = require('../config/config');
var logger = require('../config/log');


// CREATES A NEW USER
router.post('/', function(req, res) {
    logger.info("Begin Register User");
    var hashedPassword = bcrypt.hashSync(req.body.password, 8);
    console.log(req.body.email)
    User.findOne({ "email": req.body.email }, function(err, user) {
                console.log(user);
        if (user) return res.status(500).send("this email exists");
        else
            User.create({
                    name: req.body.name,
                    email: req.body.email,
                    dateCreate: new Date(),
                    state: "active",
                    isSeller: req.body.isSeller,
                    isBuyer: req.body.isBuyer,
                    isAdmin: req.body.isAdmin,
                    password: hashedPassword
                },
                function(err, user) {
                    if (err) return res.status(500).send(err.message)
                        // create a token
                    var token = jwt.sign({ id: user._id, isSeller: user.isSeller, isBuyer: user.isBuyer, isAdmin: user.isAdmin }, config.secret, {
                        expiresIn: 86400 // expires in 24 hours
                    });
                    res.status(200).send({ auth: true, token: token });
                    logger.info("End Register User");
                });
    });
});

// RETURNS  USERS FROM THE DATABASE ON MANY CRITERIAS
router.get('/', VerifyToken, function(req, res, next) {
    logger.info("Begin List Users");
    console.log(req.query);
    query = req.query;
    var limit = 0;
    if (query.limit) {
        limit = parseInt(query.limit);
        delete query["limit"];
    }
    console.log(query);
    User.find(query, function(err, users) {
        if (err) return res.status(500).send("There was a problem finding the users.");
        res.status(200).send(users);
    }).limit(limit);
    logger.info("End List Users");
});

// GETS A SINGLE USER FROM THE DATABASE
router.get('/:id', VerifyToken, function(req, res, next) {
    logger.info("Begin List User");
    User.findById(req.params.id, function(err, user) {
        if (err) return res.status(500).send("There was a problem finding the user.");
        if (!user) return res.status(404).send("No user found.");
        res.status(200).send(user);
        logger.info("End List User");
    });
});

// INACTIVE  USER FROM THE DATABASE
router.delete('/:id', VerifyToken, function(req, res, next) {
    logger.info("Begin inactive User");
    console.log("inactivo");
    User.findByIdAndUpdate(req.params.id, { state: "inactive" }, { new: true }, function(err, user) {
        if (err) return res.status(500).send("There was a problem inactive the user.");
        res.status(200).send(user);
    });
    logger.info("End inactive User");
});

// UPDATES A SINGLE USER IN THE DATABASE
router.put('/:id', VerifyToken, function(req, res) {
    logger.info("Begin Update User");
    //   console.log(req);
    User.findByIdAndUpdate(req.params.id, req.body, { new: true }, function(err, user) {
        if (err) return res.status(500).send("There was a problem updating the user.");
        res.status(200).send(user);
    });
    logger.info("End Update User");
});
// add the middleware function
router.use(function(user, req, res, next) {
    res.status(200).send(user);
});

module.exports = router;