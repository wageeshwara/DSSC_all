<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller_sport extends CI_Controller
{
    public function index()
    {
        $this->viewHome();
    }


    public function viewHome() //main home view
    {
        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->view('asela4/view_sport_home'); // sholud be view_sport_home
        $this->load->view('asela4/style_Resources/footer');

    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////REGISTER STUDENT//////////////////////////////////////////////////


    public function load_register_button() //redirect after register button click
    {
        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->view('asela4/view_register_student');
        $this->load->view('asela4/style_Resources/footer');
    }


    public function getLableData() //redirect to insert student
    {
        $index = $_POST['txtIndex'];

        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->model('model_sport');
        $data['aaa'] = $this->model_sport->getLableData_model($index); //model getLableData method
        $b=count($data['aaa']);

        if ($b>0)
        {
            $this->load->view('asela4/view_insert_student', $data);
            $this->load->view('asela4/style_Resources/footer');
        }

        else if(empty($index))
        {
            echo "<script>alert('Invalid Student Index Number!');</script>";
            $this->load->view('asela4/view_register_student');
        }

        else
        {
            echo "<script>alert('Invalid Student Index Number!');</script>";
            $this->load->view('asela4/view_register_student');
        }
    }


    public function register_controller()  //register student
    {
        date_default_timezone_set('Asia/Colombo');
        $aa=date("Y/m/d");

        $data = array(
            'index_no' => $_POST['txtIndex'],
            'sid' => $_POST['drpSport'],
            'start_date' => $aa,
            'paid' => $_POST['txtpaid'],
            'balance' => $_POST['txtHaveToPay'],
        );

            $this->load->model('model_sport');
            $status=$this->model_sport->register_student_model($data);

            if($status == true) {
                echo "<script>alert('Successfully Inserted!');</script>";
                $this->load_register_button();
            }

            else{

                echo "<script>alert('Student already Registered!');</script>";
                $this->load_register_button();
            }
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////UPDATE REGISTERED STUDENT///////////////////////////////////////////


    public function load_update_button() //redirect after update button click
    {
        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->view('asela4/view_update_student');
        $this->load->view('asela4/style_Resources/footer');

    }


    public function fill_update_textbox() //fill update text boxes
    {
        $index = $this->input->post('txtIndex');
        $sport = $this->input->post('drpSport2');

        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->model('asela4/model_sport');

        $data['aaa'] = $this->model_sport->get_data_update_textbox($index,$sport); //model get_data_update_textbox method
        $b=count($data['aaa']);

        if ($b>0)
        {
            $this->load->view('asela4/view_update_student_2', $data);
            $this->load->view('asela4/style_Resources/footer');
        }

        else if(empty($index))
        {
            echo "<script>alert('Invalid Student Index Number!');</script>";
            $this->load->view('view_update_student');
        }

        else
        {
            echo "<script>alert('Invalid Student Index Number!');</script>";
            $this->load->view('view_update_student');
        }
    }


    public  function update_student() //update student
    {
        $getIndex = $_POST['txtIndex2'];
        $getSid = $_POST['txtSprt2'];
        $a = array('index_no' => $getIndex,'sid' => $getSid);

        $data = array(

            'sid' =>  $_POST['drpSport3'],
            'start_date'=>$_POST['txtStart2'],
            'end_date'=>$_POST['txtEnd2'],
            'paid'=>$_POST['txtpaid2'],
            'balance'=>$_POST['txtHaveToPay2']
        );

        $this->load->model('model_sport');
        $status=$this->model_sport->update_Student_model($a,$data); //model update_Student_model

        if($status == true) {
            echo "<script>alert('Successfully Updated!');</script>";
            $this->load_update_button();
        }

        else{

            echo "<script>alert('Student has already Inserted!');</script>";
            $this->load_update_button();
        }
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////DELETE REGISTERED STUDENT//////////////////////////////////////////////////


    public function load_delete_button() //redirect after update button click
    {
        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->view('asela4/view_delete_student');
    }


        public function fill_delete_textbox() //fill delete text boxes
    {
        $index = $this->input->post('txtIndex');
        $sport = $this->input->post('drpSport2');

        $this->load->model('model_sport');
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->model('asela4/model_sport');

        $data['aaa'] = $this->model_sport->get_data_delete_textbox($index,$sport); //model get_data_delete_textbox method
        $b=count($data['aaa']);

        if ($b>0)
        {
            $this->load->view('asela4/view_delete_student_2', $data);
            $this->load->view('asela4/style_Resources/footer');
        }

        else if(empty($index))
        {
            echo "<script>alert('Invalid Student Index Number!');</script>";
            $this->load->view('asela4/view_delete_student');
        }

        else
        {
            echo "<script>alert('Invalid Student Index Number!');</script>";
            $this->load->view('asela4/view_delete_student');
        }
    }

    public function delete_student() //delete student
    {
        $getIndex = $_POST['txtIndex3'];
        $getSid = $_POST['txtSprt3'];
        $a = array('index_no' => $getIndex,'sid' => $getSid);

        $this->load->model('model_sport');
        $status=$this->model_sport->delete_student_model($a); //model delete_Student_model

        if($status == true) {
            echo "<script>alert('Successfully Deleted!');</script>";
            $this->load_delete_button();
        }

        else{

            echo "<script>alert('Student has already Inserted!');</script>";
            $this->load_delete_button();
        }
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////// STUDENT TABLE////////////////////////////////////////////////////////////

    public function view_table($data)
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->view('asela4/view_table_student');
        $this->load->view('asela4/style_Resources/footer');
    }


    public function get_data_to_table() //get data to the table
    {
        $this->load->model('model_sport');
        $data['result']=$this->model_sport->get_data_to_table_model(); //get_data_to_table_model in model
        $this->view_table($data); //load table
    }


    public function get_SID_data_to_table() // get all students for 1 sport
    {
        $s = $_POST['drpSport5'];
        $this->load->model('model_sport');
        $data['result']=$this->model_sport->get_SID_data_to_table_model($s);
        $this->view_table($data);
    }

    public function get_balance_data_to_table() //balance student button click
    {
        $this->load->model('model_sport');
        $data['result']=$this->model_sport->get_balance_data_to_table_model();
        $this->view_table($data);
    }


    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////REPORT///////////////////////////////////////////////////////////////

    public function view_report()
    {
        $data['title'] = 'DSSC Management';
        $this->load->view('asela4/style_Resources/header', $data);
        $this->load->view('asela4/style_Resources/menu');
        $this->load->view('asela4/view_report');
        $this->load->view('asela4/style_Resources/footer');
    }

    public function select()
    {
        $this->load->model("model_sport");
        $data['results'] = $this->model_sport->get_data_to_table_model();
        $this->printreport($data);
    }

    public function printreport($data)
    {
        $this->load->view('asela4/print_report',$data);
    }



}