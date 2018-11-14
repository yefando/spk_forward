<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Input Barang</title>
</head>
<body>
	<?php echo form_open('barang/input_simpan'); ?>
	<table class="">
		<tr>
			<td>Kode Barang</td>
			<td><?php echo form_input('kode_barang', '', array('placeholder'=>'kode barang','class'=>'form-control')); ?></td>
		</tr>
		<tr><td>Nama Barang</td>
			<td><?php echo form_input('nama_barang', '', array('placeholder'=>'nama barang','class'=>'form-control')); ?></td>
		</tr>
		<tr><td>Harga Barang</td>
			<td><?php echo form_input('harga', '', array('placeholder'=>'Harga Barang','class'=>'form-control')); ?></td>
		</tr>

	<tr>
		<td colspan="2"><?php echo form_submit('submit', 'Simpan Data', array('class'=> 'btn btn-primar')); ?></td>
	</tr>
	<?php echo anchor('barang', 'Kembali Ke Data'); ?>
		
		
	</table>
	<?php echo form_close(); ?>
</body>
</html>