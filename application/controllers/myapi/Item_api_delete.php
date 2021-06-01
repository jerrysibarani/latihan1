<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Item_api_delete extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    } 

    //Mengirim atau menambah data users baru
    function index_post() {
        $id = $this->post('id'); 
        $this->db->where('id', $id);       
        $delete = $this->db->delete('tb_item');
        // $delete = $this->db->query("delete from mykamus where id = $id");
        if ($delete) {
            $this->response(array('status' => 'success deleting'), 201);
        } else {
            $this->response(array('status' => 'fail deleting', 502));
        }
    }
}
?>