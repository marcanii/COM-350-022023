const mongoose = require('mongoose');
mongoose.connect('mongodb://127.0.0.1:27017/bd_usuarios');
console.log('Conexión exitosa a la base de datos');