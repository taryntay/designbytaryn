<?php  
    class Contact extends CI_Controller{  
    
       function index() //load the contact view.
       {	
        	$this->load->library('email');
        	$data['main_content'] = 'contact';
        	$this->load->view('includes/template', $data);
       }  
        
        function contact_form() { //run when contact form is submitted.
        	
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('name', 'Name', 'trim|required');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        	$this->form_validation->set_rules('message', 'Message', 'required|xss_clean');
        	
        	if ($this->form_validation->run() == FALSE) {
        		
  				$this->load->library('email');
        		$data['main_content'] = 'contact';
        		$this->load->view('includes/template', $data);
        	}else{
        		
        		$this->load->library('email');
        		$this->email->from(set_value('email'), set_value('name'));
        		$this->email->to('taryngator@gmail.com');
        		$this->email->subject('Message from TCB Contact');
        		$this->email->message(set_value('message'));
        	
        		$this->email->send(); //sends email
        	
        		//echo $this->email->print_debugger();
        		echo "Your message was sent successfully!";
        		$data['main_content'] = 'contact';
        		
        		$this->load->view('includes/template', $data);
        	}
        }
     }  
?>