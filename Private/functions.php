<?php

// function for adding '/' in url
function url_for($myUrlPath){
    if ($myUrlPath[0] != '/') {
        $myUrlPath = '/' . $myUrlPath;
    }
    return WWW_ROOT . $myUrlPath;
}

// encode url value
function u($string=""){
    return urlencode($string);
}

// encode html
function h($string=""){
    return htmlspecialchars($string);
}

// check post request
function is_post_request(){
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

