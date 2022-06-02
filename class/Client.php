<?php
    class Client{
        
        private $dni;
        private $nom;
        private $cognoms;
        private $direccio;
        private $data_naix;
        
        public function __construct($dni,$nom,$cognoms,$direccio,$data_naix)
        {
            $this->dni = $dni;
            $this->nom = $nom;
            $this->cognoms = $cognoms;
            $this->direccio = $direccio;
            $this->data_naix = $data_naix;
        }

        

        /**
         * Get the value of dni
         */ 
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         */ 
        public function setDni($dni)
        {
                $this->dni = $dni;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;
        }

        /**
         * Get the value of cognoms
         */ 
        public function getCognoms()
        {
                return $this->cognoms;
        }

        /**
         * Set the value of cognoms
         */ 
        public function setCognoms($cognoms)
        {
                $this->cognoms = $cognoms;
        }

        /**
         * Get the value of direccio
         */ 
        public function getDireccio()
        {
                return $this->direccio;
        }

        /**
         * Set the value of direccio
         */ 
        public function setDireccio($direccio)
        {
                $this->direccio = $direccio;
        }

        /**
         * Get the value of data_naix
         */ 
        public function getDataNaix()
        {
                return $this->data_naix;
        }

        /**
         * Set the value of data_naix
         */ 
        public function setDataNaix($data_naix)
        {
                $this->data_naix = $data_naix;
        }
    }
?>