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

    <!-- container form create -->
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="mb-4 mt-2 text-center">Fantech Store Information</h1>
                <h2>Product Purchase</h2>
                <div class="bd-example">

                    <!-- form action method post for formulir create  -->
                    <form action="../crud/create.php" method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Buyer Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" placeholder="Buyer E-mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="Buyer Phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" placeholder="Buyer Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="brand" placeholder="Brand Product">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type" placeholder="Type Product">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description"
                                    placeholder="Description Product">
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