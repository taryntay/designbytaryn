<?php  
    class Faqs extends CI_Controller{  
    
       function index()  //load events view
        {  
        	$data['main_content'] = 'faqs';
        	$this->load->view('includes/template', $data);
        }  
  	}  
?>