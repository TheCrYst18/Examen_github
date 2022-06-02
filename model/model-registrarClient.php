<?php
    $dni = $_POST['dni'];
    $bool = array_filter($_SESSION['client'], function($check) use ($dni){
        return $check->getDni() == $dni;
    });
    return $bool;
?>