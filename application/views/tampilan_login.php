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
<body style="width: auto; font-family: Trebuchet MS" >
    <header>
        <div style="width: 900px" class="container">
            <div  class="row">
                <div  class="col-md-12">
                    <strong >Email: </strong>email@fmipa.unj.ac.id
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
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">LOGIN </h4>
                </div>
            </div>
            <form method="POST" action="<?php echo base_url('login/aksi_login'); ?>">
            <div class="row">
                <div style="width:600px" class="col-md-6">
                    <br />
                        <div style="width: 320px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input placeholder="Nomor Registrasi.." type="text" name="noreg" id="noreg" class="form-control" />
                        </div>
                        <p>
                        <div style="width: 320px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input placeholder="Password.." type="password" name="password" id="password" class="form-control" />
                        </div>
                        <hr />
                        <?php echo $captcha // tampilkan recaptcha ?>
                        <hr />
                        <button style="box-shadow: 8px 8px 5px #888888;" class="btn btn-info" type="submit" ><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </button>&nbsp;
            </form>
                        <hr />
                        <label>Doesn't have an account? </label>
                        <br>
                        <a style="box-shadow: 8px 8px 5px #888888; margin-bottom: 20px" href="<?php echo base_url();?>c_main/pendaftaran" class="btn btn-info" ><span class="fa fa-pencil"></span> &nbsp; Register </a>&nbsp;
                        <br/>
                </div>
                <div >
               <div  style="width: 400px" class="col-md-6">
                   <div class="panel bk-clr-three">
                        <div  class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3" >
                                    <i class="fa fa-mortar-board fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right"  >
                                    <h3><strong>Login atau Register</strong></h3>
                                    <div>Login terlebih dahulu untuk masuk ke dalam sistem atau register jika belum mempunyai akun</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-right"><i class="fa fa-arrow-circle-down fa-3x"></i></span>
                            <div class="clearfix"></div>
                            </div>
                    </div>
                    <div class="panel bk-clr-three">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-edit fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h3><strong>Mengisi Form Pemesanan</strong></h3>
                                    <div>Mengisi form pemesanan legalisir sesuai dengan kebutuhan</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-right"><i class="fa fa-arrow-circle-down fa-3x"></i></span>
                            <div class="clearfix"></div>
                            </div>
                    </div>
                    <div class="panel bk-clr-three">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-credit-card fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h3><strong>Konfirmasi Pembayaran</strong></h3>
                                    <div>Cek harga pada halaman "Cek Pemesanan" kemudian lakukan pembayaran dan mengisi form konfirmasi pembayaran</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-right"><i class="fa fa-arrow-circle-down fa-3x"></i></span>
                            <div class="clearfix"></div>
                            </div>
                    </div>
                    <div class="panel bk-clr-three">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bell fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h3><strong>Cek Status</strong></h3>
                                    <div>Cek status progres legalisir anda di halaman "Cek Pemesanan"</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-right"><i class="fa fa-arrow-circle-down-o fa-3x"></i></span>
                            <div class="clearfix"></div>
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
  </form>
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
     <?php echo $script_captcha; // javascript recaptcha ?>
</body>
</html>
