<?php

class mahasiswa extends CI_Controller {
	/*
	public function __construct(){
		parent::__construct();
		$this->load->view()
	}
	*/
	public function test(){
		echo "Hello World";
	}
	public function getString(){
		echo "HW";
	}
	/*pengambilan parameter secara langsung
	public function getParameter($x){
		echo $x;
	}
	*/

	/*pemberian parameter default
	public function getParameter($x=''){
		echo $x;
	}*/
	public function getParameter($x='nilai default 1',$y='nilai default 2'){
		echo $x, "<br>";
		echo $y;
	}
	public function getViewMahasiswa($nama='nama kosong',$alamat='kosong'){
		$data['mahasiswa']= array (
			"nama"=>$nama,
			"alamat"=>$alamat
			);

		$this->load->view('mahasiswa_ws', $data);
	}
	public function getAllData(){
		/*
		// result() array object=$mahasiswa->nama
		//result_arrat() array=$mahasiswa['nama'];
		$data=$this->db->get('mahasiswa_tb')->result();
		//var_dump($data);#pengecekan tipe database

		foreach ($data as $key) {
		echo $key->nama;}
		*/
		$data['mahasiswa']=$this->db->get('mahasiswa_tb')->result();
		$this->load->view('mahasiswa_ws', $data);
		}
	public function getDataModel(){
		$data['mahasiswa']=$this->m_mahasiswa->getAllData('mahasiswa_tb');
		$this->load->view('mahasiswa_ws', $data);
	}
	public function insertData(){
		$data=array(
			'nama'=>"fatoni",
			'alamat'=>"curup",
			'usia'=>"23"
		);
		$this->db->insert('mahasiswa_tb',$data);
	}
	
	public function insertDataModel(){
		$this->m_mahasiswa->insertData('mahasiswa_tb');
	}
	
	public function insertDataPost(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$usia=$this->input->post('usia');
		$data=array(
			'nama'=>$nama,
			'alamat'=>$alamat,
			'usia'=>$usia
		);
		$this->m_mahasiswa->insertDataModel('mahasiswa_tb',$data);
	}

	public function index(){
		$this->load->view('v_input');
	} 

	public function deleteData($id)
	{
		$this->m_mahasiswa->deleteDataModel($id,'mahasiswa_tb');
	}

	public function editData($id){
		$kondisi=[
		'id' => $id
		];
		$data['mahasiswa']=$this->db->get_where('mahasiswa_tb',$kondisi)->row();
	
		$this->load->view('editData',$data);
	}
	public function updateSave($id){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$usia=$this->input->post('usia');
		$data=array(
			'nama'=>$nama,
			'alamat'=>$alamat,
			'usia'=>$usia
		);
		$kondisi=[
		'id'=>$id
		];
		$this->m_mahasiswa->updateSave('mahasiswa_tb',$data,$kondisi);
	}
}
?>