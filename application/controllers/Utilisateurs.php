<?php

    //modal validation
    //Faire les regexp
    
    class Utilisateurs extends CI_Controller{
        public function inscription(){

            if($this->input->post('type_utilisateur') == 'elevage'){
                //validation rules
                $this->form_validation->set_rules('numEleveur', 'Numéro Eleveur');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('password2', 'Confirmez le mot de passe', 'matches[password]');
                $this->form_validation->set_rules('telephone', 'Telephone', 'required|callback_check_telephone_exists');
                $this->form_validation->set_rules('nomElevage', 'Nom de l\elevage', 'required|callback_check_nomElevage_exists');
                $this->form_validation->set_rules('codePostal', 'Code postal', 'required');
                $this->form_validation->set_rules('adresse', 'adresse', 'required');
                $this->form_validation->set_rules('tailleElevage', 'Taille de l\elevage', 'required|is_natural_no_zero');

                if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('utilisateurs/inscription');
                    $this->load->view('templates/footer');
                } else {
                    //encrypting password
                    $enc_password = md5($this->input->post('password'));
                    //Créer l'utilisateur
                    $this->utilisateurs_model->inscription($enc_password);
                    //Ajouter la photo ensuite en la renommant avec l'id utilisateur
                    //upload images config
                    $config['upload_path'] = './assets/images/photos';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['max_width'] = '3000';
                    $config['max_height'] = '3000';

                    $this->load->library('upload', $config);

                    if($this->upload->do_upload()){
                        $data = array('upload_data' => $this->upload->data());
                        //filename = idUtilisateur
                        $utilisateurId = $this->utilisateurs_model->get_utilisateur_id($this->input->post('email'), $this->input->post('password'));
                        $imageId = $utilisateurId;
                    }

                    $this->utilisateurs_model->add_image($imageId, $utilisateurId);

                    //Enfin, rediriger vers la page d'accueil
                    $this->load->view('');
                }
            } else {
                //validation rules
                $this->form_validation->set_rules('numVeterinaire', 'Numéro véterinaire');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('password2', 'Confirmez le mot de passe', 'matches[password]');
                $this->form_validation->set_rules('telephone', 'Telephone', 'required|callback_check_telephone_exists');
                $this->form_validation->set_rules('nomCabinet', 'Nom du cabinet', 'required|callback_check_nomCabinet_exists');
                $this->form_validation->set_rules('codePostal', 'code postal', 'required');
                $this->form_validation->set_rules('adresse', 'adresse', 'required');

                if($this->form_validation->run() === FALSE){
                    $this->load->view('templates/header');
                    $this->load->view('utilisateurs/inscription');
                    $this->load->view('templates/footer');
                } else {
                    //encrypting password
                    $enc_password = md5($this->input->post('password'));
                    //Créer l'utilisateur
                    $this->utilisateurs_model->inscription($enc_password);
                    //Ajouter l'image ensuite
                    //upload images config
                    $config['upload_path'] = './assets/images/photos';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['max_width'] = '3000';
                    $config['max_height'] = '3000';

                    $this->load->library('upload', $config);

                    //Si une image est ajoutée, modif le nom, sinon par défaut le nom est mis à defaultImage.jpg
                    if($this->upload->do_upload()){
                        $data = array('upload_data' => $this->upload->data());
                        //filename = idUtilisateur
                        $utilisateurId = $this->utilisateurs_model->get_utilisateur_id($this->input->post('email'), $this->input->post('password'));
                        $imageId = $utilisateurId;
                    }

                    $this->utilisateurs_model->add_image($imageId, $utilisateurId);

                    //Enfin, rediriger vers la page d'accueil
                    $this->load->view('');
                }
            }            
        }

        // Check if username exists
		public function check_nomElevage_exists($nomElevage){
			$this->form_validation->set_message('check_nomElevage_exists', 'Un compte est dejà inscrit à ce nom !');
			if($this->utilisateurs_model->check_nomElevage_exists($nomElevage)){
				return true;
			} else {
				return false;
			}
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'Il existe dejà un compte avec email.');
			if($this->utilisateurs_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
        }

         // Check if telephone exists
		public function check_telephone_exists($telephone){
			$this->form_validation->set_message('check_telephone_exists', 'Il existe dejà un compte avec ce numéro de téléphone');
			if($this->utilisateurs_model->check_telephone_exists($telephone)){
				return true;
			} else {
				return false;
			}
        }
        
        // Check if nomCabinet exists
		public function check_nomCabinet_exists($nomCabinet){
			$this->form_validation->set_message('check_nomCabinet_exists', 'Un compte est dejà inscrit à ce nom !');
			if($this->utilisateurs_model->check_nomCabinet_exists($nomCabinet)){
				return true;
			} else {
				return false;
			}
        }
        
        
        public function login(){
            $data['title'] = 'Se connecter';

            //validation rules
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            //$this->form_validation->set_rules('statut','Statut','required|callback_check_default');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('utilisateurs/login', $data);
                $this->load->view('templates/footer');

            } else {
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $idUtilisateur = $this->utilisateurs_model->login($email, $password);

                // Create session
				if($idUtilisateur){
                    $nom = $this->utilisateurs_model->getUserName($idUtilisateur, $this->input->post('statut'));
                
					$utilisateur_data = array(
                        'idUtilisateur' => $idUtilisateur,
                        'statut' => $this->input->post('statut'),
                        'nom' => $nom,
						'connecte' => true
					);

                    $this->session->set_userdata($utilisateur_data);
                    redirect('');

				} else {
					redirect('login');
				}		
			}
        }  

        public function check_default($statut){
           return $statut == '0' ? FALSE : TRUE;
        }

        public function logout(){
            $this->session->unset_userdata('idUtilisateur');
            $this->session->unset_userdata('statut');
            $this->session->unset_userdata('nom');
            $this->session->unset_userdata('connecte');
            redirect('');
        }
    }

?>