<?php
// Transforme ce qui y'a dans la base de donnée en langage PHP
class TableObject {

	// Liste des champs et leurs valeurs
	protected $fields = array();
	public function getFields() { return $this->fields; }

	// Copie des champs reçus (grace à un fetch sur la base)
	public function __construct($field) { $this->fields = $field; }

	// Affichage par défault : champs séparés par une tabulation
	public function __tostring() {
		return implode("\t", $this->fields);
	}

	//récupère les champs
	public function __get($field) {
		if (isset($this->fields[$field]))
			return $this->fields[$field];
		throw new Exception("Invalide champs $field dans ". get_class($this));
	}

	//assigne les valeurs au champs
	public function __set($field, $value) {
		if (isset($this->fields[$field]))
			$this->fields[$field] = $value;
		else
			throw new Exception("Invalide champs $field dans ". get_class($this));
	}

	//si le champs existe on renvoie le champs
	public function __isset($field) { return isset($this->fields[$field]); }
}
?>