<?php  
    class Gallery extends CI_Controller{  
    
       function index()  //load the gallery view.
        {  
        
        	
        	$is_admin = $this->session->userdata('username');
			
			if($is_admin == 'admin') //validate that admin is logged in
			{
				$this->is_admin();
			}else{
					
				$this->load_user_gallery();
			}
        }
      function load_user_gallery()
      {
      						$this->load->model('upload_model'); //load the upload model
					
					$data['results'] = $this->upload_model->getPhotos();
					$data['main_content'] = 'gallery';
        			$this->load->view('includes/template', $data);
      }
      function is_admin()
      {
      
      	$this->load->model('upload_model'); //load the upload model
		$this->load->model('user_model');
		$data['results'] = $this->upload_model->getPhotos();
		
      	$data['main_content'] = 'admin_view';
      	$this->load->view('includes/template', $data);
      }	
      function deletePhoto() //delete a book.
	  {
		$this->db->where('id', $this->uri->segment(3)); //where the bookid = the uri segment #3.
		$this->db->delete('upload'); //delete from the DB.
		
		$this->index();
	  }
   }  
?>