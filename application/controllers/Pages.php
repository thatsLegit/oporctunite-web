<?php
class Pages extends CI_Controller{
	
	public function contact(){
		$data['titre'] = ucfirst('Contact');

		$this->load->view('templates/header');
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/footer');
	}

	public function accueil(){
		$this->load->view('pages/accueil');
	}

	public function donneesPerso(){
	}
}