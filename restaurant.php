<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sakyne</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="style.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!--page carte-->
    <link rel="stylesheet" href="pagecarte.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--page restaurant CSS-->
    <link rel="stylesheet" href="pagecarte.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!--Link footer -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!--Link footer social networks footer-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Put this on the header -->
</head>

<body>
    <div class="wrapper">
        <header>

            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    <a class="ruban" href="#"><img class="roundedImage" src="img/logo.png" alt="logo loupe sakyne" width='80' no-repeat /></a>

                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="restaurant.php">Restaurant1</a></li>
                        <li><a href="resto.php">Restaurant2</a></li>
                        <li><a href="#">Emploi</a></li>
                        <li><a href="#">Log in</a></li>

                        <form id="custom-search-form" class="form-search form-horizontal pull-right">
                            <div class="input-append span12">
                                <input type="text" class="search-query" placeholder="Search">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </ul>
                </div>
            </nav>
        </header>

        <title>Restaurant</title>

        <head>
            <link rel="stylesheet" href="pagecarte.css">
        </head>

        <body>


            <h1 class="titrer"> Restaurants :</h1>
            <form action="" method="post">
                <br>
                <select name="codepostal">
                    <li><a href="restaurant.php">Voir tous les restaurants !</a></li>

                    <option value="tous">Veuillez selectionner l'arrondissement de votre choix</option>
                    <option value="75001">1er arrondissment</option>
                    <option value="75002">2nd arrondissment</option>
                    <option value="75003">3e arrondissment</option>
                    <option value="75004">4e arrondissment</option>
                    <option value="75005">5e arrondissment</option>
                    <option value="75006">6e arrondissment</option>
                    <option value="75007">7e arrondissment</option>
                    <option value="75008">8e arrondissment</option>
                    <option value="75009">9e arrondissment</option>
                    <option value="75010">10e arrondissment</option>
                    <option value="75011">11e arrondissment</option>
                    <option value="75012">12e arrondissment</option>
                    <option value="75013">13e arrondissment</option>
                    <option value="75014">14e arrondissment</option>
                    <option value="75015">15e arrondissment</option>
                    <option value="75016">16e arrondissment</option>
                    <option value="75017">17e arrondissment</option>
                    <option value="75018">18e arrondissment</option>
                    <option value="75019">19e arrondissment</option>
                    <option value="75020">20e arrondissment</option>

                </select>
                <!-- <input type="number" name="codepostal" required="required">-->

                <input type="submit" name="filtre1">
            </form>
            <!--

            <form action="" method="post">
                <br>
                <select name="codepostal">
                    <option value="tous">Veuillez selectionner la cuisine de votre choix</option>
                    <option value="japonais">Japonais</option>
                    <option value="Americaine">Americaine/burger</option>
                    <option value="italien">Italien</option>

                </select>
                <input type="submit" name="filtre2">
            </form>
-->


            <?php


            if (isset($_POST['filtre1']) &&  !empty($_POST['codepostal'])) {

                $codepostal = $_POST['codepostal'];

                $conn = new mysqli('localhost', 'root', 'aqaq', 'resto');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM restaurant WHERE codepostal = '" . $codepostal . "' AND valide = 'oui'   ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>



                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <?php
                                                $src = "images/" . $row['img']; ?>
                                                <img class=" imgboxe" width="200" src="<?php echo $src ?>" alt="card image"></button>
                                                <h4 class="card-title"><?php echo $row['nom']; ?></h4>
                                                <p class="card-text"><?php echo $row['codepostal']; ?></p>
                                                <p class="card-text"><?php echo $row['cuisine']; ?> </p>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title"><?php echo $row['nom']; ?></h4>
                                                <p> <a class="linksite" href=<?php echo $row['lien']; ?>>Accedez au site !</a> </p>
                                                <p class="card-text"><?php echo $row['adresse']; ?></p>
                                                <p class="card-text">Contactez nous au : <a class="tel" href=<?php echo $row['tel']; ?>><?php echo $row['tel']; ?></a> </p>
                                                <p class="card-text" style="text-decoration: underline;"> Détails</p>
                                                <p class="card-text"> <?php echo $row['details']; ?>
                                                </p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lienfb']; ?>>
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <?php if ($row['lienlkdn'] != null) {
                                                        ?>
                                                        <li class="list-inline-item">
                                                            <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lienlkdn']; ?>>
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    <?php
                                                }
                                                ?>

                                                    <?php if ($row['lieninsta'] != null) {
                                                        ?>
                                                        <li class="list-inline-item">
                                                            <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lieninsta']; ?>>
                                                                <i class="fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    <?php
                                                }
                                                ?>

                                                    <?php if ($row['lientwittter'] != null) {
                                                        ?>
                                                        <li class="list-inline-item">
                                                            <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lientwitter']; ?>>
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                    <?php
                                                }

                                                ?>



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                }
            } else {
                echo " 0 result";
            }
            $conn = null;
        }
        if (!isset($_POST['filtre1'])) {


            $conn = new mysqli('localhost', 'root', 'aqaq', 'resto');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM restaurant WHERE valide = 'oui' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <?php
                                                $src = "images/" . $row['img']; ?>
                                                <img class=" imgboxe" width="200" src="<?php echo $src ?>" alt="card image"></button>
                                                <h4 class="card-title"><?php echo $row['nom']; ?></h4>
                                                <p class="card-text"><?php echo $row['codepostal']; ?></p>
                                                <p class="card-text"><?php echo $row['cuisine']; ?> </p>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title"><?php echo $row['nom']; ?></h4>
                                                <p> <a class="linksite" href=<?php echo $row['lien']; ?>>Accedez au site !</a> </p>
                                                <p class="card-text"><?php echo $row['adresse']; ?></p>
                                                <p class="card-text">Contactez nous au : <a class="tel" href=<?php echo $row['tel']; ?>><?php echo $row['tel']; ?></a> </p>
                                                <p class="card-text" style="text-decoration: underline;"> Détails</p>
                                                <p class="card-text"> <?php echo $row['details']; ?>
                                                </p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lienfb']; ?>>
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <?php if ($row['lienlkdn'] != null) {
                                                        ?>
                                                        <li class="list-inline-item">
                                                            <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lienlkdn']; ?>>
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    <?php
                                                }
                                                ?>

                                                    <?php if ($row['lieninsta'] != null) {
                                                        ?>
                                                        <li class="list-inline-item">
                                                            <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lieninsta']; ?>>
                                                                <i class="fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    <?php
                                                }
                                                ?>

                                                    <?php if ($row['lientwittter'] != null) {
                                                        ?>
                                                        <li class="list-inline-item">
                                                            <a class="social-icon text-xs-center" target="_blank" href=<?php echo $row['lientwitter']; ?>>
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                    <?php
                                                }

                                                ?>



                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>



                    <?php
                }
            } else {
                echo " 0 result";
            }
            $conn = null;
        }


        ?>