<?php

    class Tests_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_all_tests($id){
            //select * 
            //from test t, elevage e
            //where t.numElevage = e.numElevage
            //and e.idutilisateur = $id;

            $this->db->select('*');
            $this->db->from('test');
            $this->db->where('elevage.idutilisateur', $id);
            $this->db->join('elevage', 'test.numElevage = elevage.numElevage');
        }
    }

?>