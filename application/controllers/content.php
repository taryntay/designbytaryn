<?php  
    class Content extends CI_Controller{  //This controller manages the admin login for Content management.
    
       function index()  //load the gallery view.
        {  
        	$is_admin = $this->session->userdata('username'); //holds the username logged in.
			
			if($is_admin == 'admin') //validate that admin is logged in
			{
				$this->is_admin(); //if admin is logged in, go to is admin function.
			}else{
					
				redirect('login/index'); //if not admin, load the regular view.
			}
        }
        
      function updateEventsHome() 
      {
        	$data = array(
				'home_events' => $this->input->post('home_events')
			);

			$this->db->update('content', $data); //update with the data from the edit function in the site controller.
			$this->getEventsHome();
      }
      
      function getEventsHome()
      {
      		$this->load->model('content_model'); //load the upload model
					
			$data['results'] = $this->content_model->getEventsHome();
			$data['main_content'] = 'home';
        	$this->load->view('includes/template', $data);
      }

	  function updateEventsMusic()
      {
        	$data = array(
				'events_music' => $this->input->post('events_music')
			);

			$this->db->update('content', $data); //update with the data from the edit function in the site controller.
			$this->getEventsMusic();
      }
      
      function getEventsMusic()
      {
      		$this->load->model('content_model'); //load the upload model
					
			$data['results'] = $this->content_model->getEventsHome();
			$data['main_content'] = 'events';
        	$this->load->view('includes/template', $data);
      }	

      function updateEventsUpcoming()
      {
        	$data = array(
				'events_upcoming' => $this->input->post('events_upcoming')
			);

			$this->db->update('content', $data); //update with the data from the edit function in the site controller.
			$this->getEventsUpcoming();
      }
      
      function getEventsUpcoming()
      {
      		$this->load->model('content_model'); //load the upload model
					
			$data['results'] = $this->content_model->getEventsHome();
			$data['main_content'] = 'events';
        	$this->load->view('includes/template', $data);
      }

      function is_admin()
      {
      	$this->load->model('upload_model'); //load the upload model
		$this->load->model('user_model');
		$data['results'] = $this->upload_model->getPhotos();
		
      	$data['main_content'] = 'admin_gallery';
      	$this->load->view('includes/template', $data);
      }	
      
      function deletePhoto() //delete a photo.
	  {
		$this->db->where('id', $this->uri->segment(3)); //where the photoid = the uri segment #3.
		$this->db->delete('upload'); //delete from the DB.
		
		$this->index();
	  }
   }  
?>