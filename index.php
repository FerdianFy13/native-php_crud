<!DOCTYPE html>
<html lang="en">

<!-- call the head.php file -->
<?php require 'resources/views/layout/head.php'; ?>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="resources/views/store/core/dashboard.php">FERDI</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="resources/views/store/core/dashboard.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resources/views/store/core/form_create.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- container form indec -->
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="mb-4 mt-2 text-center">Fantech Store Information</h1>
                <h2>Product Purchase</h2>
                <a href="resources/views/store/core/form_create.php" class="btn btn-danger" role="button">Adding
                    Data</a>
                <div class="bd-example">

                    <!-- table -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Type</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- php tags -->
                            <?php
                            require 'app/models/db_connection.php';
                            $query = 'SELECT * FROM tb_product';
                            $yield = mysqli_query($db, $query);
                            $no = 0;
                            while ($form = mysqli_fetch_assoc($yield)) {
                                $no++; ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $form['name'] ?></td>
                                <td><?= $form['email'] ?></td>
                                <td><?= $form['phone'] ?></td>
                                <td><?= $form['address'] ?></td>
                                <td><?= $form['brand'] ?></td>
                                <td><?= $form['type'] ?></td>
                                <td><?= $form['description'] ?></td>
                                <td>
                                    <a href="resources/views/store/core/form_update.php?id=<?= $form[
                                        'id'
                                    ] ?>" class="text-decoration-none text-info">Edit</a>
                                    <a href="resources/views/store/core/confirm_delete.php?id=<?= $form[
                                        'id'
                                    ] ?>" class="text-decoration-none text-success">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
                <hr class="d-sm-none">
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="jumbotron text-center bg-light" style="margin-bottom:0">
        <h4><a href="https://github.com/FerdianFy13" class="text-decoration-none text-danger">Ferdian Firmansyah</a>
        </h4>
    </div>
</body>

</html>