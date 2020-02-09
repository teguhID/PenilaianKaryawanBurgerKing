<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RewardModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function DataReward()
    {
        return $this->db->get('reward');
    }

    public function EditReward($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('reward');
    }

    public function UpdateReward($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('reward', $data);
    }
}
