var mongoose = require('mongoose');

const EditorialSchema = new mongoose.Schema({
    nombre: {
        type: String,
        required: 'Nombre requeriso'
    },
    state: { type: String, enum: ['active', 'inactive'] }
});

mongoose.model('Editorial', EditorialSchema);
module.exports = mongoose.model('Editorial');