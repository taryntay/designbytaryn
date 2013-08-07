<?
class User_model extends CI_Model{

	function validate() //validate if the username and password exist.
	{
		$this->db->where('username', $this->input->post('username'));
		//search through the usernames for the username entered.
		$this->db->where('password', md5($this->input->post('password')));
		//search through the passwords for the password entered.
		$query = $this->db->get('users'); //query the DB in the users table.
		
		if($query->num_rows == 1) //if there is a match
		{
			return true; //return true. user exists.
		}
	}
	
	function create_user() //create a new user in the Database.
	{
		
		$new_user_insert_data = array(
			'first_name' => $this->input->post('first_name'),
			'email' => $this->input->post('email'),
			'newsletter' => $this->input->post('newsletter'),
			'username' => $this->input->post('username'),
			'password' => MD5($this->input->post('password'))
		);
		//using all of the information entered into the signup form, create a new user.
		$insert = $this->db->insert('users', $new_user_insert_data);
		
		return $insert; //return the new user to the controller.
		
	}
	
	function getUser()
	{
		/*$id = 4;*/
		$query = $this->db->query("SELECT * FROM users");
		return $query->result(); //pass results user to the controller.
	}
}
?>