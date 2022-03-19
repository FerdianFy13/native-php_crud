<?php

// database connection
require '../../../../app/models/db_connection.php';

// get the form data and store it in the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // cek metode request
    $name = query_input($_POST['name']);
    $email = query_input($_POST['email']);
    $phone = query_input($_POST['phone']);
    $address = query_input($_POST['address']);
    $brand = query_input($_POST['brand']);
    $type = query_input($_POST['type']);
    $description = query_input($_POST['description']);

    // query insert data
    $query = "INSERT INTO tb_product (name,email,phone,address,brand,type,description) VALUES ('$name','$email','$phone', '$address', '$brand','$type','$description')";

    // query execute in control flow
    if (mysqli_query($db, $query)) {
        header('location: ../../../../index.php', true, 301);
        exit();
    } else {
        echo 'Error: ' . $query . '<br>' . mysqli_error($db);
    }
}
mysqli_close($db);