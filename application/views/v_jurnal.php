<!DOCTYPE html>
<html lang="en">
  <head>
<title>Contoh Menu &amp; Penggunaan Fungsi UUID di MySQL 5.x</title>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>navbar.css" rel="stylesheet">
    <script src="<?php echo base_url();?>dist/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/respond.min.js"></script>
  </head>
  <body>
	  <br/>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
			<h4><span class="glyphicon glyphicon-fire"></span>&nbsp;Contoh Penggunaan Fungsi UUID di MySQL Pada CodeIgniter</h4>
			</div>
		</div>
	</nav>


<!-- panel 1-->
<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-pencil"></span>&nbsp;<b>Input Transaksi</b></div>
		<div class="panel-body">
		<p>Silahkan input data transaksi yang akan dibuat jurnalnya pada form dibawah ini !</p>
		
		<?php
		echo $this->session->userdata('pesan_sukses_simpan');
		?>
		
		<form role="form" class="form-horizonlal" method="POST" action="<?php echo base_url();?>jurnal">
			
			<div class="form-group row">
				<label class="control-label col-sm-2">Tangal Transaksi </label>
				<div class="col-sm-10"><input type="date" name="tgl_transaksi" class="form-control input-md" placeholder="yyyy-mm-dd"/></div>
				<?php
				echo form_error('tgl_transaksi');
				?>
			</div>
			
			
			<div class="form-group row">
				<label class="control-label col-sm-2">Transaksi</label>
				<div class="col-sm-10"><input type="text" name="jenis_transaksi" class="form-control input-md" placeholder="Masukan transaksi yang akan diinput"/></div>			
				<?php
				echo form_error('jenis_transaksi');
				?>
			</div>


			<div class="form-group row">
				<label class="col-sm-2">Jumlah (Rp)</label>
				<div class="col-sm-10"><input type="text" name="nilai_transaksi" class="form-control input-md" placeholder="Masukan nilai uang"/></div>			
				<?php
				echo form_error('nilai_transaksi');
				?>
			</div>

			<div class="form-group row">
				<label class="col-sm-2">Saldo Normal</label>
				<div class="col-sm-10">
					<select name="saldo_normal" class="form-control input-md">
					<option value="D">Debet</option>
					<option value="K">Kredit</option>
					</select>
				</div>			
			</div>
		<input type="submit" class="btn btn-primary" value="Simpan"/>	
		</form>
		</div>
</div>
			
<!-- panel 2-->
<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-th-list"></span>&nbsp;<b>Jurnal Umum</b></div>
		<div class="panel-body">
					<div class="table-responsive">
					<?php
					$saldo=null;
						$tampilan_tabel=array('table_open'=>'<table  class="table table-striped table-bordered table-condensed table-hover">',
						'heading_cell_start'=>'<th class="daftar">',
						'row_start'=>'<tr class="daftar">');
						$this->table->set_template($tampilan_tabel);



					$this->table->set_heading('Tanggal','Keterangan Tranksasi','Deber', 'Kredit','Saldo');

					if(isset($list_transaksi)){
						foreach($list_transaksi as $data_list_transaksi){

							$data_list_transaksi['saldo_normal']=='D' ?	$debet=$data_list_transaksi['jumlah_transaksi'] : $debet=0;
							$data_list_transaksi['saldo_normal']=='K' ? $kredit=$data_list_transaksi['jumlah_transaksi'] : $kredit=0;
						    $debet==0 ?$saldo=$saldo+$debet-$kredit : $saldo=$saldo+$debet;

							$this->table->add_row(
							$data_list_transaksi['tgl_transaksi'],
							$data_list_transaksi['ket_transaksi'],
							'<div style="text-align:right">'.number_format($debet,0,",",".").'</div>',
							'<div style="text-align:right">'.number_format($kredit,0,",",".").'</div>',
							'<div style="text-align:right">'.number_format($saldo,0,",",".").'</div>'
							);
						}
					}
					echo $this->table->generate();
					
				$this->session->unset_userdata('pesan_sukses_simpan');

					?>
					</div> <!-- table responisive-->
				
</div> <!-- panel 2 body -->
</div> <!-- panel 2 -->

		
			


<!-- panel 3-->
<div class="panel panel-default">
	<div class="panel-heading"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;<b>Copyleft</b></div>
		<div class="panel-body">
		<p>Kunjungi blog <a href="http://ozs.web.id" target="_blank">http://ozs.web.id</a> sebagai bentuk donasi anda kepada kami, terima kasih ...</p>
		</div>
</div>	<!-- panel 2 -->

</body>
</html>
