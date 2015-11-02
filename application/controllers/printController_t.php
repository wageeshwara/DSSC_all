<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class printController_t extends CI_Controller
{

    public function index()
    {
        $this->select();
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('staff_model');
    }


    //-------------------------------------------------------Iteration 2 views--------------------------------------------------------------------------


    public function view_Report(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header',$data);
        $this->load->view('thariq/style_Resources/menu_staff');
        $this->load->view('thariq/view_report');
        $this->load->view('thariq/style_Resources/footer');

    }


    public function view_nonAcc_Report(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header2',$data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_report');
        $this->load->view('thariq/style_Resources/footer');

    }

    public function view_student_Report(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header3',$data);
        $this->load->view('thariq/style_Resources/menu_student');
        $this->load->view('thariq/view_student_report');
        $this->load->view('thariq/style_Resources/footer');

    }


//--------------------------------------------------------------------------------------------------------------------------------------------------




//-------------------------------------------------------Iteration 3 views--------------------------------------------------------------------------


    public function view_inventory_Report(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header4',$data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_report');
        $this->load->view('thariq/style_Resources/footer');

    }


//--------------------------------------------------------------------------------------------------------------------------------------------------



//-------------------------------------------------------Iteration 4 views--------------------------------------------------------------------------


    public function view_fees_Report(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header5',$data);
        $this->load->view('thariq/style_Resources/menu_fees');
        $this->load->view('thariq/view_fees_report');
        $this->load->view('thariq/style_Resources/footer');

    }

//--------------------------------------------------------------------------------------------------------------------------------------------------


//-------------------------------------------------------Iteration 2 functions--------------------------------------------------------------------------
    public function select()
    {
        $search_key = $_POST['txtemp_ID'];
        $data['results'] = $this->staff_model->search($search_key);

        $b = count($data['results']);
        if ($b > 0) {
            $this->printreport($data);

        }
        else {
            echo "<script>alert('Invalid Employee ID !');</script>";
            $this->view_Report();
        }


    }

    public function nonAcc_select()
    {
        $search_key = $_POST['txtemp_Id'];
        $data['results'] = $this->staff_model->nonAcc_search($search_key);

        $b = count($data['results']);
        if ($b > 0) {
            $this->printreport_nonAcc($data);
        }

        else {
            echo "<script>alert('Invalid Employee ID !');</script>";
            $this->view_nonAcc_Report();
        }

    }

    public function student_select()
    {
        $search_key = $_POST['txtindex_NO'];
        $data['results'] = $this->staff_model->student_search($search_key);

        $b = count($data['results']);
        if ($b > 0) {
            $this->printreport_student($data);
        }

        else {
            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_student_Report();
        }



    }

    public function printreport($data)
    {

        $this->load->view('thariq/print_report_t',$data);

    }

    public function printreport_nonAcc($data)
    {

        $this->load->view('thariq/print_nonAcc_report',$data);

    }

    public function printreport_student($data)
    {

        $this->load->view('thariq/print_student_report',$data);

    }


//--------------------------------------------------------------------------------------------------------------------------------------------------



//-------------------------------------------------------Iteration 3 functions--------------------------------------------------------------------------


    /**
     *
     * inventory_select()
     *
     * Get input from the user and search a particular inventory record
     * Loads printreport_inventory()
     *
     * @return boolean
     *
     */
    public function inventory_select()
    {
        $search_key = $_POST['txtitem_Id'];
        $data['results'] = $this->staff_model->inventory_search($search_key);

        $b = count($data['results']);
        if ($b > 0) {
            $this->printreport_inventory($data);
        }

        else {
            echo "<script>alert('Invalid Item ID !');</script>";
            $this->view_inventory_Report();
        }

    }


    /**
     *
     * Get values form database
     *
     * @param $data has database values of a particular record
     * Loads view print_inventory_report
     *
     * @return boolean
     *
     */
    public function printreport_inventory($data)
    {

        $this->load->view('thariq/print_inventory_report',$data);

    }



    //--------------------------------------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------Iteration 4 functions--------------------------------------------------------------------------


    /**
     *
     * fees_select()
     *
     * Get input from the user and search a particular fee record
     * Loads printreport_fees()
     *
     * @return boolean
     *
     */
    public function fees_select()
    {
        $search_key = $_POST['txtindex_No'];

        // Calling the model function to access the database
        $data['results'] = $this->staff_model->fees_search($search_key);

        $b = count($data['results']);

        if ($b > 0) {

            $this->printreport_fees($data);
        }

        else {

            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_fees_Report();
        }

    }



    /**
     *
     * Get values form database
     *
     * @param $data has database values of a particular record
     * Loads view print_fees_report
     *
     * @return boolean
     *
     */
    public function printreport_fees($data)
    {

        $this->load->view('thariq/print_fees_report',$data);

    }

//--------------------------------------------------------------------------------------------------------------------------------------------------



}