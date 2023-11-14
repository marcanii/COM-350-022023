const jwt = require('jsonwebtoken');
const config = require('../../config/config');

function verifyToken(req, res, next) {
  var token = req.headers['authorization']
  
  token = token.substring(7);
  
  if (!token)
    return res.status(403).send({
      auth: false,
      message: 'No token provided.'
    });
  jwt.verify(token, config.secret, function (err, decoded) {
    if (err)
      return res.status(500).send({
        auth: false,
        message: 'Failed to authenticate token.'
      });
   
    req.userId = decoded.id;
    req.isSeller = decoded.isSeller;
    req.isBuyer = decoded.isBuyer;
    req.isAdmin = decoded.isAdmin;
    next();
  });
}
module.exports = verifyToken;