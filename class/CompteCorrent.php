<?php

class CompteCorrent{
    private $numero_compte;
    private $saldo;
    private $client;

    public function __construct($numero_compte, $saldo, $client)
    {
        $this->numero_compte = $numero_compte;
        $this->saldo = $saldo;
        $this->client = $client;
    }

    

    /**
     * Get the value of numero_compte
     */ 
    public function getNumeroCompte()
    {
        return $this->numero_compte;
    }

    /**
     * Set the value of numero_compte
     */ 
    public function setNumeroCompte($numero_compte)
    {
        $this->numero_compte = $numero_compte;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     */ 
    public function setClient($client)
    {
        $this->client = $client;
    }

    public function ingresarDiners($diners){
        $this->saldo += $diners;
    }
    public function retirarDiners($diners){
        if(($this->saldo - $diners) >= 0){
            $this->saldo -= $diners;
        }
    }
}

?>