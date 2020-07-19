<?php
class model_arsitek extends CI_model {
	public function tampil_data(){
		return $this->db->get('data_arsitek');
	}

	public function find($id)
	{

		$result = $this->db->where('id_design', $id)
						  -> limit(1)
						  ->get('data_arsitek');
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return array();
			}
	}

public function detail_arsitek($id_design)
{
	$result = $this->db->where('id_design', $id_design)->get('data_arsitek');
	if($result->num_rows() > 0){
		return $result->result();
	}else {
		return false;
	}

}
	
}