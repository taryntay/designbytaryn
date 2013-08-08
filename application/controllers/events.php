<?php  
    class Events extends CI_Controller{  
    
       function index()  //load events view
        {  
        	$data['main_content'] = 'events';
        	$this->load->view('includes/template', $data);
        }  
  	}  
?>