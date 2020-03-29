<?php

    //coté eleveur, l'utilisateur peut voir la liste des vétos
    //inscris et les suivre
    class EleveurSuit extends CI_Controller{

        public function index(){

            if(!$this->session->userdata('connecte')){
                redirect('');
            }
            //le veto n'a pas d'accès à ces vues
            if($this->session->userdata('statut') != 'elevage'){
                redirect('');
            }
            //page qui load tous les vétos que l'eleveur suit
            //construct views with queried data

            $this->load->view('templates/header');
            $this->load->view('eleveurSuit/index');
            $this->load->view('templates/footer');
        }

        /* public function search(){

            if(!$this->session->userdata('connecte')){
                redirect('');
            }
            //vue qui permet de rechercher des vétos à suivre
            //pagination
            $this->load->library('pagination');

            $config['base_url'] = base_url().'EleveurSuit/index/';
            //total rows : ecrire la méthode dans le modele permettant de fetch le nombre de followers d'un eleveur
            $config['total_rows'] = $this->db->countAll('veterinaire'); 
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            // Produces: class="pagination-link"
            $config['attributes'] = array('class' => 'pagination-link');

            $this->pagination->initialize($config);

            //request the model
            $data['veterinaires'] = $this->utilisateurs_model->get_veterinaires(FALSE, $config['per_page'], $offset);
            
            //afficher
            $this->load->view('templates/header');
            $this->load->view('eleveurSuit/search', $data);
            $this->load->view('templates/footer');
        }

        public function follow($iduserFollower, $iduserToFollow){
            if(!$this->session->userdata('connecte')){
                redirect('');
            }
            //créer un follow : un eleveur peut suivre un véto en gros
        }

        public function unfollow($iduserFollower, $iduserToFollow){
            if(!$this->session->userdata('connecte')){
                redirect('');
            }
            //ne plus suivre
        } */
        
    }

?>