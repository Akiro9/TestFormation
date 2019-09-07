<?php

include 'User.php';

$add = new users();

$add->ajouterUser($_POST["UN"],$_POST["PW"],$_POST["FN"],$_POST["Dt"],$_POST["Gender"],$_POST["Country"]);

?>