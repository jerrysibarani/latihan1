<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Spesifikasi_barang_api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data myuser
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $myuser = $this->db->get('spesifikasi_barang')->result();
        } else {
            $this->db->where('id', $id);
            $myuser = $this->db->get('spesifikasi_barang')->result();
        }
        $this->response($myuser, 200);
    }

    //Mengirim atau menambah data users baru
    function index_post() {
        $data = array(
                    'kode_barang'           => $this->post('kode_barang'),
                    'kode_barcode'          => $this->post('kode_barcode'),
                    'nama_barang'           => $this->post('nama_barang'),
                    'jenis_barang'          => $this->post('jenis_barang'),
                    'tanggal_kadaluarsa'    => $this->post('tanggal_kadaluarsa'),
                    'tahun_produksi'        => $this->post('tahun_produksi'),
                    'produsen'              => $this->post('produsen'),
                    'negara_pembuat'        => $this->post('negara_pembuat'),
                    'pemasok'               => $this->post('pemasok'),
                    'no_telepon_pemasok'    => $this->post('no_telepon_pemasok'),
                    'jumlah_stok_minimal'   => $this->post('jumlah_stok_minimal'),
                    'jumlah_stok'           => $this->post('jumlah_stok'));
                    
        $insert = $this->db->insert('spesifikasi_barang', $data);
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
                    'kode_barang'           => $this->put('kode_barang'),
                    'kode_barcode'          => $this->put('kode_barcode'),
                    'nama_barang'           => $this->put('nama_barang'),
                    'jenis_barang'          => $this->put('jenis_barang'),
                    'tanggal_kadaluarsa'    => $this->put('tanggal_kadaluarsa'),
                    'tahun_produksi'        => $this->put('tahun_produksi'),
                    'produsen'              => $this->put('produsen'),
                    'negara_pembuat'        => $this->put('negara_pembuat'),
                    'pemasok'               => $this->put('pemasok'),
                    'no_telepon_pemasok'    => $this->put('no_telepon_pemasok'),
                    'jumlah_stok_minimal'   => $this->put('jumlah_stok_minimal'),
                    'jumlah_stok'           => $this->put('jumlah_stok'));
        $this->db->where('id', $id);
        $update = $this->db->update('spesifikasi_barang', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
?>