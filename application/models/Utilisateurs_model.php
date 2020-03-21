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
                    'codePostal' => $this->input->post('codePostal'),
                    'adresse' => $this->input->post('adresse'),
                    'tailleElevage' => $this->input->post('tailleElevage'),
                    'idutilisateur' => $idUtilisateur
                );

                //insérer dans élevage
                $this->db->insert('elevage', $data2);

            } else {
                $data1 = array(
                    'email' => $this->input->post('email'),
                    'telephone' => $this->input->post('telephone'),
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
                    'codePostal' => $this->input->post('codePostal'),
                    'adresse' => $this->input->post('adresse'),
                    'idutilisateur' => $idUtilisateur
                );               
    
                //INSERT into VETERINAIRE               
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

        public function add_image($imageId){
            $data = array('utilisateurPhoto'=>$imageId);
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
            } else {
                return $this->db->where('idutilisateur', $idUtilisateur)
                                    ->get('veterinaire')->row(0)->nomCabinet;
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
    }
?>