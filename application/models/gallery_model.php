<?
class Gallery_model extends CI_Model{
	
	function getAll() //query the DB to get all the photos.
    	{
			$query = $this->db->query("SELECT * FROM users");
			return $query->result(); //pass results back to the controller.
		}
		
}
?>