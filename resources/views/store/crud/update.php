<?php

// database connection
require '../../../../app/models/db_connection.php';

// get the form data and store it in the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // cek metode request
    $id = query_input($_POST['id']);
    $name = query_input($_POST['name']);
    $email = query_input($_POST['email']);
    $phone = query_input($_POST['phone']);
    $address = query_input($_POST['address']);
    $brand = query_input($_POST['brand']);
    $type = query_input($_POST['type']);
    $description = query_input($_POST['description']);

    // query insert data
    $query = "UPDATE tb_product SET name='$name',email='$email',phone='$phone',address='$address',brand='$brand',type='$type',description='$description' WHERE id='$id'";

    // query execute in control flow
    if (mysqli_query($db, $query)) {
        header('location: ../../../../index.php', true, 301);
        exit();
    } else {
        echo 'Error: ' . $query . '<br>' . mysqli_error($db);
    }
}
mysqli_close($db);