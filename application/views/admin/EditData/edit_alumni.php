<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'c_edit/update'; ?>" method="post">
		<table style="margin:20px auto;">
      <tr>
        <td>No. Ijazah</td>
        <td><input type="text" name="NoIjazah" value="<?php echo $u->NoIjazah ?>"></td>
      </tr>
      <tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
        <tr>
          <td>noreg</td>
          <td><input type="text" name="noreg" value="<?php echo $u->noreg ?>"></td>
        </tr>
				<tr>
          <td>Password</td>
          <td><input type="password" name="password" value="<?php echo $u->password ?>"></td>
        </tr>
			</tr>
			<tr>
				<td>prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $u->prodi ?>"></td>
			</tr>
      <tr>
				<td>lulus</td>
				<td><input type="text" name="lulus" value="<?php echo $u->lulus ?>"></td>
			</tr>
				<td>telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $u->telepon ?>"></td>
			</tr>
			<tr>
				<td>role</td>
				<td>
					<select name="role">
						<option value=""></option>
						<option value="Admin">Admin</option>
						<option value="Mahasiswa">Mahasiswa</option>
		  		</select>
				</td>
	  	</tr>
			<tr>
				<td></td>
				<td><button type="submit" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Edit </button>
				<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-sm">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Pemberitahuan</h4>
			        </div>
			        <div class="modal-body">
			          <p>Data berhasil di Ubah!!!</p>
			        </div>
			      </div>
			    </div>
			  </div>
			</tr>
		</table>
	</form>
<?php } ?>
