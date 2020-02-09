<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanModel extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // $this->QueryFilterLogin();
    }

    public function DataKaryawan()
    {
        $this->QueryFilterLogin();
        return $this->db->get('karyawan');
    }

    public function DataKaryawanAll()
    {
        return $this->db->get('karyawan');
    }

    public function DashboardKaryawan()
    {
        $this->QueryFilterLogin();
        $this->db->limit(5);
        return $this->db->get('karyawan');
    }

    public function DashboardKaryawanTerbaik()
    {
        $this->QueryFilterLogin();
        $this->db->limit(1);
        $this->db->order_by('nilai', 'DESC');
        return $this->db->get('karyawan');
    }

    public function BuatKaryawan($data)
    {
         return $this->db->insert('karyawan', $data);
    }

    public function DetailKaryawan($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('karyawan');
    }

    public function EditKaryawan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('karyawan', $data);
    }

    public function HapusKaryawan($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('karyawan');
    }

    public function NilaiKaryawan()
    {
        $this->QueryFilterLogin();
        $this->db->order_by('nilai', 'DESC');
        return $this->db->get('karyawan');
    }

    public function KaryawanTerbaik()
    {
        $this->QueryFilterLogin();
        $this->db->limit(3);
        $this->db->order_by('nilai', 'DESC');
        return $this->db->get('karyawan');
    }

    public function Rata2Nilai()
    {
        $this->QueryFilterLogin();
        $this->db->select_avg('nilai');
        return $this->db->get('karyawan');
    }

    public function QueryFilterLogin()
    {
        if ($this->session->jabatan == 'Operational Manager') {
            return $this->db->where('jabatan', 'Area Manager');
        }
        else if($this->session->jabatan == 'Area Manager'){
            return $this->db->where('jabatan', 'General Manager');
        }
        else if($this->session->jabatan == 'General Manager'){
            return $this->db->where('jabatan', 'Assistant Manager');
        }
        else if($this->session->jabatan == 'Assistant Manager'){
            $crew = array('Crew Leader', 'Crew Full Time', 'Crew Part Time');
            return $this->db->where_in('jabatan', $crew);
        }
    }
}
