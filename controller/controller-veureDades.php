<?php
    if(isset($_SESSION['client'])){
        $codi_html = "<tr>";
        foreach($_SESSION['client'] as $client){
            $codi_html .= "<td>".$client->getDni()."</td><td>".$client->getNom()."</td><td>".$client->getCognoms()."</td><td>".$client->getDireccio()."</td><td>".$client->getDataNaix()."</td>";
            $compte = array_filter($_SESSION['compte'], function ($e) use ($client){
                if($e->getClient() == $client){
                    return $e;
                }
                else{
                    return false;
                }
            });
            if($compte){
                $codi_html .= "<td>".$compte[0]->getNumeroCompte()."</td><td>".$compte[0]->getSaldo()."</td>";
            }
            else{
                $codi_html .= "<td></td><td></td>";
            }
            $codi_html .= "</tr>";
        }
        include_once("view/view-veureDades.php");
    }
?>