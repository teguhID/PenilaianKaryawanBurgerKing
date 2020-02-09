<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Route extends CI_Controller {

	public function __construct()
	{
    parent::__construct();
        $this->load->model('KaryawanModel');
        $this->load->model('BobotModel');
        $this->load->model('RewardModel');
        $this->load->model('LoginModel');
        $this->load->library('session');
        if(!$this->is_logged_in()){
          redirect('Login/index');
        }
    }

	public function is_logged_in() {
        $user = $this->session->userdata('user');
        if (!isset($user)) { 
            return false; 
        } 
        else { 
            return true;
        }
	} 

	public function Dashboard()
	{
    $data['rata2Nilai'] = $this->KaryawanModel->Rata2Nilai()->row()->nilai;
    $data['jumlahKaryawan'] = $this->KaryawanModel->DataKaryawan()->num_rows();
    $data['karyawan'] = $this->KaryawanModel->DashboardKaryawan()->result_array();
    $data['nilaiKaryawan'] = $this->KaryawanModel->NilaiKaryawan()->result_array();
    $data['bobot'] = $this->BobotModel->DataBobot()->result_array();
    $data['terbaik'] = $this->KaryawanModel->DashboardKaryawanTerbaik()->row();
		$this->load->view('admin/dashboard', $data);
  }
    
    // KARYAWAN
  public function Karyawan()
	{
    $data['karyawan'] = $this->KaryawanModel->DataKaryawan()->result_array();
		$this->load->view('admin/karyawan/karyawan', $data);
  }
    public function DetailDataKaryawan($id)
	{
    $data['karyawan'] = $this->KaryawanModel->DetailKaryawan($id)->result_array();
		$this->load->view('admin/karyawan/detailData', $data);
  }
    public function BuatDataKaryawan()
	{
		$this->load->view('admin/karyawan/buatData');
  }
  public function EditDataKaryawan($id)
	{
    $data['karyawan'] = $this->KaryawanModel->DetailKaryawan($id)->result_array();
		$this->load->view('admin/karyawan/editData', $data);
  }
  public function InputNilaiKaryawan($id)
  {
    $data['karyawan'] = $this->KaryawanModel->DetailKaryawan($id)->result_array();
		$this->load->view('admin/karyawan/inputNilai', $data);
  }

  //BOBOT
  public function Bobot()
	{
    $data['bobot'] = $this->BobotModel->DataBobot()->result_array();
		$this->load->view('admin/bobot/bobot', $data);
  }
  public function EditDataBobot($id)
	{
    $data['bobot'] = $this->BobotModel->EditBobot($id)->result_array();
		$this->load->view('admin/bobot/editData', $data);
  }

	//NORMALISASI
  public function Normalisasi()
	{
    $data['karyawan'] = $this->KaryawanModel->DataKaryawan()->result_array();
		$this->load->view('admin/normalisasi/normalisasi', $data);
  }
   
  //REWARD
  public function Reward()
	{
    $data['reward'] = $this->RewardModel->DataReward()->result_array();
		$this->load->view('admin/reward/reward', $data);
  }
  public function EditDataReward()
	{
    $data['reward'] = $this->RewardModel->EditReward('1')->result_array();
		$this->load->view('admin/reward/editData', $data);
  }

  // HASIL
  public function HasilSemuaKaryawan()
	{
    $data['karyawan'] = $this->KaryawanModel->NilaiKaryawan()->result_array();
		$this->load->view('admin/hasil/semuaKaryawan', $data);
  }
  
  public function KaryawanTerbaik()
	{
    $data['Terbaik'] = $this->KaryawanModel->KaryawanTerbaik()->result_array();
    $data['dataReward'] = $this->RewardModel->DataReward()->row();
		$this->load->view('admin/hasil/karyawanTerbaik', $data);
	}
  


}
