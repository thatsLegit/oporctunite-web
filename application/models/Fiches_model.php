<?php

class Fiches_model extends CI_Model{

   public function __construct(){
       $this->load->database();
   }

   public function get_autocomplete($search_data)
   {
       $this->db->select('titreFiche, nomCategorieG');
       $this->db->like('titreFiche', $search_data);

       return $this->db->get('fiche', 10)->result();
   }

   public function get_ajaxCat($cat){
        $this->db->select('titreFiche, nomCategorieG');
        $this->db->where('nomCategorieG', $cat);
        return $this->db->get('fiche', 10)->result();
   }

   public function get_ajax_favoris($categorie, $utilisateur){
        $this->db->select('*');
        $this->db->from('fiche');
        $this->db->where('nomCategorieG', $categorie);
        $this->db->join('mettrefavoris', 'mettrefavoris.titreFiche = fiche.titreFiche');
        $this->db->where('mettrefavoris.idutilisateur', $utilisateur);
        return $this->db->get()->result();
    }

   public function get_favoris_titre($titreFiche, $utilisateur){
        $this->db->select('*');
        $this->db->from('mettrefavoris');
        $this->db->where('titreFiche', $titreFiche);
        $this->db->where('idutilisateur', $utilisateur);

        $query = $this->db->get();

        return $query->result_array();
   }

   public function getFiches_favoris($utilisateur){
        $this->db->select('*');
        $this->db->from('fiche');
        $this->db->join('mettrefavoris', 'mettrefavoris.titreFiche = fiche.titreFiche');
        $this->db->where('mettrefavoris.idutilisateur', $utilisateur);

        $query = $this->db->get();

        return $query->result_array();
    }

    public function add_favoris($titreFiche, $utilisateur){

        $data = array(
            'idutilisateur' => $utilisateur,
            'titreFiche' => $titreFiche
        );
    
        $this->db->insert('mettrefavoris', $data);
    }

    public function delete_favoris($titreFiche, $utilisateur){

        $this->db->where('idutilisateur', $utilisateur);
        $this->db->where('titreFiche', $titreFiche);
        $this->db->delete('mettrefavoris');
    
    }

    public function add_note($titreFiche, $utilisateur, $ajouterNote, $commentaire){

        $data = array(
            'idutilisateur' => $utilisateur,
            'titreFiche' => $titreFiche,
            'noteAvis' => $ajouterNote,
            'commentaireAvis' => $commentaire
        );
    
        $this->db->insert('donneravis', $data);
    }

   public function getFiches(){
       $sql ='select * from fiche';
       $query=$this->db->query($sql);
       return $query->result_array();
   }

   public function get_fiches_nom($titre_fiche){

       $this->db->select('*');
       $this->db->from('fiche');
       $this->db->where('titreFiche', $titre_fiche);
       $query = $this->db->get();

       return $query->result_array();
   }

   public function get_avis($titre_fiche){

    $this->db->select('*');
    $this->db->from('donneravis');
    $this->db->where('titreFiche', $titre_fiche);
    $this->db->join('utilisateur', 'donneravis.idutilisateur = utilisateur.idutilisateur');
    $query = $this->db->get();

    return $query->result_array();
}

   public function get_note_moyenne($titre_fiche){

       $this->db->select('commentaireAvis');
       $this->db->select_avg('noteAvis', 'noteMoyenne');
       $this->db->from('donneravis');
       $this->db->where('titreFiche', $titre_fiche);
       $this->db->group_by('commentaireAvis', $titre_fiche);

       $query = $this->db->get();

       return $query->result_array();
   }

   public function get_ma_note($titre_fiche, $utilisateur){

    $this->db->select('*');
    $this->db->from('donneravis');
    $this->db->where('titreFiche', $titre_fiche);
    $this->db->where('idutilisateur', $utilisateur);
    $query = $this->db->get();

    return $query->result_array();
}
       
}

   
?>