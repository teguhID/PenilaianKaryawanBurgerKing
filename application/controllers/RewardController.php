<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RewardController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('RewardModel');
	}
	

	public function EditReward($id)
	{
		$data['juara1'] = $this->input->post('juara1');
		$data['juara2'] = $this->input->post('juara2');
		$data['juara3'] = $this->input->post('juara3');
		
		$this->RewardModel->UpdateReward($id, $data);
		return redirect('Route/Reward', 'refresh');
	}

}
