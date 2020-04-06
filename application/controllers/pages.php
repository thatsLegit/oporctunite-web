<?php
class Pages extends CI_Controller{

	//faire ici aussi la page paramètres qui permet de modif
	//les données telles que la photo ou taille d'elevage...

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