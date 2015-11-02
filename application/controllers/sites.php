<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sites extends CI_Controller
{

    public function index()
    {
        $this->viewRegistration();
    }


    function __construct()
    {
        parent::__construct();
        $this->load->model('staff_model');
    }

    public function register()
    {
        $this->load->view('view_makeRegistration');

    }

    private function json_response($successful, $message)
    {
        echo json_encode(array(
            'isSuccessful' => $successful,
            'message' => $message
        ));
    }
    //-------------------------------------------------------Iteration 1 views--------------------------------------------------------------------------

    //load the main page
    public function viewRegistration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header', $data);
        $this->load->view('thariq/style_Resources/menu_staff');
        $this->load->view('thariq/view_registration1');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function viewMakeRegistration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header', $data);
        $this->load->view('thariq/style_Resources/menu_staff');
        $this->load->view('thariq/view_makeRegistration');
        $this->load->view('thariq/style_Resources/footer');
    }

    public function viewSearch()
    {

        $this->load->helper('url');
        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header', $data);
        $this->load->view('thariq/style_Resources/menu_staff');
        $this->load->view('thariq/view_search');
        $this->load->view('thariq/style_Resources/footer');
    }

    public function viewUpdate()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header', $data);
        $this->load->view('thariq/style_Resources/menu_staff');
        $this->load->view('thariq/view_update');
        $this->load->view('thariq/style_Resources/footer');
    }

    public function viewDelete(){
        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header',$data);
        $this->load->view('thariq/style_Resources/menu_staff');
        $this->load->view('thariq/view_deleteSearch');
        $this->load->view('thariq/style_Resources/footer');
    }


    //--------------------------------------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------Iteration 2 views--------------------------------------------------------------------------

    //load the main page
    public function view_nonAcc_Registration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header2', $data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_registration1');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_nonAcc_MakeRegistration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header2', $data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_makeRegistration');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_nonAcc_Search()
    {

        $this->load->helper('url');
        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header2', $data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_search');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_nonAcc_Update()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header2', $data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_update');
        $this->load->view('thariq/style_Resources/footer');
    }

    public function view_nonAcc_Delete(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header2',$data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_deleteSearch');
        $this->load->view('thariq/style_Resources/footer');
    }


    //load the main page
    public function view_student_Registration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header3', $data);
        $this->load->view('thariq/style_Resources/menu_student');
        $this->load->view('thariq/view_student_registration1');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_student_MakeRegistration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header3', $data);
        $this->load->view('thariq/style_Resources/menu_student');
        $this->load->view('thariq/view_student_makeRegistration');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_student_Search()
    {

        $this->load->helper('url');
        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header3', $data);
        $this->load->view('thariq/style_Resources/menu_student');
        $this->load->view('thariq/view_student_search');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_student_Update()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header3', $data);
        $this->load->view('thariq/style_Resources/menu_student');
        $this->load->view('thariq/view_student_update');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_student_Delete(){
        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header3',$data);
        $this->load->view('thariq/style_Resources/menu_student');
        $this->load->view('thariq/view_student_deleteSearch');
        $this->load->view('thariq/style_Resources/footer');
    }



    //--------------------------------------------------------------------------------------------------------------------------------------------------

   //-------------------------------------------------------Iteration 3 views--------------------------------------------------------------------------

    /*
     * view_inventory_Registration()
     *
     * Loads view_inventory_registration1
     * Loads the main page
     *
     */
    public function view_inventory_Registration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_registration1');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_inventory_MakeRegistration()
     *
     * Loads view_inventory_makeRegistration
     * Loads the view to make inventory registration
     *
     */
    public function view_inventory_MakeRegistration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_makeRegistration');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_inventory_Search()
     *
     * Loads view_inventory_search
     * Loads the view to search registered inventory
     *
     */
    public function view_inventory_Search()
    {

        $this->load->helper('url');
        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_search');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_inventory_Update()
     *
     * Loads view_inventory_update
     * Loads the view to update registered inventory
     *
     */
    public function view_inventory_Update()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_update');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_inventory_Delete()
     *
     * Loads view_inventory_deleteSearch
     * Loads the view to delete registered inventory
     *
     */
    public function view_inventory_Delete(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header4',$data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_deleteSearch');
        $this->load->view('thariq/style_Resources/footer');
    }



    /*
    * view_inventory_Master()
    *
    * Loads view_inventory_registration1
    * Loads the view_inventory_addItems
    *
    */
    public function view_inventory_Master()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header4', $data);
        $this->load->view('thariq/style_Resources/menu_inventory');
        $this->load->view('thariq/view_inventory_master');
        $this->load->view('thariq/style_Resources/footer');
    }



    /*
     * view_emergency_Load()
     *
     * Loads view_emergency_search1
     * Loads the view_emergency_search1
     *
     */
    public function view_emergency_Load()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header6', $data);
        $this->load->view('thariq/style_Resources/menu_emergency');
        $this->load->view('thariq/view_emergency_search1');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_emergency_MakeSearchIndex()
     *
     * Loads view_emergency_searchindex
     * Loads the view to search student emergency details
     *
     */
    public function view_emergency_MakeSearchIndex()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header6', $data);
        $this->load->view('thariq/style_Resources/menu_emergency');
        $this->load->view('thariq/view_emergency_searchindex');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_emergency_MakeSearchName()
     *
     * Loads view_emergency_searchname
     * Loads the view to search student emergency details
     *
     */
    public function view_emergency_MakeSearchName()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header6', $data);
        $this->load->view('thariq/style_Resources/menu_emergency');
        $this->load->view('thariq/view_emergency_searchname');
        $this->load->view('thariq/style_Resources/footer');
    }



    /*
     * view_emergency_MakeSearchGrade()
     *
     * Loads view_emergency_searchgrade
     * Loads the view to search student emergency details
     *
     */
    public function view_emergency_MakeSearchGrade()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header6', $data);
        $this->load->view('thariq/style_Resources/menu_emergency');
        $this->load->view('thariq/view_emergency_searchgrade');
        $this->load->view('thariq/style_Resources/footer');
    }


    public function view_load_Thariq()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header5', $data);
        $this->load->view('thariq/style_Resources/menu');
        $this->load->view('thariq/view_thariq');
        $this->load->view('thariq/style_Resources/footer');
    }

    //--------------------------------------------------------------------------------------------------------------------------------------------------


    //-------------------------------------------------------Iteration 4 views--------------------------------------------------------------------------


    /*
     * view_fees_Registration()
     *
     * Loads view_fees_registration1
     * Loads the main page
     *
     */
    public function view_fees_Registration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header5', $data);
        $this->load->view('thariq/style_Resources/menu_fees');
        $this->load->view('thariq/view_fees_registration1');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_fees_MakeRegistration()
     *
     * Loads view_fees_makeRegistration
     * Loads the view to add fee registration
     *
     */
    public function view_fees_MakeRegistration()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header5', $data);
        $this->load->view('thariq/style_Resources/menu_fees');
        $this->load->view('thariq/view_fees_makeRegistration');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_fees_Search()
     *
     * Loads view_fees_search
     * Loads the view to search an existing fee record
     *
     */
    public function view_fees_Search()
    {

        $this->load->helper('url');
        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header5', $data);
        $this->load->view('thariq/style_Resources/menu_fees');
        $this->load->view('thariq/view_fees_search');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_fees_Update()
     *
     * Loads view_fees_update
     * Loads the view to update an existing fee record
     *
     */
    public function view_fees_Update()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header5', $data);
        $this->load->view('thariq/style_Resources/menu_fees');
        $this->load->view('thariq/view_fees_update');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*
     * view_fees_Delete()
     *
     * Loads view_fees_deleteSearch
     * Loads the view to delete an existing fee record
     *
     */
    public function view_fees_Delete(){

        $data['title']='DSSC Management';
        $this->load->view('thariq/style_Resources/header5',$data);
        $this->load->view('thariq/style_Resources/menu_fees');
        $this->load->view('thariq/view_fees_deleteSearch');
        $this->load->view('thariq/style_Resources/footer');
    }



    /*
     * view_mainPage_Load()
     *
     * Loads view_main_page
     * Loads the main page
     *
     */
    public function view_mainPage_Load()
    {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header_main', $data);
        $this->load->view('thariq/style_Resources/menu_main');
        $this->load->view('thariq/view_main_page');
        $this->load->view('thariq/style_Resources/footer');
    }


    /*public function view_inventory_Master(){

        $data['title']='DSSC Management';
        $this->load->view('style_Resources/header4',$data);
        $this->load->view('style_Resources/menu');
        $this->load->view('view_inventory_master');
        $this->load->view('style_Resources/footer');
    }

    */

    //--------------------------------------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------Iteration 1 functions--------------------------------------------------------------------------

    public function save()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data = array(
            'Sig_No' => $_POST['txtSignatureNo'],
            'Name' => $_POST['txtName'],
            'Age' => $_POST['txtAge'],
            'Contact_No' => $_POST['txtContact_No'],
            'Gender' => $_POST['txtGender'],
            'Civil_Status' => $_POST['txtCivil_Status'],
            'Address' => $_POST['txtAddress'],
            'NIC' => $_POST['txtNIC'],
            'DOB' => $_POST['txtDOB'],
            'Religion' => $_POST['txtReligion'],
            'Date_Joined' => $_POST['txtDate_Joined'],
            'Medium' => $_POST['txtMedium'],
            'Edu_Qualif' => $_POST['txtEdu_Quali'],
            'Prof_Qualif' => $_POST['txtProf_Quali'],
            'Designation' => $_POST['txtDesig'],
            'Salary' => $_POST['txtSalary'],
            'Date_Appoint	' => $_POST['txtDate_Appoint'],
            'Main_Sub' => $_POST['txtMain_Sub'],
            'Other_Sub' => $_POST['txtOther_Sub'],
            'Email' => $_POST['txtEmail'],
            'Work_Exp' => $_POST['txtWork_Exp'],
            'Other' => $_POST['txtOther'],

        );

        $this->form_validation->set_rules('txtEmail', 'Email', 'trim|required|valid_email');
        //$this->form_validation->set_rules('txtName','First Name','required|trim|xss_clean|htmlspecialchars|alpha_dash|strip_tags');
        //$this->form_validation->set_rules('txtAddress','shipping address','required|trim|xss_clean|htmlspecialchars|strip_tags');

        if ($this->form_validation->run() == FALSE)
        {
            echo "<script>alert('Invalid field data !');</script>";
            $this->viewMakeRegistration();

        }

        else {
            $this->staff_model->save($data);
            echo "<script>alert('Registration Successful !');</script>";

            $this->viewMakeRegistration();

        }
    }

    public function search()
    {

        $search_key = $_POST['txtEmp_ID'];
        $data['s_result'] = $this->staff_model->search($search_key);

        $b=count($data['s_result']);
        if ($b>0)
        {
            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header', $data);
            $this->load->view('thariq/style_Resources/menu_staff');
            $this->load->view('thariq/view_search_result', $data);
            $this->load->view('thariq/style_Resources/footer');
        }
        else
        {
            echo "<script>alert('Invalid Employee ID !');</script>";
            $this->viewSearch();
        }


    }

    public function search_update()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $search_key = $_POST['txtEmp_ID'];
        $data['s_result'] = $this->staff_model->searchUpdate($search_key);


        $b=count($data['s_result']);
        if ($b>0) {
            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header', $data);
            $this->load->view('thariq/style_Resources/menu_staff');
            $this->load->view('thariq/view_editUpdate', $data);
            $this->load->view('thariq/style_Resources/footer');

        }
        else {
            echo "<script>alert('Invalid Employee ID !');</script>";
            $this->viewUpdate();
        }

    }

    public function update()
    {
        $this->load->model('staff_model');

        $update_key = $this->input->post('txtempid');

        $data = array("Sig_No" => $this->input->post('txtsigno'),
            "Contact_No" => $this->input->post('txtcontcno'),
            "Civil_Status" => $this->input->post('txtcivilstat'),
            "Address" => $this->input->post('txtaddress'),
            "Religion" => $this->input->post('txtreligion'),
            "Medium" => $this->input->post('txtmedium'),
            "Edu_Qualif" => $this->input->post('txteduqual'),
            "Prof_Qualif" => $this->input->post('txtprofqual'),
            "Designation" => $this->input->post('txtdesig'),
            "Salary" => $this->input->post('txtsal'),
            "Main_Sub" => $this->input->post('txtmainsub'),
            "Other_Sub" => $this->input->post('txtothersub'),
            "Email" => $this->input->post('txtemail'),
            "Work_Exp" => $this->input->post('txtworkexp'),
            "Other" => $this->input->post('txtother')

        );

        $this->staff_model->update($data,$update_key);
        echo "<script>alert('Successfully Updated !');</script>";
        $this->viewUpdate();

    }

    public function delete(){

        $this->load->model('staff_model');
        $delete_key = $this->input->post('txtEmp_ID');
        $this->staff_model->delete($delete_key);

        echo "<script>alert('Successfully Deleted !');</script>";
        $this->viewDelete();

    }


    //--------------------------------------------------------------------------------------------------------------------------------------------------



   //-------------------------------------------------------Iteration 2 functions--------------------------------------------------------------------------

    public function nonAcc_save()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data = array(
            'NonAcc_Sig_No' => $_POST['txt_nonAcc_SignatureNo'],
            'NonAcc_Name' => $_POST['txt_nonAcc_Name'],
            'NonAcc_Age' => $_POST['txt_nonAcc_Age'],
            'NonAcc_Contact_No' => $_POST['txt_nonAcc_Contact_No'],
            'NonAcc_Gender' => $_POST['txt_nonAcc_Gender'],
            'NonAcc_Civil_Status' => $_POST['txt_nonAcc_Civil_Status'],
            'NonAcc_Address' => $_POST['txt_nonAcc_Address'],
            'NonAcc_Skills' => $_POST['txt_nonAcc_Skills'],
            'NonAcc_NIC' => $_POST['txt_nonAcc_NIC'],
            'NonAcc_DOB' => $_POST['txt_nonAcc_DOB'],
            'NonAcc_Religion' => $_POST['txt_nonAcc_Religion'],
            'NonAcc_Date_Joined' => $_POST['txt_nonAcc_Date_Joined'],
            'NonAcc_Language' => $_POST['txt_nonAcc_LanguageKnown'],
            'NonAcc_Edu_Qualif' => $_POST['txt_nonAcc_Edu_Quali'],
            'NonAcc_Prof_Qualif' => $_POST['txt_nonAcc_Prof_Quali'],
            'NonAcc_Designation' => $_POST['txt_nonAcc_Desig'],
            'NonAcc_Activities' => $_POST['txt_nonAcc_ExtraActivities'],
            'NonAcc_Salary' => $_POST['txt_nonAcc_Salary'],
            'NonAcc_Date_Appoint' => $_POST['txt_nonAcc_Date_Appoint'],
            'NonAcc_Email' => $_POST['txt_nonAcc_Email'],
            'NonAcc_Health' => $_POST['txt_nonAcc_Health'],
            'NonAcc_Work_Exp' => $_POST['txt_nonAcc_Work_Exp'],
            'NonAcc_Achievement' => $_POST['txt_nonAcc_Achievements'],
            'NonAcc_References' => $_POST['txt_nonAcc_Reference'],
            'NonAcc_Other' => $_POST['txt_nonAcc_Other'],

        );

        $this->form_validation->set_rules('txt_nonAcc_Email', 'Email', 'trim|required|valid_email');
        //$this->form_validation->set_rules('txtName','First Name','required|trim|xss_clean|htmlspecialchars|alpha_dash|strip_tags');
        //$this->form_validation->set_rules('txtAddress','shipping address','required|trim|xss_clean|htmlspecialchars|strip_tags');

        if ($this->form_validation->run() == FALSE)
        {
            echo "<script>alert('Invalid field data !');</script>";
            $this->view_nonAcc_MakeRegistration();

        }

        else {
            $this->staff_model->nonAcc_save($data);
            echo "<script>alert('Registration Successful !');</script>";

            $this->view_nonAcc_MakeRegistration();

        }
    }


    public function nonAcc_search()
    {

        $search_key = $_POST['txt_nonAcc_Emp_ID'];
        $data['s_result'] = $this->staff_model->nonAcc_search($search_key);

        $b=count($data['s_result']);
        if ($b>0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header2', $data);
            $this->load->view('thariq/style_Resources/menu_nonacc');
            $this->load->view('thariq/view_nonAcc_search_result', $data);
            $this->load->view('thariq/style_Resources/footer');

        }

        else {

            echo "<script>alert('Invalid Employee ID !');</script>";
            $this->view_nonAcc_Search();

        }

    }


    public function nonAcc_search_update()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $search_key = $_POST['txt_nonAcc_Emp_ID'];
        $data['s_result'] = $this->staff_model->nonAcc_searchUpdate($search_key);

        $b = count($data['s_result']);
        if ($b > 0) {


        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header2', $data);
        $this->load->view('thariq/style_Resources/menu_nonacc');
        $this->load->view('thariq/view_nonAcc_editUpdate', $data);
        $this->load->view('thariq/style_Resources/footer');
    }

        else {
            echo "<script>alert('Invalid Employee ID !');</script>";
            $this->view_nonAcc_Update();
        }


    }


    public function nonAcc_update()
    {
        $this->load->model('staff_model');

        $update_key = $this->input->post('txt_nonAcc_empid');

        $data = array("NonAcc_Sig_No" => $this->input->post('txt_nonAcc_signo'),
            "NonAcc_Contact_No" => $this->input->post('txt_nonAcc_contcno'),
            "NonAcc_Civil_Status" => $this->input->post('txt_nonAcc_civilstat'),
            "NonAcc_Address" => $this->input->post('txt_nonAcc_address'),
            "NonAcc_Skills" => $this->input->post('txt_nonAcc_skills'),
            "NonAcc_Religion" => $this->input->post('txt_nonAcc_religion'),
            "NonAcc_Language" => $this->input->post('txt_nonAcc_language'),
            "NonAcc_Edu_Qualif" => $this->input->post('txt_nonAcc_eduqual'),
            "NonAcc_Prof_Qualif" => $this->input->post('txt_nonAcc_profqual'),
            "NonAcc_Designation" => $this->input->post('txt_nonAcc_desig'),
            "NonAcc_Activities" => $this->input->post('txt_nonAcc_activities'),
            "NonAcc_Salary" => $this->input->post('txt_nonAcc_sal'),
            "NonAcc_Email" => $this->input->post('txt_nonAcc_email'),
            "NonAcc_Health" => $this->input->post('txt_nonAcc_health'),
            "NonAcc_Work_Exp" => $this->input->post('txt_nonAcc_workexp'),
            "NonAcc_Achievement" => $this->input->post('txt_nonAcc_achieve'),
            "NonAcc_References" => $this->input->post('txt_nonAcc_references'),
            "NonAcc_Other" => $this->input->post('txt_nonAcc_other')

        );

        $this->staff_model->nonAcc_update($data,$update_key);
        echo "<script>alert('Successfully Updated !');</script>";
        $this->view_nonAcc_Update();

    }

    public function nonAcc_delete(){

        $this->load->model('staff_model');
        $delete_key = $this->input->post('txt_nonAcc_Emp_ID');
        $this->staff_model->nonAcc_delete($delete_key);

        echo "<script>alert('Successfully Deleted !');</script>";
        $this->view_nonAcc_Delete();

    }


    public function student_save()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data = array(
            'Index_No' => $_POST['txt_student_Index_no'],
            'Student_FullName' => $_POST['txt_student_FullName'],
            'Student_Name_Initials' => $_POST['txt_student_NameInitials'],
            'Student_DOB' => $_POST['txt_student_DOB'],
            'Student_Religion' => $_POST['txt_student_Religion'],
            'Student_Age' => $_POST['txt_student_Age'],
            'Student_Contact_No' => $_POST['txt_student_ContactNo'],
            'Student_Distance' => $_POST['txt_student_Distance'],
            'Student_Donation' => $_POST['txt_student_Donation'],
            'Student_Date_Joined' => $_POST['txt_student_DateJoined'],
            'Student_Medium' => $_POST['txt_student_Medium'],
            'Student_Grade' => $_POST['txt_student_Grade'],
            'Student_Results' => $_POST['txt_student_result'],
            'Student_Prev_School' => $_POST['txt_student_NurserySchool'],
            'Student_Siblings' => $_POST['txt_student_Siblings'],
            'Student_Transport' => $_POST['txt_student_Transport'],
            'Student_Emergency' => $_POST['txt_student_Emergency'],
            'Student_Address' => $_POST['txt_student_Address'],
            'Student_Activities' => $_POST['txt_student_Activities'],
            'Student_Special_Needs' => $_POST['txt_student_SpecialNeeds'],
            'Student_Other' => $_POST['txt_student_Other'],

            'Student_Father_Name' => $_POST['txt_student_FatherName'],
            'Student_Father_NIC' => $_POST['txt_student_FatherNIC'],
            'Student_Father_Age' => $_POST['txt_student_FatherAge'],
            'Student_Father_Religion' => $_POST['txt_student_FatherReligion'],
            'Student_Father_DOB' => $_POST['txt_student_FatherDOB'],
            'Student_Father_Occu' => $_POST['txt_student_FatherOccupation'],
            'Student_Father_Desig' => $_POST['txt_student_FatherDesignation'],
            'Student_Father_Workplace' => $_POST['txt_student_FatherWorkDetails'],
            'Student_Father_Income' => $_POST['txt_student_FatherIncome'],
            'Student_Father_Edu' => $_POST['txt_student_FatherEducation'],
            'Student_Father_Email' => $_POST['txt_student_FatherEmail'],
            'Student_Father_ContactNo' => $_POST['txt_student_FatherContact'],
            'Student_Father_Oldboy' => $_POST['txt_student_FatherOldboy'],
            'Student_Father_Address' => $_POST['txt_student_FatherAddress'],
            'Student_Father_Other' => $_POST['txt_student_FatherOther'],

            'Student_Mother_Name' => $_POST['txt_student_MotherName'],
            'Student_Mother_NIC' => $_POST['txt_student_MotherNIC'],
            'Student_Mother_Age' => $_POST['txt_student_MotherAge'],
            'Student_Mother_Religion' => $_POST['txt_student_MotherReligion'],
            'Student_Mother_DOB' => $_POST['txt_student_MotherDOB'],
            'Student_Mother_Occu' => $_POST['txt_student_MotherOccupation'],
            'Student_Mother_Desig' => $_POST['txt_student_MotherDesignation'],
            'Student_Mother_Workplace' => $_POST['txt_student_MotherWorkDetails'],
            'Student_Mother_Income' => $_POST['txt_student_MotherIncome'],
            'Student_Mother_Edu' => $_POST['txt_student_MotherEducation'],
            'Student_Mother_Email' => $_POST['txt_student_MotherEmail'],
            'Student_Mother_ContactNo' => $_POST['txt_student_MotherContact'],
            'Student_Mother_School' => $_POST['txt_student_MotherSchool'],
            'Student_Mother_Address' => $_POST['txt_student_MotherAddress'],
            'Student_Mother_Other' => $_POST['txt_student_MotherOther'],

            'Student_Guardi_Name' => $_POST['txt_student_GuardiName'],
            'Student_Guardi_NIC' => $_POST['txt_student_GuardiNIC'],
            'Student_Guardi_Age' => $_POST['txt_student_GuardiAge'],
            'Student_Guardi_Profession' => $_POST['txt_student_GuardiProfession'],
            'Student_Guardi_ContactNo' => $_POST['txt_student_GuardiContact'],
            'Student_Guardi_Address' => $_POST['txt_student_GuardiAddress'],

            'Student_Doc_BirthCerti' => $_POST['txt_student_BirthCertifi'],
            'Student_Doc_Student_PreviousCerti' => $_POST['txt_student_PreviousCertifi'],
            'Student_Doc_Gramasevaka' => $_POST['txt_student_Gramasevaka'],
            'Student_Doc_FeeReceipt' => $_POST['txt_student_Receipt'],
            'Student_Doc_Bills' => $_POST['txt_student_Bills'],
            'Student_Doc_Deeds' => $_POST['txt_student_Deeds'],


        );

        $this->form_validation->set_rules('txt_student_FatherEmail', 'Email', 'trim|required|valid_email');
        //$this->form_validation->set_rules('txtName','First Name','required|trim|xss_clean|htmlspecialchars|alpha_dash|strip_tags');
        //$this->form_validation->set_rules('txtAddress','shipping address','required|trim|xss_clean|htmlspecialchars|strip_tags');

        if ($this->form_validation->run() == FALSE)
        {
            echo "<script>alert('Invalid field data !');</script>";
            $this->view_student_MakeRegistration();

        }

        else {
            $this->staff_model->student_save($data);
            echo "<script>alert('Registration Successful !');</script>";

            $this->view_student_MakeRegistration();

        }
    }


    public function student_search()
    {

        $search_key = $_POST['txtIndex_NO'];
        $data['s_result'] = $this->staff_model->student_search($search_key);

        $b=count($data['s_result']);
        if ($b>0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header3', $data);
            $this->load->view('thariq/style_Resources/menu_student');
            $this->load->view('thariq/view_student_search_result', $data);
            $this->load->view('thariq/style_Resources/footer');
        }

        else {

            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_student_Search();
        }

    }


    public function student_search_update()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $search_key = $_POST['txt_student_indexNo'];
        $data['s_result'] = $this->staff_model->student_searchUpdate($search_key);


        $b = count($data['s_result']);
        if ($b > 0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header3', $data);
            $this->load->view('thariq/style_Resources/menu_student');
            $this->load->view('thariq/view_student_editUpdate', $data);
            $this->load->view('thariq/style_Resources/footer');
        }

        else {
            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_student_Update();
        }

    }


    public function student_update()
    {
        $this->load->model('staff_model');

        $update_key = $this->input->post('txt_student_index_no');

        $data = array("Student_Religion" => $this->input->post('txt_student_religion'),
            "Student_Contact_No" => $this->input->post('txt_student_contactNo'),
            "Student_Distance" => $this->input->post('txt_student_distance'),
            "Student_Donation" => $this->input->post('txt_student_donation'),
            "Student_Medium" => $this->input->post('txt_student_medium'),
            "Student_Siblings" => $this->input->post('txt_student_siblings'),
            "Student_Transport" => $this->input->post('txt_student_transport'),
            "Student_Emergency" => $this->input->post('txt_student_emergency'),
            "Student_Address" => $this->input->post('txt_student_address'),
            "Student_Activities" => $this->input->post('txt_student_Aactivities'),
            "Student_Special_Needs" => $this->input->post('txt_student_specialNeeds'),
            "Student_Other" => $this->input->post('txt_student_other'),

            "Student_Father_Religion" => $this->input->post('txt_student_fatherReligion'),
            "Student_Father_Occu" => $this->input->post('txt_student_fatherOccupation'),
            "Student_Father_Desig" => $this->input->post('txt_student_fatherDesignation'),
            "Student_Father_Workplace" => $this->input->post('txt_student_fatherWorkDetails'),
            "Student_Father_Income" => $this->input->post('txt_student_fatherIncome'),
            "Student_Father_Edu" => $this->input->post('txt_student_fatherEducation'),
            "Student_Father_Email" => $this->input->post('txt_student_fatherEmail'),
            "Student_Father_ContactNo" => $this->input->post('txt_student_fatherContact'),
            "Student_Father_Address" => $this->input->post('txt_student_fatherAddress'),
            "Student_Father_Other" => $this->input->post('txt_student_fatherOther'),

            "Student_Mother_Religion" => $this->input->post('txt_student_motherReligion'),
            "Student_Mother_Occu" => $this->input->post('txt_student_motherOccupation'),
            "Student_Mother_Desig" => $this->input->post('txt_student_motherDesignation'),
            "Student_Mother_Workplace" => $this->input->post('txt_student_motherWorkDetails'),
            "Student_Mother_Income" => $this->input->post('txt_student_motherIncome'),
            "Student_Mother_Edu" => $this->input->post('txt_student_motherEducation'),
            "Student_Mother_Email" => $this->input->post('txt_student_motherEmail'),
            "Student_Mother_ContactNo" => $this->input->post('txt_student_motherContact'),
            "Student_Mother_Address" => $this->input->post('txt_student_motherAddress'),
            "Student_Mother_Other" => $this->input->post('txt_student_motherOther'),

            "Student_Guardi_Name" => $this->input->post('txt_student_guardiName'),
            "Student_Guardi_NIC" => $this->input->post('txt_student_guardiNIC'),
            "Student_Guardi_Age" => $this->input->post('txt_student_guardiAge'),
            "Student_Guardi_Profession" => $this->input->post('txt_student_guardiProfession'),
            "Student_Guardi_ContactNo" => $this->input->post('txt_student_guardiContact'),
            "Student_Guardi_Address" => $this->input->post('txt_student_guardiAddress'),

            "Student_Doc_BirthCerti" => $this->input->post('txt_student_birthCertifi'),
            "Student_Doc_Student_PreviousCerti" => $this->input->post('txt_student_previousCertifi'),
            "Student_Doc_Gramasevaka" => $this->input->post('txt_student_gramasevaka'),
            "Student_Doc_FeeReceipt" => $this->input->post('txt_student_receipt'),
            "Student_Doc_Bills" => $this->input->post('txt_student_bills'),
            "Student_Doc_Deeds" => $this->input->post('txt_student_deeds'),


        );

        $this->staff_model->student_update($data,$update_key);
        echo "<script>alert('Successfully Updated !');</script>";
        $this->view_student_Update();

    }


    public function student_delete(){

        $this->load->model('staff_model');
        $delete_key = $this->input->post('txt_student_index_No');
        $this->staff_model->student_delete($delete_key);

        echo "<script>alert('Successfully Deleted !');</script>";
        $this->view_student_Delete();

    }




    //--------------------------------------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------Iteration 3 functions--------------------------------------------------------------------------


    /**
     *
     * inventory_save()
     *
     * Save inventory details
     * Get input from user and assigning to database variables
     * @return boolean
     *
     */
    public function inventory_save()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data = array(
            'item_id' => $_POST['txt_inventory_ItemID'],
            'item_name' => $_POST['txt_inventory_ItemName'],
            'item_description' => $_POST['txt_inventory_ItemDesc'],
            'quantity' => $_POST['txt_inventory_Quantity'],
            'unit_price' => $_POST['txt_inventory_UnitPrice'],
            'total_price' => $_POST['txt_inventory_TotalPrice'],
            'date_ordered' => $_POST['txt_inventory_DateOrdered'],
            'date_received' => $_POST['txt_inventory_DateReceived'],
            'warranty' => $_POST['txt_inventory_Warranty'],
            'payment_mode' => $_POST['txt_inventory_PaymentMode'],
            'item_condition' => $_POST['txt_inventory_Condition'],
            'supplier_name' => $_POST['txt_inventory_SupplierName'],
            'supplier_phone' => $_POST['txt_inventory_SupplierContactNo'],
            'supplier_addr' => $_POST['txt_inventory_SupplierAddr'],
            'supplier_mail' => $_POST['txt_inventory_SupplierEmail'],
            'contact_person' => $_POST['txt_inventory_ContactPerson'],

        );

        $this->form_validation->set_rules('txt_inventory_SupplierEmail', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('Invalid field data !');</script>";
            $this->view_inventory_MakeRegistration();

        } else {
            $this->staff_model->inventory_save($data);
            echo "<script>alert('Registration Successful !');</script>";

            $this->view_inventory_MakeRegistration();
        }
    }


    /**
     *
     * inventory_search()
     *
     * Search inventory details
     * Get input from user and search particular record
     * Loads view_inventory_search_result
     * @return boolean
     *
     */
    public function inventory_search()
    {

        $search_key = $_POST['txt_inventory_Item_ID'];
        $data['s_result'] = $this->staff_model->inventory_search($search_key);

        $b=count($data['s_result']);
        if ($b>0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header4', $data);
            $this->load->view('thariq/style_Resources/menu_inventory');
            $this->load->view('thariq/view_inventory_search_result', $data);
            $this->load->view('thariq/style_Resources/footer');

        }

        else {

            echo "<script>alert('Invalid Item ID !');</script>";
            $this->view_inventory_Search();

        }

    }


    /**
     *
     * inventory_search_update()
     *
     * Search inventory record to update
     * Get input from user and search particular record
     * Loads view_inventory_editUpdate
     * @return boolean
     *
     */
    public function inventory_search_update()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $search_key = $_POST['txt_inventory_Itemid'];
        $data['s_result'] = $this->staff_model->inventory_searchUpdate($search_key);

        $b = count($data['s_result']);
        if ($b > 0) {


            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header4', $data);
            $this->load->view('thariq/style_Resources/menu_inventory');
            $this->load->view('thariq/view_inventory_editUpdate', $data);
            $this->load->view('thariq/style_Resources/footer');
        }

        else {
            echo "<script>alert('Invalid Item ID !');</script>";
            $this->view_inventory_Update();
        }


    }


    /**
     *
     * inventory_update()
     *
     * Update inventory details
     * Get new input from user and update existing record
     * @return boolean
     *
     */
    public function inventory_update()
    {
        $this->load->model('staff_model');

        $update_key = $this->input->post('txt_inven_ItemID');

        $data = array("item_description" => $this->input->post('txt_inven_ItemDesc'),
            "quantity" => $this->input->post('txt_inven_Quantity'),
            "unit_price" => $this->input->post('txt_inven_UnitPrice'),
            "total_price" => $this->input->post('txt_inven_TotalPrice'),
            "supplier_name" => $this->input->post('txt_inven_SupplierName'),
            "supplier_phone" => $this->input->post('txt_inven_SupplierContactNo'),
            "supplier_addr" => $this->input->post('txt_inven_SupplierAddr'),
            "supplier_mail" => $this->input->post('txt_inven_SupplierEmail'),
            "contact_person" => $this->input->post('txt_inven_ContactPerson')

        );

        $this->staff_model->inventory_update($data,$update_key);
        echo "<script>alert('Successfully Updated !');</script>";
        $this->view_inventory_Update();

    }


    /**
     *
     * inventory_delete()
     *
     * Delete inventory details
     * Get input from user and delete existing record
     * @return boolean
     *
     */
    public function inventory_delete(){


        $search_key = $_POST['txt_inven_itemid'];
        $data['s_result'] = $this->staff_model->inventory_search($search_key);

        $b = count($data['s_result']);
        if ($b > 0) {

            $this->load->model('staff_model');
            $delete_key = $this->input->post('txt_inven_itemid');
            $this->staff_model->inventory_delete($delete_key);

            echo "<script>alert('Successfully Deleted !');</script>";
            $this->view_inventory_Delete();
        }

        else {
            echo "<script>alert('Invalid Item ID !');</script>";
            $this->view_inventory_Delete();
        }
    }



    /**
     *
     * inventory_saveMaster()
     *
     * Save inventory details to the master database
     * Get input from user and assigning to database variables
     * @return boolean
     *
     */
    public function inventory_saveMaster()
    {

        $search_key = $_POST['txt_inventoryMaster_ItemID'];
        $data['s_result'] = $this->staff_model->inventory_MasterDBsearch($search_key);
        $result = count($data['s_result']);

        if ($result > 0) {

            echo "<script>alert('Item ID Already Exists !');</script>";
        }

        else {

            $data = array(
                'item_id' => $_POST['txt_inventoryMaster_ItemID'],
                'item_name' => $_POST['txt_inventoryMaster_ItemName'],
                'item_description' => $_POST['txt_inventoryMaster_Description'],

            );

            $this->staff_model->inventory_masterDBsave($data);
            echo "<script>alert('Added Successfully !');</script>";
        }

        $this->view_inventory_Master();

    }


    /**
     *
     * emergency_index()
     *
     * Search student emergency details by index no
     * Get input from user and search student emergency details
     * Loads view_emergency_search_resultIndex
     * @return boolean
     *
     */
    public function emergency_index()
    {

        $search_key = $_POST['txt_emergency_index'];
        $data['s_result'] = $this->staff_model->emergency_searchIndex($search_key);

        $b=count($data['s_result']);
        if ($b>0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header6', $data);
            $this->load->view('thariq/style_Resources/menu_emergency');
            $this->load->view('thariq/view_emergency_search_resultIndex', $data);
            $this->load->view('thariq/style_Resources/footer');
        }

        else {

            echo "<script>alert('Index Number Not Found !');</script>";
            $this->view_emergency_MakeSearchIndex();
        }

    }


    /**
     *
     * emergency_name()
     *
     * Search student emergency details by name
     * Get input from user and search student emergency details
     * Loads view_emergency_search_resultName
     * @return boolean
     *
     */

    public function emergency_name()
    {

    $search_key = $_POST['txt_emergency_name'];
    $data['s_result'] = $this->staff_model->emergency_searchName($search_key);

    $b=count($data['s_result']);
    if ($b>0) {

        $data['title'] = 'DSSC Management';
        $this->load->view('thariq/style_Resources/header6', $data);
        $this->load->view('thariq/style_Resources/menu_emergency');
        $this->load->view('thariq/view_emergency_search_resultName', $data);
        $this->load->view('thariq/style_Resources/footer');
    }

    else {

        echo "<script>alert('Name Not Found !');</script>";
        $this->view_emergency_MakeSearchName();
    }

}



    /**
     *
     * emergency_grade()
     *
     * Search student emergency details by grade
     * Get input from user and search student emergency details
     * Loads view_emergency_search_resultGrade
     * @return boolean
     *
     */

    public function emergency_grade()
    {

        $search_key = $_POST['txt_emergency_grade'];
        $data['s_result'] = $this->staff_model->emergency_searchGrade($search_key);

        $b=count($data['s_result']);
        if ($b>0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header6', $data);
            $this->load->view('thariq/style_Resources/menu_emergency');
            $this->load->view('thariq/view_emergency_search_resultGrade', $data);
            $this->load->view('thariq/style_Resources/footer');
        }

        else {

            echo "<script>alert('Grade Not Found !');</script>";
            $this->view_emergency_MakeSearchGrade();
        }

    }





    //--------------------------------------------------------------------------------------------------------------------------------------------------



    //-------------------------------------------------------Iteration 4 functions--------------------------------------------------------------------------



    /**
     *
     * getNameByID()
     *
     * Get student name by index no
     * Get index number from user and fill the student name
     * Fills the student name text box
     * @return boolean
     *
     */
    public function getNameByID()
    {
        // This function used to clean up data retrieved from a database
        $stuID_txt = stripcslashes($_POST['txt_indexID']);


        // Decode the JSON array. Takes a JSON string and converts it into a PHP variable
        $stuID_txt = json_decode($stuID_txt, TRUE);



        $indID = $stuID_txt['txt_indexID'];

        // Now $tableData can be accessed like a PHP array
        $query = $this->db->query("SELECT * FROM `student` WHERE `Index_No` ='$indID'");



            if ($query->num_rows() > 0) {

                $row = $query->row();
                $name = $row->Student_Name_Initials;

                $message = $name;

                // Returns an HttpResponse object containing JSON serialized data
                $this->json_response(TRUE, $message);

            }

        }



    /**
     *
     * getGradeByID()
     *
     * Get student grade by index no
     * Get index number from user and fill the student grade
     * Fills the student drage text box
     * @return boolean
     *
     */
    public function getGradeByID()
    {
        // This function used to clean up data retrieved from a database
        $stuID_txt = stripcslashes($_POST['txt_indexID']);


        // Decode the JSON array. Takes a JSON string and converts it into a PHP variable
        $stuID_txt = json_decode($stuID_txt, TRUE);


        $indID = $stuID_txt['txt_indexID'];

        // Now $tableData can be accessed like a PHP array
        $query = $this->db->query("SELECT * FROM `student` WHERE `Index_No` ='$indID'");


        if ($query->num_rows() > 0) {

            $row = $query->row();
            $name = $row->Student_Grade;

            $message = $name;

            // Returns an HttpResponse object containing JSON serialized data
            $this->json_response(TRUE, $message);

        }
    }


    /**
     *
     * fees_save()
     *
     * Store fee details
     * Get input from user and assigning to database variables
     * @return boolean
     *
     */
    public function fees_save()
    {

        $search_key = $_POST['txt_indexID'];

        $search_key_receipt = $_POST['txt_fees_ReceiptNo'];

        // Calling the model function to access the database
        $data['s_result'] = $this->staff_model->fees_search($search_key);

        // Calling the model function to access the database
        $data2['s_result'] = $this->staff_model->student_search($search_key);

        $data3['s_result'] = $this->staff_model->fees_search_receiptNo($search_key_receipt);

        $result=count($data['s_result']);

        $result2=count($data2['s_result']);

        $result3=count($data3['s_result']);

        if ($result2>0) {

            if ($result>0){

                echo "<script>alert('Index No Already Exists !');</script>";
                $this->view_fees_MakeRegistration();
            }

            elseif($result3>0){

                echo "<script>alert('Receipt No Already Exists !');</script>";
                $this->view_fees_MakeRegistration();
            }

            else{

                $data = array(
                    'index_no' => $_POST['txt_indexID'],
                    'student_name' => $_POST['txt_fees_StudentName'],
                    'grade' => $_POST['txt_fees_Grade'],
                    'receipt_no' => $_POST['txt_fees_ReceiptNo'],
                    'amount_figures' => $_POST['txt_fees_AmountFigures'],
                    'amount_words' => $_POST['txt_fees_AmountWords'],
                    'date' => $_POST['txt_fees_Date'],
                    'received_year' => $_POST['txt_fees_ReceivedYear'],
                    'received_term' => $_POST['txt_fees_ReceivedTerm'],

                );

                $this->staff_model->fees_save($data); // Calling the model function to access the database
                echo "<script>alert('Registration Successful !');</script>";

                $this->view_fees_MakeRegistration();
            }


        }

        else {
                echo "<script>alert('Invalid Index No !');</script>";
                $this->view_fees_MakeRegistration();

        }
    }


    /**
     *
     * fees_search()
     *
     * Search fee details
     * Get input from user and search particular record
     * Loads view_fees_search_result
     * @return boolean
     *
     */
    public function fees_search()
    {

        $search_key = $_POST['txt_fees_IndexNo'];

        // Calling the model function to access the database
        $data['s_result'] = $this->staff_model->fees_search($search_key);

        $b=count($data['s_result']);

        if ($b>0) {

            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header5', $data);
            $this->load->view('thariq/style_Resources/menu_fees');
            $this->load->view('thariq/view_fees_search_result', $data);
            $this->load->view('thariq/style_Resources/footer');

        }

        else {

            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_fees_Search();

        }

    }


    /**
     *
     * fees_search_update()
     *
     * Search fee record to update
     * Get input from user and search particular record
     * Loads view_fees_editUpdate
     * @return boolean
     *
     */
    public function fees_search_update()
    {

        $search_key = $_POST['txt_fees_Indexno'];

        // Calling the model function to access the database
        $data['s_result'] = $this->staff_model->fees_searchUpdate($search_key);

        $b = count($data['s_result']);

        if ($b > 0) {


            $data['title'] = 'DSSC Management';
            $this->load->view('thariq/style_Resources/header5', $data);
            $this->load->view('thariq/style_Resources/menu_fees');
            $this->load->view('thariq/view_fees_editUpdate', $data);
            $this->load->view('thariq/style_Resources/footer');
        }

        else {
            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_fees_Update();
        }


    }


    /**
     *
     * fees_update()
     *
     * Update fee details
     * Get new input from user and update existing record
     * @return boolean
     *
     */
    public function fees_update()
    {
        $this->load->model('staff_model');

        $update_key = $this->input->post('txt_fees_IndexNum');

        $data = array("grade" => $this->input->post('txt_fees_grade'),
            "amount_figures" => $this->input->post('txt_fees_AmountFig'),
            "amount_words" => $this->input->post('txt_fees_Amountwords'),
            "date" => $this->input->post('txt_fees_date'),
            "received_year" => $this->input->post('txt_fees_Receivedyear'),
            "received_term" => $this->input->post('txt_fees_Receivedterm')

        );

        // Calling the model function to access the database
        $this->staff_model->fees_update($data,$update_key);

        echo "<script>alert('Successfully Updated !');</script>";
        $this->view_fees_Update();

    }


    /**
     *
     * fees_delete()
     *
     * Delete fee details
     * Get input from user and delete existing record
     * @return boolean
     *
     */
    public function fees_delete(){


        $search_key = $_POST['txt_fees_indexno'];

        // Calling the model function to access the database
        $data['s_result'] = $this->staff_model->fees_search($search_key);

        $b = count($data['s_result']);

        if ($b > 0) {

            $this->load->model('staff_model');
            $delete_key = $this->input->post('txt_fees_indexno');

            // Calling the model function to access the database
            $this->staff_model->fees_delete($delete_key);

            echo "<script>alert('Successfully Deleted !');</script>";
            $this->view_fees_Delete();
        }

        else {
            echo "<script>alert('Invalid Index No !');</script>";
            $this->view_fees_Delete();
        }

    }



    //--------------------------------------------------------------------------------------------------------------------------------------------------



}