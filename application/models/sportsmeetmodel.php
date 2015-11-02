<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sportsmeetmodel extends CI_Model
{
    public function insertPanel($data) //insert data to panel
    {
        //$this->db->insert('panel', $data);
        if($this->db->insert('panel',$data)) {
            return true;
        }

        else {
            return false;
        }
    }

    public function updatePanel($a,$data) //update panel members
    {
        $this->db->where($a);
        if($this->db->update('panel',$data)) {
            return true;
        }

        else {
            return false;
        }
    }

    public function getDataUpdate($hid) //get data to update
    {
        $query = $this->db->query("select * from panel WHERE houseID=$hid");

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    public function getDataUpdate2($hid) //get data to update
    {
        $query = $this->db->query("select * from panel WHERE houseID=$hid");

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    public function getStatus($hid)
    {
        $query=$this->db->query("SELECT status FROM `panel` WHERE houseID=$hid");


        if($query->num_rows() >0)
        {
            $id=$query->row();
            return $id->status;
        }
    }

    public function selectStudent()//select student
    {
        $query =$this->db->query("SELECT * FROM student2");
        return $query->result_array();
    }

    public  function deletePanel($hid) //delete panel
    {
        $this->db->where($hid);

        if($this->db->delete('panel'))
        {
            return true;
        }

        else
        {
            return false;
        }
    }

    public function search($date,$house)
    {
        $query=$this->db->query("SELECT * FROM `panel` WHERE houseID=$house and year='$date'");
        return $query->result_array();
    }

    //genatare reports

    public function checkStatus($id) //check status
    {
        $y=date("Y");
        $query=$this->db->query("SELECT status FROM `panel` WHERE houseID=$id and year=$y");;

        if($query->num_rows() >0)
        {
            $id=$query->row();
            return $id->status;
        }
    }

    public function getDatatoReport($id)
    {
        $y=date("Y");
        $query=$this->db->query("SELECT * FROM `panel` WHERE houseID=$id and year=$y");
        return $query->result_array();
    }

}