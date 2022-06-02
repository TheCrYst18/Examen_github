<?php
    function genArray($str){
        $array_c = Array();
        if($str == "client"){
            foreach($_SESSION['client'] as $client){
                array_push($array_c, $client);
            }
        }
        else if($str == "compte"){
            foreach($_SESSION['compte'] as $compte){
                array_push($array_c, $compte);
            }
        }
        return $array_c;
    }
?>