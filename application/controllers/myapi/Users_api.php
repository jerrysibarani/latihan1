<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Users_api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data myuser
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $myuser = $this->db->get('users')->result();
        } else {
            $this->db->where('id', $id);
            $myuser = $this->db->get('users')->result();
        }
        $this->response($myuser, 200);
    }

    //Mengirim atau menambah data users baru
    function index_post() {
        $data = array(
                    'id'          => $this->post('id'),
                    'username'    => $this->post('username'),
                    'password'    => $this->post('password'));
        $insert = $this->db->insert('users', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

//Memperbarui data users yang telah ada
    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'         => $this->put('id'),
                    'username'   => $this->put('username'),
                    'password'   => $this->put('password'));
        $this->db->where('id', $id);
        $update = $this->db->update('users', $data);
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
        $delete = $this->db->delete('users');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>