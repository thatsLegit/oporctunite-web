<?php

    Class Bilans extends CI_Controller {

        /* Pour l'instant ne fait qu'afficher la page bilan, mais on veut ici des calls sur les models
        pour avoir les notes de l'élevage. Il faut ici s'inspirer de ce qui a été fait dans l'api pour
        la partie bilan, ou carrément faire les requêtes directement sur l'api */

        public function view(){

            if(!$this->session->userdata('connecte')){
                redirect('login');
            }

            if($this->session->userdata('statut') != 'elevage'){
                show_404();
            }
            
            $this->load->view('templates/header');
            $this->load->view('bilans/view');
            $this->load->view('templates/footer');
            
        }
    }

?>