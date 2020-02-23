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
<body style="font-family: Trebuchet MS" >
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
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url();?>c_main/index">Log In</a></li>
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
                    <h4 class="page-head-line">DAFTAR </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                    <form onsubmit="return validasi()" action="<?php echo base_url();?>c_add/tambah_u" method="post">
                        <div class="form-group">
                          <label for="NoIjazah">No. Ijazah<font color="red">*</font></label>
                          <input style="width:500px" class="form-control" id="NoIjazah" type="text" name="NoIjazah">
                        </div>
                        <div class="form-group">
                          <label for="nama">Nama:<font color="red">*</font></label>
                          <input id="nama" type="text" style="width:500px" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="nama">E-mail:<font color="red">*</font></label>
                          <input id="email" type="text" style="width:500px" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label for="noreg">No. Registrasi:<font color="red">*</font></td>
                          <input type="text" id="noreg" name="noreg" style="width:500px" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="prodi">Prodi:<font color="red">*</font></label>
                          <select class="form-control" style="width:500px" id="prodi" name="prodi">
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
                        <div class="form-group">
                          <label for="telepon">Telepon:<font color="red">*</font></label>
                          <input id="telepon" type="text" class="form-control" style="width:500px" name="telepon">
                        </div>
                          <button type="submit" class="btn btn-default btn-lg">Daftar </button>
                        </label></div></form>
                        <div class="col-md-6">
                        <div class="alert alert-success">
                         <strong></strong>
                        <ul>
                          <li>
                          Isi form pendaftaran dengan lengkap.
                          </li>
                          <li>
                          Password akan dikirimkan melalui e-mail dalam kurun waktu maksimal 2 x 24 jam hari kerja.
                          </li>
                        </ul>
                        </div>
                      </div>
                        </div>
                        </div>  
                      </div>
                    </div>
                  </div>
                          <!-- Modal -->
                      <script type="text/javascript">
                        function validasi() {
                          var NoIjazah = document.getElementById("NoIjazah").value;
                          var nama = document.getElementById("nama").value;
                          var noreg = document.getElementById("noreg").value;
                          var em = document.getElementById("email").value;
                          var prodi = document.getElementById("prodi").value;
                          var telepon = document.getElementById("telepon").value;

                          if (NoIjazah!= "" && nama!="" && noreg!="" && em!="" && prodi!="" && telepon!="") {
                            alert('Data berhasil ditambahkan. Tunggu balasan Telepon/SMS dari admin');
                            return true;

                          }else{
                            alert('Data harus di isi semua');
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