<?php
class Valid extends CI_Model
{

function cek_kupon($kupon){
   $this->db->select('*');
   $this->db->where('kupon',$kupon);		
   $query =$this->db->get('kupon');
   if ($query->num_rows() > 0){
         return false; 
   }else{
         return true;
  }
}


function cek_user($NoIjazah){
   $this->db->select('*');
   $this->db->where('NoIjazah', $NoIjazah);		
   $query =$this->db->get('user');
   if ($query->num_rows() > 0){
         return false; 
   }else{
         return true;
  }
}
function cek_user_lagi($noreg){
   $this->db->select('*');
   $this->db->where('noreg', $noreg);   
   $query =$this->db->get('user');
   if ($query->num_rows() > 0){
         return false; 
   }else{
         return true;
  }
}	
//////////end////////////
} ?>