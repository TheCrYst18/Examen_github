<?php
$codi_html = "<label>Numero compte:</label><select name='compte' id='compte'>";
include_once("model/genSelect.php");
if(isset($_POST['money'])){
    $n_compte = $_POST['compte'];
    $compte = array_filter($_SESSION['compte'], function ($e) use ($n_compte){
        if($e->getNumeroCompte() == $n_compte){
            return $e;
        }
    });
    $compte[0]->ingresarDiners($_POST['money']);
    header("location:index.php");
}
else{
    $array_compte = genArray("compte");
    foreach($array_compte as $compte){
        $codi_html .= "<option value='".$compte->getNumeroCompte()."'>".$compte->getNumeroCompte()."</option>";
    }
    $codi_html .= "</select>";
    include_once("view/view-retirar.php");
}
?>