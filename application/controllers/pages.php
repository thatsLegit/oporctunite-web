<?php
class Pages extends CI_Controller{

	//affiche à la premiere page du site, page de garde,
	//permet aussi d'afficher les infos sur le projet
	
	public function view($page='accueil'){
		$data['titre'] = ucfirst($page);
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}
}