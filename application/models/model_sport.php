<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_sport extends CI_Model {

    public function getLableData_model($index) //get data to the lables
    {
        $query = $this->db->query("select * from student5 WHERE index_no=$index ");

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }

    }

    public function register_student_model($data) //insert student sport details into sportstudent table
    {
        //$this->db->insert('sportstudent', $data);
        if($this->db->insert('register',$data))
        {

            return true;
        }

        else
        {
            return false;
        }

    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////// for update students //////////////////////////////////////////////

    public function get_data_update_textbox($index,$spor) //get data to update text box
    {
        $query = $this->db->query("select * from register WHERE index_no=$index AND sid=$spor");

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }

    public function update_Student_model($a,$data) //update registered students
    {
        $this->db->where($a);

        if($this->db->update('register',$data))
        {
            return true;
        }

        else
        {
            return false;
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////for delete student/////////////////////////////////////////////

    public function get_data_delete_textbox($index,$spor) //get data to delete text box
    {
        $query = $this->db->query("select s.name,r.start_date,r.end_date,r.sid,r.index_no,r.paid,r.balance
                                  from register r,student5 s WHERE s.index_no=r.index_no and r.index_no=$index AND r.sid=$spor");

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }


    public  function delete_student_model($a)
    {
        $this->db->where($a);

        if($this->db->delete('register'))
        {
            return true;
        }

        else
        {
            return false;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////STUDENT TABLE////////////////////////////////////////////////////////////////

    public function get_data_to_table_model()// get data to table
    {
        $query =$this->db->query("select s.phone,s.name,r.start_date,r.end_date,s.index_no,t.sname,r.paid,r.balance from student5 s,register r,sport t where s.index_no=r.index_no and r.sid=t.sid");
        return $query->result_array();
    }

    public function get_SID_data_to_table_model($s) //get all students for 1 sport
    {
        $query =$this->db->query("select s.phone,s.name,r.start_date,r.end_date,s.index_no,t.sname,r.paid,r.balance from student5 s,register r,sport t where s.index_no=r.index_no and r.sid=t.sid and t.sid=$s");
        return $query->result_array();
    }

    public function get_balance_data_to_table_model() //get all students those have to pay
    {
        $query =$this->db->query("select s.phone,s.name,r.start_date,r.end_date,s.index_no,t.sname,r.paid,r.balance from student5 s,register r,sport t where s.index_no=r.index_no and r.sid=t.sid and r.balance !=0");
        return $query->result_array();
    }

}