<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .form-con {
            width: 100%;
            border: 1px solid #d5d0d0;
            padding: 5px 13px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed fixed-top" style="">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_List.php">My List</a>
                    </li>
                    <?php
                    require_once("core.php");

                    if (isset($_COOKIE["logingCookie"])) {   ?>
                        <li class="nav-item">
                            <a class="nav-link" href="profile.php">Profile</a>
                        </li>
                    <?php   }   ?>
                    <?php
                    require_once("core.php");

                    if (!isset($_COOKIE["logingCookie"])) {  ?>
                        <li class="nav-item">
                            <a class="nav-link" href="loging.php">Loging</a>
                        </li>
                    <?php }   ?>
                    <?php
                    require_once("core.php");

                    if (isset($_COOKIE["logingCookie"])) {   ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="post.php">Post</a>
                        </li>
                    <?php   }   ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <p style="font-size: 40px;" class="lead text-center mt-2">MY PRODACT</p>
    <p class="text-center m-0">Post your prodact for sale......</p>
    <hr>
    <br>
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="post_prodact_core.php">
            <div class="form-group">
                <label for="">PRODACT NAME</label>
                <input type="text" name="prodact_name" id="" class="form-control" placeholder="PRODACT NAME" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">NAME</label>
                <div class="form-group">
                    <label for="">PRICE</label>
                    <input type="text" name="price" id="" class="form-control" placeholder="PRICE" aria-describedby="helpId" required>
                    <small id="helpId" class="text-muted">Help text</small>
                </div>

            </div>
            <div class="form-group">
                <label for="">Upload your prodact....</label>
                <input type="file" class="form-control-file" name="avatar" id="" placeholder="" aria-describedby="fileHelpId" required>
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>

            <button type="submit" class="btn btn-outline-danger">Post Now</button>
        </form>
        <br>
        <a class="fa fa-podcast" href="post.php" style="text-decoration: none;"> Post your item here.....</a>
    </div>



    <br>
    <br>
    <br>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../apps js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>