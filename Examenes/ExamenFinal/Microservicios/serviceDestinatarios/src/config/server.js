const path = require('path');
const express = require('express');
// const bodyParser = require('body-parser');

const app = express();

// settings
app.set('port', process.env.PORT || 3002);
app.set('view engine', 'ejs');
// app.set('views', path.join(__dirname, '../app/views'));

// middlewares
// Reemplaza bodyParser por el método integrado en Express para parsear JSON

// app.use(bodyParser.urlencoded({ extended: false }));
// app.use(express.static(path.join(__dirname, '../static')))

app.use(express.json());

// Para seguir admitiendo cuerpos que vienen codificados en la URL (como formularios)
app.use(express.urlencoded({ extended: false }));

// Carpeta para archivos estáticos
app.use(express.static(path.join(__dirname, '../static')));

module.exports = app;
