<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

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
	public function AddEvent()
	{
		$this->load->helper('url');
		$data["title"]="Add Event";
		$this->load->view('Event/AddEvent',$data);
		
	}
	public function UpdateEvent()
	{
		$this->load->model('model_events');
		$data["title"]="Update Event";
		$data["events"]=$this->model_events->getEventsList();
		$this->load->helper('url');
		$this->load->view('Event/UpdateEvent',$data);
	}
	public function ViewEvent()
	{	
		$id=$this->uri->segment(3);
		$this->load->model('model_events');
		$this->load->helper('url');
		$data["title"]="View Event";
		$data["events"]=$this->model_events->getSpecificEvent($id);
		
		$this->load->view('Event/ViewEvent',$data);
	}
	public function EditEvent()
	{	
		$id=$this->uri->segment(3);
		$this->load->model('model_events');
		$this->load->helper('url');
		$data["title"]="View Event";
		$data["events"]=$this->model_events->getSpecificEvent($id);
		
		$this->load->view('Event/EditEvent',$data);
	}
	public function data_submitted() {
		$detail = array(
		'EventName' => $this->input->post('u_name'),
		'EventDate' => date("Y-m-d H:i:s", strtotime($this->input->post('u_date'))),
		'Venue' => $this->input->post('u_venue'),
		'HoldLoc' => $this->input->post('u_hold'),
		'Incharge' => $this->input->post('u_teacher'),
		'President' => $this->input->post('u_president'),
		'ChiefGuest' => $this->input->post('u_guest'),
		'ExpecBudget' => $this->input->post('u_budget'),
		'Active'=>1,
		'CreatedDate'=>date('Y-m-d H:i:s')
	
		);
		$state=$this->db->insert('event',$detail);
		$this->load->helper('url');
		$data["title"]="Add Event";
		// Show submitted data on view page again.
		if($state)
		{
			
			$data["status"]=1;
			$this->load->view("Event/AddEvent", $data);
		}
		else
		{
			$data["status"]=0;
			$this->load->view('Event/AddEvent',$data);
		}
	}
	
	public function data_updated() {
		$detail = array(
		'EventName' => $this->input->post('u_name'),
		'EventDate' => date("Y-m-d H:i:s", strtotime($this->input->post('u_date'))),
		'Venue' => $this->input->post('u_venue'),
		'HoldLoc' => $this->input->post('u_hold'),
		'Incharge' => $this->input->post('u_teacher'),
		'President' => $this->input->post('u_president'),
		'ChiefGuest' => $this->input->post('u_guest'),
		'ExpecBudget' => $this->input->post('u_budget')
		
	
		);
		$this->db->where('UId',$this->input->post('u_uid'));
       	$state=$this->db->update('event',$detail);
		$this->load->helper('url');
		
		// Show submitted data on view page again.
		$this->load->model('model_events');
		$data["title"]="Update Event";
		$data["events"]=$this->model_events->getEventsList();
		$this->load->helper('url');
		
		if($state)
		{
			
			$data["status"]=1;
			$this->load->view("Event/UpdateEvent", $data);
		}
		else
		{
			$data["status"]=0;
			$this->load->view('Event/UpdateEvent',$data);
		}
	}

	public function remove_data() {
		$detail = array(
		'Active' =>0
		);
		$this->db->where('UId',$this->input->post('txtUId'));
       	$state=$this->db->update('event',$detail);
		$this->load->helper('url');
		
		// Show submitted data on view page again.
		$this->load->model('model_events');
		$data["title"]="Update Event";
		$data["events"]=$this->model_events->getEventsList();
		$this->load->helper('url');
		
		if($state)
		{
			
			$data["status"]=1;
			$this->load->view("Event/UpdateEvent", $data);
		}
		else
		{
			$data["status"]=0;
			$this->load->view('Event/UpdateEvent',$data);
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */