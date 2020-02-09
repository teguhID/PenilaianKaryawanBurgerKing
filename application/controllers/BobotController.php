<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BobotController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BobotModel');
		$this->load->model('KaryawanModel');
	}
	

	public function EditBobot($id)
	{
		$data['absensi'] = $this->input->post('absensi');
		$data['attitude'] = $this->input->post('attitude');
		$data['skill'] = $this->input->post('skill');
		$data['performa'] = $this->input->post('performa');
		$data['leadership'] = $this->input->post('leadership');
		$data['knowledge'] = $this->input->post('knowledge');
		$data['speak'] = $this->input->post('speak');
		
		$karyawanAll = $this->KaryawanModel->DataKaryawanAll()->result_array();
		foreach ($karyawanAll as $item) {

			$item['nAbsensi'] = $item['absensi'] * $data['absensi'];
			$item['nAttitude'] = $item['attitude'] * $data['attitude'];
			$item['nSkill'] = $item['skill'] * $data['skill'];
			$item['nPerforma'] = $item['performa'] * $data['performa'];
			$item['nLeadership'] = $item['leadership'] * $data['leadership'];
			$item['nKnowledge'] = $item['knowledge'] * $data['knowledge'];
			$item['nSpeak'] = $item['speak'] * $data['speak'];

			$item['nilai'] = $item['nAbsensi'] + $item['nAttitude'] + $item['nSkill'] + $item['nPerforma'] + $item['nLeadership'] + $item['nKnowledge'] + $item['nSpeak'] ; 
			 
			$this->KaryawanModel->EditKaryawan($item['id'], $item);
		}

		$this->BobotModel->UpdateBobot($id, $data);
		return redirect('Route/Bobot', 'refresh');
	}

}
