<?php

class Employes_modele extends CI_Model {
	public function __construct(){
			$this->load->database();
	}

	public function get_employes(){
		$query=$this->db->get('employes');
		return $query->result_array();


		//$sql ='select * from employes';
		//$query=$this->db->query($sql);
		//return $query->result();
	}

	public function get_employes_par_nom($nom){
		$query=$this->db->get_where('employes',array('nom'=>$nom));
		return $query->row_array();

		//$sql ='select * from employes where nom="'.$nom.'";';
		//$query=$this->db->query($sql);
		//return $query->result();
	}

	public function set_employes( $nom , $prenom){
		$sql = 'SELECT max(matricule) as max From employes;';
		$query=$this->db->query($sql);
		$result= $query->result_array();
		$matricule=$result[0]['max']+1;

		$data=array('matricule'=>$matricule,
			'nom'=>$nom,
			'prenom'=>$prenom);
		return $this->db->insert('employes', $data);
	}

}
?>