<?
class Content_model extends CI_Model{
	
	function getEventsHome() //query the DB to get all the photos.
    	{
			$query = $this->db->query("SELECT * FROM content");
			return $query->result(); //pass results back to the controller.
		}	
}
?>