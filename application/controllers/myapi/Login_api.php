<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login_api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('User','',TRUE);        
        $this->load->model('UsersToken'); 
    }

    //login API
    function index_post() {       

     $username = $this->input->post('username'); 
     $password = $this->input->post('password');
     
     $result = $this->User->login($username, $password);

     $token =  $this->UsersToken->generate_token(100); //edit nilainya /atur length 

        if ($result > 0) {
          
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


            $this->response(array('status' => 1,
                                   'token' =>  $token,
                                   'message' => 'Success login! Keep stay secure!',
                                  ), 201);

        } else {           
            $this->response(array('status' => 0,
                                   'token' => '',
                                   'message' => 'Failed login! Please stay secure!',
                                  ), 502);
        }
    }

 

}
?>