<?php
    if(isset($_POST['dni'])){
        $resp = include_once("model/model-registrarClient.php");
        if(!$resp){
            array_push($_SESSION['client'],new Client($_POST['dni'],$_POST['name'],$_POST['surname'],$_POST['address'],$_POST['b_date']));
            header("location:index.php");
        }
        else{
            print("<h2>El client ja esta creat</h2>");
            $_POST = Array();
            header("refresh:2");
        }
    }
    else{
        include_once("view/view-registrarClient.php");
    }
?>