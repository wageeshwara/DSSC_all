<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_table extends CI_Controller
{


    public function index()
    {
        //$this->load->view('welcome_message');
        //$this->load->model('Model_attendancemarking');
        //$this->uptable();
        //$this->updateEditPresent();
        //$this->load->view('view_editPresent');
        //$this->viewEditPresent('');
        $this->viewHome();
    }

    //get input values and update table
    public function setdata()
    {
        $data['index'] = $this->input->get('index', TRUE);
        $this->load->model('Model_attendancemarking');
        $uparray = array('present' => '1',);
        $this->Model_attendancemarking->update($uparray, $data);
        $this->uptable();


    }

    //////////////////////////////////////////////////////////////////
    // create page using header,menu and footer from source files
    //////////////////////////////////////////////////////////////////

    public function viewAttendanceMark($data)
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('asela/style_Resources/header', $data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_attendanceMarking');
        $this->load->view('asela/style_Resources/footer');
    }


    public function viewEditPresent($data)
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela/style_Resources/header', $data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_editPresent');
        $this->load->view('asela/style_Resources/footer');
    }

    public function viewEditAbsent($data)
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela/style_Resources/header', $data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_editAbsent');
        $this->load->view('asela/style_Resources/footer');
    }

    public function viewDailyReport($data)
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela/style_Resources/header', $data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_dailyReport');
        $this->load->view('asela/style_Resources/footer');
    }


    //////////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////////////////

    public function setdata2() //insert data to database
    {
        date_default_timezone_set('Asia/Colombo');
        $date = date("Y/m/d");
        // $data['tid']=$this->input->get('tid', TRUE);
        $td = $this->input->get('tid', TRUE);
        $this->load->model('Model_attendancemarking');
        $uparray = array('p' => '1',
            'tid' => $td,
            'date' => $date);

        $this->Model_attendancemarking->insert($uparray);
        $this->uptable();

    }

    /////////////////////////////////////////////////////////////////////////////////
    //use for redirect
    /////////////////////////////////////////////////////////////////////////////////

    public function updateEditPresent() //use (get data for view today present list)
    {
        $this->load->model("Model_attendancemarking");
        $data['result'] = $this->Model_attendancemarking->todaygetdataEdit();
        $this->viewEditPresent($data);
    }

    public function updateEditAbsent() //use (get data for view today present list)
    {
        $this->load->model("Model_attendancemarking");
        $data['result'] = $this->Model_attendancemarking->todayAbsentList();
        $this->viewEditAbsent($data);

    }

    public function updateDailyReport()
    {
        $this->load->model("Model_attendancemarking");
        $data['result'] = $this->Model_attendancemarking->dailyReport();
        $this->viewDailyReport($data);

    }


    public function uptable() //use (get data for view to attendance mark)
    {
        $this->load->model("Model_attendancemarking");
        //$this->Model_attendancemarking->startMarking();
        $data['result'] = $this->Model_attendancemarking->getAll();
        //$this->load->view('view_attendanceMarking',$data);
        $this->viewAttendanceMark($data);
        //$inputs = $this->input->post('itemCode');
        //$data['in']=$inputs[0];

    }

    //////////////////////////////////////////////////////////////////////////////////////
    //
    /////////////////////////////////////////////////////////////////////////////////

    //edit present as absent
    public function editPresent()
    {
        $data['tid'] = $this->input->get('tid', TRUE);
        $this->load->model('Model_attendancemarking');
        $uparray = array('present' => '0');
        $this->Model_attendancemarking->update($uparray, $data);
        $this->updateEditPresent();
    }

    public function viewHome()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela/style_Resources/header', $data);
        $this->load->view('asela/style_Resources/menu');
        $this->load->view('asela/view_attendanceHome');
        $this->load->view('asela/style_Resources/footer');
    }

    public function geterror()
    {
        $this->load->model('Model_attendancemarking');
        $err = $this->Model_attendancemarking->insert();
    }


    ////////////////////////////////////////////////////////////////////////////////
    //call model update functions
    ////////////////////////////////////////////////////////////////////////////////

    public function upPresent() //use (update present as absent)
    {
        $data['tid'] = $this->input->get('tid', TRUE);
        $this->load->model('Model_attendancemarking');
        $this->Model_attendancemarking->upPresent($data);
        $this->updateEditPresent();
        //$this->db->delete('mytable', array('id' => $id));

    }

    public function upAbsent() //use (update absent as present)
    {
        $data['tid'] = $this->input->get('tid', TRUE);
        $this->load->model('Model_attendancemarking');
        $this->Model_attendancemarking->upAbsent($data);
        $this->updateEditAbsent();
    }

    ////////////////////////////////////////////////////////////////////////////////
    // search functions
    ////////////////////////////////////////////////////////////////////////////////

    public function search()
    {
        //$sig=$this->input->get('search', TRUE);
        $this->load->model('Model_attendancemarking');
        $data['result']=$this->Model_attendancemarking->search();
        $this->viewAttendanceMark($data);

    }

    public function searchEditPresent() // use (use for search edit present table values)
    {
        $this->load->model('Model_attendancemarking');
        $data['result']=$this->Model_attendancemarking->searchEditPresent(); //model funtion name also same
        $this->viewEditPresent($data);
    }

    public function searchEditAbsent() // use (use for search edit absent table values)
    {
        $this->load->model('Model_attendancemarking');
        $data['result']=$this->Model_attendancemarking->searchEditAbsent(); //model funtion name also same
        $this->viewEditAbsent($data);
    }

    /////////////////////////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////////////////////////

    public function startMarking() //start marking attendance
    {
        $this->load->model('Model_attendancemarking');
        $this->Model_attendancemarking->startMarking();
        $this->uptable();
    }

    public function getAttenData()
    {
        $this->load->model("Model_attendancemarking");
        //$this->updateAttendance();
        $this->Model_attendancemarking->startMarking();
        $data['result']=$this->Model_attendancemarking->getAll();
        //$this->load->view('view_attendanceMarking',$data);
        $this->viewAttendanceMark($data);
    }

    public function updateAttendance()
    {
        $data['tid'] = $this->input->get('tid', TRUE);
        $this->load->model('Model_attendancemarking');
        $this->Model_attendancemarking->updateAttendance($data);
        $data['result']=$this->Model_attendancemarking->getAll();
        $this->viewAttendanceMark($data);
    }

    public function dailyReport()
    {

        $this->load->model('Model_attendancemarking');
        $data['result']=$this->Model_attendancemarking->dailyReport(); //model function name also same
        $this->viewDailyReport($data);
    }



}
