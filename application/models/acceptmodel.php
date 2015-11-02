<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AcceptModel extends CI_Model
{
    public function  getAll()//get request data to table
    {
        $query = $this->db->query("select * from panel where status=1");
        return $query->result_array();
    }

    public function  getAllReject()//get Reject request data to table
    {
        $query = $this->db->query("select * from panel where status=3");
        return $query->result_array();
    }

    public function  getAllAccept()//get Accepted request data to table
    {
        $query = $this->db->query("select * from panel where status=2");
        return $query->result_array();
    }


    public function accept($hid) //accept
    {
        $data=array(
            'status' => '2',
        );

        $this->db->where($hid);
        $this->db->update('panel', $data);
    }

    public function reject($hid) //reject
    {
        $data=array(
            'status' => '3',
        );

        $this->db->where($hid);
        $this->db->update('panel', $data);
    }

    public function getDataUpdate($hid) //get data to update
    {
        $query = $this->db->query("select * from panel WHERE houseID=$hid");

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    public function insertComment($data,$house) //insert data to panel
    {
        $this->db->where($house);
        if($this->db->update('panel', $data)) {
            return true;
        }

        else {
            return false;
        }
    }

    public function getStudent($id) /*get student details*/
    {
        $query = $this->db->query("SELECT * FROM `student2` WHERE index_no=$id");
        return $query->result_array();

    }
}