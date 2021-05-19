<?php

function cleanDump($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function cleanUpInput($userinput){
    $input = trim($userinput);
    $cleaninput = filter_var($input,FILTER_SANITIZE_STRING);
    return $cleaninput;
}

function cleanUpOutput($useroutput){
    $output = trim($useroutput);
    $cleanoutput = htmlspecialchars($output);
    return $cleanoutput;
}

function hashPassword($password){
    $password = trim($password);
    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
    return $hashedpassword;
}

function isLoggedIn(){
    if(isset($_SESSION['username'], $_SESSION['userid']) && ($_SESSION['session_id'] == session_id())){
        return true;
    } else {
        return false;
    }
}


