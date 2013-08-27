<?php  
    class Gallerylogin extends CI_Controller{  
    
       function index()  //loads the homepage by default.
        {  
            $is_admin = $this->session->userdata('username');
			
			if($is_admin == 'admin') //validate that admin is logged in
			{
				$this->is_admin();
			}else{
			
        	$data['main_content'] = 'home'; //dynamically generates the view.
			$this->load->model('content_model');
			$data['results'] = $this->content_model->getEventsHome();
        	$this->load->view('includes/template', $data);
        	}
        }  
        function is_admin()
        {
        		$this->load->model('content_model');
        		$data['results'] = $this->content_model->getEventsHome();
        		$data['main_content'] = 'admin_home';
      			$this->load->view('includes/template', $data);
        }
        function validate_credentials() //when username and password are entered, this function runs to check.
        {
        	$this->load->model('user_model');
        	$query = $this->user_model->validate();
        	
        	if($query) //if users credentials are validated,
        	{
        		$data = array(
        			'username' => $this->input->post('username'),
        			'is_logged_in' => true
        		);
        		
        		$this->session->set_userdata($data); //set the session with username and logged in = true.
        		
        		redirect('upload/index'); //after login redirect to the homepage.
        	}
        	
        	else //if credentials are not validated,
        	{
        		$data['main_content'] = 'home';
        		$this->load->view('includes/template', $data);
        		echo('<p class="error">Error: Username and/or password is incorrect. Please try again.</p>'); //load login form with error message.
        	}
        }
 	}  
?>