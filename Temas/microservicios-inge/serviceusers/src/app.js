var express = require('express');
var app = express();
var db = require('./config/db');

var UserController = require('./routes/UserController');
var LoginController = require('./routes/LoginController');

app.use('/api/v1/users', UserController);
app.use('/api/v1/login', LoginController);

module.exports = app;