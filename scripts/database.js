const { createPool } = require('mysql');

const pool = createPool({
    host:"localhost",
    user:"root",
    password:"",
    database:"interwoven_db",
    connectionLimit:10
})

pool.query(`select * from sign_up_details`, (err, result, fields)=>{
    if(err) {
        return console.log(err);
    } 
    return console.log(result);
});