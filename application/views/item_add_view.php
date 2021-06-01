<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Add New Data</h3>
	</center>
	<form action="<?php echo base_url('index.php/Item_c/insert_data/'); ?>" method="post">
		<table style="margin:20px auto;"  border="0.5">
			<tr>
				<td>Item Code</td>
				<td><input type="text" name="item_code"></td>
			</tr>
			<tr>
				<td>Item Name</td>
				<td><input type="text" name="item_name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="number" name="stock"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="saveitem"></td>
			</tr>
		</table>
	</form>	
</body>

<?php include 'body/footer.php'; ?>