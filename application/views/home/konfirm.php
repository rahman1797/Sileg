<?php 
if (!isset($_SESSION['noreg']))
  {
    echo "
       <p><center>
         Anda Belum Login.<br>
          Klik Link Dibawah ini Untuk Login.<br>
            <a href=index>Disini</a>
              </center>
                </p>"; 
exit;
}
if($this->session->userdata('role') !== 'Mahasiswa'){
  echo "
       <p><center>
         Anda Belum Login.<br>
          Klik Link Dibawah ini Untuk Login.<br>
            <a href=index>Disini</a>
              </center>
                </p>"; 
exit;
}  
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SISTEM LEGALISIR</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('assets/UserUI/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/UserUI/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/UserUI/css/style.css')?>" rel="stylesheet" />
</head>
<body style="font-family: Trebuchet MS">
    <header>
        <div class="container">
            <div  class="row">
                <div  class="col-md-12">
                    <strong>Email: </strong>email@fmipa.unj.ac.id
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="media-left" href="http://fmipa.unj.ac.id/">
                    <img style="padding-top: 20px; padding-bottom: 20px" src="<?php echo base_url();?>assets/UserUI/img/fmipa.png" />
                </a>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <font color="white">No Registrasi anda <?php echo $this->session->userdata("noreg"); ?></font>
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url();?>c_main/homeuser">Home</a></li>
                            <li><a href="<?php echo base_url();?>c_main/legalisir">Legalisir</a></li>
                            <li><a class="menu-top-active" href="<?php echo base_url();?>c_main/konfirmasipembayaran">Konfirmasi Pembayaran</a></li>
                            <li><a href="<?php echo base_url();?>c_main/cekstatus">Cek Status</a></li>
                            <li><a href="<?php echo base_url();?>login/logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Konfirmasi Pembayaran </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Konfirmasi Pembayaran
                        </div>

<!--FORM-->                        
<form enctype="multipart/form-data" onsubmit="return validasi()" method="post" action="<?php echo base_url();?>c_add/Konfirmasi">
  <div class="panel-body">
  <div class="form-group">
    <label for="pesan">Masukkan No ID Pemesanan<font color="red">*</font></label>
    <p><font size="2px" color="red">No Id pemesanan dapat dilihat dari <a href="cekstatus">'cek status'</a></font></p>
    <input name="noPesan" type="text" class="form-control" id="pesan" placeholder="" />
  </div>
  <div class="form-group">
    <label for="trans">Upload Bukti Transfer<font color="red">*</font></label>
    <input type="file" id="trans" name="bayar" />
    <p>*JPG/ZIP only
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <script>
  function validasi(){
    var no = document.getElementById("pesan").value;
    var trans = document.getElementById("trans").value;

    if(no!="" && trans!=""){
      alert('Terimakasih telah melakukan pembayaran. Silahkan tunggu konfirmasi dari Administrasi')
      return true;
    }else {
      alert('Maaf, Data harus dimasukkan semua')
      return false;
    }
  }
  </script>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 SILEG | By : <a href="https://www.instagram.com/default_unj/" target="_blank">DEFAULT</a>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/UserUI/js/jquery-1.11.1.js')?>"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url('assets/UserUI/js/bootstrap.js')?>"></script>
</body>
</html>
