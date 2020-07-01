<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'Config.php';
//require 'index.php';
/**
 * 
 */
class Model
{
	private $pdo;
	public function __construct()
	{
		# code...
		$this->pdo=$this->getConnexion();
	}
	public function getConnexion(){
    try {
        $host = DatabaseConfig::params()[0];
        $dbname = DatabaseConfig::params()[1];
        $user = DatabaseConfig::params()[2];
        $mdp = DatabaseConfig::params()[3];

        $dsn="mysql:host=$host;dbname=$dbname";
        $this->pdo= new PDO($dsn, $user, $mdp, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
          // echo "Connexion etablie";
    } catch (PDOException $ex) {
        die('Erreur:'.$ex->getMessage());
    }
    return $this->pdo;
  
}

	public function insert(){
		if(isset($_POST['submit'])){
			if (isset($_POST['nomentre']) && isset($_POST['adresseentre']) && isset($_POST['raisonsociale']) && isset($_POST['identre'])) {
				if (!empty($_POST['nomentre']) && !empty($_POST['adresseentre']) && !empty($_POST['raisonsociale']) && !empty($_POST['identre'])) {
						$nomentre = $_POST['nomentre'];
						$adresseentre = $_POST['adresseentre'];
						$raisonsociale = $_POST['raisonsociale'];
						$identre = $_POST['identre'];
						$query = "INSERT INTO client_moral (raison_social,nomEmployeur,rc,ninea) VALUES('$raisonsociale','$nomentre','$raisonsociale','$identre')";
						if ($sql = $this->conn->query($query)) {
							# code...
							echo "ok";
						}
					
				}else{
					echo "<script>alert('empty');</script>";
				}
				# code...
			}
		}
	}
}
?>