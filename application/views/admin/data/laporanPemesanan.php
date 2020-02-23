<div class="container">
<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-6">
<table>
	<tr>
    <th><h5>Total Data Pemesanan : </h5></th>
    <td><?php
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
</table>
<table style="width:400px" class="table table-striped" width="100px">
	<tr>
		<th>Prodi Ilmu Komputer : </th>
		<td><?php
		$this->db->where('prodi','Ilmu Komputer');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Pendidikan Matematika : </th>
		<td><?php
		$this->db->where('prodi','Pendidikan Matematika');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Matematika : </th>
		<td><?php
		$this->db->where('prodi','Matematika');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Statistika : </th>
		<td><?php
		$this->db->where('prodi','Statistika');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Pendidikan Fisika : </th>
		<td><?php
		$this->db->where('prodi','Pendidikan Fisika');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Fisika : </th>
		<td><?php
		$this->db->where('prodi','Fisika');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Pendidikan Kimia : </th>
		<td><?php
		$this->db->where('prodi','Pendidikan Kimia');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Kimia : </th>
		<td><?php
		$this->db->where('prodi','Kimia');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Pendidikan Biologi : </th>
		<td><?php
		$this->db->where('prodi','Pendidikan Biologi');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Prodi Biologi : </th>
		<td><?php
		$this->db->where('prodi','Biologi');
    $this->db->from('legalisir');
    echo $this->db->count_all_results(); ?></td>
	</tr>
	<tr>
		<th>Tidak Terdefinisi : </th>
		<td><?php
		$this->db->where('prodi','_');
		$this->db->from('legalisir');
		echo $this->db->count_all_results(); ?></td>
	</tr>
</table>
</div>
</div>
</div>
