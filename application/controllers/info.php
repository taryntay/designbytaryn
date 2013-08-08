<?php  
    class Info extends CI_Controller{
    
       function index() //load the info view
        {  
        	$data['main_content'] = 'info';
        	$this->load->view('includes/template', $data);
        }  
 	}  
?>