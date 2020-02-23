<?php
error_reporting(0);
class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }


    function index(){
      $data = array(
        'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
        'script_captcha' => $this->recaptcha->getScriptTag()
      );
        $this->load->view('tampilan_login', $data);
    }

    function aksi_login(){
        $this->load->library('session');
        $noreg = $this->input->post('noreg');
        $password = $this->input->post('password');
        $where = array(
            'noreg' => $noreg,
            'password' => $password
            );
/*BARU*/        $this->session->set_userdata($data_session);

        $cek2 = $this->m_login->cek_login("user",$where);
        $cek = $this->m_login->cek_login("user",$where)->num_rows();

        $recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);

        if($cek > 0){
              foreach ($cek2->result() as $sess ) {
                  $sess_data['logged_in'] = 'Sudah Loggin';
                  $sess_data['id'] = $sess->id;
                  $sess_data['noreg'] = $sess->noreg;
                  $sess_data['role'] = $sess->role;
              }
              $this->session->set_userdata($sess_data);
              if($this->session->userdata('role')=='Admin')
              {
                  redirect(base_url("c_main/indexAdmin"));
              }
              if  ($this->session->userdata('role')=='Mahasiswa') {
                  redirect(base_url("c_main/homeuser"));
              }
              if ($this->session->userdata('role')=='') {
                echo " <script>
                         alert('Account anda belum di konfirmasi oleh pihak administrasi!');
                         window.location='index'
                        </script>";
              }
          }else{
              echo " <script>
                       alert('Gagal Masuk: Cek  username dan password anda!');
                       window.location='index'
                      </script>";
          }

    }

    function logout(){
        $this->load->library('session');
        unset($_SESSION["noreg"]);
        $this->session->sess_destroy();
        redirect('login');
    }
}
