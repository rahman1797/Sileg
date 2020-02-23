<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model("crud");
		$this->load->library(array('form_validation', 'Recaptcha'));

	}
	public function File_Tidak_Ada(){
		echo "<center style='padding-top:70px'><font color='red' size='40dp'>FILE TIDAK DITEMUKAN";
	}

	public function indexAdmin(){
		$data = array(
			'title' => 'Sistem Legalisir',
			'isi'   => 'admin/beranda'
		);
		$this->load->view('layout/head', $data);
		$this->load->view('admin/beranda', $data);
	}
/////////////////////////LIAT LIAT/////////////
public function laporanAlumni(){
	$data = array(
		'title' => 'Sistem Legalisir',
		'isi'   => 'admin/data/laporanAlumni'
	);
	$this->load->view('layout/wrapper', $data);
}
public function laporanPemesanan(){
	$data = array(
		'title' => 'Sistem Legalisir',
		'isi'   => 'admin/data/laporanPemesanan'
	);
	$this->load->view('layout/wrapper', $data);
}
public function laporanTransaksi(){
	$data = array(
		'title' => 'Sistem Legalisir',
		'isi'   => 'admin/data/laporanTransaksi'
	);
	$this->load->view('layout/wrapper', $data);
}


//USER VIEW START//
public function liatUser(){
	$data = array(
		'title' => 'Data User',
		'user' => $this->crud->tampil_data()->result(),
		'isi'   => 'admin/data/User'
	);
	$this->load->view('layout/head', $data);
	$this->load->view('admin/data/user', $data);
}

//USER VIEW END//
public function liatStatus(){
	$data = array(
		'title' => 'Data Status Dokumen',
		'legalisir' => $this->crud->tampil_status()->result(),
		'isi'   => 'admin/data/Status'
	);
	$this->load->view('layout/head', $data);
	$this->load->view('admin/data/Status', $data);
}
public function liatKupon(){
	$data = array(
		'title' => 'Data kupon',
		'kupon' => $this->crud->tampil_kupon()->result(),
		'isi'   => 'admin/data/Kupon', 'home/pemesanan'
	);
	$this->load->view('layout/wrapper', $data);
}
///////////////////////User/////////////////////////////////////////////////////////////
	public function manageAdmin(){
		$data = array(
			'title' => 'Sistem Legalisir'
			// 'isi'   => 'admin/Manage/manageUser'
		);
		$this->load->view('layout/head', $data);
		$this->load->view('admin/Manage/manageAdmin', $data);
	}
	public function manageUser(){
		$data = array(
			'title' => 'Sistem Legalisir'
			// 'isi'   => 'admin/Manage/manageUser'
		);
		$this->load->view('layout/head', $data);
		$this->load->view('admin/Manage/manageUser', $data);
	}
///////////////Status Dokumen/////////////////////////////////////////
public function serviceReport(){
	$data = array(
		'title' => 'Sistem legalisir',
		'isi'   => 'admin/Manage/serviceReport'
	);
	$this->load->view('layout/head', $data);
	$this->load->view('admin/Manage/serviceReport', $data);
}
////////////////////////////////////////////////////////////////////////////////////////////
///////////////Kupon////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
public function kupon(){
	$data = array(
		'title' => 'Sistem Legalisir',
		'isi'   => 'admin/Manage/kupon'
	);
	$this->load->view('layout/wrapper', $data);
}

function search_user(){
$this->load->model('crud');
$noreg = $this->input->GET('search');
$data = array(
		'title' => 'Data user',
		'isi' => 'admin/search/data_user');
		
		if (isset($noreg) and !empty($noreg)) {
			$data['user'] = $this->crud->search_user($noreg);
			if ($data['user']==false) {
					echo "<script>alert('Maaf, Data tidak ditemukan'); window.location='liatUser'</script>";
				}
		}
		
		else {
			redirect('c_main/liatUser');
		}
				$this->load->view('layout/wrapper', $data);
	}

function search_status(){
	$this->load->model('crud');
	$no_ijazah = $this->input->GET('search');
	$data = array(
			'title' => 'Hasil pencarian',
			'isi' => 'admin/search/data_status');
			if (isset($no_ijazah) and !empty($no_ijazah)) {
				$data['legalisir'] = $this->crud->search_status($no_ijazah);
				if ($data['legalisir']==false) {
					echo "<script>alert('Maaf, Data tidak ditemukan'); window.location='liatStatus'</script>";
				}
			}
			else {
				echo "<script>alert('Mohon isi terlebih dahulu kolom pencarian'); window.location='liatStatus'</script>";
			}
			$this->load->view('layout/head', $data);
			$this->load->view('admin/search/data_status', $data);
		}

	function search_status_user(){
	$this->load->model('crud');
	$no_ijazah = $this->input->GET("search_user");
	$data = array(
			'title' => 'Hasil pencarian',
			'isi' => 'admin/search/data_status_user');
			if (isset($no_ijazah) and !empty($no_ijazah)) {
				$data['legalisir'] = $this->crud->search_status($no_ijazah);
				if ($data['legalisir']==false) {
					echo "<script>alert('Maaf, Data tidak ditemukan'); window.location='cekstatus'</script>";
				}
			}
			else {
				echo "<script>alert('Mohon isi terlebih dahulu kolom pencarian'); window.location='cekstatus'</script>";
			}
			$this->load->view('admin/search/data_status_user', $data);
		}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
public function index() {
		$data = array(
			'title' => 'Login',
			'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
			'script_captcha' => $this->recaptcha->getScriptTag()
		);

		$this->load->view('tampilan_login', $data);
	}

	public function pendaftaran() {
		$this->load->view('home/formpendaftaran');
	}

	public function homeuser() {
		$data = array(
		'title' => 'Data kupon',
		'kupon' => $this->crud->tampil_kupon()->result(),
		'isi'   => 'home/pemesanan'
	);
		$this->load->view('home/index', $data);	
	}

	public function legalisir(){
		$data = array(
		'title' => 'Data kupon',
		'kupon' => $this->crud->tampil_kupon()->result(),
		'isi'   => 'home/pemesanan'
	);
		$this->load->view('home/pemesanan', $data);
	}

	public function konfirmasipembayaran(){
		$this->load->view('home/konfirm');
	}

	public function cekstatus(){
		$this->load->view('home/cek');
	}
/*
	public function test(){
		$data = array(
		'title' => 'Data kupon',
		'kupon' => $this->crud->tampil_kupon()->result(),
		);
		$this->load->view('admin/data/test', $data);
	} */
	// public function edit_chat($id_message){
	// 	$where = array('id_message' => $id_message);
	// 	$data = array(
	// 		'title' => 'Edit Data',
	// 		'kupon' => $this->crud->edit_data($where, 'chat')-> result(),
	// 		'isi' => 'admin/Data/edit_chat'
	// 	);
	// $this->load->view('layout/wrapper', $data);
	// }

	public function update_chat(){
	$id_message = $this->input->post('id_message');
	$name = $this->input->post('name');
	$subject = $this->input->post('subject');
	$message = $this->input->post('message');

	$chat = array(
		'name' => $name,
		'subject' => $subject,
		'message' => $message
	);
	$where = array(
		'id_message' => $id_message
	);
	$this->crud->update_data($where, $chat, 'chat');
	redirect('c_main/liatChat');
	}

	public function hapus_chat($id_message){
		$where = array(
			'id_message' => $id_message
		);
		$this->crud->hapus_data($where, 'chat');
		redirect('c_main/liatChat');
	}
	public function liatChat(){
		$data = array(
			'title' => 'Diskusi',
			'chat' => $this->crud->tampil_chat()->result(),
			'isi'   => 'admin/data/chat'
		);
		$this->load->view('layout/head', $data);
		$this->load->view('admin/data/chat', $data);
	}
//////////////////\\\\\\\\\\\\\\\\\\\\\\//////////////////////\\\\\\\\\\\\\\\\\\\\\\\////////////////////\\\\\\\\\\\\\
public function edit_konfirmasi($id_konfirmasi){
	$where = array('id_konfirmasi' => $id_konfirmasi);
	$data = array(
		'title' => 'Edit Data',
		'konfirmasi' => $this->crud->edit_data($where, 'konfirmasi')-> result(),
		'isi' => 'admin/EditData/edit_konfirmasi'
	);
$this->load->view('layout/wrapper', $data);
}

/*public function update_konfirmasi(){
$noPesan = $this->input->post('noPesan');
$noRekening = $this->input->post('noRekening');

$konfirmasi = array(
	'noPesan' => $noPesan,
	'noRekening' => $noRekening
);
$where = array(
	'id_konfirmasi' => $id_konfirmasi
);
$this->crud->update_data($where, $konfirmasi, 'konfirmasi');
redirect('c_main/liatKonfirmasi');
}
public function liatKonfirmasi(){
	$data = array(
		'title' => 'Konfirmasi',
		'konfirmasi' => $this->crud->tampil_data_konfirmasi()->result(),
		'isi'   => 'admin/data/konfirmasi'
	);
	$this->load->view('layout/wrapper', $data);
}*/
public function liatPendaftar(){
	$data = array(
		'title' => 'Data Pendaftar',
		'konfirmasi' => $this->crud->tampil_data_konfirmasi()->result(),
		'isi'   => 'admin/data/konfirmasi'
	);
	$this->load->view('layout/wrapper', $data);
}

}
