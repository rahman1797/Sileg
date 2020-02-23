<center>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($legalisir as $l){ ?>
	<form action="<?php echo base_url(). 'c_edit/update_status'; ?>" method="post">
		<table style="margin:20px auto;">
      <tr>
        <td>Tanggal Pelayanan</td>
        <td>
					<input type="hidden" name="id_pelayanan" value="<?php echo $l->id_pelayanan ?>">
					<input type="text" name="tanggal_pelayanan" value="<?php echo $l->tanggal_pelayanan ?>"></td>
      </tr>
      <tr>
        <tr>
          <td>No. Identitas</td>
          <td><input type="text" name="no_identitas" value="<?php echo $l->no_identitas ?>"></td>
        </tr>
			</tr>
			<tr>
				<td>No. Ijazah</td>
				<td><input type="text" name="no_ijazah" value="<?php echo $l->no_ijazah ?>"></td>
			</tr>
      <tr>
				<td>Nama Alumni</td>
				<td><input type="text" name="nama_alumni" value="<?php echo $l->nama_alumni ?>"></td>
			</tr>
      <tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $l->prodi ?>"></td>
			</tr>
			<tr>
				<td>kupon</td>
				<td><input type="text" name="kupon" value="<?php echo $l->kupon ?>"></td>
			</tr>
      <tr>
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value="<?php echo $l->keterangan ?>"></td>
			</tr>
			<tr>
				<td>Alamat Lengkap</td>
				<td><input type="text" name="alamat_lengkap" value="<?php echo $l->alamat_lengkap ?>"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><input type="text" name="kecamatan" value="<?php echo $l->kecamatan ?>"></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota" value="<?php echo $l->kota ?>"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="provinsi" value="<?php echo $l->provinsi ?>"></td>
			</tr>
			<tr>
				<td>kodePOS</td>
				<td><input type="text" name="kodePOS" value="<?php echo $l->kodePOS ?>"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $l->prodi ?>"></td>
			</tr>
      <tr>
				<td>Status Dokumen</td>
				<td><select name="status_dokumen" value="<?php echo $l->status_dokumen ?>">
					<option value="Selesai">Selesai</option>
					<option value="Proses">Proses</option>
					<option value="Batal">Batal</option>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><td><button type="submit" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Save</button>
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
