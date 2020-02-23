<div class="table-responsive">
	<p>
	  <table>
	    <th>Total Data : </th>
	    <td><?php
	    $this->db->from('konfirmasi');
	    echo $this->db->count_all_results(); ?></td>
	  </table>

	<table class="table" style="margin:30px auto; width: 90%; box-shadow: 10px 10px 5px;">
		<tr class="warning">
      <th><center>#</th>
      <th><center>No. Ijazah</th>
			<th><center>Bukti Pembayaran</th>
      <th><center>Aksi</th>
		</tr>
		<?php
		$no = 1;
		foreach($konfirmasi as $p){
			$see = $p->noPesan;
		?>
		<tr>
			<td><center><?php echo $no++ ?></td>
			<td><center><?php echo $p->noPesan ?></td>
			<td><center><img style="width:100px" src="<?php echo base_url('pay/'.$see.'.jpg');?>"> </td>

			<td><center>
           <?php echo anchor('c_delete/hapus_konfirmasi/'.$p->id_konfirmasi,'<button class="btn btn-danger" >Delete</button>'); ?>

			</td>
		</tr>
		<?php } ?>
	</table>
</div>
