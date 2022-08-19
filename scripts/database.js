require('dotenv').config()
const { createPool } = require('mysql');

const pool = createPool({
    host:process.env.DB_HOST,
    user:process.env.DB_USER,
    password:process.env.DB_PASSWORD,
    database:process.env.DB_NAME,
    connectionLimit:10
})

pool.query(`select * from sign_up_details`, (err, result, fields)=>{
    if(err) {
        return console.log(err);
    } 
    return console.log(result);
});

module.exports = pool;