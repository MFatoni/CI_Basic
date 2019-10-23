<?php
class m_mahasiswa extends CI_Model
{
	public function getAllData($table){
		$data=$this->db->get($table)->result();
		return $data;
	}
	public function insertData($table)
	{
		$data=array(
			'nama'=>"fatoni1",
			'alamat'=>"curup",
			'usia'=>"23"
		);
		$cek=$this->db->insert($table,$data);
		if($cek){
			echo "berhasil";
		} else {
			echo "gagal";
		}
	}

	public function insertDataModel($table,$data){
		$cek=$this->db->insert($table,$data);
		if($cek){
			echo "berhasil";
		} else {
			echo "gagal";
		}
	}
	public function deleteDataModel($id,$table){
		$kondisi = array(
			"id" => $id
		);
		$this->db->delete($table,$kondisi);
		redirect('mahasiswa/getAllData');
	}

	public function updateSave($table,$data,$id){
		$this->db->update($table,$data,$id);
		redirect('mahasiswa/getAllData');
	}
}
?>