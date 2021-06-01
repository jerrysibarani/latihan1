<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('User','',TRUE);
   $this->load->model('UsersToken'); 
 }
 
 function index()
 {
     //This method will have the credentials validation
     $this->load->library('form_validation'); 
     $this->form_validation->set_rules('username', 'Username', 'trim|required');
     $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
   
     if($this->form_validation->run() == FALSE)
     {
       //Field validation failed.  User redirected to login page
       $this->load->view('login_view');
     }
     else
     {
       //Go to private area
       redirect('Home', 'refresh');     
     }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username'); 
   //query the database
   $result = $this->User->login($username, $password);
   $test9 = "js7777";
 
 
   if($result)
   {  
       $token =  $this->UsersToken->generate_token(100); 

       $sess_array = array();
       foreach($result as $row)
       {
         $sess_array = array(
           'id' => $row->id,
           'username' => $row->username,
           'token' => $token
         );
         $login_data = array( 'logged_in' => $sess_array );
         $this->session->set_userdata($login_data); //Activate session
         $this->session->set_tokendata($sess_array); //Activate Token
     } 
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }

 
}
?>