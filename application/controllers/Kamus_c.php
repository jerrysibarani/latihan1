<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Kamus_c extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Kamus_m');
		$this->load->helper('url');
		//$this->load->library('lbr'); 
	}

	function index(){
	   if($this->session->userdata('logged_in')){			
		    $session_data = $this->session->userdata('logged_in');
	        $data['username'] = $session_data['username'];
	        $data['kamus'] = $this->Kamus_m->get_data()->result();

	        $this->load->view('kamus_view', $data);
	   }
	   else{
	     redirect('login', 'refresh');
	   }
	}


	function delete($id){
		 $where = array('id' => $id);
		 $this->Kamus_m->delete_data($where,'mykamus');
		//echo "<script> alert('untuk saat ini belum dibuka untuk hapus') </script>";
		redirect('Kamus_c');		
	}

	function add_view(){
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['kamus'] = $this->Kamus_m->get_data()->result();
		$this->load->view('kamus_add_view', $data);
	}

	 function insert_data(){
	 //	echo "<script>alert('masuk insert_data');</script>";
		$word = $this->input->post('word');
		$description = $this->input->post('description');
  
		$data = array(
			'word' => $word,
			'description' => $description
			);
		$this->Kamus_m->input_data($data,'mykamus');
		redirect('Kamus_c');
	}

	function edit_view($id){	    
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

        $data['kamus'] = $this->Kamus_m->get_data()->result();
		$where = array('id' => $id);
		$data['kamus'] = $this->Kamus_m->edit_data($where,'mykamus')->result();
		$this->load->view('kamus_edit_view',$data);
	}

	function update_data(){
		$id = $this->input->post('id');
		$word = $this->input->post('word');
		$description = $this->input->post('description');
	 
		$data = array(
			'word' => $word,
			'description' => $description
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Kamus_m->update_data($where,$data,'mykamus');
		redirect('Kamus_c');
	}

 } 
?>