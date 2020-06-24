<?php

    class Suivis extends CI_Controller {

        //Actions véto
        public function veterinaire_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "veterinaire"){
                show_404();
            }

            $data['elevages_suivis'] = $this->suivis_model->getElevages_suivis($this->session->userdata('nom'));
            $data['demandes_suivi'] = $this->suivis_model->get_demande_suivi($this->session->userdata('nom'), 'veterinaire');

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-veterinaire', $data);
            $this->load->view('templates/footer');
        }

        public function accepter_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "veterinaire"){
                show_404();
            }

            $numElevage = $this->input->post('numEleveur');
            $numVeterinaire = $this->utilisateurs_model->getNumVeterinaire_by_name($this->session->userdata('nom'));

            $this->suivis_model->ajouter_suivi($numElevage, $numVeterinaire);
            redirect('suivis');
        }

        public function refuser_supprimer_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "veterinaire"){
                show_404();
            }

            $numElevage = $this->input->post('numEleveur');
            $numVeterinaire = $this->utilisateurs_model->getNumVeterinaire_by_name($this->session->userdata('nom'));

            $this->suivis_model->supprimer_suivi($numElevage, $numVeterinaire);
            redirect('suivis');
        }

        //Actions elevages
        public function elevages_suivis(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                show_404();
            }

            $data['suivi_veterinaire'] = $this->suivis_model->getVeterinaire_suivi($this->session->userdata('nom'));
            $data['demandes_suivi'] = $this->suivis_model->get_demande_suivi($this->session->userdata('nom'), 'elevage');

            $this->load->view('templates/header');
            $this->load->view('suivis/suivi-elevage', $data);
            $this->load->view('templates/footer');
        }

        public function demander_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                show_404();
            }

            $nom_elevage = $this->session->userdata('nom');
            $numVeterinaire = $this->input->post('numVeterinaire');
            $numElevage = $this->utilisateurs_model->getNumElevage_by_name($nom_elevage);

            $this->suivis_model->ajouter_suivi($numElevage, $numVeterinaire);
            redirect('suivre');
        }

        public function annuler_supprimer_suivi(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                show_404();
            }

            $name_elevage = $this->session->userdata('nom');
            $numVeterinaire = $this->input->post('numVeterinaire');
            $numElevage = $this->utilisateurs_model->getNumElevage_by_name($name_elevage);

            $this->suivis_model->supprimer_suivi($numElevage, $numVeterinaire);
            redirect('suivre');
        }

        public function EleveurRechercheVeterinaires(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "elevage"){
                show_404();
            }

            $search_data = $this->input->post('search_data');
            $veterinaires = $this->utilisateurs_model->get_veto_search($search_data);

            if (!empty($result)){
                echo '
                    <div class="row">
                        <div class="col">       
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Cabinet</th>
                                        <th>Code Postal</th>
                                        <th> &nbsp </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    foreach($veterinaires as $v){
                                        echo form_open('suivis/demander_suivi');
                                            echo '<tr>
                                                <td>'.$v['nomCabinet'].'</td>
                                                <td>'.$v['codePostal'].'</td>
                                                <input name="numVeterinaire" id="numVeterinaire" type="text" value="'.$v['numVeterinaire'].'" hidden>
                                                <td>
                                                    <button id="button" type="submit" class="btn btn-success">Demander le suivi</button>
                                                </td>
                                            </tr>
                                        </form>';
                                    }
                                '</tbody>
                            </table>
                        </div>
                    </div>
                    ';
            } else {
                echo '
                    <div class="row">
                        <div class="col-12">
                            <p>
                                Aucun nom de cabinet de correspond à vôtre recherche.
                            </p> 
                        </div>
                    </div>
                    ';
            }

        }

    }

?>


