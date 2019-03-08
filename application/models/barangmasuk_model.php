<?php 

/**
 * 
 */
class barangmasuk_model extends CI_model{
	
	public function getAllbarangmasuk(){
		return $this->db->get('barangmasuk')->result_array();
		// Memanggil tabel, lalu ke controller

	}

	public function tambahDatabarangmasuk(){
		$data = [
			"barcode" => $this->input->post('barcode',true),
			"namaproduk" => $this->input->post('namaproduk',true),
			"kategori" => $this->input->post('kategori',true),
			"jumlah" => $this->input->post('jumlah',true),
			"namasuplier" => $this->input->post('namasuplier',true),
			"tanggal" => $this->input->post('tanggal',true)
		];

		$this->db->insert('barangmasuk', $data);
	}

	public function hapusDatabarangmasuk($barcode){
		$this->db->where('barcode',$barcode);
		$this->db->delete('barangmasuk');
	}

	public function barisbarangmasuk(){
		return $this->db->get('barangmasuk')->num_rows();
	}

	public function getAllbarangkeluar(){
		return $this->db->get('barangkeluar')->result_array();
		// Memanggil tabel, lalu ke controller

	}

	// public function pilihsuplier(){
	// 	 return  $this->db->get('barangmasuk')->result_array();
	
}

 ?>