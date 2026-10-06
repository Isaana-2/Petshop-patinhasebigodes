<?php

session_start();

if(!isset($_SESSION['secretaria'])){

header("Location:login_secretaria.php");

exit;

}