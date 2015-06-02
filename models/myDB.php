<?php
class myDB {
	// Classe de connexion à une base de données

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