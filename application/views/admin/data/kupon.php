<script src="<?php echo base_url('assets\js\jquery-3.2.1.min.js');?>"></script>
<script src="<?php echo base_url('assets\js\jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets\js\jquery.dataTables.js');?>"></script>


<tr><center><h2>Harga kupon</h2></tr></center>
  <button style="margin-left:30px; box-shadow: 10px 10px 10px #595959;" class="btn btn-default" data-toggle="modal" data-target="#Modaltambahkupon">Add Coupon</button>
<div class="table-responsive">
<p style="margin: 30px">
<!-- <table style="margin-left:30px">
  <th>Total Data : </th>
  <td><strong><?php
  $this->db->from('kupon');
  echo $this->db->count_all_results(); ?></td></strong>
</table> -->
  <table class="table table-striped table-bordered table-hover table-condensed" style="margin:30px auto; width: 80%; box-shadow: 10px 10px 10px #595959;">
  <thead>
    <tr>
      <th>#</center></th>
      <th>ID</th>
      <th>kupon</th>
      <th>Lembar</th>
      <th style="width: 20%">Harga(Rp)</th>
      <th style="width: 25%"></th>

    </tr>
  </thead>
  <?php
    $no = 1;
    foreach($kupon as $k){
    ?>
    <tbody>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $k->id_kupon ?></td>
      <td><?php echo $k->kupon ?></td>
      <td><?php echo $k->lembar ?></td>
      <td><?php echo $k->harga ?></td>

      <td><center>
              
            <button class="btn btn-default" data-toggle="modal" onclick='edit_kupon(<?php echo $k->id_kupon ?>)' data-target="#Modal">Edit</button>
            <button class="btn btn-danger" onclick='delete_kupon(<?php echo $k->id_kupon ?>)' data-toggle="modal" data-target="#Modaldeletekupon">Delete</button>
      </td>
    </tr>
    </tbody>
    <?php } 
    ?>
  </table>
</div>

<!--Delete-->
<div  aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modaldeletekupon" class="modal fade">
  <div style="width: 430px;" class="modal-dialog modal-sm">
    <div  class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Warning!! </center></h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('c_delete/hapus_kupon/'. $k->id_kupon) ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
          <input type="hidden" value="<?php echo $k->id_kupon ?>" id="id_kupon" name="id_kupon">        
        <center><img src="<?php echo base_url(); ?>assets/img/trash.png"><p>
        <font style="font-family: monospace;"><h4> Are you sure want to delete this data ?</h3> </font>
        <button type="submit" class="btn btn-danger">Delete</button>
       <button style="width:60px" class="btn btn-default" data-dismiss="modal">No</button></center>
       </form>
      </div>
    </div>
  </div>
</div>

<!--Tambah Data -->
<div  class="modal fade" id="Modaltambahkupon" role="dialog">
  <div style="width: 300px;" class="modal-dialog modal-sm">
    <div  class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><center>Add Coupon </center></h4>
      </div>
      <div class="modal-body">

          <form onsubmit="return validasi()" class="container" action="<?php echo base_url();?>c_add/tambah_kupon" method="post" >
            <div class="form-group">
              <label for="Kupon">Kupon<font color="red">*</font></label>
              <input style="width:200px" class="form-control" type="text"
                  placeholder="masukkan jumlah....." id="Kupon" name="kupon">
            </div>
            <div class="form-group">
              <label for="Lembar">Lembar<font color="red">*</font></label>
              <input style="width:200px" class="form-control" placeholder="masukkan jumlah....." type="text" id="Lembar" name="lembar">
            </div>
            <div class="form-group">
              <label for="harga">Harga<font color="red">*</font></label>
              <input style="width:200px" class="form-control" placeholder="masukkan harga....." id="harga" type="text" name="harga">
            </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button class="btn btn-default" data-dismiss="modal">Abort</button>
                <!-- Modal -->
                <script type="text/javascript">
                  function validasi() {
                    var kupon = document.getElementById("Kupon").value;
                    var lembar = document.getElementById("Lembar").value;
                    var harga = document.getElementById("harga").value;

                    if (kupon!= "" && lembar != "" && harga != "") {
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

<!--EDIT DATA-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal" class="modal fade">
      <div class="modal-dialog" style="width: 300px">
          <div class="modal-content">
              <div class="modal-header"><center>
                  <h4 class="modal-title">Edit Coupon</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url().'c_edit/update_kupon'; ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Kupon</label>
                            <div class="col-lg-10">
                              <input type="hidden" value="<?php echo $k->id_kupon ?>" id="id_kupon" name="id_kupon">
                              <input type="text" class="form-control" id="kupon" name="kupon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Lembar</label>
                            <div class="col-lg-10">
                              <input class="form-control" id="lembar" name="lembar"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Harga</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="harga" name="harga">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit"> Edit&nbsp;</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Abort</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
</center>

<script>
    var k_id;
    function set_id(id_kupon){
      k_id = id_kupon;
    }

    function edit_kupon(id_kupon) {

      $.ajax({
        url: "<?php echo base_url('c_edit/ambil_data_kupon/') ?>/" + id_kupon,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id_kupon"]').val(data.id_kupon);
          $('[name="kupon"]').val(data.kupon);
          $('[name="lembar"]').val(data.lembar);
          $('[name="harga"]').val(data.harga);

          $('#Modal').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
    function delete_kupon(id_kupon) {
     
      $.ajax({
        url: "<?php echo base_url('c_edit/ambil_data_kupon/') ?>/" + id_kupon,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id_kupon"]').val(data.id_kupon);

          $('#Modaldeletekupon').modal('show');
          $id_kupon = id_kupon;
          console.log($id_kupon);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
      $(document).ready(function());
  </script>
  <script>
    
  </script>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css">
