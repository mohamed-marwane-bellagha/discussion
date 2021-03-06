<?php
session_start();
$db=mysqli_connect('localhost','root','','discussion');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/bootstrap.css">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/discussion.css">

    <title>Document</title>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Discussion</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <?php
                if(isset($_SESSION['login'])){
                    echo "<li class='nav-item'><form class='form-inline my-2 my-lg-0' method='post' action='index.php'><button class='btn btn-secondary my-2 my-sm-0' type='submit' name='submit'>Deconnexion</button></form></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='discussion.php'>Discussion</a></li><li class='nav-item'><a class='nav-link' href='profil.php'>Mon Profil</a></li>";
                }else{
                    echo "<li class='nav-item'><a class='nav-link' href='inscription.php'>Inscription</a></li><li class='nav-item'><a class='nav-link' href='connexion.php'>Connexion</a></li>";
                }
                if(isset($_POST['submit'])){
                    session_destroy();
                    header("Location:index.php");
                }

                ?>
            </ul>
        </div>
    </nav>
</header>