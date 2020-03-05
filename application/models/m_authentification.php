 <?php  
 class  m_authentification extends CI_Model  
 {  
  public function __construct(){
      $this->load->database();
  }
      

  function can_login($login, $password)  
      {  
           $this->db->where('login', $login);  
           $this->db->where('password', $password);  
           $query = $this->db->get('users');  
           //SELECT * FROM users WHERE login = '$login' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
 }  