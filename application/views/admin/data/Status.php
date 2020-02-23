        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Order Status</h3>
              </div>

            <form action="<?php echo site_url('c_main/search_status');?>" method="GET">
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                      <input name="search" id="search" type="text" class="form-control" placeholder="Masukkan No. Ijazah..."">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>                    
                    </span>
                  </div>
                </div>
              </div>
            </form>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pemesanan <small>Legalisir</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Data pemesanan legalisir
                    </p>
                    <table style="font-size: 10px" id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th width="30px">Tanggal Pemesanan</th>
                          <th>No. Identitas</th>
                          <th>No. Ijazah</th>
                          <th width="30px">Harga</th>
                          <th>Alamat lengkap</th>
                          <th>Kecamatan</th>
                          <th>Kota</th>
                          <th>Provinsi</th>
                          <th width="20px">Kode POS</th>
                          <th>File Upload</th>
                          <th>File Pembayaran</th>
                          <th>Status Dokumen</th>
                          <th>Keterangan</th>
                          <th></th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php
                          $no = 1;
                          foreach($legalisir as $l){
                            $see = $l->id_pelayanan;?>
                        <tr>
                          <td><?php echo $l->id_pelayanan ?></td>
                          <td><?php echo $l->tanggal_pelayanan ?></td>
                          <td><?php echo $l->no_identitas ?></td>
                          <td><?php echo $l->no_ijazah ?></td>
                          <td><?php 
                                if (($l->harga)==null) {
                                  echo "<font size='2px' color=red>Tunggu konfirmasi admin";
                                } else if (isset($l->harga)){
                                echo 'Rp'.$l->harga;  
                                }?>         
                          </td>
                          <td><?php echo $l->alamat_lengkap ?></td>
                          <td><?php echo $l->kecamatan ?></td>
                          <td><?php echo $l->kota ?></td>
                          <td><?php echo $l->provinsi ?></td>
                          <td><?php echo $l->kodePOS ?></td>
                          <!-- FILE UPLOADS -->
                          <td>
                              <a href="<?php if (file_exists('uploads/'.$see.'.jpg')) {
                                                echo base_url('uploads/'.$see.'.jpg'); }
                                            else if (file_exists('uploads/'.$see.'.zip')) {
                                                echo base_url('uploads/'.$see.'.zip'); }
                                            else if (file_exists('uploads/'.$see.'.jpg')==null) {
                                                echo "File_Tidak_Ada"; }
                                            else if (file_exists('uploads/'.$see.'.zip')==null) {
                                                echo "File_Tidak_Ada"; }
                              ?>">  
    
                                        <?PHP
                                        if (file_exists('uploads/'.$see.'.jpg')) {
                                          echo "<br><button class='btn btn-success'><span class='glyphicon glyphicon-file'></button>";
                                        }
                                        if (file_exists('uploads/'.$see.'.zip')){
                                          echo "<br><button class='btn btn-success'><span class='glyphicon glyphicon-file'></button>";
                                        }
                                         ?>
                              </a>
                                        <?php
                                         if (file_exists('uploads/'.$see.'.jpg')==null) {
                                          if (file_exists('uploads/'.$see.'.zip')==null){
                                          echo "<br><button class='btn btn disabled'><span class='glyphicon glyphicon-file'></button>";
                                          }
                                        } ?>
                          </td>
                          <!-- PEMBAYARAN -->
                          <td>   
                              <a href="<?php if (file_exists('pay/'.$see.'.jpg')) {
                                                echo base_url('pay/'.$see.'.jpg'); }
                                            else if (file_exists('pay/'.$see.'.zip')) {
                                                echo base_url('pay/'.$see.'.zip'); }
                                            else if (file_exists('pay/'.$see.'.jpg')==null) {
                                                echo "File_Tidak_Ada"; }
                                            else if (file_exists('pay/'.$see.'.zip')==null) {
                                                echo "File_Tidak_Ada"; }
                              ?>">  
    
                                        <?PHP
                                        if (file_exists('pay/'.$see.'.jpg')) {
                                          echo "<br><button class='btn btn-success'><span class='glyphicon glyphicon-file'></button>";
                                        }
                                        if (file_exists('pay/'.$see.'.zip')){
                                          echo "<br><button class='btn btn-success'><span class='glyphicon glyphicon-file'></button>";
                                        }
                                         ?>
                              </a>
                                        <?php
                                         if (file_exists('pay/'.$see.'.jpg')==null) {
                                          if (file_exists('pay/'.$see.'.zip')==null){
                                          echo "<br><button class='btn btn disabled'><span class='glyphicon glyphicon-file'></button>";
                                          }
                                        } ?>
                          </td>
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
                          <td><?php echo $l->keterangan ?></td>
                          <td>
                             <button onclick='edit_status(<?php echo $l->id_pelayanan ?>)' class="btn btn-default" data-toggle="modal" data-target="#Modal"><span class="glyphicon glyphicon-edit"></span></button> 
                             <button class="btn btn-danger" onclick='delete_status(<?php echo $l->id_pelayanan ?>)' data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span></button>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- delete -->
              <div class="modal fade" id="myModal" role="dialog">
                <div style="width: 430px;" class="modal-dialog modal-sm">
                  <div  class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title"><center>Warning!! </center></h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url('c_delete/hapus_status/'. $l->id_pelayanan) ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
                        <input type="hidden" value="<?php echo $l->id_pelayanan ?>" id="id_pelayanan" name="id_pelayanan">
                      <center><img style="width: 45px" src="<?php echo base_url(); ?>assets/images/trash.png"><p>
                      <font style="font-family: monospace;"><h4> Are you sure want to delete this data ?</h3> </font>
                      <button type="submit" class="btn btn-danger">Delete</button>
                     <button style="width:60px" class="btn btn-default" data-dismiss="modal">No</button></center>
                    </div>
                  </div>
                </div>
              </form>
              </div>

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
                    <label class=" col-sm-2 control-label">NIM</label>
                      <div class="col-lg-10">
                        <input class="form-control" name="no_identitas" style="width:250px" id="no_identitas" value="<?php echo $l->no_identitas;?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">No Ijazah</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="no_ijazah" id="no_ijazah" style="width:250px" value="<?php echo $l->no_ijazah; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Nama Alumni</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="nama_alumni" id="nama_alumni" style="width:250px" value="<?php echo $l->nama_alumni; ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Prodi</label>
                      <div class="col-lg-10">
                        <select class="form-control" type="text" name="prodi" id="prodi" style="width:250px" value="<?php echo $l->prodi; ?>">
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
                    <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
                      <div class="col-lg-10">
                          <input type="hidden" value="<?php echo $l->id_pelayanan?>" id="id_pelayanan" name="id_pelayanan">
                          <input class="form-control" type="text" name="keterangan" style="width:250px" id="keterangan" value="<?php echo $l->keterangan ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Alamat Lengkap</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="alamat_lengkap" id="alamat_lengkap" style="width:250px" value="<?php echo $l->alamat_lengkap ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Kecamatan</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="kecamatan" id="kecamatan" style="width:250px" value="<?php echo $l->kecamatan ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Kota</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="kota" id="kota" style="width:250px" value="<?php echo $l->kota ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Provinsi</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="provinsi" id="provinsi" style="width:250px" value="<?php echo $l->provinsi ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Kode POS</label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="kodePOS" id="kodePOS" style="width:250px" value="<?php echo $l->kodePOS ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                      <div class="col-lg-10">
                        <input class="form-control" minlength="3" maxlength="7" type="int" name="harga" id="kodePOS" style="width:250px" value="<?php echo $l->harga ?>">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Status Dokumen</label>
                      <div class="col-lg-10">
                        <select class="form-control" type="text" name="status_dokumen" id="status_dokumen" style="width:250px" value="<?php echo $l->status_dokumen ?>">
                          <option value="Pemesanan sedang di proses">Pemesanan sedang di proses</option>
                          <option value="Pemesanan telah selesai">Pemesanan telah selesai</option>
                          <option value="Pemesanan sedang dalam proses pengiriman">Pemesanan sedang dalam proses pengiriman</option>
                          <option value="Pemesanan anda bermasalah, mohon hubungi admin untuk info lebih lanjut">Pemesanan anda bermasalah, mohon hubungi admin untuk info lebih lanjut</option>
                        </select>
                      </div>
                  </div>
                    <div class="modal-footer">
                          <button class="btn btn-success" type="submit">Edit&nbsp;</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                  </form>
                  </div>
                        </div>
                    </div>
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

        <!-- /page content -->

        <!-- footer content -->
        <footer style="margin-left: 0px">
          <div class="pull-right">
            Information System of ENTREPRENEURSHIP
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assets/vendors/pdfmake/build/vfs_fonts.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js')?>"></script>

<style type="text/css">
  .modal-header{
    margin: 5px;
    border: 1px solid black;
    background-color: #2A3F54;
  }
  .modal-content{
    font-weight: bold;
    backface-visibility: hidden;
  }
</style>

  </body>
</html>