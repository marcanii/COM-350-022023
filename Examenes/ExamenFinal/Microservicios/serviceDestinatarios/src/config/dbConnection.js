const mysql = require('mysql');

const pool = mysql.createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "examenfinal2"
});

exports.pool = pool;