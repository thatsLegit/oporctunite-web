<?php

    //pour la connexion, ajouter la fonction de changement de mdp
    //confirmation d'inscription par mail
    //créer un compte admin et ses droits

    //rajouter la photo dans les données de session + plein d'autres données en fait
    //creer les vues d'accueil du site.
    
    class Utilisateurs extends CI_Controller{
        public function inscription(){

            //Si l'utilisateur est dejà co, le rediriger vers la page d'accueil
            if($this->session->userdata('connecte')){
                redirect('');
            }

            $this->config->set_item('language', 'french');

            if($this->input->post('type_utilisateur') == 'elevage'){
                //validation rules
                $this->form_validation->set_rules('numEleveur', 'Numéro Eleveur', 'required|callback_check_numEleveur_exists');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
                $this->form_validation->set_rules('password', 'Password', 'required', array('required'=>'Un mot de passe est requis.'));
                $this->form_validation->set_rules('password2', 'Confirmez le mot de passe', 'matches[password]');
                $this->form_validation->set_rules('telephone', 'Telephone', 'required|callback_check_telephone_exists');
                $this->form_validation->set_rules('nomElevage', 'Nom de l\'elevage', 'required|callback_check_nomElevage_exists');
                $this->form_validation->set_rules('ville', 'Ville', 'required');
                $this->form_validation->set_rules('codePostal', 'Code postal', 'required');
                $this->form_validation->set_rules('adresse', 'adresse', 'required', array('required'=>'Veuillez renseigner une addresse.'));
                $this->form_validation->set_rules('tailleElevage', 'Taille de l\'elevage', 'required|is_natural_no_zero', array('required'=>'Veuillez entrer une valeur pour la taille de l\'élevage'));

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
                    $Id = $this->utilisateurs_model->get_utilisateur_id($this->input->post('email'), $enc_password);
                    $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
                    $name = $Id . "." . $ext;

                    //upload images config
                    $config['upload_path'] = './assets/img/photos';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['max_width'] = '3000';
                    $config['max_height'] = '3000';
                    $config['file_name'] = $name;

                    //ajouter le nom à la bd
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload()){
                        $this->utilisateurs_model->add_image($Id, $name);
                    }
                    //session message
                    $this->session->set_flashdata('elevage_created', 
                    'Bienvenue sur Oporctunité '.$this->input->post('nomElevage'));

                    //init session
					$utilisateur_data = array(
                        'idutilisateur' => $Id,
                        'statut' => 'elevage',
                        'nom' => $this->utilisateurs_model->getUserName($Id, 'elevage'),
						'connecte' => true
					);
                    $this->session->set_userdata($utilisateur_data);

                    //Enfin, rediriger vers la page d'accueil
                    redirect('');
                }
            } else {
                //validation rules
                $this->form_validation->set_rules('numVeterinaire', 'Numéro véterinaire', 'required|callback_check_numVeterinaire_exists');
                $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('password2', 'Confirmez le mot de passe', 'matches[password]');
                $this->form_validation->set_rules('telephone', 'Telephone', 'required|callback_check_telephone_exists');
                $this->form_validation->set_rules('nomCabinet', 'Nom du cabinet', 'required|callback_check_nomCabinet_exists');
                $this->form_validation->set_rules('ville', 'Ville', 'required');
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
                    //Ajouter la photo ensuite en la renommant avec l'id utilisateur
                    $Id = $this->utilisateurs_model->get_utilisateur_id($this->input->post('email'), $enc_password);
                    $ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
                    $name = $Id . "." . $ext;

                    //upload images config
                    $config['upload_path'] = './assets/img/photos';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $config['max_width'] = '3000';
                    $config['max_height'] = '3000';
                    $config['file_name'] = $name;

                    //ajouter le nom à la bd
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload()){
                        $this->utilisateurs_model->add_image($Id, $name);
                    }

                    //session message
                    $this->session->set_flashdata('veterinaire_created', 
                    'Bienvenue sur Oporctunité '.$this->input->post('nomCabinet'));

                    //init session
					$utilisateur_data = array(
                        'idutilisateur' => $Id,
                        'statut' => 'veterinaire',
                        'nom' => $this->utilisateurs_model->getUserName($Id, 'veterinaire'),
						'connecte' => true
					);
                    $this->session->set_userdata($utilisateur_data);

                    //Enfin, rediriger vers la page d'accueil
                    redirect('');
                }
            }            
        }

        // Check if numEleveur exists
		public function check_numEleveur_exists($numEleveur){
			$this->form_validation->set_message('check_numEleveur_exists', 'Un compte avec cet identifiant professionel existe dejà !');
			if($this->utilisateurs_model->check_numEleveur_exists($numEleveur)){
				return true;
			} else {
				return false;
			}
        }
        
        // Check if NumVeterinaire exists
		public function check_numVeterinaire_exists($numVeterinaire){
			$this->form_validation->set_message('check_numVeterinaire_exists', 'Un compte avec cet identifiant professionel existe dejà !');
			if($this->utilisateurs_model->check_numVeterinaire_exists($numVeterinaire)){
				return true;
			} else {
				return false;
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
			$this->form_validation->set_message('check_email_exists', 'Il existe dejà un compte avec cet email.');
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

            //Si l'utilisateur est dejà co, le rediriger vers la page d'accueil
            if($this->session->userdata('connecte')){
                redirect('');
            }

            $this->config->set_item('language', 'french');
            $data['title'] = 'Se connecter';

            //validation rules
            $this->form_validation->set_rules('login', 'login', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('utilisateurs/login', $data);
                $this->load->view('templates/footer');

            } else {
                $email = $this->input->post('login');
                $tel = $this->input->post('login');
                $password = md5($this->input->post('password'));
                $idUtilisateur = $this->utilisateurs_model->login($tel, $email, $password);

                // Create session
				if($idUtilisateur){

					$utilisateur_data = array(
                        'idutilisateur' => $idUtilisateur,
                        'statut' => $this->input->post('select'),
                        'nom' => $this->utilisateurs_model->getUserName($idUtilisateur, $this->input->post('select')),
						'connecte' => true
					);

                    $this->session->set_userdata($utilisateur_data);
                    redirect('profil');

				} else {
					redirect('login');
				}		
			}
        }  

        public function check_default($statut){
           return $statut == '0' ? FALSE : TRUE;
        }

        public function logout(){

            //Si l'utilisateur est dejà co, le rediriger vers la page d'accueil
            if(!$this->session->userdata('connecte')){
                redirect('');
            }

            $this->session->unset_userdata('idUtilisateur');
            $this->session->unset_userdata('statut');
            $this->session->unset_userdata('nom');
            $this->session->unset_userdata('connecte');

            //session message
            $this->session->set_flashdata('user_loggedOut', 
            'Vous etes deconnecté.');

            redirect('');
        }

        public function forgotten(){

        }
    }

?>