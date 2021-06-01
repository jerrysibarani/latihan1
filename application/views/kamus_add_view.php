<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Add New Data</h3>
	</center>
	<form action="<?php echo base_url('index.php/Kamus_c/insert_data/'); ?>" method="post">
		<table style="margin:20px auto;"  border="0.5">
			<tr>
				<td>Word :</td>
				<td><input type="text" name="word"></td>
			</tr>
			<tr>
				<td>Description :</td>
				<td><input type="text" name="description"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="savekamus"></td>
			</tr>
		</table>
	</form>	
</body>

<?php include 'body/footer.php'; ?>