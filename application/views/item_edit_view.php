<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Update Data</h3>
	</center>
	<?php foreach($item as $u){ ?>
	<form action="<?php echo base_url('index.php/Item_c/update_data/'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" readonly="true" value="<?php echo $u->id ?>" ></td>
			</tr>
			<tr>
				<td>Item Code</td>
				<td><input type="text" name="item_code"  value="<?php echo $u->item_code ?>"></td>
			</tr>
			<tr>
				<td>Item Name</td>
				<td><input type="text" name="item_name"  value="<?php echo $u->item_name ?>"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="number" name="price"  value="<?php echo $u->price ?>"></td>
			</tr>
			<tr>
				<td>Stock</td>
				<td><input type="number" name="stock"  value="<?php echo $u->stock ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="updateitem"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>

<?php include 'body/footer.php'; ?>