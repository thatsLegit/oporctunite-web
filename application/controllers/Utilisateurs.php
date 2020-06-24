<?php

    //pour la connexion, ajouter la fonction d'oubli de mdp
    //confirmation d'inscription par mail
    //Empêcher la rafraichissement de la page d’inscription 
    //mettre la partie suivi dans un controller séparé
    
    class Utilisateurs extends CI_Controller{
        public function inscription(){

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

                    //getUtilisateurByID
                    $Utilisateur = $this->utilisateurs_model->getUtilisateur($Id);

                    //init session
					$utilisateur_data = array(
                        'idutilisateur' => $Id,
                        'statut' => 'elevage',
                        'nom' => $this->utilisateurs_model->getUserName($Id, 'elevage'),
						'email' => $Utilisateur->email,
                        'telephone' => $Utilisateur->telephone,
                        'ville' => $Utilisateur->ville,
                        'codePostal' => $Utilisateur->codePostal,
                        'adresse' => $Utilisateur->adresse,
                        'utilisateurPhoto' => $Utilisateur->utilisateurPhoto,
                        'dateInscription' => $Utilisateur->dateInscription,
                        'connecte' => true
                    );

                    $this->session->set_userdata($utilisateur_data);

                    //Enfin, rediriger vers la page de connexion ?
                    redirect('login');
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
                    $this->load->view('templates/header-connexion-inscription');
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
                    $config['max_size'] = '5120';
                    $config['max_width'] = '4000';
                    $config['max_height'] = '4000';
                    $config['file_name'] = $name;

                    //ajouter le nom à la bd
                    $this->load->library('upload', $config);
                    if($this->upload->do_upload()){
                        $this->utilisateurs_model->add_image($Id, $name);
                    }

                    //session message
                    $this->session->set_flashdata('veterinaire_created', 
                    'Bienvenue sur Oporctunité '.$this->input->post('nomCabinet'));

                    //getUtilisateurByID
                    $Utilisateur = $this->utilisateurs_model->getUtilisateur($Id);

                    //init session
					$utilisateur_data = array(
                        'idutilisateur' => $Id,
                        'statut' => 'veterinaire',
                        'nom' => $this->utilisateurs_model->getUserName($Id, 'veterinaire'),
						'email' => $Utilisateur->email,
                        'telephone' => $Utilisateur->telephone,
                        'ville' => $Utilisateur->ville,
                        'codePostal' => $Utilisateur->codePostal,
                        'adresse' => $Utilisateur->adresse,
                        'utilisateurPhoto' => $Utilisateur->utilisateurPhoto,
                        'dateInscription' => $Utilisateur->dateInscription,
                        'connecte' => true
                    );
                    
                    $this->session->set_userdata($utilisateur_data);

                    //Enfin, rediriger vers la page de connexion ?
                    redirect('login');
                }
            }            
        }

        public function Vrecaptcha(){
            if (empty($_POST['recaptcha'])) {
                return("captcha failure");
            }
            // validate recaptcha
            $response = $_POST['recaptcha'];
            $post = http_build_query(
                 array (
                     'response' => $response,
                     'secret' => '6LfkHOkUAAAAAK27qbRJs6J8VjKyhQqjmu8y3R22',
                     'remoteip' => $_SERVER['REMOTE_ADDR']
                 )
            );
            $opts = array('http' => 
                array (
                    'method' => 'POST',
                    'header' => 'application/x-www-form-urlencoded',
                    'content' => $post
                )
            );
            $context = stream_context_create($opts);
            $serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
            if (!$serverResponse) {
                return("captcha failed");
            }
            $result = json_decode($serverResponse);
            if (!$result -> success) {
                return("Invalid Recaptcha");
            }
            return 'ok';
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

            //validation rules
            $this->form_validation->set_rules('login', 'login', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header-connexion-inscription');
                $this->load->view('utilisateurs/login');
                $this->load->view('templates/footer');

            } else {
                //Avant connexion
                $login = $this->input->post('login');
                $password = md5($this->input->post('password'));
                $idUtilisateur = $this->utilisateurs_model->login($login, $password);

                //Après connexion
                // Create session
				if($idUtilisateur){
                    //getUtilisateurByID
                    $Utilisateur = $this->utilisateurs_model->getUtilisateur($idUtilisateur);

					$utilisateur_data = array(
                        'idutilisateur' => $idUtilisateur,
                        'statut' => $Utilisateur->type_utilisateur,
                        'nom' => $this->utilisateurs_model->getUserName($idUtilisateur, $Utilisateur->type_utilisateur),
                        'email' => $Utilisateur->email,
                        'telephone' => $Utilisateur->telephone,
                        'ville' => $Utilisateur->ville,
                        'codePostal' => $Utilisateur->codePostal,
                        'adresse' => $Utilisateur->adresse,
                        'utilisateurPhoto' => $Utilisateur->utilisateurPhoto,
                        'dateInscription' => $Utilisateur->dateInscription,
						'connecte' => true
					);

                    $this->session->set_userdata($utilisateur_data);

                    if($utilisateur_data['statut'] == "elevage"){
                        redirect('');
                    }
                    elseif($utilisateur_data['statut'] == "veterinaire"){
                        redirect('');
                    }
                    elseif($utilisateur_data['statut'] == "admin"){
                        redirect('admin/elevages');
                    }
                    else{
                        show_404();
                    }

				} else {
					redirect('login');
				}		
			}
        }  

        public function logout(){
            if(!$this->session->userdata('connecte')){
                redirect('login');
            }

            $this->session->sess_destroy();

            //session message
            $this->session->set_flashdata('user_loggedOut', 
            'Vous etes maintenant deconnecté.');

            redirect('login');
        }

        public function profil(){

            if(!$this->session->userdata('connecte')){
                redirect('accueil');
            }

            $nom = $this->session->userdata('nom');
            $id = $this->session->userdata('idutilisateur');

            if($this->session->userdata('statut') == "elevage"){
                $data['tailleElevage'] = $this->utilisateurs_model->getTailleElevage($nom);
                
                $this->load->view('templates/header');
                $this->load->view('utilisateurs/profil-elevage', $data);
                $this->load->view('templates/footer');
            }
            elseif($this->session->userdata('statut') == "veterinaire"){
                $numVeterinaire = $this->utilisateurs_model->getNumVeterinaire_by_name($nom);
                $data['nbSuivis'] = $this->suivis_model->nb_elevages_suivis($numVeterinaire);

                $this->load->view('templates/header');
                $this->load->view('utilisateurs/profil-veterinaire', $data);
                $this->load->view('templates/footer');
            }
            elseif($this->session->userdata('statut') == "admin"){
                redirect('admin/elevages');
            }
            else {
                show_404();
            }
        }

        //Page admin elevages
        public function admin_suivi_elevages($offset = 0){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "admin"){
                redirect('login');
            }

            //pagination
            $this->load->library('pagination');

            //configs
            $config['base_url'] = base_url().'admin/elevages';
            $config['total_rows'] = $this->db->count_all('elevage'); 
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;

            // Produces: class="pagination-link"
            $config['attributes'] = array('class' => 'pagination-link');

            $this->pagination->initialize($config);

            //Querying models
            $data['elevage'] = $this->utilisateurs_model->getTousElevages($config['per_page'], 
            $offset);

            //Finally loading views
            $this->load->view('templates/header');
            $this->load->view('utilisateurs/admin/elevages', $data);
            $this->load->view('templates/footer');
        }

        //Page admin veterinaires
        public function admin_suivi_veterinaires($offset = 0){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "admin"){
                redirect('login');
            }

            //pagination
            $this->load->library('pagination');

            //configs
            $config['base_url'] = base_url().'admin/veterinaires';
            $config['total_rows'] = $this->db->count_all('veterinaire'); 
            $config['per_page'] = 3;
            $config['uri_segment'] = 3;

            // Produces: class="pagination-link"
            $config['attributes'] = array('class' => 'pagination-link');

            $this->pagination->initialize($config);

            //Querying models
            $data['veterinaire'] = $this->utilisateurs_model->getTousVeterinaires($config['per_page'], 
            $offset);

            //Finally loading views
            $this->load->view('templates/header');
            $this->load->view('utilisateurs/admin/veterinaires', $data);
            $this->load->view('templates/footer');
        }

        public function bannir(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "admin"){
                show_404();
            }

            $type = $this->input->post('type');
            
            if($type == 'veterinaire'){
                $this->utilisateurs_model->suppr_utilisateur($this->input->post('nom'), $type);
                redirect('admin/veterinaires');
            } else {
                $this->utilisateurs_model->suppr_utilisateur($this->input->post('nom'), $type);
                redirect('admin/elevages');
            }    
        }

        public function adminRechercheElevage(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "admin"){
                show_404();
            }

            $search_data = $this->input->post('search_data');
            $result = $this->utilisateurs_model->admin_get_elevage_search($search_data);

            if (!empty($result)){
                echo '<div class="row">
                        <div class="col">
                            <h4>Élevages possédant un compte O\'porctunité :</h4><br>          
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Elevage</th>
                                        <th>Numéro eleveur</th>
                                        <th>Taille</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    foreach($result as $row){
                                        echo '<tr>
                                                <td>'.$row->nomElevage.'</td>
                                                <td>'.$row->numEleveur.'</td>
                                                <td>'.$row->tailleElevage.'</td>
                                                <td>'.$row->adresse.'</td>
                                                <td>'.$row->codePostal.'</td>
                                                <td>'.$row->email.'</td>
                                                <td>'.$row->telephone.'</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                                                        <button onclick="startTimer(\''.$row->nomElevage.'\', \'elevage\')" class="btn btn-danger">Bannir élevage</button>
                                                    </a>
                                                </td>
                                        </tr>';
                                    };
                                echo '</tbody>
                            </table>
                        </div>
                    </div>
                    ';
            } else {
                echo '
                    <div class="row">
                        <div class="col-12">
                            <p>
                                Aucun élevage de correspond à votre recherche.
                            </p> 
                        </div>
                    </div>
                    ';
            }
        }

        public function adminRechercheVeterinaire(){
            if(!$this->session->userdata('connecte') || $this->session->userdata('statut') != "admin"){
                show_404();
            }

            $search_data = $this->input->post('search_data');
            $result = $this->utilisateurs_model->admin_get_veterinaire_search($search_data);

            if (!empty($result)){
                echo '<div class="row">
                        <div class="col">
                            <h4>Cabinets possédant un compte O\'porctunité :</h4><br>          
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Cabinet</th>
                                        <th>Numéro vétérinaire</th>
                                        <th>Adresse</th>
                                        <th>Code Postal</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>';
                                    foreach($result as $row){
                                        echo '<tr>
                                                <td>'.$row->nomCabinet.'</td>
                                                <td>'.$row->numVeterinaire.'</td>
                                                <td>'.$row->adresse.'</td>
                                                <td>'.$row->codePostal.'</td>
                                                <td>'.$row->email.'</td>
                                                <td>'.$row->telephone.'</td>
                                                <td>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">
                                                        <button onclick="startTimer(\''.$row->nomCabinet.'\', \'elevage\')" class="btn btn-danger">Bannir vétérinaire</button>
                                                    </a>
                                                </td>
                                        </tr>';
                                    };
                                echo '</tbody>
                            </table>
                        </div>
                    </div>
                    ';
            } else {
                echo '
                    <div class="row">
                        <div class="col-12">
                            <p>
                                Aucun cabinet de correspond à votre recherche.
                            </p> 
                        </div>
                    </div>
                    ';
            }
        }
  
    }

?>