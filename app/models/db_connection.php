<?php

// MySQL localhost configuration
$server = 'localhost';
$user = 'root';
$password = '';
$nama_database = 'db_store';

// coonnect to the database connection
$db = mysqli_connect($server, $user, $password, $nama_database);

// control flow for query
if (!$db) {
    die('failed to connect with databasee: ' . mysqli_connect_error());
}

// // function untuk menyaring data
function query_input($data)
{
    $data = trim($data); // remove trailing spaces, tabs, line breaks
    $data = stripslashes($data); // remove slash 
    $data = htmlspecialchars($data); // add escape character u or special character
    return $data;
}