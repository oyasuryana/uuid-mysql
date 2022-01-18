<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jurnal extends CI_Controller {

	public function __construct(){
	parent::__construct();
		$this->load->model('M_jurnal','',TRUE);
	}

	

	public function index()
	{
		
		$this->form_validation->set_rules('nilai_transaksi','Nilai Nominal','required');
		$this->form_validation->set_rules('jenis_transaksi','Jenis Transaksi','required');
		
		if($this->form_validation->run()==TRUE){
			$data=array(
			'tgl_transaksi'=>$this->input->post('tgl_transaksi'),
			'ket_transaksi'=>$this->input->post('jenis_transaksi'),
			'jumlah_transaksi'=>$this->input->post('nilai_transaksi'),
			'saldo_normal'=>$this->input->post('saldo_normal')
			);	
			$this->M_jurnal->simpan_transaksi($data);
			redirect(site_url(),'refresh');
		}
		
		
		
		$data['list_transaksi']=$this->M_jurnal->list_transaksi();
		$this->load->view('v_jurnal',$data);	
	}
	
	

	

}
?>
