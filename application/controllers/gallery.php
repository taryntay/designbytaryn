<?php  
    class Gallery extends CI_Controller{  
    
       function index()  //loads the login form view by default.
        {  
        	$data['main_content'] = 'gallery'; //dynamically generates the view.
        	$this->load->view('includes/template', $data);
        }
		
       	}  
?>