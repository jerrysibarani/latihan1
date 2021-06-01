<?php include 'body/header.php'; ?>
<?php include 'body/nav.php'; ?>

<body>
	<center>
		<h3>Update Data</h3>
	</center>
	<?php //foreach($users as $u){ ?>
	<form action="<?php echo base_url('index.php/Users_c/update_data/'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" readonly="true" value="<?php echo $id ?>" ></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"  value="<?php echo $username ?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"  value="<?php echo $password ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save" id="usersupdate"></td>
			</tr>
		</table>
	</form>	
	<?php
	// } 
	?>
</body>

<?php include 'body/footer.php'; ?>