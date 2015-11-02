<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        
        if (!$this->session->userdata('is_logged_in')) {
            redirect('loginController');
        }
    }
    
    public function index(){
            $this->Home();
    }

    public function redir()
    {
        redirect('welcome');
    }
    //leave management home loading
    public function viewLeave(){
        $data['title']='DSSC Management';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/style_Resources/menu');
        $this->load->view('wagi/view_leave1');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function Home()
    {
        $data['title']='DSSC Home';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/Home');
        $this->load->view('wagi/style_Resources/footer');
    }

    public function StudentMarks()
    {
       redirect('studentController');
    }

    //prepare future leave
    public function viewMaLeave(){
        $data['title']='DSSC Management';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/style_Resources/menu');
        $this->load->view('wagi/view_fuLeave');
        $this->load->view('wagi/style_Resources/footer');
    }

    //make a leave today present employees
    public function viewToLeave(){
        $this->load->helper('url');
        $data['title']='DSSC Management';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/style_Resources/menu');
        $this->load->view('wagi/view_toLeave');
        $this->load->view('wagi/style_Resources/footer');
    }

    //edit leave form
    public function viewEditLeave(){
        redirect('leaveEditController');
    }

    //daily leave report
    public function viewDailyLeave(){
        $data['title']='DSSC Management';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/style_Resources/menu');
        $this->load->view('wagi/view_dailyReport');
        $this->load->view('wagi/style_Resources/footer');
    }

    //daily leave report
    public function viewMonthlyLeave(){
        $data['title']='DSSC Management';
        $this->load->view('wagi/style_Resources/header',$data);
        $this->load->view('wagi/style_Resources/menu');
        $this->load->view('wagi/view_monthlyReport');
        $this->load->view('wagi/style_Resources/footer');
    }


    public function viewAccList_Leave(){
       redirect('acceptListController');
    }

    public function viewAccept()
    {
        redirect('acceptController');
    }


    private function json_response($successful, $message)
    {
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        ));
    }

    public function printing()
    {
       redirect('printController');
    }
/////////////////////////////////////////////////////////////asela/////////////////////////////////////////////////////////////////////////
    public function attendanceMarking()
    {
        $data['title']='DSSC Management';
        $this->load->view('asela/style_Resources/header',$data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_attendanceMarking');
        $this->load->view('asela/style_Resources/footer');
    }

    public function viewHome(){
        $data['title']='DSSC Management';
        $this->load->view('asela/style_Resources/header',$data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_attendanceHome');
        $this->load->view('asela/style_Resources/footer');
    }

    public function viewMarking()
    {
        $data['title']='DSSC Management';
        $this->load->view('asela/style_Resources/header',$data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_attendanceMarking');
        $this->load->view('asela/style_Resources/footer');
    }

    public function viewEditPresent()
    {
        $data['title']='DSSC Management';
        $this->load->view('asela/style_Resources/header',$data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_editPresent');
        $this->load->view('asela/style_Resources/footer');
    }
    }
