<?php  
    class Rules extends CI_Controller{  
    
       function index()  //loads the rules view.
        {  
        	$data['main_content'] = 'rules';
        	$this->load->view('includes/template', $data);
        }  
    }  
?>