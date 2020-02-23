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
<body style="font-family: Trebuchet MS">
    <header>
        <div style="width: 900px" class="container">
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
                            <li><a class="menu-top-active" href="<?php echo base_url()?>c_main/homeuser">Home</a></li>
                            <li><a href="<?php echo base_url();?>c_main/legalisir">Legalisir</a></li>
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
                    <h4 class="page-head-line">Home</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        Sistem Legalisir Online FMIPA UNJ ini bertujuan untuk memberikan kemudahan bagi alumni Fakultas MIPA UNJ untuk melakukan legalisir.
                    </div>
                </div>
            </div>
            <div class="row">
           <!-- 1 -->
           <div class="col-lg-3 col-md-6">
               <div style="box-shadow: 8px 8px 5px #888888;" class="panel bk-clr-three">
                   <div class="panel-heading alert-success">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-mortar-board fa-5x"></i>
                           </div>
                           <div  class="col-xs-9 text-right">
                               <div class="huge"><strong>Login</div>
                               <div>Sebagai Alumni</div></strong>
                           </div>
                       </div>
                   </div>

                       <div class="panel-footer">
                           <span class="pull-left"></span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right fa-3x"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <!-- 2 -->
           <div class="col-lg-3 col-md-6">
               <div style="box-shadow: 8px 8px 5px #888888;" class="panel bk-clr-three">
                   <div class="panel-heading alert-success" >
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-edit fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">
                               <div class="huge">Mengisi Form</div>
                               <div>Pemesanan Legalisir</div>
                           </div>
                       </div>
                   </div>

                       <div class="panel-footer">
                           <span class="pull-left"></span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right fa-3x"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <!-- 3 -->
           <div class="col-lg-3 col-md-6" >
               <div style="box-shadow: 8px 8px 5px #888888;"  class="panel bk-clr-three">
                   <div class="panel-heading alert-success">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-credit-card fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">
                               <div class="huge">Mengisi Form</div>
                               <div>Konfirmasi Pembayaran</div>
                           </div>
                       </div>
                   </div>

                       <div class="panel-footer">

                           <span class="pull-right"><i class="fa fa-arrow-circle-right fa-3x"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <!-- 4 -->
           <div class="col-lg-3 col-md-6">
               <div class="panel bk-clr-three" style="box-shadow: 8px 8px 5px #888888;">
                   <div class="panel-heading alert-success">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-bell fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">
                               <div class="huge">Cek Status</div>
                               <div>Pemesanan Legalisir</div>
                           </div>
                       </div>
                   </div>

                       <div class="panel-footer">

                           <span class="pull-right"><i class="fa fa-check-square fa-3x"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>

                <div class="col-md-6">
                <hr />
                    <div style="box-shadow: 8px 8px 5px #888888;" class="alert alert-info">
                        <strong>Harga Kupon :</strong>
                        <div class="alert alert-info">
                          <table style="margin:20px auto; width: 100%;">
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
                <div class="col-md-6">
                    <hr />
                     <div class="Compose-Message">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Kritik dan Saran
                    </div>
                    <form onsubmit="return validasi()" action="<?php echo base_url()?>c_add/chat" method="post">
                    <div class="panel-body">
                        <label>Enter Recipient Name : </label>
                        <input type="text" name="name" id="nama" class="form-control" />
                        <label>Enter Subject :  </label>
                        <input type="text" name="subject" name="name" id="subjek" class="form-control" />
                        <label>Enter Message : </label>
                        <textarea rows="9" name="message" name="name" id="pesan" class="form-control"></textarea>
                        <hr>
                        <button type="submit" class="btn btn-success" style="box-shadow: 8px 8px 5px #888888;"><span class="glyphicon glyphicon-envelope"></span> Send Message </button>&nbsp;
                        <script type="text/javascript">
                            function validasi() {
                              var nam = document.getElementById("nama").value;
                              var sub = document.getElementById("subjek").value;
                              var pes = document.getElementById("pesan").value;
                              
                              if (nam!= "" && sub!= "" && pes!="") {
                                alert('Terimakasih atas masukannya');
                                return true;
                              }else{
                                alert('Data masukan harus diisi semua');
                                return false;
                              }
                            }
                        </script>
                    </div>
                  </script>
                      </form>
                    <div class="panel-footer text-muted">
                        <strong>Note : </strong>Please note that we track all messages so don't send any spams.
                    </div>
                </div>
                     </div>
                     </div>
                </div>
            </div>
 <hr />
 
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
