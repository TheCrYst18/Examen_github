<?php
    $codi_html = "
        <h1>Banc La Pineda</h1>
        <a href='index.php?accion=registrarClient'>Crear Client</a><br/>";

    if(!empty($_SESSION['client'])){
        $codi_html .= "<a href='index.php?accion=registrarCompte'>Crear Compte</a><br/>";
        if(!empty($_SESSION['compte'])){
            $codi_html .= "
                <a href='index.php?accion=ingresar'>Ingresar Diners</a><br/>
                <a href='index.php?accion=retirar'>Retirar Diners</a><br/>
            ";
        }
        $codi_html .= "<a href='index.php?accion=veureDades'>Veure Dades</a>";
    }

    include_once "view/view-inicio.php";
?>