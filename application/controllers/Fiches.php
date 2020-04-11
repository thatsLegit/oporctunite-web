<?php 
class Fiches extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function fiches(){

        if(!$this->session->userdata('connecte')){
            redirect('login');
        }

        $data['search']='false';
        $data['categoriesG']=$this->Categories_model->getCategorieG();
        $data['fiches']=$this->Fiches_model->getFiches();

        $this->load->view('templates/header');
        $this->load->view('fiches/fiches_conseil_search',$data);
        $this->load->view('templates/footer');
    }

    public function fiches_favoris(){

        if(!$this->session->userdata('connecte')){
            redirect('login');
        }

        $utilisateur = $this->session->userdata('idutilisateur');

        $data['search']='false';
        $data['categoriesG']=$this->Categories_model->getCategorieG();
        $data['fiches']=$this->Fiches_model->getFiches_favoris($utilisateur);

        $this->load->view('templates/header');
        $this->load->view('fiches/fiches_conseil_favoris',$data);
        $this->load->view('templates/footer');
    }

    public function autocomplete(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        //recherche des fiches
        // load model
        $this->load->model('Fiches_model');
        $search_data = $this->input->post('search_data');
        $result = $this->Fiches_model->get_autocomplete($search_data);

        if (!empty($result))
        {
            foreach ($result as $row):

                echo validation_errors();
                echo form_open('fiches/read');

                echo '  <div class="col" id="fiche">
                            <div style="padding:auto;margin:auto;">
                                <input name="titre_fiche" type="text" value="'.$row->titreFiche.'" hidden>
                                <h5 class="text-center">'.$row->titreFiche.'</h5>
                                <p class="text-center">'.$row->nomCategorieG.'</p>
                                <button type="submit" id="fiche-button" value="'.$row->titreFiche.'"><b style="padding:1px;">En savoir plus</b></button>
                            </div>
                        </div>
                </form>';
            endforeach;
        } else {
            echo '<div class="col" id="fiche">
                    <h5> <em> Aucune fiche n\'a été trouvé </em> <h5>
                    </div>';
        }

    }

    //même chose que la fonction du dessus mais pour le bilan, y'a un modèle différent
    public function ajaxReco(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }
        
        $this->load->model('Fiches_model');
        $label = $this->input->post('label');
        $result = $this->Fiches_model->get_ajaxReco($label);

        if (!empty($result)){

            foreach ($result as $row):

                echo validation_errors();
                echo form_open('fiches/read');

                echo '  <div class="col" id="fiche">
                            <div style="padding:auto;margin:auto;">
                                <input name="titre_fiche" type="text" value="'.$row->titreFiche.'" hidden>
                                <h5 class="text-center">'.$row->titreFiche.'</h5>
                                <p class="text-center" style="margin:30px 0px;">'.$row->nomCategorieG.'</p>
                                <button type="submit" id="fiche-button" value="'.$row->titreFiche.'"><b style="padding:1px;">En savoir plus</b></button>
                            </div>
                        </div>
                </form>';
            endforeach;
        }
    }

    public function add_favoris(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        $this->load->model('Fiches_model');
        $titreFiche = $this->input->post('titre_fiche');
        $utilisateur = $this->session->userdata('idutilisateur');
        $fav = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
        
        if (empty($fav)){
            
            $this->Fiches_model->add_favoris($titreFiche, $utilisateur);
            
            $data['avis'] = $this->Fiches_model->get_avis($titreFiche);
            $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['fiche_fav'] = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
            $data['titre'] ='Fiche conseil';

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
           
        } else {
            $data['avis'] = $this->Fiches_model->get_avis($titreFiche);
            $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['fiche_fav'] = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
            $data['titre'] ='Fiche conseil';

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
    }

    public function delete_favoris(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        $this->load->model('Fiches_model');
        $titreFiche = $this->input->post('titre_fiche');
        $utilisateur = $this->session->userdata('idutilisateur');
        $this->Fiches_model->delete_favoris($titreFiche, $utilisateur);

        $data['avis'] = $this->Fiches_model->get_avis($titreFiche);
        $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
        $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
        $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
        $data['fiche_fav'] = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
        $data['titre'] ='Fiche conseil';

        $this->load->view('templates/header');
        $this->load->view('fiches/fiches_conseils',$data);
        $this->load->view('templates/footer');
    }

    public function noter(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        $this->load->model('Fiches_model');
        $titreFiche = $this->input->post('titre_fiche');
        $ajouterNote = $this->input->post('ajouterNote');
        $commentaire = $this->input->post('commentaire');
        $utilisateur = $this->session->userdata('idutilisateur');

        $this->form_validation->set_rules('ajouterNote', 'Ajouter une note', 'required');
        $this->form_validation->set_rules('commentaire', 'Ajouter un commentaire', 'required');

        if($this->form_validation->run() === FALSE){
            $data['avis'] = $this->Fiches_model->get_avis($titreFiche);
            $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche_fav'] = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['titre'] ='Fiche conseil';

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        } else {
            $this->Fiches_model->add_note($titreFiche, $utilisateur, $ajouterNote, $commentaire);

            $data['avis'] = $this->Fiches_model->get_avis($titreFiche);
            $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche_fav'] = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['titre'] ='Fiche conseil';

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
    }

    public function search(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        $categorie = $this->input->post('categ');
        
        $this->form_validation->set_rules('categ', 'Catégorie', 'required');

        if($this->form_validation->run() === FALSE){
            $this->fiches();
        } else {
            if($categorie != 1){
                    $data['categoriesG']=$this->Categories_model->getCategorieG();
                    $data['fiches'] = $this->Fiches_model->get_fiches_search($categorie);
                    $data['search']='true';
                    $data['titre'] ='Les fiches';

                    $this->load->view('templates/header');
                    $this->load->view('fiches/fiches_conseil_search',$data);
                    $this->load->view('templates/footer');
            } else {
                    $this->fiches();
            }
        }
    }

    public function search_favoris(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        $categorie = $this->input->post('categ');
        $utilisateur = $this->session->userdata('idutilisateur');
        
        $this->form_validation->set_rules('categ', 'Catégorie', 'required');

        if($this->form_validation->run() === FALSE){
            $this->fiches_favoris();
        } else {

            if($categorie != 1){
                    $data['categoriesG']=$this->Categories_model->getCategorieG();
                    $data['fiches'] = $this->Fiches_model->get_fiches_search_favoris($categorie, $utilisateur);
                    $data['search']='true';
                    $data['titre'] ='Les fiches';

                    $this->load->view('templates/header');
                    $this->load->view('fiches/fiches_conseil_favoris',$data);
                    $this->load->view('templates/footer');
            } else {
                    $this->fiches_favoris();
            }
        }
    }

    public function read(){

        if(!$this->session->userdata('connecte')){
            show_404();
        }

        $titre_fiche = $this->input->post('titre_fiche');
        $utilisateur = $this->session->userdata('idutilisateur');
        
        $this->form_validation->set_rules('titre_fiche', 'Titre fiche', 'required');

        if($this->form_validation->run() === FALSE){
            $this->fiches();
        } else {
            $data['avis'] = $this->Fiches_model->get_avis($titre_fiche);
            $data['maNote'] = $this->Fiches_model->get_ma_note($titre_fiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titre_fiche);
            $data['fiche_fav'] = $this->Fiches_model->get_favoris_titre($titre_fiche, $utilisateur);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titre_fiche);
            $data['titre'] ='Fiche conseil';

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
    }

    public function add_fiche() {

        if(!$this->session->userdata('connecte') ||$this->session->userdata('statut')!='admin'){
            show_404();
        }

        $titre_fiche = $this->input->post('titre');
        $categorie = $this->input->post('categ');
        
        $this->form_validation->set_rules('titre', 'Titre fiche', 'required');
        $this->form_validation->set_rules('categ', 'Catégorie', 'required');
        $this->form_validation->set_rules('fiche', 'Fiche', 'required');

        if($this->form_validation->run() === FALSE){
            $data['categoriesG']=$this->Categories_model->getCategorieG();

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_add',$data);
            $this->load->view('templates/footer');
        }
        else {
            //Ajouter le code afin d'ajouter une nouvelle fiche conseil    
            $data['categoriesG']=$this->Categories_model->getCategorieG();

            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_add',$data);
            $this->load->view('templates/footer');
        }
    }
}