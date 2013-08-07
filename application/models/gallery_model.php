<?
class Gallery_model extends CI_Model{


function getAll() //query the DB to get all the rows.
    	{
			$query = $this->db->query("SELECT * FROM users");
			return $query->result(); //pass results book to the controller.
		}
		
}
?>