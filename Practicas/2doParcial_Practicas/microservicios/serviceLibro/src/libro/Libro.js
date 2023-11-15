var mongoose = require('mongoose');

const LibroSchema = new mongoose.Schema({
    titulo: {
        type: String,
        required: 'Titulo requeriso'
    },
    editorial: String,
    edicion: Number,
    pais: String,
    precio: Number,
    state: { type: String, enum: ['active', 'inactive'] }
});

mongoose.model('Libro', LibroSchema);
module.exports = mongoose.model('Libro');