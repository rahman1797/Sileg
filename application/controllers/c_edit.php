<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_edit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("crud");

	}
/////////////////////ALUMNI/////////////////////////////////
  public function edit($id){
		$where = array('id' => $id);
		$data = array(
			'title' => 'Edit Data',
			'user' => $this->crud->edit_data($where, 'user')-> result(),
			'isi' => 'admin/EditData/edit_alumni'
		);
$this->load->view('layout/wrapper', $data);
}
public function update(){
	$IDusers = $this->input->post('IDusers');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$phone = $this->input->post('phone');
	$role = $this->input->post('role');

	$data = array(
		'email' => $email,
		'password' => $password,
		'phone' => $phone,
		'role' => $role
	);
	$where = array(
		'IDusers' => $IDusers
	);
	$this->crud->update_data($where, $data, 'users');
	redirect('c_main/liatUser');
	}
//////////////////STATUS PEMESANAN/////////////////////////
public function edit_status($id_pelayanan){
  $where = array('id_pelayanan' => $id_pelayanan);
  $data = array(
    'title' => 'Edit Data',
    'legalisir' => $this->crud->edit_data($where, 'legalisir')-> result(),
    'isi' => 'admin/EditData/edit_status_dokumen'
  );
$this->load->view('layout/wrapper', $data);
}

public function update_status(){
  $id_pelayanan = $this->input->post('id_pelayanan');
  $tanggal_pelayanan = $this->input->post('tanggal_pelayanan');
  $no_identitas = $this->input->post('no_identitas');
  $no_ijazah = $this->input->post('no_ijazah');
  $nama_alumni = $this->input->post('nama_alumni');
  $prodi = $this->input->post('prodi');

  $keterangan = $this->input->post('keterangan');
  $alamat_lengkap = $this->input->post('alamat_lengkap');
  $kecamatan = $this->input->post('kecamatan');
  $kota = $this->input->post('kota');
  $provinsi = $this->input->post('provinsi');
  $kodePOS = $this->input->post('kodePOS');
  $harga = $this->input->post('harga');
  $status_dokumen = $this->input->post('status_dokumen');

  $legalisir = array(
    'tanggal_pelayanan' => $tanggal_pelayanan,
    'no_identitas' => $no_identitas,
    'no_ijazah' => $no_ijazah,
    'nama_alumni' => $nama_alumni,
    'prodi' => $prodi,
    'keterangan' => $keterangan,
    'alamat_lengkap' => $alamat_lengkap,
    'kecamatan' => $kecamatan,
    'kota' => $kota,
    'provinsi' => $provinsi,
    'kodePOS' => $kodePOS,
    'harga' => $harga,
    'status_dokumen' => $status_dokumen
  );
  $where = array(
    'id_pelayanan' => $id_pelayanan
  );
  $this->crud->update_data($where, $legalisir, 'legalisir');
  redirect('c_main/liatStatus');
  }
////////////////KUPON/////////////////
public function edit_kupon($id_kupon){
	$where = array('id_kupon' => $id_kupon);
	$data = array(
		'title' => 'Edit Data',
		'kupon' => $this->crud->edit_data($where, 'kupon')-> result(),
		'isi' => 'admin/data/kupon'
	);
$this->load->view('layout/wrapper', $data);
}

public function update_kupon(){
$id_kupon = $this->input->post('id_kupon');
$kupon = $this->input->post('kupon');
$lembar = $this->input->post('lembar');
$harga = $this->input->post('harga');

$kupon = array(
	'kupon' => $kupon,
	'lembar' => $lembar,
	'harga' => $harga
);
$where = array(
	'id_kupon' => $id_kupon
);
$this->crud->update_data($where, $kupon, 'kupon');
redirect('c_main/liatKupon');
}

public function ambil_data_kupon($id_kupon)
{
	$data = $this->crud->tampil_kupon_byID($id_kupon);
	echo json_encode($data);
}

public function ambil_data_user($IDusers)
{
	$data = $this->crud->tampil_user_byID($IDusers);
	echo json_encode($data);
}

public function ambil_data_status($id_pelayanan)
{
	$data = $this->crud->tampil_status_byID($id_pelayanan);
	echo json_encode($data);
}
public function ambil_data_chat($id_message)
{
	$data = $this->crud->tampil_chat_byID($id_message);
	echo json_encode($data);
}

///////////////////END//////////////////////
}
?>
