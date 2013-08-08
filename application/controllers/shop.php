<?php  
    class Shop extends CI_Controller{  
    
       function index()  //loads the shop view.
        {  
        	$data['main_content'] = 'shop';
        	$this->load->view('includes/template', $data);
        }  
    }  
?>