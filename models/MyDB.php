<?php
class MyDB {
	// Classe de connexion � une base de donn�es

	static private $pdo = null; // Le singleton pour ouvrir qu'une seul connexion

	// Obenir le singleton
	static function getInstance() {
		if (self::$pdo == null) {
			$dsn = 'mysql:host=localhost;dbname=dbamblard';
			$user = 'root';
			$pass = 'root';

			self::$pdo = new PDO($dsn, $user, $pass);
		}
		return self::$pdo;
	}
}

?>