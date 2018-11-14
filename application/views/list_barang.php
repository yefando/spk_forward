<?php echo $judul ?>
<br>
<?php echo anchor('barang/input', ' INPUT DATA', array('class' => 'btn btn-primary')); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">



<table class="table table-striped" border="1">
	<thead class="thead-dark">
	<tr>
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Harga Barang</th>
		<th colspan="2">Opsi</th>
	</tr>
	</thead>
	<?php 

	foreach ($barang as $b) {
		echo "<tr>
		<td> $b->kode_barang </td>
		<td> $b->nama_barang</td>
		<td> $b->harga</td>
		<td>".anchor('barang/edit/'.$b->kode_barang, 'Edit')."</td>
		<td>".anchor('barang/delete/'.$b->kode_barang, 'Delete')."</td>
		</tr>";
	}
	?>
</table>

