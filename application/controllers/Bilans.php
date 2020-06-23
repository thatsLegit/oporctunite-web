<?php

    Class Bilans extends CI_Controller{

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