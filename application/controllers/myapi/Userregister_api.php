<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Userregister_api extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('Users_m');
        $this->load->model('EncryptDecrypt');
    }   

    //Mengirim atau menambah data users baru
    function index_post() {

        $password = $this->post('password');
        $data = array(
                    'username'    => $this->post('username'),                   
                    'namalengkap' => $this->post('namalengkap'),
                    'password'    => $this->EncryptDecrypt->encrypt($password)

                );
        $insert = $this->db->insert('users', $data);
        if ($insert) {
           $this->response(array('status' => 1,                                   
                                   'message' => 'Success Register! Keep stay secure!',
                                  ), 201);
        } else {
           $this->response(array('status' => 0,                                  
                                   'message' => 'Failed Register User!',
                                  ), 502);
        }
    }


    }
?>