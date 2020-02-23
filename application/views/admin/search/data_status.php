
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form register <small>for alumni</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php echo anchor('c_main/liatStatus','<button class="btn btn-default">Kembali</button>');?>

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
<table class="table table-responsive" style="margin:30px auto;">
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
                
        <?php if (file_exists('uploads/'.$see.'.jpg')) { ?>
          <a href="<?php echo base_url('uploads/'.$see.'.jpg');?>">

<div class="card-container">
  <div class="card">
            <div class="side"><img style="width:100px; height: 60px;" src="<?php echo base_url('uploads/'.$see.'.jpg');?>"></div>
            <div class="side back" style="width:100px; height: 60px;"><?php echo ($see.".jpg");?></div>
          </div>
        </div>          
          </a>
         <?php } ?>
        <?php if (file_exists('uploads/'.$see.'.jpg')== null) {
          echo "<br><font size='2px' color='red'>File tidak ada";
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
            echo "<br><button class='btn btn disabled'>Download</button>";
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
      <td><?php 
      if (($l->harga)==null) {
        echo "<font color=red size=2px>Tunggu konfirmasi admin</font>";
      }
      else if(isset($l->harga)) {
        if (file_exists('pay/'.$see.'.jpg')==null) {
        echo "<font color=red size=2px>Silahkan melakukan pembayaran sebesar harga yang tertera</font>"; }
        else {
      echo $l->status_dokumen; }
      }
       ?>         
      </td>
      </th>
      </tr>
      <tr>
        <th>
          <td>
            <button onclick='edit_status(<?php echo $l->id_pelayanan ?>)' class="btn btn-default" data-toggle="modal" data-target="#Modal">Edit</button> 
            <button onclick='delete_status(<?php echo $l->id_pelayanan ?>)' class="btn btn-danger" data-toggle="modal" data-target="#Modaldeletestatus">Delete</button>
          </td>
        </th>
      </tr>
      <div style="background-color: black; width: 100%; height: auto; margin-top: 40px"><font color="white"><center>Keterangan anda:<p><?php echo $l->keterangan ?></center></font>
    <?php } ?>
  </table>

<!--EDIT DATA-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal" class="modal fade">
      <div class="modal-dialog" style="width: 400px">
          <div class="modal-content">
              <div class="modal-header"><center>
                  <h4 class="modal-title">Edit Pemesanan</h4>
              </div>
  <form class="form-horizontal" action="<?php echo base_url().'c_edit/update_status'; ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah"><center>
  <div class="modal-body">
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
        <div class="col-lg-10">
          <input class="form-control" style="width:250px" name="tanggal_pelayanan" id="tanggal" readonly="<?php echo $l->tanggal_pelayanan;?>">
        </div>
    </div>
    <div class="form-group">
      <label class=" col-sm-2 control-label">No Identitas</label>
        <div class="col-lg-10">
          <input class="form-control" name="no_identitas" style="width:250px" id="no_identitas" readonly="<?php echo $l->no_identitas;?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">No Ijazah</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="no_ijazah" id="no_ijazah" style="width:250px" readonly="<?php echo $l->no_ijazah; ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Nama Alumni</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="nama_alumni" id="nama_alumni" style="width:250px" readonly="<?php echo $l->nama_alumni; ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Prodi</label>
        <div class="col-lg-10">
          <select class="form-control" type="text" name="prodi" id="prodi" style="width:250px" readonly="<?php echo $l->prodi; ?>">
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
      </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Kupon</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="kupon" id="kupon" style="width:250px" readonly="<?php echo $l->kupon; ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
        <div class="col-lg-10">
            <input type="hidden" value="<?php echo $l->id_pelayanan?>" id="id_pelayanan" name="id_pelayanan">
            <input class="form-control" type="text" name="keterangan" style="width:250px" id="keterangan" readonly="<?php echo $l->keterangan ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Alamat Lengkap</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="alamat_lengkap" id="alamat_lengkap" style="width:250px" readonly="<?php echo $l->alamat_lengkap ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Kecamatan</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="kecamatan" id="kecamatan" style="width:250px" readonly="<?php echo $l->kecamatan ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Kota</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="kota" id="kota" style="width:250px" readonly="<?php echo $l->kota ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Provinsi</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="provinsi" id="provinsi" style="width:250px" readonly="<?php echo $l->provinsi ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Kode POS</label>
        <div class="col-lg-10">
          <input class="form-control" type="text" name="kodePOS" id="kodePOS" style="width:250px" readonly="<?php echo $l->kodePOS ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Harga</label>
        <div class="col-lg-10">
          <input class="form-control" type="int" name="harga" id="kodePOS" style="width:250px" value="<?php echo $l->harga ?>">
        </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 col-sm-2 control-label">Status Dokumen</label>
        <div class="col-lg-10">
          <select class="form-control" type="text" name="status_dokumen" id="status_dokumen" style="width:250px" value="<?php echo $l->status_dokumen ?>">
            <option value="Selesai">Selesai</option>
            <option value="Proses">Proses</option>
          </select>
        </div>
    </div>
      <div class="modal-footer">
            <button class="btn btn-success" type="submit">Edit&nbsp;</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Abort</button>
      </div>
    </form>
    </div>
          </div>
      </div>
  </div>

  <!-- DELETE -->
  <div class="modal fade" id="Modaldeletestatus" role="dialog">
  <div style="width: 430px;" class="modal-dialog modal-sm">
    <div  class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><center>Warning!! </center></h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('c_delete/hapus_status/'. $l->id_pelayanan) ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
          <input type="hidden" value="<?php echo $l->id_pelayanan ?>" id="id_pelayanan" name="id_pelayanan">
        <center><img src="<?php echo base_url(); ?>assets/img/trash.png"><p>
        <font style="font-family: monospace;"><h4> Are you sure want to delete this data ?</h3> </font>
        <button type="submit" class="btn btn-danger">Delete</button>
       <button style="width:60px" class="btn btn-default" data-dismiss="modal">No</button></center>
      </div>
    </div>
  </div>
</form>
</div>
  <script>
    var k_id;
    function set_id(id_pelayanan){
      k_id = id;
    }

    function edit_status(id_pelayanan) {
      
      $.ajax({
        url: "<?php echo base_url('c_edit/ambil_data_status/') ?>/" + id_pelayanan,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="tanggal_pelayanan"]').val(data.tanggal_pelayanan);
          $('[name="id_pelayanan"]').val(data.id_pelayanan);
          $('[name="no_identitas"]').val(data.no_identitas);
          $('[name="no_ijazah"]').val(data.no_ijazah);
          $('[name="nama_alumni"]').val(data.nama_alumni);
          $('[name="prodi"]').val(data.prodi);
          $('[name="kupon"]').val(data.kupon);
          $('[name="keterangan"]').val(data.keterangan);
          $('[name="alamat_lengkap"]').val(data.alamat_lengkap);
          $('[name="kecamatan"]').val(data.kecamatan);
          $('[name="kota"]').val(data.kota);
          $('[name="harga"]').val(data.harga);
          $('[name="provinsi"]').val(data.provinsi);
          $('[name="kodePOS"]').val(data.kodePOS);
          $('[name="status_dokumen"]').val(data.status_dokumen);
          
          $('#Modal').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
    function delete_status(id_pelayanan) {
     
      $.ajax({
        url: "<?php echo base_url('c_edit/ambil_data_status/') ?>/" + id_pelayanan,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id_pelayanan"]').val(data.id_pelayanan);

          $('#Modaldeletestatus').modal('show');
          $id_pelayanan = id_pelayanan;
          console.log($id_pelayanan);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
      $(document).ready(function() {
      });
  </script>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            legalized information systems by DEFAULT
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- validator -->
    <script src="<?php echo base_url('assets/vendors/validator/validator.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js') ?>"></script>
  
  </body>
</html>