<?php  
    class Terms extends CI_Controller{  
    
       function index()  //loads the t&c view.
        {  
        	$data['main_content'] = 'terms_view';
        	$this->load->view('includes/template', $data);
        }  
    }  
?>