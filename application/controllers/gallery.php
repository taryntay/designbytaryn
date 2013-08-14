<?php  
    class Gallery extends CI_Controller{  
    
       function index()  //load the gallery view.
        {  
       	 $this->load->model('upload_model'); //load the upload model
					$this->load->model('user_model');
					$data['results'] = $this->upload_model->getPhotos();



        	$data['main_content'] = 'gallery';
        	$this->load->view('includes/template', $data);
        }	
   }  
?>