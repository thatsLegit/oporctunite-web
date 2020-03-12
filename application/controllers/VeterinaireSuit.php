<?php

    //page reservée aux vétérinaires qui pourront consulter 
    //les infos des eleveurs qui le suivent.

    class VeterinaireSuit extends CI_Controller{
        
        public function index($offset = 0){
            //pagination
            $this->load->library('pagination');

            $config['base_url'] = base_url().'veterinaireSuit/index/';
            //total rows : compte le nombre de followers du veterinaire
            $config['total_rows'] = $this->follows_model->get_follows_number(FALSE, $config['per_page']; 
            $config['per_page'] = 10;
            $config['uri_segment'] = 3;
            // Produces: class="pagination-link"
            $config['attributes'] = array('class' => 'pagination-link');

            $this->pagination->initialize($config);

            //request the model
            $data['title'] = 'Elevages que vous suivez';
            $data['follows'] = $this->follows_model->get_follows(FALSE, $config['per_page'], $offset);
            
            //construct views with queried data
            $this->load->view('templates/header');
            $this->load->view('veterinaireSuit/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($idUtilisateur = NULL){
            $data['elevage'] = $this->utilisateur_model->get_elevage($idUtilisateur);
            //Faudra se demerder pour load le graphique de résultat des tests d'eleveur ici. Bonne chance.

            if(empty($data['utilisateur'])){
                show_404();
            }

            $this->load->view('templates/header');
            $this->load->view('VeterinaireSuit/view', $data);
            $this->load->view('templates/footer');
        }
    }

?>