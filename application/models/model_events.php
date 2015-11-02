<?php
class model_events extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function getEventsList()
	{
		$query=$this->db->query("SELECT * FROM event WHERE Active=1");
		if($query->num_rows()>0)
			{
				return $query->result();
				}
		else
			{
			return NULL; 
				}
	}
	function getSpecificEvent($id)
	{
		$query=$this->db->query("SELECT * FROM event WHERE Active=1 AND UId='$id'");
		if($query->num_rows()>0)
			{
				return $query->result();
				}
		else
			{
			return NULL; 
				}
	}
	function createEvent($detail)
	{
		
		$query=$this->db->query("INSERT INTO event(EventName, EventDate, Venue, HoldLoc, Incharge, President, ChiefGuest, ExpecBudget, Active, CreatedDate) VALUES ('".$detail['name']."','".$detail['date']."','".$detail['venue']."','".$detail['hold']."','".$detail['teacher']."','".$detail['president']."','".$detail['guest']."','".$detail['budget']."',1,now())");
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			
			return false; 
			
		}
	}
}
?>