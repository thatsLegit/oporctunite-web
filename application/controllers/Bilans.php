<?php

    //Là c'est la page bilan avec tous les graphiques que je veux dedans.
    //Les models Notes et Tests seront utilisés.

    //Je pars sur l'idée que les notes sont générées seulement
    //au moment ou l'utilisateur arrive sur bilans.

    Class Bilans extends CI_Controller{

        public function view(){

            if(!$this->session->userdata('logged_in')){
                redirect('utilisateurs/login');
            }

            //le veto n'a pas d'accès à ces vues
            if($this->session->userdata('type_utilisateur') == 'veterinaire'){
                redirect('pages');
            }

            //données de session ou statiques
            $idUtilisateur = $this->session->userdata('idUtilisateur');
            $data['titre'] = 'Suivi de mon elevage';

            //données brutes des tests
            $data['tests'] = $this->tests_model->get_tests($idUtilisateur);

            //Valeurs des derniers tests réalisés par catégorie et tous les libelles
            $data['categoryP']['Absence de faim prolongée'] = $this->categories_model->get_tests_by_wording('Condition corporelle');
            $data['categoryP']['Absence de soif prolongée'] = $this->categories_model->get_tests_by_wording('Apport en eau');
            $data['categoryP']['Confort au repos'] = $this->categories_model->get_tests_by_wording('Absence de lisier sur le corps', 'Nombre de plaies à l’épaule', 'Nombre de bursites');
            $data['categoryP']['Confort de temperature'] = $this->categories_model->get_tests_by_wording('halètement','blotissement');
            $data['categoryP']['Facilité de mouvement'] = $this->categories_model->get_tests_by_wording('cases de mise bas', 'espace alloué');
            $data['categoryP']['Absence de blessures'] = $this->categories_model->get_tests_by_wording('boiterie', 'blessure corps', 'lésions vulve');
            $data['categoryP']['Absence de maladies'] = $this->categories_model->get_tests_by_wording('Mortalité', 'Toux', 'Éternuement', 'pompage', 'prolapsus rectal', 'diarrhée', 
                                                                                                        'constipation', 'métrite', 'mammite', 'prolapsus utérin', 'condition de la peau',
                                                                                                        'ruptures et hernies', 'infections locales');
            $data['categoryP']['Absence de blessures causées par certaines pratiques d elevage'] = $this->categories_model->get_tests_by_wording('coupes de queue', 'Pose d anneaux au niveau du groin');
            $data['categoryP']['Expression du comportement social'] = $this->categories_model->get_tests_by_wording('comportement social');
            $data['categoryP']['Expression d autres comportements'] = $this->categories_model->get_tests_by_wording('stéréotypies', 'exploration individuelle');
            $data['categoryP']['Bonne relation homme-animal'] = $this->categories_model->get_tests_by_wording('peur de l’homme');
            $data['categoryP']['Emotions positives'] = $this->categories_model->get_tests_by_wording('évaluation qualitative du comportement');

            //les notes g et p sont calculées dans la vue

            //load la vue bilan
            $this->load->view('templates/header');
            $this->load->view('bilans/view', $data);
            $this->load->view('templates/footer');
        }

        
        public function radarGraphGen(){
        
        }
    
        public function activityGraphGen(){
    
        }
    
        public function testTreeGen(){
    
        }
        
    }

?>