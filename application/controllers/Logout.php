<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
 
	 // function index()
	 // {
	  
	 //   $this->session->unset_userdata('logged_in');
	 //   session_destroy();
	 //   redirect('Home', 'refresh');
	 // }
 

 	 function index()
	 {
	//	$session_data = $this->session->userdata('logged_in');
						//$this->session->userdata('logged_in')

	 //	$session_data['username'];

		// echo "<script>alert('$session_data['username']');</script>";
		// echo "<script>alert('test-> $session_data['username']');</script>";
		 //redirect('Home', 'refresh');


//echo "Author Name: ". $this->session->userdata('id');

		 // print_r($this->session->all_userdata());

		   print_r($this->session->userdata('token'));
		   // print_r($this->session->tokendata('username'));

		  // echo "<script>alert('test-> $this->session->userdata('token')');</script>";

	 }

}
 
?>