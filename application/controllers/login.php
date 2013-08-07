<?php  
    class Login extends CI_Controller{  
    
       function index()  //loads the login form view by default.
        {  
        	$data['main_content'] = 'home'; //dynamically generates the view.
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
        		
        		//redirect('site/bookworm'); //redirect to the main app.
        		
        		redirect('login/index');
        	}
        	
        	else //if credentials are not validated,
        	{
        		$data['main_content'] = 'login_form';
        		$this->load->view('includes/template', $data);
        		echo('<p class="error">Error: Username and/or password is incorrect. Please try again.</p>'); //load login form with error message.
        	}
        }
        
        function signup() //if create account link is clicked, load the signup page view.
        {
        	$data['main_content'] = 'signup_form';
        	$this->load->view('includes/template', $data);
        }
        
        function create_user() //when signup form is filled out, create user is run.
        {
			$this->load->library('form_validation');
			//this library helps to check if the forms are validated.
			//field name, error message, validation rules.
			
			$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			//validate first name and email inputs.
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|is_unique[users.username]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('passwordConfirm', 'Confirm Password', 'trim|required|matches[password]');
			//validate username and password inputs. must be greater than 4 chars and passwords match.
			
			$this->form_validation->set_message('is_unique', 'That username is already taken. Please try again.');
			
			if($this->form_validation->run() == FALSE) //if it does not validate...
			{
				$this->signup(); //stay on the signup form. error message from validation will show.
			}
			else //if form does validate...
			{
				$this->load->model('user_model'); //load the user model to create a new user to the database.
				if($query = $this->user_model->create_user()) //if user is created..
				{
					$this->load->model('user_model');
					$data['results'] = $this->user_model->getUser();
					$data['main_content'] = 'signup_successful'; //show success page.
					$this->load->view('includes/template', $data);
				}
				else //if user cannot be created, show the signup form again with errors.
				{
					$data['main_content'] = 'signup_form'; //dynamically generates the view.
        			$this->load->view('includes/template', $data);
				}
			}
        } //create user

        	
		public function logout() //logout function destroys the session and loads login form. runs when logout clicked.
		{
			$this->session->sess_destroy();
			$this->index();
		}
 	}  
?>