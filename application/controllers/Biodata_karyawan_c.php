<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Biodata_karyawan_c extends CI_Controller {
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Biodata_karyawan_m');
		$this->load->helper('url');
		//$this->load->library('lbr'); 
	}

	function index(){
	   if($this->session->userdata('logged_in')){			
		    $session_data = $this->session->userdata('logged_in');
	        $data['username'] = $session_data['username'];
	        $data['biodata_karyawan'] = $this->Biodata_karyawan_m->get_data()->result();

	        $this->load->view('biodata_karyawan_view', $data);
	   }
	   else{
	     redirect('login', 'refresh');
	   }
	}


	function delete($id){
		 $where = array('id' => $id);
		 $this->Biodata_karyawan_m->delete_data($where,'biodata_karyawan');
		//echo "<script> alert('untuk saat ini belum dibuka untuk hapus') </script>";
		redirect('Biodata_karyawan_c');		
	}

	function add_view(){
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['biodata_karyawan'] = $this->Biodata_karyawan_m->get_data()->result();
		$this->load->view('biodata_karyawan_add_view', $data);
	}

	 function insert_data(){
	 //	echo "<script>alert('masuk insert_data');</script>";

 		// $id				= $this->input->post('id') 
		$nik	 		= $this->input->post('nik');
		$nama_karyawan  = $this->input->post('nama_karyawan');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$tempat_lahir	= $this->input->post('tempat_lahir');	 
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$pendidikan	 	= $this->input->post('pendidikan');
		$departemen	 	= $this->input->post('departemen');
		$jabatan	 	= $this->input->post('jabatan');
		$no_telepon	 	= $this->input->post('no_telepon');
		$status	 		= $this->input->post('status');		
		$alamat	 		= $this->input->post('alamat');
		$kodepos	 	= $this->input->post('kodepos');
  
		$data = array(
			'nik' 			  => $nik,
			'nama_karyawan'   => $nama_karyawan,
			'jenis_kelamin'   => $jenis_kelamin,
			'tempat_lahir' 	  => $tempat_lahir,
			'tanggal_lahir'   => $tanggal_lahir,
			'pendidikan' 	  => $pendidikan,
			'departemen' 	  => $departemen,
 			'jabatan' 		  => $jabatan,
			'no_telepon' 	  => $no_telepon,
			'status'          => $status,
			'alamat'          => $alamat,
			'kodepos'         => $kodepos
			);
		$this->Biodata_karyawan_m->input_data($data,'biodata_karyawan');
		redirect('Biodata_karyawan_c');
	}

	function edit_view($id){	    
	    $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];

		$where = array('id' => $id);
		$data['biodata_karyawan'] = $this->Biodata_karyawan_m->edit_data($where,'biodata_karyawan')->result();
		$this->load->view('biodata_karyawan_edit_view',$data);
	}

	function update_data(){
		$id	 			= $this->input->post('id');
		$nik	 		= $this->input->post('nik');
		$nama_karyawan  = $this->input->post('nama_karyawan');
		$jenis_kelamin 	= $this->input->post('jenis_kelamin');
		$tempat_lahir	= $this->input->post('tempat_lahir');	 
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$pendidikan	 	= $this->input->post('pendidikan');
		$departemen	 	= $this->input->post('departemen');
		$jabatan	 	= $this->input->post('jabatan');
		$no_telepon	 	= $this->input->post('no_telepon');
		$status	 		= $this->input->post('status');		
		$alamat	 		= $this->input->post('alamat');
		$kodepos	 	= $this->input->post('kodepos');
  
		$data = array(
			'nik' 			  => $nik,
			'nama_karyawan'   => $nama_karyawan,
			'jenis_kelamin'   => $jenis_kelamin,
			'tempat_lahir' 	  => $tempat_lahir,
			'tanggal_lahir'   => $tanggal_lahir,
			'pendidikan' 	  => $pendidikan,
			'departemen' 	  => $departemen,
 			'jabatan' 		  => $jabatan,
			'no_telepon' 	  => $no_telepon,
			'status'          => $status,
			'alamat'          => $alamat,
			'kodepos'         => $kodepos
			);

	 
		$where = array(
			'id' => $id
		);
	 
		$this->Biodata_karyawan_m->update_data($where,$data,'biodata_karyawan');
		redirect('Biodata_karyawan_c');
	}

 } 
?>