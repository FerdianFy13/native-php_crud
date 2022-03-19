<!DOCTYPE html>
<html lang="en">

<!-- call the head.php file -->
<?php require '../../layout/head.php'; ?>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">FERDI</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mr-auto">
                </ul>

                <ul class="navbar-nav my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="form_create.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../../index.php">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- php tags -->
    <?php
    // call id for the datbase in query for confirm delete
    require '../../../../app/models/db_connection.php';
    $id = query_input($_GET['id']);
    $query = "SELECT * FROM tb_product WHERE id='$id'";
    $yield = mysqli_query($db, $query);
    $form = mysqli_fetch_assoc($yield);
    ?>

    <!-- container confirm delete -->
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="mb-4 mt-2 text-center">Fantech Store Information</h1>
                <h2>Deleting Product Purchase</h2>

                <!-- table -->
                <table class="table table-hover">
                    <tr>
                        <th scope="col" width="15em">Name</th>
                        <td scope="col"><?= $form['name'] ?></td>
                    </tr>
                    <tbody>
                        <tr>
                            <th scope="row">E-mail</th>
                            <td><?= $form['email'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td><?= $form['phone'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Address</th>
                            <td><?= $form['address'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Brand</th>
                            <td><?= $form['brand'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Type</th>
                            <td><?= $form['type'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td><?= $form['description'] ?></td>
                        </tr>
                    </tbody>
                </table>

                <!-- form action in confirm delete -->
                <form action="../crud/delete.php" method="post">
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="hidden" name="id" value="<?= $form[
                                'id'
                            ] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <a href="../../../../index.php" class="btn btn-primary" role="button">Cancel</a>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </div>
                    </div>
                </form>

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