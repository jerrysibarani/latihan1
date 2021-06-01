<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Item_c extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Item_m');
		$this->load->helper('url');
		//$this->load->library('lbr'); 
	}

	function index(){
	   if($this->session->userdata('logged_in')){			
		    $session_data = $this->session->userdata('logged_in');
	        $data['username'] = $session_data['username'];
	        $data['item'] = $this->Item_m->get_data()->result();

	        $this->load->view('item_view', $data);
	   }
	   else{
	     redirect('login', 'refresh');
	   }
	}


	function delete($id){
		 $where = array('id' => $id);
		 $this->Item_m->delete_data($where,'tb_item');
		//echo "<script> alert('untuk saat ini belum dibuka untuk hapus') </script>";
		redirect('Item_c');		
	}

	function add_view(){
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['item'] = $this->Item_m->get_data()->result();
		$this->load->view('item_add_view', $data);
	}

	 function insert_data(){
	 //	echo "<script>alert('masuk insert_data');</script>";
		$item_code = $this->input->post('item_code');
		$item_name = $this->input->post('item_name');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock');
  
		$data = array(
			'item_code' => $item_code,
			'item_name' => $item_name,
			'price' => $price,
			'stock' => $stock
			);
		$this->Item_m->input_data($data,'tb_item');
		redirect('Item_c');
	}

	function edit_view($id){	    
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

		$where = array('id' => $id);
		$data['item'] = $this->Item_m->edit_data($where,'tb_item')->result();
		$this->load->view('item_edit_view',$data);
	}

	function update_data(){
		$id = $this->input->post('id');
		$item_code = $this->input->post('item_code');
		$item_name = $this->input->post('item_name');
		$price = $this->input->post('price');
		$stock = $this->input->post('stock');
	 
		$data = array(
			'item_code' => $item_code,
			'item_name' => $item_name,
			'price' => $price,
			'stock' => $stock
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->Item_m->update_data($where,$data,'tb_item');
		redirect('Item_c');
	}

 } 
?>