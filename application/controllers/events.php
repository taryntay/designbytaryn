<?php  
    class Events extends CI_Controller{  
    
       function index()  //load events view
        {  
        
             $is_admin = $this->session->userdata('username');
			
			if($is_admin == 'admin') //validate that admin is logged in
			{
				$this->is_admin();
			}else{
        	$data['main_content'] = 'events';
			$this->load->model('content_model');
			$data['results'] = $this->content_model->getEventsHome();
        	$this->load->view('includes/template', $data);
        	}

        }  
        function is_admin()
        {
        		$this->load->model('content_model');
        		$data['results'] = $this->content_model->getEventsHome();
        		$data['main_content'] = 'admin_events';
      			$this->load->view('includes/template', $data);
        }
  	}  
?>