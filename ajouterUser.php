<?php

include 'User.php';

$add = new users();

$add->ajouterUser($_POST["UN"],$_POST["PW"],$_POST["FN"],$_POST["LN"],$_POST["Adr"],$_POST["Dt"]);

?>