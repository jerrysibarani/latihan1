<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Add New Data</h3>
	</center>
	<form action="<?php echo base_url('index.php/Biodata_mahasiswa_c/insert_data/'); ?>" method="post">
		<table style="margin:20px auto;"  border="0.5">
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama_mahasiswa"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="">-- Mohon pilih --</option>
						<option value="Pria">Pria</option>
						<option value="Wanita">Wanita</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="tel" name="no_telepon"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name="status">
						<option value="">-- Mohon pilih --</option>
						<option value="Lajang">Lajang</option>
						<option value="Menikah">Menikah</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td><input type="text" name="kodepos"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="savebiodatakaryawan"></td>
			</tr>
		</table>
	</form>	
</body>

<?php include 'body/footer.php'; ?>