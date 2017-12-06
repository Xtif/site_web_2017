<?php


class Projet {
	
	public $id;
	public $folder_name;
	public $nom_projet;
	public $client;
	public $description;
	public $mon_travail;
	public $ordre;

	public function __construct(array $data = array()) {
		$this->hydrate($data);		
	}

	public function hydrate(array $data) {
		$this->set_id($data['id']);
		$this->set_folder_name($data['folder_name']);
		$this->set_nom_projet($data['nom_projet']);
		$this->set_client($data['client']);
		$this->set_description($data['description']);
		$this->set_mon_travail($data['mon_travail']);
		$this->set_ordre($data['ordre']);
	}

	/**********SETTERS***********/
	public function set_id($id) {
		$this->id = $id;
	}

	public function set_folder_name($folder_name) {
		$this->folder_name = $folder_name;
	}

	public function set_nom_projet($nom_projet) {
		$this->nom_projet = $nom_projet;
	}

	public function set_client($client) {
		$this->client = $client;
	}

	public function set_description($description) {
		$this->description = $description;
	}

	public function set_mon_travail($mon_travail) {
		$this->mon_travail = $mon_travail;
	}

	public function set_ordre($ordre) {
		$this->ordre = $ordre;
	}	


	/*********GETTERS************/
	public function get_id() {
		return $this->id;
	}

	public function get_folder_name() {
		return $this->folder_name;
	}

	public function get_nom_projet() {
		return $this->nom_projet;
	}

	public function get_client() {
		return $this->client;
	}

	public function get_description() {
		return $this->description;
	}

	public function get_mon_travail() {
		return $this->mon_travail;
	}

	public function get_ordre() {
		return $this->ordre;
	}
}



?>