<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_delete extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("crud");

	}
/////////USER////////
  public function hapus($IDusers){
    $id = $this->input->post('IDusers');
    $where = array('IDusers' => $IDusers);
    $this->crud->hapus_data($where, 'users');
    redirect('c_main/liatUser');
  }
////////STATUS PEMESANAN////////
public function hapus_status($id_pelayanan){
	$id_pelayanan = $this->input->post('id_pelayanan');
	$where = array('id_pelayanan' => $id_pelayanan);
	$this->crud->hapus_data($where, 'legalisir');
	redirect('c_main/liatStatus');
}
//////////KUPON/////
public function hapus_kupon($id_kupon){
	$id_kupon = $this->input->post('id_kupon');
	$where = array('id_kupon' => $id_kupon);
	$this->crud->hapus_data($where, 'kupon');
	redirect('c_main/liatKupon');
}
////////KONFIRMASI//////
public function hapus_konfirmasi($id_konfirmasi){
	$where = array(
		'id_konfirmasi' => $id_konfirmasi
	);
	$this->crud->hapus_data($where, 'konfirmasi');
	redirect('c_main/liatKonfirmasi');
}

public function hapus_chat($id_message){
	$id_message = $this->input->post('id_message');
	$where = array('id_message' => $id_message);
	$this->crud->hapus_data($where, 'chat');
	redirect('c_main/liatChat');
}
///////END/////
}
