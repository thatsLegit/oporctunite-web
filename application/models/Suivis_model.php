<?php

    class Suivis_model extends CI_Model{

        public function getVeterinaire_suivi($name_elevage){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('elevage.nomElevage', $name_elevage);
            $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur' ); 
            $query = $this->db->get();
            return $query->result_array();
        }

        public function getElevages_suivis($id_veterinaire){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('veterinaire.idutilisateur', $id_veterinaire);
            $this->db->join('veterinaire', 'veterinaire.numVeterinaire = suivre.numVeterinaire' );
            $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur' );
            $this->db->join('utilisateur', 'utilisateur.idutilisateur = elevage.idutilisateur' ); 
            $query = $this->db->get();
            return $query->result_array();
        }

        public function get_suivi($numElevage, $numVeterinaire){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('numEleveur', $numElevage);
            $this->db->where('numVeterinaire', $numVeterinaire);
            $query = $this->db->get();
            return $query->result_array();
        }

        public function add_suivi($numElevage, $numVeterinaire){
            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire' => $numVeterinaire,
                'etat' => "En Cours"
            );      
            $this->db->insert('suivre', $data);
        }

        public function delete_suivi($numElevage, $numVeterinaire){
            $this->db->where('numEleveur', $numElevage);
            $this->db->where('numVeterinaire', $numVeterinaire);
            $this->db->delete('suivre');  
        }

        public function annuler_suivi($numElevage, $numVeterinaire){
            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire'  => $numVeterinaire,
                'etat'  => 'Annulé'
            );
            $this->db->replace('suivre', $data); 
        }

        public function update_refuser_suivi($numElevage, $numVeterinaire){
            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire'  => $numVeterinaire,
                'etat'  => 'Refusé'
            );
            $this->db->replace('suivre', $data);     
        }

        public function update_accepter_suivi($numElevage, $numVeterinaire){
            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire'  => $numVeterinaire,
                'etat'  => 'Accepté'
            );
            $this->db->replace('suivre', $data);
        }

        public function nb_elevages_suivis($numVeterinaire){
            $this->db->select("COUNT(numVeterinaire) AS nbSuivis");
            $this->db->from("suivre");
            $this->db->where("numVeterinaire", $numVeterinaire);
            $query = $this->db->get();
            return $query->result_array();
        }

    }
?>