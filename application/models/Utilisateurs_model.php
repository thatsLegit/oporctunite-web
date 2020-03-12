<?php

    class Utilisateurs_model extends CI_Model{

        public function inscriptionEleveur($enc_password){
            $data1 = array(
                'numEleveur' => $this->input->post('numEleveur'),
                'nomElevage' => $this->input->post('nomElevage'),
                'tailleElevage' => $this->input->post('tailleElevage')
            );
            $data2 = array(
                'codePostal' => $this->input->post('departement'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
                'telephone' => $this->input->post('telephone'),
                'type_utilisateur' => 'eleveur'
            );

            //INSERT
            return $this->db->insert('utilisateur', $data2);
            return $this->db->insert('elevage', $data1);
        }

        public function inscriptionVeterinaire($enc_password){
            $data1 = array(
                'numVeterinaire' => $this->input->post('numVeterinaire'),
                'nomCabinet' => $this->input->post('nomCabinet')
            );
            $data2 = array(
                'codePostal' => $this->input->post('departement'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
                'telephone' => $this->input->post('telephone'),
                'type_utilisateur' => 'eleveur'
            );

            //INSERT
            return $this->db->insert('utilisateur', $data2);
            return $this->db->insert('veterinaire', $data1);
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