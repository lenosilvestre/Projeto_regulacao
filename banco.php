<?php
	 
class Database {
	
	private $pdo;
	function __construct(){
		try{
			$this -> pdo =  new PDO("mysql:host = localhost;dbname=regulacaobd","root","");
			$this -> pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);			
		}catch(PDOException $e){
			echo $e->getMessage(), " opendatabase";
		}
	}
		
	function query($q){		
		try{		
			$stmt = $this -> pdo->prepare($q);
			$this -> pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$stmt -> execute();
		}catch(PDOException $e){
			echo "</br>".$e->getMessage()." query";
			die($e);
		}	
		$pdo = null;
	}
	
	function busca($q){
		try{		
			$stmt = $this -> pdo->prepare($q);
			$this -> pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$stmt -> execute();
			return $stmt;
		}catch(PDOException $e){
			echo "</br>".$e->getMessage()." query";
			die($e);
		}	
		$pdo = null;
	}
}
?>
