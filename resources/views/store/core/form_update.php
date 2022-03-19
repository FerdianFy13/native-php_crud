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
    // call id for the datbase in query for formulir update
    require '../../../../app/models/db_connection.php';
    $id = query_input($_GET['id']);
    $query = "SELECT * FROM tb_product WHERE id='$id'";
    $yield = mysqli_query($db, $query);
    $form = mysqli_fetch_assoc($yield);
    ?>

    <!-- container form update -->
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="mb-4 mt-2 text-center">Fantech Store Information</h1>
                <h2>Updating Product Purchase</h2>
                <div class="bd-example">

                    <!-- form update is method post -->
                    <form action="../crud/update.php" method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" value="<?= $form[
                                    'id'
                                ] ?>">
                                <input type="text" class="form-control" name="name" placeholder="Name"
                                    value="<?= $form['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" placeholder="E-mail"
                                    value="<?= $form['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="Phone"
                                    value="<?= $form['phone'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" placeholder="Address"
                                    value="<?= $form['address'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="brand" placeholder=" Brand"
                                    value="<?= $form['brand'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" placeholder="Type"
                                    value="<?= $form['type'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                    value="<?= $form['description'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>

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