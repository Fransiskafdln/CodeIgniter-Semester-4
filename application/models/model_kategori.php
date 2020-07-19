<?php 

 class model_kategori extends CI_model{
 	public function data_elektronik(){
 		$this->db->get_where("data_arsitek",array('kategori' => 'free design'));
 	}
 }