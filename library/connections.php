<?php

/* 
 * Connection to the database
 */

function acmeConnect(){
    $server = 'localhost';
    $dbname = 'acme_database';
    $username = 'iClient';
    $password = 'fCXxC7CW7TVU9HxH';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    // Create the actual connection object and assign it to a variable
    try {
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch(PDOException $e) {
        header('Location: /acme/view/500.php');
        exit;
    }
}



