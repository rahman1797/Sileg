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
    <link href="<?php echo base_url('assets/css/bootstrap.css')?>" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet" />
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
                <a class="media-left" href="http://fmipa.unj.ac.id/">

                    <img src="<?php echo base_url();?>assets/img/fmipa.png" />
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
                            <li><a href="<?php echo base_url();?>c_main/homeuser">Home</a></li>
                            <li><a href="<?php echo base_url();?>c_main/legalisir">Legalisir</a></li>
                            <li><a href="<?php echo base_url();?>c_main/konfirmasipembayaran">Konfirmasi Pembayaran</a></li>
                            <li><a class="menu-top-active" href="<?php echo base_url();?>c_main/cekstatus">Cek Status</a></li>
                            <li><a href="<?php echo base_url();?>login/logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<center><p><h2><i>History</i> status pemesanan anda</h2></p></center>
<p>
<div class="table-responsive">
    <?php
    foreach($legalisir as $l){
      $see = $l->id_pelayanan;
    ?>
<style type="text/css">
  tr {
    width: 200px;
  }
</style>    
<table class="table table-responsive" style="margin:30px auto; width: 95%">
    <tr>
      <th>Tanggal Pemesanan
        <td><?php echo $l->tanggal_pelayanan ?></td>
      </th>
    </tr>
    </tr>
      <th>ID Pemesanan
        <td><font color="red" size="4px"> <?php echo $l->id_pelayanan ?></td></font>
      </th>
    </tr> 
    <tr> 
      <th>No. Identitas
         <td><?php echo $l->no_identitas ?></td>
      </th>
    </tr>
    <tr>  
      <th>No. Ijazah
        <td><?php echo $l->no_ijazah ?></td>
      </th>
    </tr>
    <tr>
      <th>Nama Alumni
        <td><?php echo $l->nama_alumni ?></td>
      </th>
    </tr>
    <tr>
      <th>Prodi
        <td><?php echo $l->prodi ?></td>
      </th>
    </tr>
    <tr>
      <th>File Scan (Gambar)
        <td id="jpg">        
        <?php if (file_exists('uploads/'.$see.'.jpg')) ?>
          <a href="<?php echo base_url('uploads/'.$see.'.jpg');?>"><img style="width:100px" src="<?php echo base_url('uploads/'.$see.'.jpg');?>">
          </a> 
        <?php if (file_exists('uploads/'.$see.'.jpg')== null) {
          echo "<font size='2px' color='red'>File tidak ada";
        }  ?>
      </td>
      </th>
    </tr>
<tr>
  <th>File Compress (ZIP)
    <td id="zip">
        <a href="<?php 
        if (file_exists('uploads/'.$see.'.zip')) {
         echo base_url('uploads/'.$see.'.zip');
         }
          else if (file_exists('uploads/'.$see.'.zip')==null) {
          echo "File_Tidak_Ada";
          }
         ?>"> 
       
        <?PHP
        if (file_exists('uploads/'.$see.'.zip')) {
          echo "<br><button class='btn btn-success'>Download</button>";
          } ?>

          </a> <?php
          if (file_exists('uploads/'.$see.'.zip')==null) {
            echo "<br><button class=btn btn-default disabled>Download</button>";
          } 
                      
          ?>
        </td>
  </th>
</tr>
    <tr>
      <th>File Pembayaran
<td id="jpg1">   
         <a href="<?php if (file_exists('pay/'.$see.'.jpg')) {
         echo base_url('pay/'.$see.'.jpg');
         }
         else if (file_exists('pay/'.$see.'.zip')) {
         echo base_url('pay/'.$see.'.zip');
         }
          else if (file_exists('pay/'.$see.'.jpg')==null) {
          echo "File_Tidak_Ada";
          }
          else if (file_exists('pay/'.$see.'.zip')==null) {
          echo "File_Tidak_Ada";
          }
         ?>">  
         
        <?PHP
        if (file_exists('pay/'.$see.'.jpg')) {
          echo "<br><button class='btn btn-success'>Download</button>";
        }
        if (file_exists('pay/'.$see.'.zip')){
          echo "<br><button class='btn btn-success'>Download</button>";
        }
         ?>
</a>
<?php
         if (file_exists('pay/'.$see.'.jpg')==null) {
          if (file_exists('pay/'.$see.'.zip')==null){
          echo "<br><button class='btn btn disabled'>Download</button>";
          }
        }
          ?>
      </td>
</th>
</tr>
    <tr>
      <th>Harga
        <td><?php 
      if (($l->harga)==null) {
        echo "<font size='2px' color=red>Tunggu konfirmasi admin";
      } else if (isset($l->harga)){

      echo 'Rp'.$l->harga;  }?>
      </td>
      </th>
    </tr>
    <tr>
      <th>Alamat 
        <td><?php echo $l->alamat_lengkap ?></td>
      </th>
    </tr>
    <tr>
      <th>Status Dokumen
      <td><strong><?php 
      if (($l->harga)==null) {
        echo "<font color=red size=2px>Tunggu konfirmasi admin</font>";
      }
      else if(isset($l->harga)) {
        if (file_exists('pay/'.$see.'.jpg')==null) {
        echo "<font color=red size=2px>Silahkan melakukan pembayaran sebesar harga yang tertera</font><p>kirim ke No Rekening : XXXXXXXXXXX"; }
        else {
      echo $l->status_dokumen; }
      }
       ?></strong>
      </td>
</th>
</tr>
<div style="background-color: black; width: 100%; height: auto; margin-top: 40px"><font color="white"><center>Keterangan anda:<p><?php echo $l->keterangan ?></center></font>
    <?php } ?>


  </table>

<div>
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

