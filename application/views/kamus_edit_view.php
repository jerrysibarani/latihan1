<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Update Data</h3>
	</center>
	<?php foreach($kamus as $u){ ?>
	<form action="<?php echo base_url('index.php/Kamus_c/update_data/'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" readonly="true" value="<?php echo $u->id ?>" ></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="word"  value="<?php echo $u->word ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="description"  value="<?php echo $u->description ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="updatekamus"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>

<?php include 'body/footer.php'; ?>