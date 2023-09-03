<?php

// get all USERS
function get_all_user(){
    global $DB;
    
    $sql  = "SELECT * FROM users ";
    $sql .= "ORDER BY id ASC";
    $query = mysqli_query($DB, $sql);
    return $query;
}