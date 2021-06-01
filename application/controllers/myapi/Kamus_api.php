<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kamus_api extends REST_Controller {
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data myuser dengan dan tanpa searching
    function index_get() {
        // $id = $this->get('id');
        $word = $this->get('word');
        $description = $this->get('description');
        if (!($word) && !($description)) {
        	$myuser = $this->db->get('mykamus')->result();
            // $myuser = $this->db->query('select * from mykamus order by id desc')->result();
        } 
        else if (($word) && !($description)) {           
            $this->db->like('word',  $word);
            $this->db->from('mykamus');
            $this->db->order_by('id','desc');            
            $myuser = $this->db->get()->result();
        } 
        else if (!($word) && ($description)) {
            $this->db->like('description',  $description);
            $this->db->from('mykamus');
            $this->db->order_by('id','desc');            
            $myuser = $this->db->get()->result();
        }
        else {
            $this->db->like('word', $word); 
            $this->db->or_like('description', $description);
            $this->db->from('mykamus');
            $this->db->order_by('id','desc');            
            $myuser = $this->db->get()->result();
        }
        $this->response($myuser, 200);
    }

    //Mengirim atau menambah data users baru
    function index_post() {
       

        // $tokenWeb = $this->session->userdata('token'); //token web session
        // $tokenPost = $this->post('token'); //token inputted
        

            // if (($tokenWeb) && ($tokenWeb == $tokenPost))
            // {
                $data = array(
                            'id'      => $this->post('id'),
                            'word'    => $this->post('word'),
                            'description'    => $this->post('description'));

                $insert = $this->db->insert('mykamus', $data);
                if ($insert) {
                                $this->response(array('status' => 1,                                 
                                       'message' => 'Success adding new record',), 201);
                } 
                else 
                {
                      $this->response(array('status' => 0,                                 
                       'message' => 'Failed adding record!',), 502);                
                }
            // }
            // else 
            // {
            //       $this->response(array('status' => 0,                                 
            //        'message' => 'Failed adding record!',
            //        'note' => 'Invalid token..!',), 503);
            // }
    }

//Memperbarui data users yang telah ada
    function index_put() {
        // $tokenWeb = $this->session->userdata('token'); //token web session
        // $tokenPost = $this->put('token'); //token inputted

        // if (($tokenWeb) && ($tokenWeb == $tokenPost))
        // {
            $id = $this->put('id');
            $data = array(
                        'id'     => $this->put('id'),
                        'word'   => $this->put('word'),
                        'description'   => $this->put('description'));
            $this->db->where('id', $id);
            $update = $this->db->update('mykamus', $data);
            if ($update) {
                            $this->response(array('status' => 1,                                 
                            'message' => 'Success updating record', ), 201);                            
            } else {
                 $this->response(array('status' => 0,                                 
                   'message' => 'Failed update record!', ), 502);                 
            }
        // }                
        // else 
        // {
        //       $this->response(array('status' => 0,                                 
        //        'message' => 'Failed update record!',
        //        'note' => 'Invalid token..!', ), 503);             
        // }
    }

//Menghapus salah satu data kontak
    function index_delete() {    
        // $tokenWeb = $this->session->userdata('token'); //token web session
        // $tokenPost = $this->post('token'); //token inputted

        // if (($tokenWeb) && ($tokenWeb == $tokenPost))
        // {
               $id = $this->delete('id');
               $this->db->where('id', $id);
                // $this->db->where('id', 629);
               $delete = $this->db->delete('mykamus');
               // $delete = $this->db->query("delete from mykamus where id = $id");
                if ($delete) {
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
    }

 

}
?>