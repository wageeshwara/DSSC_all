<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StaffController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('staff_model');
    }

    public function register()
    {
        $this->load->view('view_makeRegistration');

    }

    /*
    public function save()
    {

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



        );*/
        //$this->staff_model->save($data);
        /*$this->load->view('success');
        $this->load->view('student_registration');*/

    //}
}