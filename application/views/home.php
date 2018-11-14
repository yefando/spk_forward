<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div class="jumbotron">
		<?php echo form_open('Gurame/hasil'); ?>
		<table class="">
			<tr>
				<label for="">Nama Anda : </label>
				<input class="form-control" type="text" name="nama" value="" placeholder="Nama Anda">
				<br>
				<label for="">Alamat Anda : </label>
				<input class="form-control" type="text" name="alamat" value="" placeholder="Alamat Anda">
				<br>
			</tr>

			<tr>
				<label for="">Apakah Ikan :</label><br>
				<select class="form-control" name="a">
					<option value="Lincah">Lincah</option>
					<option value="Tidak lincah">Tidak lincah</option>
				</tr>
				<br>
				<tr>
					<Label>Apakah Ikan Mempunyai </Label><br>
					<select class="form-control" name="b">
						<option value="sisik yang mengkilap">sisik yang mengkilap</option>
						<option value="Tidak yang mengkilap">Tidak yang mengkilap</option>
					</tr>
					<br>
					<tr>
						<label>Apakah Ikan :</label><br>
						<select class="form-control" name="c">
							<option value="bebas penyakit dan ukurannya relatif seragam">bebas penyakit dan ukurannya relatif tidak seragam</option>
							<option value="Ada penyakit dan ukurannya relatif seragam">Ada penyakit dan ukurannya relatif tidak seragam</option>
						</tr>
						<br>
						<tr>
							<label>Apakah Berat Ikan :</label><br>
							<select class="form-control" name="d">
								<option value="100 gram/ekor">100 gram/ekor</option>
								<option value="<100g/ekor">di bawah 100g/ekor</option>
							</tr>
							<br>
							<tr>
								<td colspan="2"><?php echo form_submit('submit', 'Proses', array('class'=> 'btn btn-primar')); ?></td>
							</tr>


						</table>
						<?php echo form_close(); ?>
					</div>
				</body>
				</html>