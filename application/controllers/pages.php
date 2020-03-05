<?php
class Pages extends CI_Controller{
	public function view($page='accueil'){
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['titre']= ucfirst($page);
		$this->load->view('header', $data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('footer',$data);
	}
}