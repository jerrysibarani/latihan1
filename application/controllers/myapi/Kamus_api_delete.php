<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kamus_api_delete extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    } 

      function index_post() {    
        // $tokenWeb = $this->session->userdata('token'); //token web session
        // $tokenPost = $this->post('token'); //token inputted
  
        // if (($tokenWeb) && ($tokenWeb == $tokenPost))
        //     {
               $id = $this->post('id');
               $this->db->where('id', $id);
                // $this->db->where('id', 629);
               $delete = $this->db->delete('mykamus');
               // $delete = $this->db->query("delete from mykamus where id = $id");
                if ($delete) {  //sebaiknya check id sebelum delete..
                            $this->response(array('status' => 1,                                 
                            'message' => 'Success deleting record',), 201);
                } else {
                  $this->response(array('status' => 0,                                 
                  'message' => 'Failed deleting record!',), 502);
                }
        // }
        // else 
        // {
        //       $this->response(array('status' => 0,                                 
        //       'message' => 'Failed deleting record!',
        //       'note' => 'Invalid token..!',), 503);
        // }


        // $this->response(array('status' => 0,                                 
        //      'message' => 'Failed deleting record!',
        //      'tokenWeb' => $tokenWeb,
        //      'tokenPost' => $tokenPost,
        //       'note' => 'Invalid token..!',), 503);

    }


      //Mengirim atau menambah data users baru
    // function index_post() {
    //     $id = $this->post('id'); 
    //     $this->db->where('id', $id);       
    //     $delete = $this->db->delete('mykamus');
    //     // $delete = $this->db->query("delete from mykamus where id = $id");
    //     if ($delete) {
    //         $this->response(array('status' => 'success deleting'), 201);
    //     } else {
    //         $this->response(array('status' => 'fail deleting', 502));
    //     }
    // }


}
?>