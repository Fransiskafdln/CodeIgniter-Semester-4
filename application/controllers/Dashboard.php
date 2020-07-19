 <?php

class Dashboard extends CI_controller{

	public function index()

 	{
        $data['arsitek'] = $this->model_arsitek->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
		
	}
	public function konsultan($id)
	{
		$arsitek = $this->model_arsitek->find($id);

		$data = array(
        'id'      => $arsitek->id_design,
        'price'   => $arsitek->biaya_konsultasi,
        'name'    => $arsitek->nama_design,
        'qty'     => 1,
        'email'   => $email,
		);



		$this->cart->insert($data);
		redirect('dashboard');
			}

			public function detail_konsultan(){
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('konsultan');
		$this->load->view('templates/footer');
			}

		public function hapus_konsultasi()
		{
			$this->cart->destroy();
			redirect('dashboard/detail_konsultan');
		}

		public function hubungi_arsitek()
		{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('hubungi_arsitek');
		$this->load->view('templates/footer');
		}

		public function detail($id_design){
			$data['arsitek'] = $this->model_arsitek->detail_arsitek($id_design);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_arsitek', $data);
		$this->load->view('templates/footer');
		}
}