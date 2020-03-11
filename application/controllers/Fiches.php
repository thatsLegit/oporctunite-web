<?php 
class Fiches extends CI_Controller{
    
    public function index(){

    }

    public function view($idfiche){
        //affiche des détails sur une fiche dans une page à part
    }

    public function search($critères){
        //recherche des fiches
    }

    public function putIntoFavorites($critères){
        //met une fiche en favoris
        //fait appel au modèle favoris
        //A vous de voir s'il faut un controller/modèle favoris en plus
        //mais ça peut se gérer juste ici à mon avis
    }

    
	public function afficher_pagefiche(){
	$data['fiche']= $this->fiches_modele->get_fiches();
		   
        $this->load->view('header_elevage',$data);
        $this->load->view('fiches_conseils',$data); 
      
      
		
	}
}