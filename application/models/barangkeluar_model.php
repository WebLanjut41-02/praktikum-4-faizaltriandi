<?php 
class barangkeluar_model extends CI_model{
	
	public function getAllbarangkeluar(){
		return $this->db->get('barangkeluar')->result_array();
		// Memanggil tabel, lalu ke controller

	}
}
 ?>