var express = require('express');
var app = express();

var db =  require('./config/db');

var LibroController = require('./routes/LibroController');

app.use('/api/v1/libros', LibroController);

module.exports = app;