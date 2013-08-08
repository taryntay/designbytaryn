<?php  
    class Gallery extends CI_Controller{  
    
       function index()  //load the gallery view.
        {  
        	$data['main_content'] = 'gallery';
        	$this->load->view('includes/template', $data);
        }	
    }  
?>