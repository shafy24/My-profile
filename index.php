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
        .closebtn:hover {
            border: 1px solid #c1bdbd;
        }

        .dama:hover {
            background-color: #606366;
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

    <div class="slideImg">
        <img style="height: 400px;width:100%" src="../image/img1.jpg" alt="" class="mySlides">
        <img style="height: 400px;width:100%" src="../image/img2.jpg" alt="" class="mySlides">
        <img style="height: 400px;width:100%" src="../image/img-3.jpg" alt="" class="mySlides">
        <img style="height: 400px;width:100%" src="../image/img4.jpg" alt="" class="mySlides">

        <a onclick="myPluseBtn(-1)" id="bbtn-left" class="fa fa-chevron-left"></a>
        <a onclick="myPluseBtn(1)" id="bbtn-right" class="bbtn fa fa-chevron-right"></a>

        <span onclick="myDot(1)" style="position: absolute;top: 362px;left: 46%;font-size: 24px;cursor: pointer;" class="dot dot1 fa fa-dot-circle-o"></span>
        <span onclick="myDot(2)" style="position: absolute;top: 362px;left: 48%;font-size: 24px;cursor: pointer;" class="dot dot2 fa fa-dot-circle-o"></span>
        <span onclick="myDot(3)" style="position: absolute;top: 362px;left: 50%;font-size: 24px;cursor: pointer;" class="dot dot3 fa fa-dot-circle-o"></span>
        <span onclick="myDot(4)" style="position: absolute;top: 362px;left: 52%;font-size: 24px;cursor: pointer;" class="dot dot3 fa fa-dot-circle-o"></span>
    </div>

    <br>
    <div class="myShoping">
        <div class="container">
            <p style="font-size: 30px;" class="lead text-center">MY SHOPING ITEM</p>
            <p class="text-center">Select an item for your shoping</p>
            <hr>
            <br>
            <div class="row">
                <?php
                require_once("core.php");

                $selectData = "SELECT * FROM my_prodact";
                $conectqry = mysqli_query($connection, $selectData);

                $count = 0;
                if ($conectqry == true) {
                    while ($myData = mysqli_fetch_array($conectqry)) {    ?>

                        <div class="col-3 mt-4">
                            <div class="card text-left">
                                <img style="height: 150px;width:100%;" class="card-img-top" src="../image/<?php echo $myData['avatar']; ?>" alt="">
                                <p class="prodact bg-dark text-center" style="margin: 0;background: bisque;padding: 7px;color: white;"> <?php echo $myData['Prodact_name']; ?></p>
                                <span class="price text-center" style="background: #c6c2c2"><?php echo $myData['Price']; ?></span>
                                <button onclick="myShoping(<?php echo $count++; ?>)" style="border: 0;padding: 12px;" class="btn-danger btn-block"><i style="font-size: 20px;margin-right: 6px;" class="fa fa-shopping-cart" aria-hidden="true"></i> Shop now</button>
                            </div>
                        </div>

                <?php   }
                }   ?>
            </div>
        </div>
    </div>

    <div style="width: 100%;height: 1200px;background: #111111c4;top:-1300px;" id="overlayTop" class="overlay fixed-top">
        <div style="margin: 0 auto;width: 700px;border: 1px solid #ccc8c8;padding: 50px;height: 350px;border-radius: 7px;transition: 1s;top: -400px;overflow: auto;" id="shoping" class="shoping-box bg-light fixed-top">
            <a style="cursor: pointer;float: right;font-size: 32px;margin-top: -35px;margin-right:-15px;color: #7d7474;padding: 0px 16px 8px 17px;transition:2s;border-radius: 10px;" class="closebtn" onclick="closeNav()">&times;</a>
            <p style="font-size: 24px;" class="text-center m-0"><i class="fa fa-shopping-cart" aria-hidden="true"></i> MY SHOPING CARD</p>

            <p class="text-center text-muted">Order now</p>
            <table class="table table-bordered">
                <thead class="thead-inverse text-center text-muted">
                    <tr>
                        <th>ITEM NAME</th>
                        <th>QTY</th>
                        <th>PRICE</th>
                    </tr>
                </thead>
                <tbody id="demo" class="demo text-center">

                </tbody>
            </table>

            <hr>
            <p class="lead text-right m-0 p-0"> TOTAL PRICE :
                <span id="total1" style="float: right;margin-right: 18px;"> 0000</span>
            </p>
            <p class="lead text-right m-0 p-0"> TOTAL ITEM :
                <span id="total2" style="float: right;margin-right: 18px;"> 0</span>
            </p>

            <br>
            <br>
            <button onclick="myShopingcard()" style="margin-left: 50px;float: left;margin-right: 27px;margin-top: -105px;" class="btn btn-danger w-25">SHOP NOW</button>

            <button onclick="closeNav()" style="margin-left: 50px;float: right;margin-right: 230px;margin-top: -105px;" class="btn btn-dark w-25">Cancle</button>

        </div>
    </div>


    <div class="container">
        <p style="text-align: center;font-size:30px" class="lead pt-5">MY ITEM AND STORY</p>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet explicabo cupiditate cumque
            vero praesentium, ipsa reprehenderit odit voluptate, iure, in magnam et ipsam animi excepturi ratione
            laudantium expedita quam ab.</p>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <?php
            require_once("core.php");

            $selectData = "SELECT * FROM my_post";
            $runData = mysqli_query($connection, $selectData);
            if ($runData == true) {
                while ($myData = mysqli_fetch_array($runData)) {    ?>
                    <div style="" class="col-3 mt-3">
                        <div style="text-align: left !important;height: 350px;" class="card text-left">
                            <img style="height: 170px;" class="card-img-top" src="../image/<?php echo $myData['avatar']; ?>" alt="">
                            <div style=";overflow: auto" class="card-body">
                                <h4><?php echo $myData['item_Name']; ?></h4>
                                <p class="card-text text-justify"><?php echo $myData['discription']; ?></p>
                            </div>
                        </div>
                    </div>
            <?php   }
            }    ?>
            <br>
        </div>
    </div>
    <br>
    <div class="container">
        <p style="font-size: 30px;" class="text-center">About Us</p>
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus tempora sequi commodi
            cupiditate dolorum accusamus, corporis voluptatibus ratione? Expedita quas sapiente consectetur tempore
            cupiditate provident quaerat nihil laudantium porro ex?</p>
        <hr>
        <div class="">
            <div style="width: 100%;" class="btn-area">
                <span id="prevebtDefalt" onclick="myContent(0)" style="width: 25%;display: block;float: left;padding: 7px;cursor: pointer;colot:white" class="bttn btn-danger text-center text-light;">LONDON</span>
                <span onclick="myContent(1)" style="width: 25%;display: block;float: left;padding: 7px;cursor: pointer;colot:white" class="bttn btn-danger text-center text-light;">PARIS</span>
                <span onclick="myContent(2)" style="width: 25%;display: block;float: left;padding: 7px;cursor: pointer;colot:white" class="bttn btn-danger text-center text-light;">WASINGTON</span>
                <span onclick="myContent(3)" style="width: 25%;display: block;float: left;padding: 7px;cursor: pointer;colot:white" class="bttn btn-danger text-center text-light;">HONGKONG</span>
            </div>
            <div class="content-area">
                <br>
                <div style="background-color: #d2cfcf;display:block;" class="content text-justify p-4">
                    <h4>LONDON</h4>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur assumenda quas nobis. Nisi
                    doloribus in perferendis laborum delectus maiores repellendus velit eaque dolorem nam at quae
                    inventore similique illum unde pariatur harum, placeat cupiditate necessitatibus iusto ea sint
                    labore aperiam neque? Suscipit in atque ipsam voluptatum repellat rem minima praesentium mollitia,
                    quidem eveniet sapiente dolores. Accusantium distinctio quibusdam, consequatur incidunt voluptate,
                    ad, molestiae iste enim amet consequuntur obcaecati aut. Harum ea amet delectus corporis consectetur
                    optio eveniet quibusdam molestias placeat reprehenderit sit quasi sequi, facilis quas, voluptates
                    earum ipsa explicabo magnam dolorum fugit nobis veritatis repellat! Ab qui quo recusandae.
                </div>
                <div style="background-color: #d2cfcf;display:none;" class="content text-justify p-4">
                    <h4>PARIS</h4>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur assumenda quas nobis. Nisi
                    doloribus in perferendis laborum delectus maiores repellendus velit eaque dolorem nam at quae
                    inventore similique illum unde pariatur harum, placeat cupiditate necessitatibus iusto ea sint
                    labore aperiam neque? Suscipit in atque ipsam voluptatum repellat rem minima praesentium mollitia,
                    quidem eveniet sapiente dolores. Accusantium distinctio quibusdam, consequatur incidunt voluptate,
                    ad, molestiae iste enim amet consequuntur obcaecati aut. Harum ea amet delectus corporis consectetur
                    optio eveniet quibusdam molestias placeat reprehenderit sit quasi sequi, facilis quas, voluptates
                    earum ipsa explicabo magnam dolorum fugit nobis veritatis repellat! Ab qui quo recusandae.

                </div>
                <div style="background-color: #d2cfcf;display:none;" class="content text-justify p-4">
                    <h4>WASINGTON</h4>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur assumenda quas nobis. Nisi
                    doloribus in perferendis laborum delectus maiores repellendus velit eaque dolorem nam at quae
                    inventore similique illum unde pariatur harum, placeat cupiditate necessitatibus iusto ea sint
                    labore aperiam neque? Suscipit in atque ipsam voluptatum repellat rem minima praesentium mollitia,
                    quidem eveniet sapiente dolores. Accusantium distinctio quibusdam, consequatur incidunt voluptate,
                    ad, molestiae iste enim amet consequuntur obcaecati aut. Harum ea amet delectus corporis consectetur
                    optio eveniet quibusdam molestias placeat reprehenderit sit quasi sequi, facilis quas, voluptates
                    earum ipsa explicabo magnam dolorum fugit nobis veritatis repellat! Ab qui quo recusandae.
                </div>
                <div style="background-color: #d2cfcf;display:none;" class="content text-justify p-4">
                    <h4>HONGKONG</h4>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur assumenda quas nobis. Nisi
                    doloribus in perferendis laborum delectus maiores repellendus velit eaque dolorem nam at quae
                    inventore similique illum unde pariatur harum, placeat cupiditate necessitatibus iusto ea sint
                    labore aperiam neque? Suscipit in atque ipsam voluptatum repellat rem minima praesentium mollitia,
                    quidem eveniet sapiente dolores. Accusantium distinctio quibusdam, consequatur incidunt voluptate,
                    ad, molestiae iste enim amet consequuntur obcaecati aut. Harum ea amet delectus corporis consectetur
                    optio eveniet quibusdam molestias placeat reprehenderit sit quasi sequi, facilis quas, voluptates
                    earum ipsa explicabo magnam dolorum fugit nobis veritatis repellat! Ab qui quo recusandae.
                </div>

            </div>
        </div>
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