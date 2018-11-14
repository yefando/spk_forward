<html>
<head>
	<meta charset="UTF-8">
	<title>Input Barang</title>
</head>
<body>
	<?php echo form_open('barang/edit_simpan'); ?>
	<?php echo form_hidden('id', $this->uri->segment(3));?>
	<table>
		<tr>
			<td>Kode Barang</td>
			<td><?php echo form_input('kode_barang', $produk['kode_barang'], array('placeholder'=>'kode barang')); ?></td>
		</tr>
		<tr><td>Nama Barang</td>
			<td><?php echo form_input('nama_barang', $produk['nama_barang'], array('placeholder'=>'nama barang')); ?></td>
		</tr>
		<tr><td>Harga Barang</td>
			<td><?php echo form_input('harga', $produk['harga'], array('placeholder'=>'Harga Barang')); ?></td>
		</tr>

	<tr>
		<td colspan="2"><?php echo form_submit('submit', 'Simpan Data'); ?></td>
	</tr>
	<?php echo anchor('barang', 'Kembali Ke Data'); ?>
		
		
	</table>
	<?php echo form_close(); ?>
</body>
</html>