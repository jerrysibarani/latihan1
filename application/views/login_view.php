<!-- <!DOCTYPE html>
<html>
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
   <h1>Simple Login with CodeIgniter</h1>
   <?php //echo validation_errors(); ?>
   <?php //echo form_open('VerifyLogin'); ?>
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username"/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
 </body>
</html>

 -->
<html>
<head>
  <title>Login myApp</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body><center><br><br><br><br><br> 
  <h3>.:Please Login:.<br/> </h3>
   <?php echo validation_errors(); ?>
   <?php echo form_open('VerifyLogin'); ?>
  <!-- <form action="<?php //echo base_url('VerifyLogin'); ?>" method="post">    -->
    <table>
      <tr>
        <td><strong>Username</strong></td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td><strong>Password </strong></td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Login" id="mylogin"></td>
      </tr>
    </table>
  <!-- </form> -->
</center> 
</body>
</html>