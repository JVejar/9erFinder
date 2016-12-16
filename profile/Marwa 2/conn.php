<?php

// Create connection and select a database

include "config.php";
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

if ($con->connect_error) {
    echo("\n\nCould not connect: ERROR NO. " .
        $con->connect_errno . " : " .
        $con->connect_error);
    // terminate execution here, using die
    die ("<br/><br/> Could not connect to db. Further Script processing terminated ");
} else {
}

$con->select_db("sm");
?>