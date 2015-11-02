<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LeaveEditController extends CI_Controller
{

    public function index()
    {
        $this->view();
    }

    public function view()
    {
        $data['title']='DSSC Management';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/style_Resources/menu');
        $this->load->view('wagi/view_editLeave');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function dbSelect()
    {
        $query=mysql_query("SELECT * FROM `leave` LEFT JOIN `employee` ON `leave`.`user_id` = `employee`.`emp_id` WHERE `leave`.`accepted`=0");
        while($fetch = mysql_fetch_array($query))
        {
            $output[] = array ($fetch['leave_id'],$fetch['emp_name'],$fetch['signature_id'],$fetch['leave_type'],$fetch['leave_description']);
        }
        echo json_encode($output);
    }


    public function tableLink()
    {
        $data['leaveID'] = $this->input->get('index', TRUE);
        $id = $data['leaveID'];
        $this->load->model("dbaccess");
        $data['query'] = "SELECT * FROM `leave` LEFT JOIN `employee` ON `leave`.`user_id` = `employee`.`emp_id` WHERE `leave`.`leave_id`='$id' ";
        $data['result'] = $this->dbaccess->getAll($data);
        $this->editleave($data);
    }


    public function leaveEdit()
    {
        $this->load->model('dbaccess');
        $data['dat_table'] = 'leave';

        $data =$this->input->post('leaveID_txt');
        $newRaw = array("leave_description" => $this->input->post('description_txt')
        );

        $this->db->where('leave_id', $data);
        $this->db->update('leave',$newRaw);


        $this->json_response(TRUE);

    }

    private function json_response($status)
    {
        echo json_encode(array(
            'isSuccessful' => $status
        ));
    }
}