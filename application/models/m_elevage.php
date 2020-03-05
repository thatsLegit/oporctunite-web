 <?php  
 class  m_accueil_elevage extends CI_Model  
 {  
  public function __construct(){
      $this->load->database();
  }
      
  public function get_elevage(){
     $sql ='select nomElevage , adresse from elevage';
    $query=$this->db->query($sql);
    return $query->result();
    
    //$sql ='select * from employes';
    //$query=$this->db->query($sql);
    //return $query->result();
  }
 }  