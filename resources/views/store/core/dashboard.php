<!DOCTYPE html>
<html lang="en">

<!-- call the head.php file-->
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
                        <a class="nav-link active" href="dashboard.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_create.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../../../index.php">View</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- profile developer -->
    <div class="container" align="center" style="margin-top:30px">
        <div class="row">
            <div class="col">
                <h2>About Me</h2>
                <h5>Photo of me:</h5>
                <div class="fakeimg">
                    <img src="https://d26bwjyd9l0e3m.cloudfront.net/wp-content/uploads/2015/10/Review-One-Piece-Pirate-Warriors-3-Luffy-Image.jpg"
                        alt="profile picture" style="width:200px; height: 200px; " class="img-responsive mt-auto">
                </div>
                <h4>Ferdian Firmansyah</h4>
                <p>Web Developer || Mobile Developer || Data Analyst</p>
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