<?php  
    class Mustlogin extends CI_Controller{  
    
       function index()  //loads the homepage by default.
        {  
        	$data['main_content'] = 'login_form'; //dynamically generates the view.
        	$this->load->view('includes/template', $data);
        }  
}
?>
