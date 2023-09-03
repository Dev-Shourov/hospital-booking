<?php

require_once('db_credentials.php');

// connect with db
function db_connect(){
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    return $connection;
}

// disconnect with db
function db_disconnect($connection){
    mysqli_close($connection);
}