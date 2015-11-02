<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_attendancemarking extends CI_Model {

    public function  getAll()//get data to table
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        $query = $this->db->query("SELECT distinct a.p, t.name,t.tid,t.tel,t.signo,a.date FROM atten a,teacher2 t WHERE a.tid=t.tid and date='$aa 'and p=1");
        return $query->result_array();
    }

    public function update($pre,$input) //edit present list
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        //$data['date']=$date;
        $this->db->where('date', $aa);
        $this->db->update("atten", $pre, $input);

    }

    public function insert($data)//insert present list
    {
        $this->db->insert('atten', $data);
    }

    //get data to edit present table
    public function  getdataEdit()
    {
        $date=$this->input->get('getdate', TRUE);
        $query = $this->db->query("SELECT * from teacher2 t,atten a WHERE t.tid=a.tid and present=1 and date=$date");
        return $query->result_array();
    }


    ///////////////////////////////////////////////////////////////////////
    //get data to tables
    //////////////////////////////////////////////////////////////////////

    public function  todaygetdataEdit() //use (get data for view today present list)
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        //$date=$this->input->get('getdate', TRUE);
        $query = $this->db->query("SELECT * from teacher2 t,atten a WHERE t.tid=a.tid and a.p=1 and a.a=0 and date='$aa'");
        return $query->result_array();
    }

    public function todayAbsentList() //use (get data for view today absent list)
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        //$date=$this->input->get('getdate', TRUE);
        $query = $this->db->query("SELECT * from teacher2 t,atten a WHERE t.tid=a.tid and a.p=0 and a.a=1 and date='$aa'");
        return $query->result_array();
    }

    ////////////////////////////////////////////////////////////
    //
    ////////////////////////////////////////////////////////////

    public function upPresent($id)//use (update present as absent)
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        //$this->db->where('date', $aa);
        //$this->db->delete("atten",$input);

        $data=array(
            'p' => '0',
            'a' => '1',
        );


        $this->db->where('date', $aa);
        $this->db->update('atten', $data,$id);

    }

    public function upAbsent($id) //use (update absent as present)
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        //$this->db->where('date', $aa);
        //$this->db->delete("atten",$input);

        $data=array(
            'p' => '1',
            'a' => '0',
        );


        $this->db->where('date', $aa);
        $this->db->update('atten', $data,$id);
    }

    /////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////

    //get data to absent table WORNG
    public function absentable()
    {
        $query = $this->db->query("select t.tid from teacher2 t LEFT JOIN atten a ON t.tid=a.tid where a.tid is null");
        return $query->result_array();
    }

    public function search()
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        $data=$this->input->post('search');
        $query =$this->db->query("SELECT * FROM teacher2 t, atten a where a.tid=t.tid AND t.signo=$data and a.date= '$aa'");
        return $query->result_array();
    }

    /////////////////////////////////////////////////////////////////////////////
    //search model functions
    /////////////////////////////////////////////////////////////////////////////

    public function searchEditPresent()//search present
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        $data=$this->input->post('search2');
        $query =$this->db->query("SELECT * from teacher2 t,atten a WHERE t.tid=a.tid and a.p=1 and a.a=0 and date='$aa' and t.signo=$data");
        return $query->result_array();
    }

    public function searchEditAbsent() //search absent
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        $data=$this->input->post('search2');
        $query =$this->db->query("SELECT * from teacher2 t,atten a WHERE t.tid=a.tid and a.p=0 and a.a=1 and date='$aa' and t.signo=$data");
        return $query->result_array();
    }

    /////////////////////////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////////////////////////

    public function startMarking() //button click then get all data from teacher to atten table
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");
        $this->db->query("INSERT INTO atten (date, p, a,tid) SELECT '$aa', 1,0,tid from `teacher2`");

    }

    public function updateAttendance($id)
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");

        $data=array(
            'p' => '0',
            'a' => '1',
        );


        $this->db->where('date', $aa);
        $this->db->update('atten', $data,$id);
    }

    public function dailyReport()
    {
        $data=$this->input->post('date');
        $query =$this->db->query("select * from atten a,teacher2 t where t.tid=a.tid and a.date='$data'");
        return $query->result_array();
    }

}