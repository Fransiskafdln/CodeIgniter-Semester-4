<?php 

class kategori extends CI_controller{
	public function freedesign()
	{
		$data['freedesign'] = $this->model_kategori->data_freedesign()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates' , $data);
		$this->load->view('templates/footer');
	}
}