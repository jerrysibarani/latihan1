<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Update Data</h3>
	</center>
	<?php foreach($biodata_mahasiswa as $u){ ?>
	<form action="<?php echo base_url('index.php/Biodata_mahasiswa_c/update_data/'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" readonly="true" value="<?php echo $u->id ?>" ></td>
			</tr>
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"  value="<?php echo $u->npm ?>"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="nama_mahasiswa" required value="<?php echo $u->nama_mahasiswa ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="">-- Mohon pilih --</option>
						<option <?php if($u->jk == "Pria") echo "selected"?> value="Pria">Pria</option>
						<option <?php if($u->jk == "Wanita") echo "selected"?> value="Wanita">Wanita</option>
					</select>
				</td>
				<!--<td><input type="text" name="jk"  value="<?php echo $u->jk ?>"></td>-->
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"  value="<?php echo $u->tempat_lahir ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"  value="<?php echo $u->tanggal_lahir ?>"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"  value="<?php echo $u->jurusan ?>"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="tel" name="no_telepon"  value="<?php echo $u->no_telepon ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name="status">
						<option value="">-- Mohon pilih --</option>
						<option <?php if($u->status == "Lajang") echo "selected"?> value="Lajang">Lajang</option>
						<option <?php if($u->status == "Menikah") echo "selected"?> value="Menikah">Menikah</option>
					</select>
				</td>
				<!--<td><input type="text" name="status"  value="<?php echo $u->status ?>"></td>-->
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"  value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td><input type="text" name="kodepos"  value="<?php echo $u->kodepos ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="updatekaryawan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>

<?php include 'body/footer.php'; ?>