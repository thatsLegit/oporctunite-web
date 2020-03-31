<?php

class Categories_model extends CI_Model{

   public function __construct(){
       $this->load->database();
   }

   public function getCategorieG(){
       $sql ='select * from categorie_g';
       $query=$this->db->query($sql);
       return $query->result_array();
   }


       
}

   
?>