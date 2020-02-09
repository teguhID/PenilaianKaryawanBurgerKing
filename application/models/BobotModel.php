<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BobotModel extends CI_Model {

    public function DataBobot()
    {
        return $this->db->get('bobot');
    }

    public function EditBobot($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('bobot');
    }

    public function UpdateBobot($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('bobot', $data);
    }

}
