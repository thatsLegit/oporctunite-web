<?php

    class Suivis_model extends CI_Model {

        public function getVeterinaire_suivi($nom_elevage){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur'); 
            $this->db->join('veterinaire', 'veterinaire.numVeterinaire = suivre.numVeterinaire');
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur'); 
            $this->db->where('elevage.nomElevage', $nom_elevage);
            $this->db->where('etat', 'Accepté');
            return $this->db->get()->result_array();
        }

        public function getElevages_suivis($nom_veterinaire){
            $this->db->select('*');
            $this->db->from('suivre');
            $this->db->where('veterinaire.nomCabinet', $nom_veterinaire);
            $this->db->join('veterinaire', 'veterinaire.numVeterinaire = suivre.numVeterinaire');
            $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur'); 
            $this->db->where('etat', 'Accepté');
            return $this->db->get()->result_array();
        }

        public function get_demande_suivi($nom, $type){
            if($type == 'elevage'){
                $this->db->select('veterinaire.nomCabinet, utilisateur.codePostal, suivre.numVeterinaire');
                $this->db->from('suivre');
                $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur'); 
                $this->db->join('veterinaire', 'veterinaire.numVeterinaire = suivre.numVeterinaire'); 
                $this->db->join('utilisateur', 'veterinaire.idutilisateur = utilisateur.idutilisateur'); 
                $this->db->where('elevage.nomElevage', $nom);
                $this->db->where('etat', 'En cours');
                return $this->db->get()->result_array();
            } else {
                $this->db->select('elevage.nomElevage, utilisateur.codePostal, suivre.numEleveur');
                $this->db->from('suivre');
                $this->db->join('veterinaire', 'veterinaire.numVeterinaire = suivre.numVeterinaire'); 
                $this->db->join('elevage', 'elevage.numEleveur = suivre.numEleveur'); 
                $this->db->join('utilisateur', 'elevage.idutilisateur = utilisateur.idutilisateur'); 
                $this->db->where('veterinaire.nomCabinet', $nom);
                $this->db->where('etat', 'En cours');
                return $this->db->get()->result_array();
            }
        }

        public function ajouter_suivi($numElevage, $numVeterinaire){
            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire' => $numVeterinaire,
                'etat' => "En Cours"
            );      
            $this->db->insert('suivre', $data);
        }

        public function supprimer_suivi($numElevage, $numVeterinaire){
            $this->db->where('numEleveur', $numElevage);
            $this->db->where('numVeterinaire', $numVeterinaire);
            $this->db->delete('suivre');  
        } 

        public function accepter_suivi($numElevage, $numVeterinaire){
            $data = array(
                'numEleveur' => $numElevage,
                'numVeterinaire'  => $numVeterinaire,
                'etat'  => 'Accepté'
            );
            $this->db->replace('suivre', $data);
        }

        //Utilisé dans la page de profil du véto
        public function nb_elevages_suivis($numVeterinaire){
            $this->db->select("COUNT(numVeterinaire) AS nbSuivis");
            $this->db->from("suivre");
            $this->db->where("numVeterinaire", $numVeterinaire);
            return $this->db->get()->row(0);
        }

    }
?>