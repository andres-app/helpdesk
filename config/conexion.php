<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=keymer","root","");
                //Produccion
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=u274409976_helpdesk","u274409976_helpdesk","Redes72607251$$$");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			//return "http://localhost/helpdesk/";
            //Produccion
            return "http://helpdesk.appsauri.com/";
		}

    }
?>