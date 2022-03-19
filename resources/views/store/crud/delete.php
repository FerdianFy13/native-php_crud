<?php

// database connection
require '../../../../app/models/db_connection.php';

// get the form data and store it in the database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // cheeck request method id for database connection
    $id = query_input($_POST['id']);

    // query database
    $query = " DELETE FROM tb_product WHERE id='$id'";

    // query execute in control flow
    if (mysqli_query($db, $query)) {
        header('location: ../../../../index.php', true, 301);
        exit();
    } else {
        echo 'Error: ' . $query . '<br>' . mysqli_error($db);
    }
}
mysqli_close($db);