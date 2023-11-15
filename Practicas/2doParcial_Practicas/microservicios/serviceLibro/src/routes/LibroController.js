var VerifyToken = require('./VerifyToken');
var express = require('express');
var router = express.Router();
var bodyParser = require('body-parser');
router.use(bodyParser.urlencoded({ extended: true }));
router.use(bodyParser.json());
var Libro = require('../libro/Libro');

var jwt = require('jsonwebtoken');
var bcrypt = require('bcryptjs');
var config = require('../config/config');
var logger = require('../config/log');


// Crear usuario
router.post('/', function(req, res) {
    logger.info("Begin Register Libro");
    Libro.create({
            titulo: req.body.titulo,
            editorial: req.body.editorial,
            edicion: req.body.edicion,
            pais: req.body.pais,
            precio: req.body.precio,
            state: "active"
        },
        function(err, libro) {
            if (err) return res.status(500).send(err.message)
            // create a token
            var token = jwt.sign({ id: libro._id }, config.secret, {
                expiresIn: 86400 // expires in 24 hours
            });
            res.status(200).send({ libro: libro, token: token });
            logger.info("End Register User");
    });
});

// Listar todos usuarios 
router.get('/',  function(req, res) {
    logger.info("Inicio Lista de libros");
    console.log(req.query);
    query = req.query;
    var limit = 0;
    if (query.limit) {
        limit = parseInt(query.limit);
        delete query["limit"];
    }
    console.log(query);
    Libro.find(query, function(err, libros) {
        if (err) return res.status(500).send("There was a problem finding the users.");
        res.status(200).send(libros);
    }).limit(limit);
    logger.info("Final lista de libros");
});

// Obtener un usuario
router.get('/:id',  function(req, res) {
    logger.info("Begin List libros");
    Libro.findById(req.params.id, function(err, libro) {
        if (err) return res.status(500).send("There was a problem finding the user.");
        if (!libro) return res.status(404).send("No user found.");
        res.status(200).send(libro);
        logger.info("End List libros");
    });
});

// Eliminar logicamenteun usuario
router.delete('/:id',  function(req, res) {
    logger.info("Begin inactive Libro");
    console.log("inactivo");
    Libro.findByIdAndUpdate(req.params.id, { state: "inactive" }, { new: true }, function(err, libro) {
        if (err) return res.status(500).send("There was a problem inactive the user.");
        res.status(200).send(libro);
    });
    logger.info("End inactive Libro");
});

// Actualizar un usuario
router.put('/:id',  function(req, res) {
    logger.info("Begin Update Libro");
    //   console.log(req);
    Libro.findByIdAndUpdate(req.params.id, req.body, { new: true }, function(err, libro) {
        if (err) return res.status(500).send("There was a problem updating the user.");
        res.status(200).send(libro);
    });
    logger.info("End Update Libro");
});
// add the middleware function
router.use(function(libro, req, res, next) {
    res.status(200).send(libro);
});

module.exports = router;