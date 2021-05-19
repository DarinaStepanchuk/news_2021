<?php
require_once "database/connection.php";
require_once "database/models/users.php";

function registerController(){
    if(isset($_POST['lastname'], $_POST['firstname'], $_POST['username'], $_POST['password'])){
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        try {
            addUser($firstname, $lastname, $username, $password);
            header("Location: /login"); 
        } catch (PDOException $e){
            echo "Virhe tietokantaan tallennettaessa: " . $e->getMessage();
        }
    } else {
        require "views/register.view.php";
    }
}

function loginController(){
    if(isset($_POST['username'], $_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
  
        $result = login($username, $password);
        if($result){
            $_SESSION['username'] = $result['username'];
            $_SESSION['userid'] = $result['userid'];
            $_SESSION['session_id'] = session_id();
            header("Location: /"); 
        } else {
            require "views/login.view.php";
        }
    } else {
        require "views/login.view.php";
    }
}

function logoutController(){
    session_unset(); //poistaa kaikki muuttujat
    session_destroy();
    setcookie(session_name(),'',0,'/'); //poistaa evästeen selaimesta
    session_regenerate_id(true);
    header("Location: /login"); // forward eli uudelleenohjaus
    die();
}