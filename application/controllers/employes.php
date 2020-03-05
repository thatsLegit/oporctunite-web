<?php
class Employes extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('employes_modele');
		//lire les URL
		$this->load->helper('url_helper');
	}

	public function tous(){
		$data['employes']=$this->employes_modele->get_employes();
		$data['titre']='Les employes sont : <br>';

		$this->load->view('header', $data);
		$this->load->view('employes/tous',$data);
		$this->load->view('footer',$data);
	}

public function recherche(){
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nom ','Nom' ,'required');

		if ($this->form_validation->run()===FALSE){
			$data['titre']='Chercher un employe';

		$this->load->view('header',$data);
		$this->load->view('employes/recherche',$data);
		$this->load->view('footer');
	}
	else {
		$nom=$this->input->post('nom');
		$this->parNom($nom);
	}
	}


//voir employe par nom
	public function parnom($nom){
 $data['employes']=$this->employes_modele->get_employes_par_nom($nom);
 if(empty($data['employes'])){
 	show_404();

 }
     $data['titre']='Recherche du ou des employes nommés'.$nom;

		$this->load->view('header',$data);
		$this->load->view('employes/parnom',$data);
		$this->load->view('footer');
	}


	

public function creer(){
	$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nom ','Nom' ,'required');

		$this->form_validation->set_rules('prenom ','Prenom' ,'required');

		if ($this->form_validation->run()===FALSE){
			$data['titre']='Ajouter un employe';

		$this->load->view('header',$data);
		$this->load->view('employes/creer',$data);
		$this->load->view('footer');
	}
	else {
		//creation
		$nom=$this->input->post('nom');
		$prenom=$this->input->post('prenom');
		$this->employes_modele->set_employes($nom , $prenom);
		//affichage du resultat
	$data['titre']=' employe créé';
	$data['employes']=$this->employes_modele->get_employes();
        $this->load->view('header',$data);
		$this->load->view('employes/creer',$data);
		$this->load->view('footer');


	}
}
	}

 