<?php



include("class/Client.php");
include("class/CompteCorrent.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P02</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['client'])){
            $_SESSION['client'] = Array();
        }
        else if(!isset($_SESSION['compte'])){
            $_SESSION['compte'] = Array();
        }
        if(isset($_GET['accion'])){
            $accion = $_GET['accion'];
        }
        else{
            $accion = "inicio";
        }

        switch($accion){
            case "inicio":
                include_once("controller/controller-inicio.php");
                break;
            case "registrarClient":
                include_once("controller/controller-registarClient.php");
                break;
            case "registrarCompte":
                include_once("controller/controller-registarCompte.php");
                break;
            case "veureDades":
                include_once("controller/controller-veureDades.php");
                break;
            case "retirar":
                include_once("controller/controller-retirar.php");
                break;
            case "ingresar":
                include_once("controller/controller-ingresar.php");
                break;
        }
    ?>
</body>
</html>