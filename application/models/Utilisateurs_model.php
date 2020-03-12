<?php

    //check l'ordre d'insertion dans la bd et photo
    class Utilisateurs_model extends CI_Model{

        public function inscription($enc_password){
            if($this->input->post('type_utilisateur') == 'elevage'){
                $data1 = array(
                    'codePostal' => $this->input->post('codePostal'),
                    'email' => $this->input->post('email'),
                    'password' => $enc_password,
                    'telephone' => $this->input->post('telephone'),
                    'type_utilisateur' => 'elevage'
                );   
                $this->db->insert('utilisateur', $data1);

                //recup idutilisateur
                $this->db->where('email', $data1['email']);
                $this->db->where('password', $data1['password']);
                $idUtilisateur = $this->db->get('utilisateur');

                $data2 = array(
                    'numEleveur' => $this->input->post('numEleveur'),
                    'nomElevage' => $this->input->post('nomElevage'),
                    'tailleElevage' => $this->input->post('tailleElevage')
                    'idutilisateur' => $idUtilisateur
                );
                
                //INSERT into ELEVAGE
                //return ?
                $this->db->insert('elevage', $data2);

            } else {
                $data1 = array(
                    'codePostal' => $this->input->post('departement'),
                    'email' => $this->input->post('email'),
                    'password' => $enc_password,
                    'telephone' => $this->input->post('telephone'),
                    'type_utilisateur' => 'eleveur'
                );
                $this->db->insert('utilisateur', $data1);

                //recup idutilisateur
                $this->db->where('email', $data1['email']);
                $this->db->where('password', $data1['password']);
                $idUtilisateur = $this->db->get('utilisateur');

                $data2 = array(
                    'numVeterinaire' => $this->input->post('numVeterinaire'),
                    'nomCabinet' => $this->input->post('nomCabinet'),
                    'idutilisateur' => $idUtilisateur
                );               
    
                //INSERT into VETERINAIRE               
                $this->db->insert('veterinaire', $data2);
            }           
        }

        public function login($email, $password){ 
            if($this->input->post('statut') == 'eleveur'){
                $this->db->where('email', $email);
                $this->db->where('password', $password);
                $result = $this->db->get('utilisateur');

                if($result->num_rows() == 1){
                    //a revoir
                    $type_utilisateur = $this->db->get_where('elevage', array('idutilisateur' => $result->row(0)->idutilisateur))->result_array();
                    return $result->row(0)->idutilisateur;
                } else {
                    return false;
                }
            } else {
                $this->db->where('email', $email);
                $this->db->where('password', $password);
                $result = $this->db->get('utilisateur');

                if($result->num_rows() == 1){
                    //a revoir
                    $type_utilisateur = $this->db->get_where('veterinaire', array('idutilisateur' => $result->row(0)->idutilisateur))->result_array();
                    return $result->row(0)->idutilisateur;
                } else {
                    return false;
                }             
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