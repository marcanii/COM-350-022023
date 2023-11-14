var mongoose = require('mongoose');
var validateEmail = function(email) {
    var re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return re.test(email)
};

var UserSchema = new mongoose.Schema({
    name: {
        type: String,
        required: 'Name is required'
    },
    email: {
        type: String,
        unique: true,
        required: 'Email address is required',
        validate: [validateEmail, 'Please fill a valid email address'],
        match: [/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/, 'Please fill a valid email address']
    },
    password: String,
    dateCreate: String,
    state: { type: String, enum: ['active', 'inactive'] },
    isSeller: { type: String, enum: ['yes', 'no'] },
    isBuyer: { type: String, enum: ['yes', 'no'] },
    isAdmin: { type: String, enum: ['yes', 'no'] }
});
mongoose.model('User', UserSchema);

module.exports = mongoose.model('User');