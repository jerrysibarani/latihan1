<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Biodata_mahasiswa_api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data myuser
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $myuser = $this->db->get('biodata_mahasiswa')->result();
        } else {
            $this->db->where('id', $id);
            $myuser = $this->db->get('biodata_mahasiswa')->result();
        }
        $this->response($myuser, 200);
    }

    //Mengirim atau menambah data users baru
    function index_post() {
        $data = array(
                     
            'npm'            => $this->post('npm') ,  
            'nama_mahasiswa' => $this->post('nama_mahasiswa'),
            'jk'             => $this->post('jk'),   
            'tempat_lahir'   => $this->post('tempat_lahir'),  
            'tanggal_lahir'  => $this->post('tanggal_lahir'),   
            'jurusan'        => $this->post('jurusan'),   
            'no_telepon'     => $this->post('no_telepon'),  
            'status'         => $this->post('status'),  
            'alamat'         => $this->post('alamat'),  
            'kodepos'        => $this->post('kodepos')); 

        $insert = $this->db->insert('biodata_mahasiswa', $data);
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

            'npm'            => $this->put('npm') ,  
            'nama_mahasiswa' => $this->put('nama_mahasiswa'),
            'jk'             => $this->put('jk'),   
            'tempat_lahir'   => $this->put('tempat_lahir'),  
            'tanggal_lahir'  => $this->put('tanggal_lahir'),   
            'jurusan'        => $this->put('jurusan'),   
            'no_telepon'     => $this->put('no_telepon'),  
            'status'         => $this->put('status'),  
            'alamat'         => $this->put('alamat'),  
            'kodepos'        => $this->put('kodepos')); 

        $this->db->where('id', $id);
        $update = $this->db->update('biodata_mahasiswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }



}
?>