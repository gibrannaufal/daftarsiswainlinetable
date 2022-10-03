<?php
class Mahasiswa_model extends ci_model
{
	public function get ()
	{
		$this->db->order_by('id', 'ASC');
		$mhs=$this->db->get('daftar');
    	return $mhs->result_array();
	}
	  function updateUser($id,$field,$value){
        
        // Update
        $data=array($field => $value);
        $this->db->where('id',$id);
        $this->db->update('daftar',$data);
    }

}
?>