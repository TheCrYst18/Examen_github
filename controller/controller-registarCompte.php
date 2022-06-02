<?php
$codi_html = "<label> Dni del cliente:</label><select name='client' id='client'>";
include_once("model/genSelect.php");
if(isset($_POST['numero_compte'])){
    $resp = include_once("model/model-registrarCompte.php");
    if($resp){
        $dni_form = $_POST['client'];
        $client = array_filter($_SESSION['client'], function ($e) use ($dni_form){
            if($e->getDni() == $dni_form){
                return $e;
            }
        });
        array_push($_SESSION['compte'],new CompteCorrent($_POST['numero_compte'],$_POST['money'],$client[0]));
        header("location:index.php");
    }
    else{
        print("<h2>El compte ja esta creat o té un client asignat</h2>");
        $_POST = Array();
        header("refresh:2");
    }
}
else{
    $array_client = genArray("client");
    foreach($array_client as $client){
        $codi_html .= "<option value='".$client->getDni()."'>".$client->getDni()."</option>";
    }
    $codi_html .= "</select>";
    include_once("view/view-registrarCompte.php");
}
?>