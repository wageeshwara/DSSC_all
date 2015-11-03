<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Budget extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function AddBudget()
	{
		$this->load->helper('url');
		$data["title"]="Add Budget";
		
		$id=$this->uri->segment(3);
		$president=$this->uri->segment(4);
		$name=$this->uri->segment(5);
		$data["EventID"]=$id;
		$data["President"]=$president;
		$data["EventName"]=$name;
		$this->load->view('Budget/AddBudget',$data);
	}
	public function UpdateBudget()
	{
		$this->load->model('model_budget');
		$data["title"]="Update Budget";
		$data["budgets"]=$this->model_budget->getEventsList();
		$this->load->helper('url');
		$this->load->view('Budget/UpdateBudget',$data);
	}
	public function BudgetReport()
	{
		$this->load->model('model_budget');
		$data["title"]="Update Budget";
		$data["budgets"]=$this->model_budget->getEventsList();
		$this->load->helper('url');
		$this->load->view('Budget/BudgetReport',$data);
	}
	public function ApproveBudget()
	{
		$this->load->model('model_budget');
		$data["title"]="Update Budget";
		$data["budgets"]=$this->model_budget->getEventsList();
		$this->load->helper('url');
		$this->load->view('Budget/ApproveBudget',$data);
	}
	public function ViewBudget()
	{	
		$id=$this->uri->segment(3);
		$this->load->model('model_budget');
		$this->load->helper('url');
		$data["title"]="View Budget";
		$data["budget"]=$this->model_budget->getSpecificBudget($id);
		
		$this->load->view('Budget/ViewBudget',$data);
	}
	
	public function EditBudget()
	{	
		$id=$this->uri->segment(3);
		$this->load->model('model_budget');
		$this->load->helper('url');
		$data["title"]="View Budget";
		$data["budget"]=$this->model_budget->getSpecificEvent($id);
		
		$this->load->view('Budget/EditBudget',$data);
	}
	public function CertifyBudget()
	{	
		$id=$this->uri->segment(3);
		$this->load->model('model_budget');
		$this->load->helper('url');
		$data["title"]="View Budget";
		$data["budget"]=$this->model_budget->getSpecificEvent($id);
		
		$this->load->view('Budget/CertifyBudget',$data);
	}public function Report()
	{	
		$id=$this->uri->segment(3);
		$this->load->model('model_budget');
		$this->load->helper('url');
		$data["title"]="View Budget";
		$data["budget"]=$this->model_budget->getSpecificEvent($id);
		
		$this->load->view('Budget/Report',$data);
	}
	public function data_submitted() {
		$detail = array(
		'EventName'=>$this->input->post('u_name'),
		'EventId'=>$this->input->post('event_uid'),
		'Society' => $this->input->post('u_school'),
		'TeacherCharge' => $this->input->post('u_teacher'),
		'President' => $this->input->post('u_president'),
		'Treasurer' => $this->input->post('u_treasurer'),
		'RaMaterial' => $this->input->post('u_raw'),
		'Grocerie' => $this->input->post('u_groceries'),
		'Labor' => $this->input->post('u_labor'),
		'Refreshment' => $this->input->post('u_refreshments'),
		'Media' => $this->input->post('u_media'),
		'Transportation' => $this->input->post('u_transportation'),
		'Printouts' => $this->input->post('u_photoscopy'),
		'Gifts' => $this->input->post('u_gifts'),
		'Others' => $this->input->post('u_other'),
		'TotalIncome' => $this->input->post('u_expect_total_income'),
		'TotalExpenses' => $this->input->post('u_total_budget'),
		'Active'=>1,
		'CreatedDate' => date('Y-m-d H:i:s')
	
		);
		$state=$this->db->insert('budget',$detail);
		$this->load->helper('url');
		$data["title"]="Add Budget";
		// Show submitted data on view page again.
		if($state)
		{
				$data["EventName"]=" ";
			$data["EventID"]=" ";
			$data["President"]=" ";
			
			$data["status"]=1;
			$this->load->view("Budget/AddBudget", $data);
		}
		else
		{
				$data["EventName"]=" ";
			$data["EventID"]=" ";
			$data["President"]=" ";
			$data["status"]=0;
			$this->load->view('Budget/AddBudget',$data);
		}
	}
	
	public function data_updated() {
		$detail = array(
		
		'Society' => $this->input->post('u_school'),
		'TeacherCharge' => $this->input->post('u_teacher'),
		'President' => $this->input->post('u_president'),
		'Treasurer' => $this->input->post('u_treasurer'),
		'RaMaterial' => $this->input->post('u_raw'),
		'Grocerie' => $this->input->post('u_groceries'),
		'Labor' => $this->input->post('u_labor'),
		'Refreshment' => $this->input->post('u_refreshments'),
		'Media' => $this->input->post('u_media'),
		'Transportation' => $this->input->post('u_transportation'),
		'Printouts' => $this->input->post('u_photoscopy'),
		'Gifts' => $this->input->post('u_gifts'),
		'Others' => $this->input->post('u_other'),
		'TotalIncome' => $this->input->post('u_expect_total_income'),
		'TotalExpenses' => $this->input->post('u_total_budget')
		);
		$this->db->where('UId',$this->input->post('u_uid'));
       	$state=$this->db->update('budget',$detail);
		$this->load->helper('url');
		
		// Show submitted data on view page again.
		$this->load->model('model_budget');
		$data["title"]="Update Event";
		$data["budgets"]=$this->model_budget->getEventsList();
		$this->load->helper('url');
		
		if($state)
		{
			
			$data["status"]=1;
			$this->load->view("Budget/UpdateBudget", $data);
		}
		else
		{
			$data["status"]=0;
			$this->load->view('Budget/UpdateBudget',$data);
		}
	}
		
		public function Accept() {
			$uid=$this->uri->segment(3);
		$status=$this->uri->segment(4);
		$detail = array(
		'Approve' => $status
	
		);
		$this->db->where('UId',$uid);
       	$state=$this->db->update('budget',$detail);
		$this->load->helper('url');
		
		// Show submitted data on view page again.
		$this->load->model('model_budget');
		$data["title"]="Update Event";
		$data["budgets"]=$this->model_budget->getEventsList();
		$this->load->helper('url');
		
		if($state)
		{
			
			$data["status"]=1;
			$this->load->view("Budget/ApproveBudget", $data);
		}
		else
		{
			$data["status"]=0;
			$this->load->view('Budget/ApproveBudget',$data);
		}
	}
	public function remove_data() {
		$detail = array(
		'Active' =>0
		);
		$this->db->where('UId',$this->input->post('txtUId'));
       	$state=$this->db->update('budget',$detail);
		$this->load->helper('url');
		
		// Show submitted data on view page again.
		$this->load->model('model_budget');
		$data["title"]="Update Budget";
		$data["budgets"]=$this->model_budget->getEventsList();
		$this->load->helper('url');
		
		if($state)
		{
			
			$data["status"]=1;
			$this->load->view("Budget/UpdateBudget", $data);
		}
		else
		{
			$data["status"]=0;
			$this->load->view('Budget/UpdateBudget',$data);
		}
	}

}

