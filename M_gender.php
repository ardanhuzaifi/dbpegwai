<?php
class M_gender extends CI_Model {
function initdata(){
	$data = array();
	$data["rgender_kode"]=$this->input->post("rgender_kode");
	$data["rgender_nama"]=$this->input->post("rgender_nama");
	return $data;
	}
public function insertdata($data)
	{
		$this->db->like('rgender_kode',$data["rgender_kode"]);
		$this->db->from('rgender');
		$c=$this->db->count_all_results();

		if(!$c){
			$rec=array(
				"rgender_kode"=>$data["rgender_kode"],
				"rgender_nama"=>$data["rgender_nama"]);
			//proses simpan
			$this->db->insert("rgender",$rec);
			$result=$this->db->affected_rows();
			$result=($result)? "Berhasil Disimpan!":"Gagal Disimpan!";
		} else {
			$result="Gagal Simpan!" .br();
			$result="key :" .$data["rgender_kode"]."Sudah Ada!";
		}
		return $result;
		}
	}
?>