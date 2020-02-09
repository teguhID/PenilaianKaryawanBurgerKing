<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('KaryawanModel');
		$this->load->model('BobotModel');
	}
	
	public function BuatKaryawan()
	{
		$data['idKaryawan'] = $this->input->post('idKaryawan');
		$data['nama'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['tempatLahir'] = $this->input->post('tempatLahir');
		$data['tanggalLahir'] = $this->input->post('tanggalLahir');
		$data['jabatan'] = $this->input->post('jabatan');
		$data['alamat'] = $this->input->post('alamat');
		$data['kontak'] = $this->input->post('kontak');
		
		$config['upload_path'] = './karyawan';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';
			$config['encrypt_name'] = true;  
			$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$fileData = $this->upload->data();
				$data['foto'] = $fileData['file_name'];
		}

		$this->KaryawanModel->BuatKaryawan($data);
		return redirect('Route/Karyawan', 'refresh');
	}


	public function EditKaryawan($id)
	{
		$data['idKaryawan'] = $this->input->post('idKaryawan');
		$data['nama'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['tempatLahir'] = $this->input->post('tempatLahir');
		$data['tanggalLahir'] = $this->input->post('tanggalLahir');
		$data['jabatan'] = $this->input->post('jabatan');
		$data['alamat'] = $this->input->post('alamat');
		$data['kontak'] = $this->input->post('kontak');

		$foto = $this->KaryawanModel->DetailKaryawan($id)->row()->foto;

		$config['upload_path'] = './karyawan';
		$config['allowed_types'] = 'jpg|png|gif|jpeg';
		$config['encrypt_name'] = true;  
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')) {
			// echo 'foto kosong';
			$error = array('error' => $this->upload->display_errors());
		} else {
			// echo 'foto ada';
			unlink('./karyawan/' . $foto);
			$fileData = $this->upload->data();
			$data['foto'] = $fileData['file_name'];
		}
		
		$this->KaryawanModel->EditKaryawan($id, $data);
		return redirect('Route/Karyawan', 'refresh');
	}

	public function InputNilaiKaryawan($id)
	{
		$data['absensi'] = $this->input->post('absensi');
		$data['attitude'] = $this->input->post('attitude');
		$data['skill'] = $this->input->post('skill');
		$data['performa'] = $this->input->post('performa');
		$data['leadership'] = $this->input->post('leadership');
		$data['knowledge'] = $this->input->post('knowledge');
		$data['speak'] = $this->input->post('speak');
		
		$absensi = $this->BobotModel->EditBobot('1')->row()->absensi;
        $attitude = $this->BobotModel->EditBobot('1')->row()->attitude;
        $skill = $this->BobotModel->EditBobot('1')->row()->skill;
        $performa = $this->BobotModel->EditBobot('1')->row()->performa;
		$leadership = $this->BobotModel->EditBobot('1')->row()->leadership;
		$knowledge = $this->BobotModel->EditBobot('1')->row()->knowledge;
		$speak = $this->BobotModel->EditBobot('1')->row()->speak;
		
		$data['nAbsensi'] = $this->input->post('absensi') * $absensi;
		$data['nAttitude'] = $this->input->post('attitude') * $attitude;
		$data['nSkill'] = $this->input->post('skill') * $skill;
		$data['nPerforma'] = $this->input->post('performa') * $performa;
		$data['nLeadership'] = $this->input->post('leadership') * $leadership;
		$data['nKnowledge'] = $this->input->post('knowledge') * $knowledge;
		$data['nSpeak'] = $this->input->post('speak') * $speak;

		$data['nilai'] = $data['nAbsensi'] + $data['nAttitude'] + $data['nSkill'] + $data['nPerforma'] + $data['nLeadership'] + $data['nKnowledge'] + $data['nSpeak'];
		
		$this->KaryawanModel->EditKaryawan($id, $data);
		return redirect('Route/DetailDataKaryawan/' . $id, 'refresh');
	}

	public function HapusKaryawan($id)
	{
		$this->KaryawanModel->HapusKaryawan($id);
		return redirect('Route/Karyawan', 'refresh');
	}

}
