<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


	public function index()
	{
		$data['nama_lengkap'] = "mohamad";
		$data['nim'] = 1810330006;
		$mahasiswa[0] = array(
			'nim' =>1234,
			'nama'=>"budi"
		);
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
		
			
	}
     public function tambah()
			{
				$this->load->view('mahasiswa');
			}
		
}
