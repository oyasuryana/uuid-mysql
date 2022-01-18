<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_jurnal extends CI_Model {


var $tabel_jurnal='jurnal_umum';

	public function __construct(){
	parent::__construct();
	}
	
	
	public function list_transaksi() {
	$this->db->order_by('tgl_transaksi','asc');		
	$sql_query=$this->db->get($this->tabel_jurnal);	
			if($sql_query->num_rows()>0){
				return $sql_query->result_array();
			}
	}	

	public function simpan_transaksi($data){
	
	$this->db->set('id_transaksi','UUID()',FALSE);
	// fungsi diatas untuk This function enables you to set values for inserts or updates.

	$this->db->insert($this->tabel_jurnal,$data);	
	}
}
