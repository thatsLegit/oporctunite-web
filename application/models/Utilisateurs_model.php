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

        public function login($login, $password){ 
            $result = $this->db->where("password='".$password."' 
                                AND (email='".$login."' OR telephone='".$login."')")
                                ->get('utilisateur');
            if($result->num_rows() == 1){
                return $result->row(0)->idutilisateur;
            } else {
                return false;
            }
        }

        //Pour l'inscription
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

        //A la connexion
        public function getUtilisateur($idUtilisateur){
            return $this->db->where('idutilisateur', $idUtilisateur)->get('utilisateur')->row(0);
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

        // Checks inscription
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

		public function check_email_exists($email){
			$query = $this->db->get_where('utilisateur', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
        }
        
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

        //Admin: supprimer utilisateur
        public function suppr_utilisateur($nom, $type){
            if($type == 'elevage'){
                $sql = 'DELETE u FROM utilisateur u INNER JOIN elevage e ON u.idutilisateur = e.idutilisateur WHERE nomElevage = ?';
            } else {
                $sql = 'DELETE u FROM utilisateur u INNER JOIN veterinaire v ON u.idutilisateur = v.idutilisateur WHERE nomCabinet = ?';
            }

            $this->db->query($sql, array($nom));
        }   

        //Utilisé dans la page de profil
        public function getTailleElevage($name_elevage){
            $this->db->select('tailleElevage');
            $this->db->from('elevage');
            $this->db->where('elevage.nomElevage', $name_elevage);
            return $this->db->get()->result_array();
        }

        //Utilisé dans les suivis
        public function getNumElevage_by_name($name_elevage){
            $this->db->select('numEleveur');
            $this->db->from('elevage');
            $this->db->where('elevage.nomElevage', $name_elevage);
            return $this->db->get()->row(0)->numEleveur;
        }

        public function getNumVeterinaire_by_name($name_veterinaire){
            $this->db->select('numVeterinaire');
            $this->db->from('veterinaire');
            $this->db->where('veterinaire.nomCabinet', $name_veterinaire);
            return $this->db->get()->row(0)->numVeterinaire;
        }

        public function get_veto_search($search_data){
            $this->db->select('veterinaire.nomCabinet, utilisateur.codePostal, veterinaire.numVeterinaire');
            $this->db->like('nomCabinet', $search_data);
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur'); 
            return $this->db->get('veterinaire', 10)->result();
        }

        //utilisé dans la partie admin
        public function getTousVeterinaires($limit=FALSE, $offset=FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }
            
            $this->db->select('*');
            $this->db->from('veterinaire');
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur'); 
            return $this->db->get()->result_array();
        }

        public function getTousElevages($limit=FALSE, $offset=FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }

            $this->db->select('*');
            $this->db->from('elevage');
            $this->db->join('utilisateur', 'elevage.idutilisateur = utilisateur.idutilisateur'); 
            return $this->db->get()->result_array();
        }

        public function admin_get_elevage_search($search_data){
            $this->db->select('*');
            $this->db->from('elevage');
            $this->db->join('utilisateur', 'elevage.idutilisateur = utilisateur.idutilisateur'); 
            $this->db->like('nomElevage', $search_data);
            return $this->db->get()->result();
        }

        public function admin_get_veterinaire_search($search_data){
            $this->db->select('*');
            $this->db->from('veterinaire');
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur'); 
            $this->db->like('nomCabinet', $search_data);
            return $this->db->get()->result();
        }

    }

?>