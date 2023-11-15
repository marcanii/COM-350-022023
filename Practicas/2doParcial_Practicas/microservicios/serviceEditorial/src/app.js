var express = require('express');
var app = express();

var db =  require('./config/db');

var EditorialController = require('./routes/EditorialController');

app.use('/api/v1/editorial', EditorialController);

module.exports = app;