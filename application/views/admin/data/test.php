<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan CodeIgniter | https://sugrahaku.com</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Data Orang</h1>
		<div class="form-group text-right">
			<a data-toggle="modal" data-target="#tambah-data" class="btn btn-primary">Tambah</a>
			<a class="btn btn-warning" href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
		</div>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>ID</th>
					<th>kupon</th>
					<th>lembar</th>
					<th>harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($kupon as $k){ ?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $k->id_kupon;?></td>
					<td><?php echo $k->kupon;?></td>
					<td><?php echo $k->lembar;?></td>
					<td><?php echo $k->harga;?></td>
					<td>
						<a 
                            href="javascript:;"
                            data-id="<?php echo $k->id_kupon ?>"
                            data-nama="<?php echo $k->kupon ?>"
                            data-alamat="<?php echo $k->lembar ?>"
                            data-pekerjaan="<?php echo $k->harga ?>"
                            data-toggle="modal" data-target="#Modal"
                            onclick='edit_kupon(<?php echo $k->id_kupon ?>)'
                            >
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Ubah</button>
                        </a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>	
	<!-- Modal Ubah -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Modal" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
	                <h4 class="modal-title">Ubah Data</h4>
	            </div>
	            <form class="form-horizontal" action="<?php echo base_url().'c_edit/update_kupon'; ?>" method="post" enctype="multipart/form-data" role="form" id="form_ubah">
		            <div class="modal-body">
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Kupon</label>
		                        <div class="col-lg-10">
		                        	<input type="hidden" value="<?php echo $k->id_kupon ?>" id="id_kupon" name="id_kupon">
		                            <input type="text" class="form-control" value="<?php echo $k->kupon;?>" id="kupon" name="kupon">
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Lembar</label>
		                        <div class="col-lg-10">
		                        	<input value="<?php echo $k->lembar;?>" class="form-control" id="lembar" name="lembar"></input>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <label class="col-lg-2 col-sm-2 control-label">Harga</label>
		                        <div class="col-lg-10">
		                            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $k->harga;?>">
		                        </div>
		                    </div>
		                </div>
		                <div class="modal-footer">
		                    <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
		                    <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
		                </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- END Modal Ubah -->
	<script>
		var k_id;
		function set_id(id){
			k_id = id;
		}

		function edit_kupon(id) {

			$.ajax({
				url: "<?php echo base_url('c_edit/ambil_data_kupon/') ?>/" + id,
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

	    $(document).ready(function() {

	        // // Untuk sunting
	        // $('#Modal').on('show.bs.modal', function (event) {
	        //     var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
	        //     var modal = $(this)
	        //     // Isi nilai pada field
	        //     modal.find('#id_kupon').attr("value",div.data('id_kupon'));
	        //     modal.find('#kupon').attr("value",div.data('kupon'));
	        //     modal.find('#lembar').html("value",div.data('lembar'));
	        //     modal.find('#harga').attr("value",div.data('harga'));
	        // });
	    });
	</script>
</body>
</html>