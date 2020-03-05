<?php 
class c_accueil_elevage extends CI_Controller{
    
	public function affiche_home_elevage(){
		
		   
        $this->load->view('header_elevage');
        $this->load->view("accueil_elevage"); 
      
      
		
	}
}