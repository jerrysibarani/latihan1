<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Item_api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data myuser
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $myuser = $this->db->get('tb_item')->result();
        } else {
            $this->db->where('id', $id);
            $myuser = $this->db->get('tb_item')->result();
        }
        $this->response($myuser, 200);
    }

    //Mengirim atau menambah data users baru
    function index_post() {
        $data = array(
                //    'id'          => $this->post('id'),
                    'item_code'    => $this->post('item_code'),
                    'item_name'    => $this->post('item_name'),
                    'price'    => $this->post('price'),
                    'stock'    => $this->post('stock'));
        $insert = $this->db->insert('tb_item', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

//Memperbarui data item yang telah ada   
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    // 'id'         => $this->put('id'),
                    'item_code'  => $this->put('item_code'),
                    'item_name'  => $this->put('item_name'),
                    'price'      => $this->put('price'),
                    'stock'      => $this->put('stock'));
        $this->db->where('id', $id);
        $update = $this->db->update('tb_item', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


//Menghapus salah satu data kontak
    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
         // $this->db->where('id', 12);
        $delete = $this->db->delete('tb_item');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>