<?php
session_start();

if(isset($_SESSION["username"]) and isset($_SESSION["password"])){
    header("Location: Acceuil.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="blog.css">
</head>

<body>
<div class="bg1"></div>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                    <a class="nav-link" href="#">.</a>
                </li>
                <li class="nav-item lgn">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>

        </div>
    </nav>

    <form class="loginform" action="LogTest.php" method="POST">
        <div class="form-group">
            <label for="name1">Nom</label>
            <input type="text" name="Nom" class="form-control" id="name1" aria-describedby="nameHelp"
                placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" name="MotDePasse" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Connecter</button>
        <a href="inscription.html"><button type="button" class="btn btn-primary">Inscription</button></a>
    </form>
    <script src="jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>