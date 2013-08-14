<?
class Upload_model extends CI_Model{
	
	function getPhotos()
	{
		$query = $this->db->query("SELECT * FROM upload order by date DESC");
		return $query->result(); //pass results user to the controller.
	}
}
?>

