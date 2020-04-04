<?php

    class Utilisateurs_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function inscription($enc_password){
            if($this->input->post('type_utilisateur') == 'elevage'){
                $data1 = array(
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'ville' => $this->input->post('ville'),
                    'codePostal' => $this->input->post('codePostal'),
                    'adresse' => $this->input->post('adresse'),
                    'password' => $enc_password,
                    'utilisateurPhoto' => 'defaultImage.jpg',
                    'type_utilisateur' => 'elevage'
                );   
                $this->db->insert('utilisateur', $data1);

                //recup idutilisateur
                $this->db->where('email', $data1['email']);
                $this->db->where('password', $data1['password']);
                $idUtilisateur = $this->db->get('utilisateur')->row(0)->idutilisateur;

                $data2 = array(
                    'numEleveur' => $this->input->post('numEleveur'),
                    'nomElevage' => $this->input->post('nomElevage'),
                    'tailleElevage' => $this->input->post('tailleElevage'),
                    'idutilisateur' => $idUtilisateur
                );

                //INSERT INTO ELEVAGE
                $this->db->insert('elevage', $data2);

            } else {
                $data1 = array(
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
                    'ville' => $this->input->post('ville'),
                    'codePostal' => $this->input->post('codePostal'),
                    'adresse' => $this->input->post('adresse'),
                    'password' => $enc_password,
                    'utilisateurPhoto' => 'defaultImage.jpg',
                    'type_utilisateur' => 'veterinaire'
                );
                $this->db->insert('utilisateur', $data1);

                //recup idutilisateur
                $this->db->where('email', $data1['email']);
                $this->db->where('password', $data1['password']);
                $idUtilisateur = $this->db->get('utilisateur')->row(0)->idutilisateur;

                $data2 = array(
                    'numVeterinaire' => $this->input->post('numVeterinaire'),
                    'nomCabinet' => $this->input->post('nomCabinet'),
                    'idutilisateur' => $idUtilisateur
                );               
    
                //INSERT INTO VETERINAIRE               
                $this->db->insert('veterinaire', $data2);
            }           
        }

        public function login($tel, $email, $password){ 
            //select idutilisateur
            //from utilisateur
            //where email = $email
            //or tel = $tel
            //and password = $password;
            $result = $this->db->where("password='".$password."' 
                                AND (email='".$email."' OR telephone='".$tel."')")
                                ->get('utilisateur');
            if($result->num_rows() == 1){
                return $result->row(0)->idutilisateur;
            } else {
                return false;
            }
        }

        public function add_image($imageId, $name){
            $data = array('utilisateurPhoto'=>$name);
            $this->db->where('idutilisateur',$imageId);
            $this->db->update('utilisateur',$data);
        }

        public function get_utilisateur_id($email, $password){
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            return $this->db->get('utilisateur')->row(0)->idutilisateur;
        }

        public function getUserName($idUtilisateur, $statut){
            
            if($statut == 'elevage'){
                return $this->db->where('idutilisateur', $idUtilisateur)
                                    ->get('elevage')->row(0)->nomElevage;
            }
            elseif($statut == 'veterinaire') {
                return $this->db->where('idutilisateur', $idUtilisateur)
                                    ->get('veterinaire')->row(0)->nomCabinet;
            }
            else{
                return $this->db->where('idutilisateur', $idUtilisateur)
                                    ->get('utilisateur')->row(0)->email;
            }
        }

        public function check_numEleveur_exists($numEleveur){
			$query = $this->db->get_where('elevage', array('numEleveur' => $numEleveur));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
        
        public function check_numVeterinaire_exists($numVeterinaire){
			$query = $this->db->get_where('veterinaire', array('numVeterinaire' => $numVeterinaire));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
        
        public function check_nomElevage_exists($nomElevage){
			$query = $this->db->get_where('elevage', array('nomElevage' => $nomElevage));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('utilisateur', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
        
        // Check telephone exists
		public function check_telephone_exists($telephone){
			$query = $this->db->get_where('utilisateur', array('telephone' => $telephone));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

        public function check_nomCabinet_exists($nomCabinet){
			$query = $this->db->get_where('veterinaire', array('nomCabinet' => $nomCabinet));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
        
        public function getElevageByName($name){
            $this->db->select('*');
            $this->db->from('elevage');
            $this->db->where('elevage.nomElevage', $name);
            $this->db->join('utilisateur', 'elevage.idutilisateur = utilisateur.idutilisateur' ); 
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getVeterinaireByName($id){
            $this->db->select('*');
            $this->db->from('veterinaire');
            $this->db->where('veterinaire.idutilisateur', $id);
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur' ); 
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getVeterinaire(){
            $this->db->select('*');
            $this->db->from('veterinaire');
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur' ); 
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getElevage(){
            $this->db->select('*');
            $this->db->from('elevage');
            $this->db->join('utilisateur', 'elevage.idutilisateur = utilisateur.idutilisateur' ); 
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getAdmin($id){
            $this->db->select('*');
            $this->db->from('utilisateur');
            $this->db->where('idutilisateur', $id);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getVeterinaire_suivi($name_elevage){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('elevage.nomElevage', $name_elevage);
            $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur' ); 
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getElevage_suivi($id_veterinaire){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('veterinaire.idutilisateur', $id_veterinaire);
            $this->db->join('veterinaire', 'veterinaire.numVeterinaire = suivre.numVeterinaire' );
            $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur' );
            $this->db->join('utilisateur', 'utilisateur.idutilisateur = elevage.idutilisateur' ); 
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getNum_Elevage_name($name_elevage){
            $this->db->select('numEleveur');
            $this->db->from('elevage');
            $this->db->where('elevage.nomElevage', $name_elevage);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function getNum_Veterinaire_name($name_veterinaire){
            $this->db->select('numVeterinaire');
            $this->db->from('veterinaire');
            $this->db->where('veterinaire.nomCabinet', $name_veterinaire);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function get_suivi($numElevage, $numVeterinaire){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('numEleveur', $numElevage);
            $this->db->where('numVeterinaire', $numVeterinaire);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function add_suivi($numElevage, $numVeterinaire){

            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire' => $numVeterinaire,
                'etat' => "En Cours"
            );
        
            $this->db->insert('suivre', $data);
        }

        public function delete_suivi($numElevage, $numVeterinaire){

            $this->db->where('numEleveur', $numElevage);
            $this->db->where('numVeterinaire', $numVeterinaire);
            $this->db->delete('suivre');
        
        }

        public function update_refuser_suivi($numElevage, $numVeterinaire){

            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire'  => $numVeterinaire,
                'etat'  => 'Refuser'
            );
        
            $this->db->replace('suivre', $data);
        
        }

        public function update_accepter_suivi($numElevage, $numVeterinaire){

            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire'  => $numVeterinaire,
                'etat'  => 'Accepter'
            );
        
            $this->db->replace('suivre', $data);
        
        }
    }
?>