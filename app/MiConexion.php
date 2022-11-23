<?php
    class MiConexion extends PDO{
        private $cadenaConexion = "mysql:host=db_agenda;port:3307;dbname=agenda";
        public function __construct(){
            parent::__construct($this -> cadenaConexion, 'root', 'admin');
            $this->query("SET NAMES 'utf8'");
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }
?>