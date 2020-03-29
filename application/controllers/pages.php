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

		//le user n'est pas connecte
		if(!$this->session->userdata('connecte')){
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		} else {
		//le user est co, en fonction du type :
			if($this->session->userdata('statut') == 'elevage'){
				$this->load->view('templates/header', $data);
				$this->load->view('pages/accueil-elevage', $data);
				$this->load->view('templates/footer', $data);
			} elseif ($this->session->userdata('statut') == 'veterinaire'){
				$this->load->view('templates/header');
				$this->load->view('pages/accueil-veterinaire', $data);
				$this->load->view('templates/footer');
			} else {
				$this->load->view('templates/header');
				$this->load->view('pages/accueil-admin', $data);
				$this->load->view('templates/footer');
			}
		}
	}
}