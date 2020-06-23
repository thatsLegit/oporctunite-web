<?php

    class Suivis extends CI_Controller {

        //Actions véto
        public function elevages_suivis(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                redirect('login');
            }

            $name_elevage = $this->session->userdata('nom');
            $data['veterinaire'] = $this->utilisateurs_model->getTousVeterinaires();
            $data['veterinaire_suivi'] = $this->suivis_model->getVeterinaire_suivi($name_elevage);

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-elevage', $data);
            $this->load->view('templates/footer');
        }

        public function accepter_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "veterinaire"){
                show_404();
            }

            $name_veterinaire = $this->session->userdata('nom');
            $numElevage = $this->input->post('numEleveur');
            $veterinaire = $this->utilisateurs_model->getNumVeterinaire_by_name($name_veterinaire);

            foreach($veterinaire as $v){
                $numVeterinaire = $v['numVeterinaire'];
            }

            $this->suivis_model->update_accepter_suivi($numElevage, $numVeterinaire);
            $id_veterinaire = $this->session->userdata('idutilisateur');
            $data['elevages_suivis']=$this->suivis_model->getElevages_suivis($id_veterinaire);

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-veterinaire', $data);
            $this->load->view('templates/footer');
        }

        public function refuser_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "veterinaire"){
                show_404();
            }

            $name_veterinaire = $this->session->userdata('nom');
            $numElevage = $this->input->post('numEleveur');
            $veterinaire = $this->utilisateurs_model->getNumVeterinaire_by_name($name_veterinaire);

            foreach($veterinaire as $v){
                $numVeterinaire = $v['numVeterinaire'];
            }

            $this->suivis_model->update_refuser_suivi($numElevage, $numVeterinaire);
            $id_veterinaire = $this->session->userdata('idutilisateur');
            $data['elevages_suivis']=$this->suivis_model->getElevages_suivis($id_veterinaire);

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-veterinaire', $data);
            $this->load->view('templates/footer');
        }

        //Actions elevages
        public function veterinaire_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "veterinaire"){
                redirect('login');
            }

            $id_veterinaire = $this->session->userdata('idutilisateur');
            $data['elevages_suivis'] = $this->suivis_model->getElevages_suivis($id_veterinaire);

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-veterinaire', $data);
            $this->load->view('templates/footer');
        }

        public function demander_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                show_404();
            }

            $name_elevage = $this->session->userdata('nom');
            $numVeterinaire = $this->input->post('numVeterinaire');
            $elevage = $this->utilisateurs_model->getNumElevage_by_name($name_elevage);

            foreach($elevage as $e){
                $numElevage = $e['numEleveur'];
            }

            $suivi = $this->suivis_model->get_suivi($numElevage, $numVeterinaire);

            if(empty($suivi)){
                $this->suivis_model->add_suivi($numElevage, $numVeterinaire);
            } else {
                foreach($suivi as $s){
                    $etat = $s['etat'];
                }
                if($etat == "Refusé" || $etat == "Annulé"){ //Suppr l'ancienne réf de suivi et en mettre une nouvelle
                    $this->suivis_model->delete_suivi($numElevage, $numVeterinaire);
                    $this->suivis_model->add_suivi($numElevage, $numVeterinaire);
                }
            }

            $data['veterinaire']=$this->utilisateurs_model->getTousVeterinaires();
            $data['veterinaire_suivi']=$this->suivis_model->getVeterinaire_suivi($name_elevage);

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-elevage', $data);
            $this->load->view('templates/footer');
        }

        public function annuler_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                show_404();
            }

            $name_elevage = $this->session->userdata('nom');
            $numVeterinaire = $this->input->post('numVeterinaire');
            $elevage = $this->utilisateurs_model->getNumElevage_by_name($name_elevage);

            foreach($elevage as $e){
                $numElevage = $e['numEleveur'];
            }

            $this->suivis_model->annuler_suivi($numElevage, $numVeterinaire);
            $data['veterinaire'] = $this->utilisateurs_model->getTousVeterinaires();
            $data['veterinaire_suivi'] = $this->suivis_model->getVeterinaire_suivi($name_elevage);

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-elevage', $data);
            $this->load->view('templates/footer');
        }

        //Commun
        public function ne_plus_suivre(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') == "admin"){
                show_404();
            }

            if($this->session->userdata('statut') == 'veterinaire'){
                $name_veterinaire = $this->session->userdata('nom');
                $numElevage = $this->input->post('numEleveur');
                $veterinaire = $this->utilisateurs_model->getNumVeterinaire_by_name($name_veterinaire);

                foreach($veterinaire as $v){
                    $numVeterinaire = $v['numVeterinaire'];
                }

                $this->suivis_model->delete_suivi($numElevage, $numVeterinaire);
                $id_veterinaire = $this->session->userdata('idutilisateur');
                $data['elevages_suivis']=$this->suivis_model->getElevages_suivis($id_veterinaire);

                $this->load->view('templates/header');
                $this->load->view('suivis/suivi-veterinaire', $data);
                $this->load->view('templates/footer');

            } else {

                $name_elevage = $this->session->userdata('nom');
                $numVeterinaire = $this->input->post('numVeterinaire');
                $elevage = $this->utilisateurs_model->getNumElevage_by_name($name_elevage);

                foreach($elevage as $e){
                    $numElevage = $e['numEleveur'];
                }

                $this->suivis_model->delete_suivi($numElevage, $numVeterinaire);
                $data['veterinaire'] = $this->utilisateurs_model->getTousVeterinaires();
                $data['veterinaire_suivi'] = $this->suivis_model->getVeterinaire_suivi($name_elevage);

                $this->load->view('templates/header');
                $this->load->view('suivis/suivi-elevage', $data);
                $this->load->view('templates/footer');
            }
        }

    }

?>


