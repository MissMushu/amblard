//
<?php
class tableObject {

	// Liste des champs et leurs valeurs
	protected $fields = array();
	public function getFields() { return $this->fields; }

	// Copie des champs re�us (grace � un fetch sur la base)
	public function __construct($field) { $this->fields = $field; }

	// Affichage par d�fault : champs s�par�s par une tabulation
	public function __tostring() {
		return implode("\t", $this->fields);
	}

	
	public function __get($field) {
		if (isset($this->fields[$field]))
			return $this->fields[$field];
		throw new Exception("Invalide champs $field dans ". get_class($this));
	}

	public function __set($field, $value) {
		if (isset($this->fields[$field]))
			$this->fields[$field] = $value;
		else
			throw new Exception("Invalide champs $field dans ". get_class($this));
	}

	public function __isset($field) { return isset($this->fields[$field]); }
}
?>