<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AcceptControllers extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('acceptmodel');
    }

    public function index()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/AcceptHome');
        $this->load->view('asela2/style_Resources/footer');
       // $this->uptable();
    }

    public function viewRequests($data) //view request
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewRequests');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function viewReject($data) //view reject
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewReject');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function viewAccept($data) //view accepted
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewAccepted');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function viewComment($data) //view comments
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewComment');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function viewComment2($data) //view comments
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewComment2');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function viewCommentAccepted($data) //view comments
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewCommentAccept');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function viewCommentReject($data) //view comments
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewCommentReject');
        $this->load->view('asela2/style_Resources/footer');
    }

    public  function  viewAcceptedDetails($data) //view accepted details
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewAcceptedDetails');
        $this->load->view('asela2/style_Resources/footer');
    }

    public  function  viewRejectedDetails($data) //view accepted details
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewRejectDetails');
        $this->load->view('asela2/style_Resources/footer');
    }


    public function viewHome(){
        $data['title']='DSSC Management';
        $this->load->view('asela2/style_Resources/header',$data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/AcceptHome');
        $this->load->view('asela2/style_Resources/footer');
    }

    public function uptable() //get data to the table
    {
        $data['result'] = $this->acceptmodel->getAll();
        $this->viewRequests($data);
    }

    public function uptableReject() //get data to reject table
    {
        $data['result'] = $this->acceptmodel->getAllReject();
        $this->viewReject($data);
    }

    public function uptableAccepted()
    {
        $data['result'] = $this->acceptmodel->getAllAccept();
        $this->viewAccept($data);
    }

    public function accept() //Accept button click
    {
        $data['houseID'] = $this->input->get('houseID', TRUE);
        $this->acceptmodel->accept($data);
        //$data['result']=$this->acceptmodel->getAll();
        //$this->viewRequests($data);
        $this->acceptmodel->accept($data);
        $this->viewComment2($data);
    }

    public function reject2() //reject button click
    {
        $data['houseID'] = $this->input->get('houseID', TRUE);
        $this->acceptmodel->reject($data);
        $this->viewComment2($data);
    }

    /*take house id and Accept house request*/
    public function rejectRequst() //reject request accept
    {
        $data['houseID'] = $this->input->get('houseID', TRUE);
        $this->acceptmodel->accept($data);
       // $data['result']=$this->acceptmodel->getAllReject();
       // $this->viewReject($data);
        $this->viewCommentReject($data);
    }

    /*take house id and reject house request*/
    public function AcceptedRequst() //Accepted Request reject
    {
        $data['houseID'] = $this->input->get('houseID', TRUE);
        $this->acceptmodel->reject($data);
       // $data['result']=$this->acceptmodel->getAllAccept();
       // $this->viewAccept($data);
        $this->viewCommentAccepted($data);
    }

    public function  addComment() //add comments
    {
        $data = array('comment' => $this->input->get('comment',TRUE),);
        $house=array('houseID' =>$this->input->get('houseID',TRUE) );
        $this->acceptmodel->insertComment($data,$house);
        $data['result']=$this->acceptmodel->getAll();
        $this->viewRequests($data);
    }

    /*insert comment to data base and get all rejected request and again redirect to the view rejected page*/
    public function  addCommentReject() //Reject requst Accept
    {
        $data = array('comment' => $this->input->get('comment',TRUE),);
        $house=array('houseID' =>$this->input->get('houseID',TRUE) );
        $this->acceptmodel->insertComment($data,$house);
        $data['result']=$this->acceptmodel->getAllReject();
        $this->viewReject($data);
    }

    /*insert comment to data base and get all accepted request and again redirect to the view accepted page*/
    public function  addCommentAccept()
    {
        $data = array('comment' => $this->input->get('comment',TRUE),);
        $house=array('houseID' =>$this->input->get('houseID',TRUE) );
        $this->acceptmodel->insertComment($data,$house);
        $data['result']=$this->acceptmodel->getAllAccept();
        $this->viewAccept($data);
    }

    public function view() //view butto click
    {
        $id = $this->input->get('houseID', TRUE);
        $data['aaa'] = $this->acceptmodel->getDataUpdate($id);
        $this->viewComment($data);
    }

    public function viewAccepted() //view butto click
    {
        $id = $this->input->get('houseID', TRUE);
        $data['aaa'] = $this->acceptmodel->getDataUpdate($id);
        $this->viewAcceptedDetails($data);
    }

    public function viewRejected() //view butto click
    {
        $id = $this->input->get('houseID', TRUE);
        $data['aaa'] = $this->acceptmodel->getDataUpdate($id);
        $this->viewRejectedDetails($data);
    }

    public function showDetails($data)
    {
        $data['aaa'] = $this->acceptmodel->getDataUpdate(2);
        $this->viewComment($data);
       // $this->viewUpdateHousePanelMeththa($data);
    }



    public function email()
    {
        $this->load->library('email');

        $this->email->initialize(array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.sendgrid.net',
            'smtp_user' => 'aselaramawickrama@gmail.com',
            'smtp_pass' => 'NavoMudi@1.com',
            'smtp_port' => 587,
            'crlf' => "\r\n",
            'newline' => "\r\n"
        ));

        $this->email->from('aselaramawickrama@gmail.com', 'Your Name');
        $this->email->to('aselaramawickrama@gmail.com');
        $this->email->cc('aselaramawickrama@gmail.com');
        $this->email->bcc('them@their-example.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        $this->email->send();

        echo $this->email->print_debugger();
    }

    public function president()
    {
        $presidentID= $this->input->get('presidentID',TRUE);
        if(isset($presidentID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($presidentID);
            $this->viewStudentDetails($data);
        }
    }

    public function wpresident()
    {
        $wpresidentID= $this->input->get('wpresidentID',TRUE);
        if(isset($wpresidentID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($wpresidentID);
            $this->viewStudentDetails($data);
        }
    }

    public function secretary()
    {
        $secretary= $this->input->get('secretaryID',TRUE);
        if(isset($secretary))
        {
            $data['aaa']=$this->acceptmodel->getStudent($secretary);
            $this->viewStudentDetails($data);
        }
    }

    public function wsecretary()
    {
        $wsecretary= $this->input->get('wsecretaryID',TRUE);
        if(isset($wsecretary))
        {
            $data['aaa']=$this->acceptmodel->getStudent($wsecretary);
            $this->viewStudentDetails($data);
        }
    }

    public function treasurer()
    {
        $treasurer= $this->input->get('treasurerID',TRUE);
        if(isset($treasurer))
        {
            $data['aaa']=$this->acceptmodel->getStudent($treasurer);
            $this->viewStudentDetails($data);
        }
    }

    public function wtreasurer()
    {
        $wtreasurer= $this->input->get('wtreasurerID',TRUE);
        if(isset($wtreasurer))
        {
            $data['aaa']=$this->acceptmodel->getStudent($wtreasurer);
            $this->viewStudentDetails($data);
        }
    }

    public function p1ID()
    {
        $p1ID= $this->input->get('p1ID',TRUE);
        if(isset($p1ID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($p1ID);
            $this->viewStudentDetails($data);
        }
    }

    public function p2ID()
    {
        $p2ID= $this->input->get('p2ID',TRUE);
        if(isset($p2ID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($p2ID);
            $this->viewStudentDetails($data);
        }
    }

    public function p3ID()
    {
        $p3ID= $this->input->get('p3ID',TRUE);
        if(isset($p3ID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($p3ID);
            $this->viewStudentDetails($data);
        }
    }

    public function p4ID()
    {
        $p4ID= $this->input->get('p4ID',TRUE);
        if(isset($p4ID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($p4ID);
            $this->viewStudentDetails($data);
        }
    }

    public function p5ID()
    {
        $p5ID= $this->input->get('p5ID',TRUE);
        if(isset($p5ID))
        {
            $data['aaa']=$this->acceptmodel->getStudent($p5ID);
            $this->viewStudentDetails($data);
        }
    }


    public function viewStudentDetails($data) //view student details
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela2/style_Resources/header', $data);
        $this->load->view('asela2/style_Resources/menu');
        $this->load->view('asela2/ViewStudentDetails');
        $this->load->view('asela2/style_Resources/footer');
    }


}