<?php
class competences_modele extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function get_competences(){
		$query=$this->get('competences');
		return $query->result_array();
	}
}
