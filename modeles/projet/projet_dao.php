<?php 

class Projet_dao {

	private static $db_table = "projets";

	public static function findProjetByFolderName($folder_name) {

		$database = new Database();
		$sql = "SELECT * FROM " . self::$db_table . "  WHERE folder_name=:folder_name";

		$reponse = $database->execute_query($sql, array(':folder_name' => $folder_name));

		$projet = $reponse->fetch();

		$projet_objet = new Projet(array('id'=>$projet['id'], 'folder_name'=>$projet['folder_name'], 'nom_projet'=>$projet['nom_projet'], 'client'=>$projet['client'], 'description'=>$projet['description'], 'mon_travail'=>$projet['mon_travail'], 'ordre'=>$projet['ordre']));

		if ($projet) {
			return $projet_objet;
		} else {
			return false;
		}
	}

	public static function findAllByOrder() {

		$database = new Database();
		$sql = "SELECT * FROM " . self::$db_table . " ORDER BY ordre ASC";

		$reponse = $database->execute_query($sql, array());
		
		$all_projects = array();

		while ($donnees = $reponse->fetch()) {
			$projet = new Projet(array('id'=>$donnees['id'], 'folder_name'=>$donnees['folder_name'], 'nom_projet'=>$donnees['nom_projet'], 'client'=>$donnees['client'], 'description'=>$donnees['description'], 'mon_travail'=>$donnees['mon_travail'], 'ordre'=>$donnees['ordre']));
			array_push($all_projects, $projet);
		}		
		return $all_projects;
	}




} //End of class









?>