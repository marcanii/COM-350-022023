const dbConnection = require('../../config/dbConnection').pool;

let categoryModel = {};

categoryModel.getCategories = (callback) => {
  if (dbConnection) {
    dbConnection.query('SELECT * FROM category ORDER BY id', (err, rows) => {
      if(err){
        throw err;
      }else{
        callback(null, rows);
      }
    });
  }
};

categoryModel.insertCategory = (categoryData, callback) => {
  if(dbConnection){
    dbConnection.query('INSERT INTO category SET ?', categoryData, (err, result) => {
      if(err){
        throw err;
      }else{
        callback(null, {
          insertId: result.insertID
        })
      }
    })
  }
};

categoryModel.updateCategory = (categoryData, callback) => {
  if (dbConnection) {
    const sql = `
      UPDATE category SET
      name = ${dbConnection.escape(categoryData.name)},
      description = ${dbConnection.escape(categoryData.description)}
      WHERE id = ${dbConnection.escape(categoryData.id)}
      ` 
    dbConnection.query(sql, (err, result) => {
      if (err) {
        throw err;
      } else {
        callback(null, {
          "msg": "success" 
        })
      }
    })
  }
};

categoryModel.deleteCategory = (id, callback) => {
  if(dbConnection){
    let sql = `SELECT * FROM category WHERE id = ${dbConnection.escape(id)}`;

    dbConnection.query(sql, (err, row) => {
      if(row){
        let sql = `DELETE FROM category WHERE id = ${dbConnection.escape(id)}`;
        dbConnection.query(sql, (err, resul) => {
          if(err){
            throw err;
          }else{
            callback(null, {
              "msg": "deleted"
            })
          }
        })
      }else{
        callback(null, {
          "msg": "not exist"
        })
      }
    })
  }
};

categoryModel.searchCategory = (categoryFilter, callback) => {
  if (dbConnection) {
    
    let findId = (categoryFilter.id != null ? `${dbConnection.escape(categoryFilter.id)}` : `'%'`);
    let findName = (categoryFilter.name != null ? `${dbConnection.escape(categoryFilter.name.concat('%'))}` : `'%'`);
    let findDescription = (categoryFilter.description != null ? `${dbConnection.escape(categoryFilter.description.concat('%'))}` : `'%'`);
    let consulta = `
      SELECT *
      FROM category 
      WHERE id LIKE ${findId}
      AND name LIKE ${findName}
      AND description LIKE ${findDescription}
      `
    let sql;
    if(categoryFilter.limit != null){
      sql = consulta.concat('LIMIT ' + categoryFilter.limit);
    }else{
      sql = consulta;
    }
  
    dbConnection.query(sql, (err, rows) => {
      if (err) {
        throw err;
      } else {
        callback(null, rows);
      }
    })
  }
};

module.exports = categoryModel;