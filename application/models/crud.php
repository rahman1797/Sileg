<?php
class Crud extends CI_Model
{

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function tampil_data(){
		$query = $this->db->get('users');
		return $query;
	}

	function tampil_data_konfirmasi(){
		$this->db->order_by('id_konfirmasi','ASC');
		$query = $this->db->get('konfirmasi');
		return $query;
	}

	function edit_data($where, $table){
		$query = $this->db->get_where($table , $where);
		return $query;
	}

	function update_data ($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
/*menampilkan tabel Status dokumen*/
	function tampil_status(){
		$this->db->order_by('tanggal_pelayanan','desc');
		$query = $this->db->get('legalisir');
		
		return $query;
	}
/*//////////Fungsi untuk menggatur tampilan
*/
/*menampilkan tabel kupon*/
	function tampil_kupon(){
		$this->db->order_by('kupon','ACS');
		$query = $this->db->get('kupon');
		return $query;
	}

	function tampil_kupon_byID($id_kupon)
	{
		return $this->db->get_where('kupon', array('id_kupon' => $id_kupon))->row();
	}

	function tampil_chat_byID($id_message)
	{
		return $this->db->get_where('chat', array('id_message' => $id_message))->row();
	}

	function tampil_user_byID($IDusers)
	{
		return $this->db->get_where('users', array('IDusers' => $IDusers))->row();
	}

	function tampil_status_byID($id_pelayanan)
	{
		return $this->db->get_where('legalisir', array('id_pelayanan' => $id_pelayanan))->row();
	}

	function tampil_status_byX($no_ijazah)
	{
		return $this->db->get_where('legalisir', array('no_ijazah' => $no_ijazah))->row();
	}

	function tampil_chat(){
		$query = $this->db->get('chat');
		return $query;
	}

	function search_user($NoIjazah){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('NoIjazah', $NoIjazah);
		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query -> result();
		}else {
			return $query -> result();
		}
	}

	function search_status($no_ijazah){
		$this->db->select('*');
		$this->db->order_by('tanggal_pelayanan','desc');
		$this->db->from('legalisir');
		$this->db->where('no_ijazah', $no_ijazah);
		$query = $this->db->get();
		if ($query->num_rows > 0) {
			return $query -> result();
		}else {
			return $query -> result();
		}
	}

	function hitung(){
		$query = $this->$db->query("SELECT * FROM legalisir");
		$total = $query->num_rows();
		return $total;
	}

	function upload($no_ijazah, $tanggal_pelayanan){
		$this->db->where('no_ijazah', $no_ijazah );
		$this->db->where('tanggal_pelayanan', $tanggal_pelayanan );
		$query  = $this->db->get('legalisir');
		return $query->row_array();
	}
//////////end////////////
}
