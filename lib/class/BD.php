<?php
class BD{ 
	private $user="";
	private $pass=""; /*Attention ! ID a changer d'un PC a l'autre !*/
	private $dbName="";
	
	
	
	function __construct($mode)
	{
		if($mode==true)
		{
			$this->user='root';
			$this->pass='tp';
			$this->dbName='aqu';	
		}
		if($mode==false)
		{
			$this->user='lecteur';
			$this->pass='lecteur';
			$this->dbName='aqu';	
		}
	}

	public function getDB(){
		$bdd = null;
		  try{
			$bdd = new PDO('mysql:host=localhost;dbname='.$this->dbName,$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		  }
		  catch (Exception $e){
		  die('Erreur : '.$e -> getMessage());
		  }
		  return $bdd;
	}
	

	public function lecture_simple ($donnee, $table){
		$resu = null;

		$pdo=$this->getDB();

		$resu=$pdo->query("SELECT $donnee FROM $table");


		/*foreach($pdo->query($sql) as $row)
		{
			$resu[] = $row;
		}*/
		return $resu;
	}
}

?>