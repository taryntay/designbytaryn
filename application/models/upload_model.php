<?
class Upload_model extends CI_Model{
	
	function getPhotos() //get photos from DB
	{
		$query = $this->db->query("SELECT * FROM upload order by date DESC"); //will pull in descending order by date uploaded.
		return $query->result(); //pass results user to the controller.
	}
}
?>

