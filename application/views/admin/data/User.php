

<style type="text/css">
  .chart{
    min-height: 300px;
    width: 100%;
    min-width: 3%;
  }
</style>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Data akun sistem informasi kewirausahaan</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
              <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 25px">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users (All)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>Hide/Show
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      All users
                    </p>
                    <table style="font-size: 11px" id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>E-mail</th>
                          <th>Password</th>
                          <th>Telepon</th>
                          <th>Role</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($user as $u){
                          ?>
                        <tr>
                          <td><?php echo $u->IDusers ?></td>
                          <td><?php echo $u->email ?></td>
                          <td><?php 
                            if (($u->password) == null) {
                              echo "<font color='red'>Empty";
                            }
                            else {
                              echo $u->password;
                            }
                           ?></td>
                          <td><?php echo $u->phone ?></td>
                          <td><?php 
                            if (($u->role)==null) {
                              echo "<font color='red'>Empty";
                            } 
                            else {
                              echo $u->role; } ?></td>
                          <td><center>
                            <button onclick='edit_user(<?php echo $u->IDusers ?>)' id="btn-edit" class="btn btn-default" data-toggle="modal" data-target="#ModalEdit"><span class="glyphicon glyphicon-edit"></span></button>
                            <button class="btn btn-danger" onclick='delete_user(<?php echo $u->id ?>)' data-toggle="modal" data-target="#Modaldeleteuser"><span class="glyphicon glyphicon-trash"></span></button>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Delete -->
              <div  class="modal fade" id="Modaldeleteuser" role="dialog">
                <div style="width: 430px;" class="modal-dialog modal-sm">
                  <div  class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><center><p style="color: white">Warning!!</p></h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url('c_delete/hapus/'. $u->IDusers) ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
                        <input type="hidden" value="<?php echo $u->IDusers ?>" id="IDusers" name="IDusers">
                      <center><img style="width: 45px" src="<?php echo base_url(); ?>assets/images/trash.png"><p>
                      <font style="font-family: monospace;"><h4> Are you sure want to delete this data ?</h4> </font>
                      <button type="submit" class="btn btn-danger">Delete</button>
                      <button class="btn btn-default" data-dismiss="modal">Cancel</button></center>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <!--EDIT DATA-->
              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="ModalEdit" class="modal fade">
                <div class="modal-dialog" style="width: 450px">
                  <div class="modal-content"><center>
                    <div class="modal-header">
                      <h4 class="modal-title"><p style="color: white">Edit User</p></h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'c_edit/update'; ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body"><center>
                    <div class="form-group">
                      <label>Email</label>
                        <input class="form-control" type="text" name="email" id="email" value="<?php echo $u->email ?>">
                        <input class="form-control" type="hidden" name="IDusers" id="IDusers" value="<?php echo $u->IDusers ?>">
                    </div>
                    <div class="form-group">
                      <label>Password</label>   
                        <input class="form-control" minlength="4" type="text" name="password" id="password" value="<?php echo $u->password ?>">
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                        <input class="form-control" minlength="6" maxlength="15" type="text" name="phone" id="phone" value="<?php echo $u->phone ?>">
                    </div>
                    <div class="form-group">
                      <label>role</label>
                        <select value="<?php echo $u->role ?>" class="form-control" name="role" id="role">
                        <option value="Admin">Admin</option>
                        <option value="Buyer">Buyer</option>
                        <option value="Seller">Seller</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                          <button class="btn btn-success" type="submit"> Edit&nbsp;</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
              
                <script>
                  var k_id;
                  function set_id(IDusers){
                    k_id = id;
                  }

                  function edit_user(IDusers) {

                    $.ajax({
                      url: "<?php echo base_url('c_edit/ambil_data_user/') ?>/" + IDusers,
                      type: "GET",
                      dataType: "JSON",
                      success: function(data) {
                        $('[name="id"]').val(data.id);
                        $('[name="password"]').val(data.password);
                        $('[name="role"]').val(data.role);
                        $('[name="phone"]').val(data.phone);
                        $('[name="email"]').val(data.email);
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                        console.log('gagal mengambil data');
                      }
                    });
                  }

                  function delete_user(IDusers){

                    $.ajax({
                      url: "<?php echo base_url('c_edit/ambil_data_user/') ?>/" + IDusers,
                      type: "GET",
                      dataType: "JSON",
                      success: function(data) {
                        $('[name="IDusers"]').val(data.IDusers);
                        $('#Modaldeleteuser').modal('show');
                        $IDusers = IDusers;
                        console.log($IDusers);
                      },
                      error: function(jqXHR, textStatus, errorThrown) {
                        console.log('gagal mengambil data');
                      }
                    });
                  }
                    // $(document).ready(function() {
                    // });
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