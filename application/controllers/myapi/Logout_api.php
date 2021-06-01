<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Logout_api extends REST_Controller {

    function __construct($config = 'rest') 
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('User','',TRUE);        
        $this->load->model('UsersToken'); 
    }

    function index_post() 
    {      
         $this->session->unset_userdata('logged_in');
         session_destroy();       

         $token = $this->session->userdata('token');

         $this->response(array('status' => 0,
                               'token' =>  $token,
                               'message' => 'Success logout! Keep stay secure!',
                               ), 201);
    }


}
?>