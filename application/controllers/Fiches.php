<?php 
class Fiches extends CI_Controller{

    //On gère les consultations des fiches là ?
    //gérer l'access control des fiches favoris

    public function __construct(){
        parent::__construct();
        $this->load->model('Utilisateurs_model');
        $this->load->model('Categories_model');
        $this->load->model('Fiches_model');
        $this->load->helper('url_helper');
    }
    
    public function fiches(){
        $this->load->helper('url_helper');
        $data['search']='false';
        $data['categoriesG']=$this->Categories_model->getCategorieG();
        $data['fiches']=$this->Fiches_model->getFiches();
        $this->load->view('templates/header');
        $this->load->view('fiches/fiches_conseil_search',$data);
        $this->load->view('templates/footer');
    }

    public function fiches_favoris(){
        $utilisateur = $this->session->userdata('idutilisateur');

        $this->load->helper('url_helper');
        $data['search']='false';
        $data['categoriesG']=$this->Categories_model->getCategorieG();
        $data['fiches']=$this->Fiches_model->getFiches_favoris($utilisateur);
        $this->load->view('templates/header');
        $this->load->view('fiches/fiches_conseil_search',$data);
        $this->load->view('templates/footer');
    }

    public function autocomplete(){
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

                        echo '<div class="col" id="fiche">
                                <input name="titre_fiche" type="text" value="'.$row->titreFiche.'" hidden>
                                <h5>'.$row->titreFiche.'</h5>
                                <p>'.$row->nomCategorieG.'</p>
                                <div id="fiche-bas">
                                    <button type="submit" id="fiche-button" value="'.$row->titreFiche.'">En savoir plus</button>
                                </div>
                            </div>
                            </form>';
                    endforeach;
                }
                else
                {
                    echo '<div class="col" id="fiche">
                            <h5> <em> Aucune fiche a été trouvé </em> <h5>
                            </div>';
                }
    }

    public function favoris(){
        $this->load->model('Fiches_model');

        $titreFiche = $this->input->post('titre_fiche');
        $utilisateur = $this->session->userdata('idutilisateur');

        $fav = $this->Fiches_model->get_favoris_titre($titreFiche, $utilisateur);
        
        if (empty($fav)){
            
            $this->Fiches_model->add_favoris($titreFiche, $utilisateur);
            
            $data['maNote'] = $this->Fiches_model->get_ma_note($titre_fiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['titre'] ='Fiche conseil';
            $this->load->view('templates/header',$data);
            $this->load->view('fiches/fiches_conseils',$data);
           
        }
        else{
            $data['maNote'] = $this->Fiches_model->get_ma_note($titre_fiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['titre'] ='Fiche conseil';
            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
       
    }

    public function noter(){
        $this->load->model('Fiches_model');

        $titreFiche = $this->input->post('titre_fiche');
        $ajouterNote = $this->input->post('ajouterNote');
        $commentaire = $this->input->post('commentaire');
        $utilisateur = $this->session->userdata('idutilisateur');

        $this->form_validation->set_rules('ajouterNote', 'Ajouter une note', 'required');
        $this->form_validation->set_rules('commentaire', 'Ajouter un commentaire', 'required');

        if($this->form_validation->run() === FALSE){
            $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['titre'] ='Fiche conseil';
            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
        else{
            $this->Fiches_model->add_note($titreFiche, $utilisateur, $ajouterNote, $commentaire);

            $data['maNote'] = $this->Fiches_model->get_ma_note($titreFiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titreFiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titreFiche);
            $data['titre'] ='Fiche conseil';
            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
    }

    public function dropFromFavorites($critères){
        //enlève une fiche des favories
    }

    public function search(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $categorie = $this->input->post('categ');
        
        $this->form_validation->set_rules('categ', 'Catégorie', 'required');

        if($this->form_validation->run() === FALSE){
            $this->fiches();
        }
        else{
            if($categorie != 1){
                    $data['categoriesG']=$this->Categories_model->getCategorieG();
                    $data['fiches'] = $this->Fiches_model->get_fiches_search($categorie);
                    $data['search']='true';
                    $data['titre'] ='Les fiches';
                    $this->load->view('templates/header');
                    $this->load->view('fiches/fiches_conseil_search',$data);
                    $this->load->view('templates/footer');
            }
            else{
                    $this->fiches();
            }
        }
    }

    public function read(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');

        $titre_fiche = $this->input->post('titre_fiche');
        $utilisateur = $this->session->userdata('idutilisateur');
        
        $this->form_validation->set_rules('titre_fiche', 'Titre fiche', 'required');

        if($this->form_validation->run() === FALSE){
            $this->fiches();
        }
        else{
            $data['maNote'] = $this->Fiches_model->get_ma_note($titre_fiche, $utilisateur);
            $data['moyenne'] = $this->Fiches_model->get_note_moyenne($titre_fiche);
            $data['fiche'] = $this->Fiches_model->get_fiches_nom($titre_fiche);
            $data['titre'] ='Fiche conseil';
            $this->load->view('templates/header');
            $this->load->view('fiches/fiches_conseils',$data);
            $this->load->view('templates/footer');
        }
    }

    

}