<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Users_c extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Users_m');
		$this->load->model('EncryptDecrypt');
		$this->load->helper('url');
		//$this->load->library('lbr'); 
	}
 
	function index()
	{
	   if($this->session->userdata('logged_in'))
	   {			
		    $session_data = $this->session->userdata('logged_in');
	        $data['username'] = $session_data['username'];			 
			$data['users'] = $this->Users_m->get_data()->result();

			$this->load->view('users_view', $data);
	        // echo "<script>alert('$test');</script>";
	   }
	   else
	   {
	     redirect('login', 'refresh');
	   }
	}


	function delete($id){
		$where = array('id' => $id);
		$this->Users_m->delete_data($where,'users');
		redirect('Users_c');		
	}

	function add_view(){		
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['users'] = $this->Users_m->get_data()->result();
		$this->load->view('users_add_view', $data);
	}

	 function insert_data(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
  
		$data = array(
			'username' => $username,
			'password' => $this->EncryptDecrypt->encrypt($password)
			);
		$this->Users_m->input_data($data,'users');
		redirect('Users_c');
	}

	// function edit_view($id){
	//     $data['users'] = $this->Users_m->get_data()->result();
	//     $session_data = $this->session->userdata('logged_in');
 //        $data['username'] = $session_data['username'];

	// 	$where = array('id' => $id);
	// 	$data['users'] = $this->Users_m->edit_data($where,'users')->result();
	// 	$this->load->view('users_edit_view',$data);
	// }


	function edit_view($id){
	    $data['users'] = $this->Users_m->get_data()->result();
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

		$where = array('id' => $id);
		// $data['users'] = $this->Users_m->edit_data($where,'users')->result();
		// $query = $this->Users_m->edit_data($where,'users')->result();
		$query = $this->db->query("select * from users where id = $id");
		$row = $query->row();

		if (isset($row))
		{
	        $data = array(
	      	    'id' => $row->id,
				'username' => $row->username,
				'password' => $this->EncryptDecrypt->decrypt($row->password)
			);
		}
		
		$this->load->view('users_edit_view',$data);
	}

	function update_data(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	 
		$data = array(
			'username' => $username,
			'password' =>  $this->EncryptDecrypt->encrypt($password)			
		);	 
		$where = array(
			'id' => $id
		);	 
		$this->Users_m->update_data($where,$data,'users');
		redirect('Users_c');
	}

 } 
?>