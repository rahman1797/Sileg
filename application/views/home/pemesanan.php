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
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SILEG</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url('assets/UserUI/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/UserUI/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/UserUI/css/style.css')?>" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
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
                <a style="padding-top: 20px; padding-bottom: 20px" class="media-left" href="http://fmipa.unj.ac.id/">

                    <img src="<?php echo base_url();?>assets/UserUI/img/fmipa.png" />
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
                            <li><a class="menu-top-active" href="<?php echo base_url();?>c_main/legalisir">Legalisir</a></li>
                            <li><a href="<?php echo base_url();?>c_main/konfirmasipembayaran">Konfirmasi Pembayaran</a></li>
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
                        <h1 class="page-head-line">Legalisir </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Pemesanan Legalisir
                        </div>
                        <div class="panel-body">
<style type="text/css">
  .form-control{
    width: 400px;
  }
</style>

<!--FORM-->
<form enctype="multipart/form-data" onsubmit="return validasi()" method="post" action="<?php echo base_url();?>c_add/tambah_dokumen_user">
  <div class="form-group">
    <label for="Identitas">No. Identitas<font color="red">*</font></label>
    <input type="text" class="form-control" name="no_identitas" id="identitas" placeholder="" />
  </div>
  <div class="form-group">
    <label for="ijazah">No. Ijazah<font color="red">*</font></label>
    <input type="text" class="form-control" name="no_ijazah" id="ijazah" placeholder="" />
  </div>
  <div class="form-group">
    <label for="alumni">Nama Alumni<font color="red">*</font></label>
    <input class="form-control" id="alumni" type="text" name="nama_alumni"></td>
  </div>
  <div class="form-group">
    <label for="prodi">Prodi<font color="red">*</font></label>
    <select id="prodi" name="prodi" class="form-control">
      <option value="_">_____pilih prodi_____</option>
      <option value="Pendidikan Matematika">Pendidikan Matematika</option>
      <option value="Matematika">Matematika</option>
      <option value="Ilmu Komputer">Ilmu Komputer</option>
      <option value="Statistika">Statistika</option>
      <option value="Pendidikan Fisika">Pendidikan Fisika</option>
      <option value="Fisika">Fisika</option>
      <option value="Pendidikan Kimia">Pendidikan Kimia</option>
      <option value="Kimia">Kimia</option>
      <option value="Pendidikan Biologi">Pendidikan Biologi</option>
      <option value="Biologi">Biologi</option>
    </select>
  </div>
  <!-- <div class="form-group">
    <label for="kupon">Kupon<font color="red">*</font></label>
    <select name="kupon" id="kupon" class="form-control">
    <option value="1">1 Kupon</option>
    <option value="2">2 Kupon</option>
    <option value="3">3 Kupon</option>
    <option value="4">4 Kupon</option>
    <option value="5">5 Kupon</option>
    <option value="6">6 Kupon</option>
    <option value="7">7 Kupon</option>
    <option value="8">8 Kupon</option>
    <option value="9">9 Kupon</option>
    <option value="10">10 Kupon</option>
    </select>
  </div> -->
  <div class="form-group">
    <label for="keterangan">Keterangan<font color="red">*</font></label>
    <input id="keterangan" type="text" class="form-control" name="keterangan">
  </div>
  <div class="form-group">
    <label for="File">Upload File<font color="red">*</font></label>
    <input type="file" id="File" name="userfile"/>
    <p class="help-block">*Disarankan Resolusi minimal 1920x1080/ min size 600Kb</p>
  </div>
<!-- IF RADIO BUTTON CHECKED -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='chk']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#alamat_lengkap").show();
                $("#kecamatan").show();
                $("#kota").show();
                $("#provinsi").show();
                $("#kodePOS").show();
            } else {
                $("#alamat_lengkap").hide();
                $("#kecamatan").hide();
                $("#kota").hide();
                $("#provinsi").hide();
                $("#kodePOS").hide();
            }
        });
    });
</script>
<span>Pengambilan dokumen :</span>
<label for="chkYes">
    <input type="radio" id="chkYes" name="chk" />
    Dikirim
</label>
<label for="chkNo">
    <input type="radio" id="chkNo" name="chk" checked="checked" />
    Ambil di tempat
</label>
<hr />
<!-- <div id="dvPassport" style="display: none">
    Passport Number:
    <input type="text" id="txtPassportNumber" />
</div>
 -->


<!-- /IF RADIO BUTTON CHECKED -->
  <div id="alamat_lengkap" style="display: none" class="form-group">
    <label for="alamat_lengkap">Alamat Lengkap<font color="red">*</font></label>
    <input id="alamat_lengkap" type="text" class="form-control" name="alamat_lengkap">
  </div>
  <div id="kecamatan" style="display: none" class="form-group">
    <label for="kecamatan">Kecamatan<font color="red">*</font></label>
    <input id="kecamatan" type="text" class="form-control" name="kecamatan">
  </div>
  <div id="kota" style="display: none" class="form-group">
    <label for="kota">Kota<font color="red">*</font></label>
    <input id="kota" type="text" class="form-control" name="kota">
  </div>
  <div id="provinsi" style="display: none" class="form-group">
    <label for="provinsi">Provinsi<font color="red">*</font></label>
    <input id="provinsi" type="text" class="form-control" name="provinsi">
  </div>
  <div id="kodePOS" style="display: none" class="form-group">
    <label for="kodePOS">Kode POS<font color="red">*</font></label>
    <input id="kodePOS" type="text" class="form-control" name="kodePOS">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  
  <script type="text/javascript">
    function validasi() {
      var iden = document.getElementById("identitas").value;
      var ijaz = document.getElementById("ijazah").value;
      var alum = document.getElementById("alumni").value;
      var prod = document.getElementById("prodi").value;
      var ket = document.getElementById("keterangan").value;
      var file = document.getElementById("File").value;
      // var al = document.getElementById("alamat_lengkap").value;
      // var kec = document.getElementById("kecamatan").value;
      // var kot = document.getElementById("kota").value;
      // var prov = document.getElementById("provinsi").value;
      // var pos = document.getElementById("kodePOS").value;

// && al!= "" &&
//     kec!= "" && kot!= "" && prov!= "" && pos!= ""

      if (iden!= "" && ijaz!= "" && alum!= "" && prod!= "" && ket!= "" && file!="") {
        alert('Terimakasih telah melakukan pemesanan. Silahkan cek status anda untuk mengetahui harga, ID pemesanan dan nomor rekening untuk di transfer');
        return true;
      }else{
        alert('Data harus di isi semua');
        return false;
      }
    }
</script>
</form>
<!--END-->
                            </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                <hr />
                    <div class="alert alert-success">
                         <strong> Panduan Pemesanan:</strong>
                        <ul>
                          <li>
                          1. Isi biodata lengkap seperti yang telah disediakan
                          </li>
                          <li>
                          2. Pada kolom keterangan, isi kan legalisir apa yang ingin dipesan. Contoh: "legalisir ijazah 1 lembar, legalisir transkip 3 lembar"
                          </li>
                          <li>
                          3. Upload file gambar hasil scan "berwarna". Jika ingin mengupload lebih dari 1 file, gunakan format zip/rar.
                          </li>
                          <li>
                          4. Pilih nomor kupon sesuai banyaknya lembar legalisir yang diinginkan. Contoh: jika total jumlah lembar legalisir adalah 4 lembar, maka kupon yang dipilih adalah kupon 2
                          </li>
                          <li>
                          5. Bayarlah sesuai harganya dan transfer ke "nomor rekening" lalu upload bukti pembayaran pada halaman "konfirmasi pembayaran". Jika bayaran yang dilakukan tidak sesuai ketentuan, maka pemesanan tidak akan diproses.
                          </li>
                          <li>
                          6. informasi lainnya silahkan tanyakan ke <a href="mailto:email@fmipa.unj.ac.id">email@fmipa.unj.ac.id</a>
                          </li>
                        </ul>
                    </div>
                    <div class="alert alert-info">
                        <strong>Harga Kupon :</strong>
                        <table style="margin:30px auto; width: 100%;">
                              <?php
                              foreach($kupon as $k){
                              ?>
                              <tr>
                                <td><center><?php echo $k->kupon. " kupon     =" ?></td>
                                <td><center><?php echo $k->lembar. " lembar     =" ?></td>
                                <td><center><?php echo "Rp ". $k->harga ?></td>
                               </tr>
                              <?php } ?>
                            </table>
                    </div>
                </div>
</div>
</div>
</div>
</div>
</div>
</div>
    </div>
   </body>
   </html>

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
