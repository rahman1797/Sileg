<?php
class Upload extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model("crud");
        }
        public function do_upload()
        {
                $tanggal_pelayanan = date("Y-m-d H:i:s");
                  $no_identitas = $this->input->post('no_identitas');
                  $no_ijazah = $this->input->post('no_ijazah');
                  $nama_alumni = $this->input->post('nama_alumni');
                  $prodi = $this->input->post('prodi');
                  $kupon = $this->input->post('kupon');
                  $keterangan = $this->input->post('keterangan');
                  $file = $this->input->post('userfile');

                        //$berkas = $this->input->post('userfile');
                  $alamat_lengkap = $this->input->post('alamat_lengkap');
                  $kecamatan = $this->input->post('kecamatan');
                  $kota = $this->input->post('kota');
                  $provinsi = $this->input->post('provinsi');
                  $kodePOS = $this->input->post('kodePOS');
                  $status_dokumen = $this->input->post('status_dokumen');



                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|zip|rar';
                $config['file_name']            = $no_ijazah.'-'. $tanggal_pelayanan;
                $config['max_size']             = 10000;
                $config['max_width']            = 2024;
                $config['max_height']           = 1768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('home/pemesanan');
                }
                else
                {
                        $legalisir = array(
                            'tanggal_pelayanan' => $tanggal_pelayanan,
                            'no_identitas' => $no_identitas,
                            'no_ijazah' => $no_ijazah,
                            'nama_alumni' => $nama_alumni,
                            'prodi' => $prodi,
                            'kupon' => $kupon,
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

                    /*      $file = $_FILES["userfile"];
                            $asal = $file["tmp_name"];
                              if(exif_imagetype($asal) != IMAGETYPE_JPEG) {
                                $nama = $id_pelayanan.".zip";
                                $upload_dir = "uploads/";

                              } else {
                                $nama = $id_pelayanan.".jpg";
                                $upload_dir = "uploads/";

                                if(move_uploaded_file($asal, $upload_dir.$nama)) {
                                  echo "sukses upload photo anda!" . "<br>" . "<br>";
                                } else {
                                  echo "gagal upload photo!";
                                }
                              } */
                          if(move_uploaded_file($asal, $upload_dir.$nama)) {
                                  echo "sukses upload photo anda!" . "<br>" . "<br>";
                                } else {
                                  echo "gagal upload photo!";
                                }
                          $file = $id_pelayanan.".jpg";
                          $this->crud->update_data(array('id_pelayanan' => $id_pelayanan), array('file' => $file), 'legalisir');
                          // echo json_encode($file);



                        $data = array('upload_data' => $this->upload->data());
                        redirect('c_main/konfirmasipembayaran');



                }
        }
}
?>
