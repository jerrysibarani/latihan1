<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Biodata_karyawan_api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data myuser
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $myuser = $this->db->get('biodata_karyawan')->result();
        } else {
            $this->db->where('id', $id);
            $myuser = $this->db->get('biodata_karyawan')->result();
        }
        $this->response($myuser, 200);
    }

    //Mengirim atau menambah data users baru
    function index_post() {
        $data = array(
                    'nik'               => $this->post('nik'),
                    'nama_karyawan'     => $this->post('nama_karyawan'),
                    'jenis_kelamin '    => $this->post('jenis_kelamin'),
                    'tempat_lahir'      => $this->post('tempat_lahir'),
                    'tanggal_lahir'     => $this->post('tanggal_lahir'),
                    'pendidikan'        => $this->post('pendidikan'),
                    'departemen'        => $this->post('departemen'),       
                    'jabatan'           => $this->post('jabatan'),
                    'no_telepon'        => $this->post('no_telepon'),
                    'status'            => $this->post('status'),
                    'alamat'            => $this->post('alamat'),
                    'kodepos'           => $this->post('kodepos'));
        $insert = $this->db->insert('biodata_karyawan', $data);
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
                    'nik'               => $this->put('nik'),
                    'nama_karyawan'     => $this->put('nama_karyawan'),
                    'jenis_kelamin '    => $this->put('jenis_kelamin'),
                    'tempat_lahir'      => $this->put('tempat_lahir'),
                    'tanggal_lahir'     => $this->put('tanggal_lahir'),
                    'pendidikan'        => $this->put('pendidikan'),
                    'departemen'        => $this->put('departemen'),       
                    'jabatan'           => $this->put('jabatan'),
                    'no_telepon'        => $this->put('no_telepon'),
                    'status'            => $this->put('status'),
                    'alamat'            => $this->put('alamat'),
                    'kodepos'           => $this->put('kodepos'));
        $this->db->where('id', $id);
        $update = $this->db->update('biodata_karyawan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


 

}
?>