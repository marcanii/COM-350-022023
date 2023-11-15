var VerifyToken = require('./VerifyToken');
var express = require('express');
var router = express.Router();
var bodyParser = require('body-parser');
router.use(bodyParser.urlencoded({ extended: true }));
router.use(bodyParser.json());
var Editorial = require('../editorial/Editorial');

var jwt = require('jsonwebtoken');
var bcrypt = require('bcryptjs');
var config = require('../config/config');
var logger = require('../config/log');


// Crear
router.post('/', function(req, res) {
    logger.info("Begin Register Editorial");
    Editorial.create({
            nombre: req.body.nombre,
            state: "active"
        },
        function(err, editorial) {
            if (err) return res.status(500).send(err.message)
            // create a token
            var token = jwt.sign({ id: editorial._id }, config.secret, {
                expiresIn: 86400 // expires in 24 hours
            });
            res.status(200).send({ editorial: editorial, token: token });
            logger.info("End Register Editorial");
    });
});

// Listar 
router.get('/',  function(req, res) {
    logger.info("Inicio Lista de editoriales");
    console.log(req.query);
    query = req.query;
    var limit = 0;
    if (query.limit) {
        limit = parseInt(query.limit);
        delete query["limit"];
    }
    console.log(query);
    Editorial.find(query, function(err, editorial) {
        if (err) return res.status(500).send("There was a problem finding the users.");
        res.status(200).send(editorial);
    }).limit(limit);
    logger.info("Final lista de editoriales");
});

// Obtener editorial
router.get('/:id',  function(req, res) {
    logger.info("Begin List Editorial");
    Editorial.findById(req.params.id, function(err, editorial) {
        if (err) return res.status(500).send("There was a problem finding the user.");
        if (!editorial) return res.status(404).send("No user found.");
        res.status(200).send(editorial);
        logger.info("End List Editorial");
    });
});

// Eliminar logicamenteun editorial
router.delete('/:id',  function(req, res) {
    logger.info("Begin inactive editorial");
    console.log("inactivo");
    editorial.findByIdAndUpdate(req.params.id, { state: "inactive" }, { new: true }, function(err, editorial) {
        if (err) return res.status(500).send("There was a problem inactive the user.");
        res.status(200).send(editorial);
    });
    logger.info("End inactive editorial");
});

// Actualizar
router.put('/:id',  function(req, res) {
    logger.info("Begin Update editorial");
    //   console.log(req);
    Editorial.findByIdAndUpdate(req.params.id, req.body, { new: true }, function(err, editorial) {
        if (err) return res.status(500).send("There was a problem updating the user.");
        res.status(200).send(editorial);
    });
    logger.info("End Update editorial");
});

// add the middleware function
router.use(function(editorial, req, res, next) {
    res.status(200).send(editorial);
});

module.exports = router;