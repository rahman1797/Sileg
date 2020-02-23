<?php
error_reporting(0);
?>

<center><p><h2>Data <i>User</i> / Alumni</h2></p></center>
<p>
<center>
<form action="<?php echo site_url('c_main/search_user');?>" method = "post">
  <input class="form-control" style="width:180px" placeholder="Masukkan noreg..." type="text" name = "search" id="search" />
  <button class="btn btn-default" type="submit">Cari</button>
</form>
</center>
<button class="btn btn-default"><?php echo anchor('c_main/liatUser','Kembali');?></button>
<div class="table-responsive">
<table class="table" style="margin:30px auto;">
    <tr>
      <th><center>No</center></th>
      <th><center>No. Ijazah</th>
      <th><center>Nama</th>
      <th><center>No. Registrasi(Rp)</th>
      <th><center>Prodi</th>
      <th><center>Lulus</th>
      <th><center>Telepon</th>
      <th><center>Role</th>
      <th><center>Aksi</th>
      <th></th>
    </tr>
    <?php
    $no = 1;
    foreach($user as $u){
    ?>
    <tr>
      <td><center><?php echo $no++ ?></td>
      <td><center><?php echo $u->NoIjazah ?></td>
      <td><center><?php echo $u->nama ?></td>
      <td><center><?php echo $u->noreg ?></td>
      <td><center><?php echo $u->prodi ?></td>
      <td><center><?php echo $u->lulus ?></td>
      <td><center><?php echo $u->telepon ?></td>
      <td><center><?php echo $u->role ?></td>
      <td><center>
        <button onclick='edit_user(<?php echo $u->id ?>)' id="btn-edit" class="btn btn-default" data-toggle="modal" data-target="#ModalX">Edit</button>
        <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#myModal">Delete</button>
      </td>
    </tr>
    <?php } ?>
  </table>
<div>


<!-- Delete -->
<div  class="modal fade" id="Modaldeleteuser" role="dialog">
  <div style="width: 430px;" class="modal-dialog modal-sm">
    <div  class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Warning!! </center></h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('c_delete/hapus/'. $u->id) ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
          <input type="hidden" value="<?php echo $u->id ?>" id="id_pelayanan" name="id">
        <center><img src="<?php echo base_url(); ?>assets/img/trash.png"><p>
        <font style="font-family: monospace;"><h4> Are you sure want to delete this data ?</h3> </font>
        <button type="submit" class="btn btn-danger">Delete</button>
        <button style="width:60px" class="btn btn-default" data-dismiss="modal">No</button></center>
        </form>
      </div>
    </div>
  </div>
</div>

<!--EDIT DATA-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="ModalX" class="modal fade">
      <div class="modal-dialog" style="width: 450px">
          <div class="modal-content">
              <div class="modal-header"><center>
                  <h4 class="modal-title">Edit User</h4>
              </div>
    <form class="form-horizontal" action="<?php echo base_url(). 'c_edit/update'; ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
  <div class="modal-body"><center>
    <div class="form-group">
      <label >No Ijazah</label>
          <input style="width:300px" class="form-control" name="NoIjazah" id="NoIjazah" readonly="<?php echo $u->NoIjazah ?>"> 
    </div>
    <div class="form-group">
      <label>Email</label>
          <input style="width:300px" class="form-control" type="text" name="email" id="email" readonly="<?php echo $u->email ?>">
    </div>
    <div class="form-group">
      <label>Nama</label>
          <input style="width:300px" class="form-control" type="text" name="nama" id="nama" readonly="<?php echo $u->nama ?>">
    </div>
    <div class="form-group">
      <label>No Registrasi</label>
          <input style="width:300px" class="form-control" type="text" name="noreg" id="noreg" readonly="<?php echo $u->noreg ?>">
    </div>
    <div class="form-group">
      <label>Password</label>   
            <input type="hidden" value="<?php echo $u->id?>" id="id" name="id">
            <input style="width:300px" class="form-control" type="text" name="password" id="password" value="<?php echo $u->password ?>">
    </div>
    <div class="form-group">
      <label>Prodi</label>
          <select style="width:300px" class="form-control" type="text" name="prodi" id="prodi" readonly="<?php echo $u->prodi ?>">
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
      <label>Lulus</label>
      <input class="form-control" style="width:300px" type="text" name="lulus" id="lulus" readonly="<?php echo $u->lulus ?>">
    </div>
    <div class="form-group">
      <label>Telepon</label>
      <input class="form-control" type="text" style="width:300px" name="telepon" id="telepon" readonly="<?php echo $u->telepon ?>">
    </div>
    <div class="form-group">
      <label>role</label>
          <select style="width:300px" value="<?php echo $u->role ?>" class="form-control" name="role" id="role">
          <option value="Admin">Admin</option>
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="">Non Authorized</option>
          </select>
    </div>
      <div class="modal-footer">
            <button class="btn btn-success" type="submit"> Edit&nbsp;</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Abort</button>
      </div>
    </form>
    </div>
          </div>
      </div>
  </div>
  <script>
    var k_id;
    function set_id(id){
      k_id = id;
    }

    function edit_user(id) {

      $.ajax({
        url: "<?php echo base_url('c_edit/ambil_data_user/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);
          $('[name="password"]').val(data.password);
          $('[name="role"]').val(data.role);
          $('[name="nama"]').val(data.nama);
          $('[name="telepon"]').val(data.telepon);
          $('[name="noreg"]').val(data.noreg);
          $('[name="email"]').val(data.email);
      $('[name="prodi"]').val(data.prodi);
          $('[name="lulus"]').val(data.lulus);
          $('[name="NoIjazah"]').val(data.NoIjazah);
          
          $('#Modal').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }

    function delete_user(id){

      $.ajax({
        url: "<?php echo base_url('c_edit/ambil_data_user/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);

          $('#Modaldeleteuser').modal('show');
          $id = id;
          console.log($id);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
      $(document).ready(function() {
      });
  </script>
