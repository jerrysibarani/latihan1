<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Biodata_mahasiswa_c extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Biodata_mahasiswa_m');
		$this->load->helper('url');
		//$this->load->library('lbr'); 
	}

	function index(){
	   if($this->session->userdata('logged_in')){			
		    $session_data = $this->session->userdata('logged_in');
	        $data['username'] = $session_data['username'];
	        $data['biodata_mahasiswa'] = $this->Biodata_mahasiswa_m->get_data()->result();

	        $this->load->view('biodata_mahasiswa_view', $data);
	   }
	   else{
	     redirect('login', 'refresh');
	   }
	}


	function delete($id){
		 $where = array('id' => $id);
		 $this->Biodata_mahasiswa_m->delete_data($where,'biodata_mahasiswa');
		//echo "<script> alert('untuk saat ini belum dibuka untuk hapus') </script>";
		redirect('Biodata_mahasiswa_c');		
	}

	function add_view(){
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['biodata_mahasiswa'] = $this->Biodata_mahasiswa_m->get_data()->result();
		$this->load->view('biodata_mahasiswa_add_view', $data);
	}

	 function insert_data(){
	 //	echo "<script>alert('masuk insert_data');</script>";

		// $id				= $this->input->post('id') 
		$npm	 		= $this->input->post('npm');
		$nama_mahasiswa = $this->input->post('nama_mahasiswa');
		$jk 			= $this->input->post('jk');
		$tempat_lahir	= $this->input->post('tempat_lahir');	 
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jurusan	 	= $this->input->post('jurusan');
		$no_telepon	 	= $this->input->post('no_telepon');
		$status	 		= $this->input->post('status');
		$alamat	 		= $this->input->post('alamat');
		$kodepos	 	= $this->input->post('kodepos');
  
		$data = array(
			'npm' 			  => $npm,
			'nama_mahasiswa'  => $nama_mahasiswa,
			'jk' 			  => $jk,
			'tempat_lahir' 	  => $tempat_lahir,
			'tanggal_lahir'   => $tanggal_lahir,
			'jurusan' 		  => $jurusan,
			'no_telepon' 	  => $no_telepon,
			'status'          => $status,
			'alamat'          => $alamat,
			'kodepos'         => $kodepos
			);
		$this->Biodata_mahasiswa_m->input_data($data,'biodata_mahasiswa');
		redirect('Biodata_mahasiswa_c');
	}

	function edit_view($id){	    
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

		$where = array('id' => $id);
		$data['biodata_mahasiswa'] = $this->Biodata_mahasiswa_m->edit_data($where,'biodata_mahasiswa')->result();
		$this->load->view('biodata_mahasiswa_edit_view',$data);
	}

	function update_data(){
		$id	 		= $this->input->post('id');
		$npm	 		= $this->input->post('npm');
		$nama_mahasiswa = $this->input->post('nama_mahasiswa');
		$jk 			= $this->input->post('jk');
		$tempat_lahir	= $this->input->post('tempat_lahir');	 
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jurusan	 	= $this->input->post('jurusan');
		$no_telepon	 	= $this->input->post('no_telepon');
		$status	 		= $this->input->post('status');
		$alamat	 		= $this->input->post('alamat');
		$kodepos	 	= $this->input->post('kodepos');
  
		$data = array(
			'npm' 			  => $npm,
			'nama_mahasiswa'  => $nama_mahasiswa,
			'jk' 			  => $jk,
			'tempat_lahir' 	  => $tempat_lahir,
			'tanggal_lahir'   => $tanggal_lahir,
			'jurusan' 		  => $jurusan,
			'no_telepon' 	  => $no_telepon,
			'status'          => $status,
			'alamat'          => $alamat,
			'kodepos'         => $kodepos
			);

	 
		$where = array(
			'id' => $id
		);
	 
		$this->Biodata_mahasiswa_m->update_data($where,$data,'biodata_mahasiswa');
		redirect('Biodata_mahasiswa_c');
	}

 } 
?>