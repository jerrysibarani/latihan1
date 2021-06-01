<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Add New Data</h3>
	</center>
	<form action="<?php echo base_url('index.php/Users_c/insert_data/'); ?>" method="post">
		<table style="margin:20px auto;"  border="0.5">
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="saveusers"></td>
			</tr>
		</table>
	</form>	
</body>

<?php include 'body/footer.php'; ?>