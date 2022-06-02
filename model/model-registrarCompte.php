<?php
    $bool = true;
    if(isset($_SESSION['compte'])){
        while(next($_SESSION['compte']) && $bool){
            $compte = current($_SESSION['compte']);
            if($compte->getClient()->getDni() == $_POST['client']){
                $bool = false;
            }
        }
    }
    return $bool;
?>