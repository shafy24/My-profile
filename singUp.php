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
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger fixed fixed-top" style="">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
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
                        <li class="nav-item">
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
    <div class="container">
        <p style="font-size: 40px;" class="lead text-center pt-4">SING UP FORM</p>
        <p class="text-center">Please fillap the form for a new account</p>
        <hr>
        <form enctype="multipart/form-data" action="singUp_core.php" method="POST">
            <div class="form-group">
                <label for="">FIRST NAME</label>
                <input type="text" name="first_name" id="" class="form-control" placeholder="FIRST NAME" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">FIRST NAME</label>
                <input type="text" name="last_name" id="" class="form-control" placeholder="LAST NAME" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">EMAIL</label>
                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="EMAIL" required>
                <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">PASSWORD</label>
                <input type="password" class="form-control" name="password" id="" placeholder="PASSWORD" required>
                <small id="emailHelpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="form-group">
                <label for="">GENDER</label>
                <select class="form-control" name="gender" id="" required>
                    <option>Please select an option</option>
                    <option name="gender">MALE</option>
                    <option name="gender">FEMALE</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">PICTURE</label>
                <input type="file" class="form-control-file" name="avatar" id="" placeholder="Upload your picture...." aria-describedby="fileHelpId">
                <small id="fileHelpId" class="form-text text-muted">Help text</small>
            </div>
            <label for="">Please select an option</label><br>
            <div class="form-check form-check-inline">

                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="unit" id="" value="National"> National
                    <input class="form-check-input" type="radio" name="unit" id="" value="International"> International
                    <input class="form-check-input" type="radio" name="unit" id="" value="Public"> Public
                    <small id="emailHelpId" class="form-text text-muted">Help text</small>
                </label>
            </div>
            <br>
            <div class="form-check mt-2">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                    SAVE PASSWORD
                </label>
            </div>
            <?php
            require_once("core.php");
            if(isset($_REQUEST["not_loging"])){    ?>
               <small id="emailHelpId" class="form-text text-danger">Allready you have an account</small> 
             <?php    }
            ?>
            <button type="submit" class="btn btn-outline-danger mt-2">Sling Up Now</button>

        </form>

        <p style="font-size: 20px;" class="lead text-center">Allready you have an account?</p>
        <a style="" href="loging.php" class="text-center">Loging here.....</a>

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