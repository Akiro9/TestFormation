<?php

require 'User.php';

$check = new users();

$check->testLogin($_POST['Nom'],$_POST['MotDePasse']);

