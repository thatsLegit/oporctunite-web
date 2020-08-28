<?php
class Pages extends CI_Controller {

	//controlleur dont le seul but est d'afficher les pages contact et accueil
	
	public function contact(){

		if(!$this->session->userdata('connecte')){
			redirect('login');
		}

		$data['titre'] = ucfirst('Contact');
		$this->load->view('templates/header');
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/footer');
	}

	public function accueil(){
		$this->load->view('pages/accueil');
	}
}