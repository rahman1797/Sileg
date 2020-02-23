<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_add extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("crud");
    $this->load->model("valid");
	}

////////DOKUMEN////////
public function tambah_dokumen(){
  $tanggal_pelayanan = date("Y-m-d H:i:s");
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
    'status_dokumen' => $status_dokumen
  );
  $this->crud->input_data($legalisir, 'legalisir');
  redirect('c_main/liatStatus');
}
////////////Dokumen_user////////
public function tambah_dokumen_user(){
	$tanggal_pelayanan = date("Y-m-d H:i:s");
  $no_identitas = $this->input->post('no_identitas');
  $no_ijazah = $this->input->post('no_ijazah');
  $nama_alumni = $this->input->post('nama_alumni');
  $prodi = $this->input->post('prodi');
  
  $keterangan = $this->input->post('keterangan');
  $file = $this->input->post('userfile');

	//$berkas = $this->input->post('userfile');
  $alamat_lengkap = $this->input->post('alamat_lengkap');
  $kecamatan = $this->input->post('kecamatan');
  $kota = $this->input->post('kota');
  $provinsi = $this->input->post('provinsi');
  $kodePOS = $this->input->post('kodePOS');
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
    'status_dokumen' => $status_dokumen
  );
	$this->crud->input_data($legalisir, 'legalisir');

  $id_pelayanan = $this->crud->upload($no_ijazah, $tanggal_pelayanan)['id_pelayanan'];

  $file = $_FILES["userfile"];
    $asal = $file["tmp_name"];
      if(exif_imagetype($asal) != IMAGETYPE_JPEG) {
        $nama = $id_pelayanan.".zip";
        $upload_dir = "uploads/";

      } else {
        $nama = $id_pelayanan.".jpg";
        $upload_dir = "uploads/";
      }
      if(move_uploaded_file($asal, $upload_dir.$nama)) {
        echo "sukses upload photo anda!" . "<br>" . "<br>";
      } else {
        echo "gagal upload photo!";
      }
  $file = $id_pelayanan.".jpg";
  $this->crud->update_data(array('id_pelayanan' => $id_pelayanan), array('file' => $file), 'legalisir');
  // echo json_encode($file);
  redirect('c_main/konfirmasipembayaran');
}
/////KUPON//////
// public function tambah_kupon(){
//   $kupon = $this->input->post('kupon');
//   $lembar = $this->input->post('lembar');
//   $harga = $this->input->post('harga');


// $kupon_check = $this->valid->cek_kupon($kupon);

//   if($kupon_check == false){

//     echo '<script>alert("Data Kupon sudah ada");window.location="liatKupon"</script>';
//   } else {
//     echo '<script>alert("Data Kupon berhasil ditambah");window.location="liatKupon"</script>';
//     $kupon = array(
//       'kupon' => $kupon,
//       'lembar' => $lembar,
//       'harga' => $harga
//     );
//     $this->crud->input_data($kupon, 'kupon');
//     /*redirect('c_main/liatKupon');*/
//   }
// }
////////////CHAT///////
public function chat(){
  $tanggal_chat = date("Y-m-d H:i:s");
	$name = $this->input->post('name');
	$subject = $this->input->post('subject');
	$message = $this->input->post('message');

	$chat = array(
    'tanggal_chat' => $tanggal_chat,
		'name' => $name,
		'subject' => $subject,
		'message' => $message
	);
	$this->crud->input_data($chat, 'chat');
	redirect('c_main/homeuser');
}
//////////////KONFIRMASI//////
public function konfirmasi(){
	$noPesan = $this->input->post('noPesan');
	$file = $_FILES["bayar"];
	$asal = $file["tmp_name"];
		if(exif_imagetype($asal) != IMAGETYPE_JPEG) {
			$nama = $_POST["noPesan"].".zip";
      $upload_dir = "pay/";
		} else {
			$nama = $_POST["noPesan"].".jpg";
			$upload_dir = "pay/";
      }
	   if(move_uploaded_file($asal, $upload_dir.$nama)) {
				echo "sukses upload photo anda!" . "<br>" . "<br>";
				echo "<img src=upload/" . $nama . "></img>";
			} else {
				echo "gagal upload photo!";
			}
		
	$konfirmasi = array(
		'noPesan' => $noPesan,
	);
	$this->crud->input_data($konfirmasi, 'konfirmasi');
	redirect('c_main/cekstatus');
}

/////////USER////////
/*UTK ADMIN*/
public function tambah(){
  $NoIjazah = $this->input->post('NoIjazah');
  $nama = $this->input->post('nama');
  $noreg = $this->input->post('noreg');
  $password = $this->input->post('password');
  $prodi = $this->input->post('prodi');
  // $lulus = $this->input->post('lulus');
  $telepon = $this->input->post('telepon');
  $email = $this->input->post('email');
  $role = $this->input->post('role');

  $user_check = $this->valid->cek_user($NoIjazah);
  $user_check_lagi = $this->valid->cek_user_lagi($noreg);

  if($user_check == false || $user_check_lagi == false ){

    echo '<script>alert("Data akun atas nomor ijazah/ No Registrasi tersebut sudah ada");window.location="liatUser"</script>';
  }

  else{
    echo '<script>alert("Akun berhasil terdaftar");window.location="liatUser"</script>';
    $user = array(
      'NoIjazah' => $NoIjazah,
      'nama' => $nama,
      'noreg' => $noreg,
      'password' => $password,
      'prodi' => $prodi,
      // 'lulus' => $lulus,
      'email' => $email,
      'telepon' => $telepon,
      'role' => $role
    );
    $this->crud->input_data($user, 'user');
    /*redirect('c_main/liatUser');*/
  }
}
/*UTK USER*/
public function tambah_u(){
  $NoIjazah = $this->input->post('NoIjazah');
  $nama = $this->input->post('nama');
  $email = $this->input->post('email');
  $noreg = $this->input->post('noreg');
  $prodi = $this->input->post('prodi');
  // $lulus = $this->input->post('lulus');
  $telepon = $this->input->post('telepon');
  $role = $this->input->post('role');

  $user_check = $this->valid->cek_user($NoIjazah);

  if($user_check == false){

    echo '<script>alert("Data akun atas nomor ijazah tersebut sudah ada");window.location="pendaftaran"</script>';
  }
  else {
  echo '<script>alert("Akun berhasil terdaftar. Tunggu konfirmasi dari admin. username dan password akan dikirim lewat telepon/SMS");window.location="pendaftaran"</script>';
  $user = array(
    'NoIjazah' => $NoIjazah,
    'nama' => $nama,
    'email' => $email,
    'noreg' => $noreg,
    'prodi' => $prodi,
    // 'lulus' => $lulus,
    'telepon' => $telepon,
    'role' => $role
  );
  $this->crud->input_data($user, 'user');
  /*redirect('c_main/index');*/
  }
}

public function pendaftaran() {
    $this->load->view('home/formpendaftaran');
  }

public function liatUser(){
  $data = array(
    'title' => 'Data User',
    'user' => $this->crud->tampil_data()->result(),
    'isi'   => 'admin/data/User'
  );
  $this->load->view('layout/head', $data);
  $this->load->view('admin/data/user', $data);
}

public function liatKupon(){
  $data = array(
    'title' => 'Data kupon',
    'kupon' => $this->crud->tampil_kupon()->result(),
    'isi'   => 'admin/data/Kupon', 'home/pemesanan'
  );
  $this->load->view('layout/wrapper', $data);
}
///////END/////
}
