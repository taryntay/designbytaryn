<?php
	class Upload extends CI_Controller {

		function __construct() //construct function load the helpers.
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
		}
		function index()
		{
			$is_logged_in = $this->session->userdata('is_logged_in');
			
			if(!isset($is_logged_in) || $is_logged_in != true) //validate that user is logged in
			{
				redirect('mustlogin/index');
				//if user is not logged in, show error message and login link.
				die();
			}else{
				$this->is_logged_in();
			}
		}
		function is_logged_in() //store and load the errors and view.
		{	
	            
			$data = array(
				'error' => ' ',
				'main_content' => 'upload_form'
			);
		
			$this->load->view('includes/template', $data);
		}

		function do_upload() //upload photos
		{
			$userData = $this->session->all_userdata();
		
			$config['upload_path'] = './thumbs'; //configure the upload path. directs to directory thumbs.
			$config['allowed_types'] = 'gif|jpg|jpeg|png'; //supported file types.
			$config['max_size']	= '1000'; //max size allowed. (KB)
			$config['max_width']  = '1300'; //max width allowed.
			$config['max_height']  = '900'; //max height allowed.

			$this->load->library('upload', $config); //load the upload library. pass config values.

			if ( ! $this->upload->do_upload()) //if photo cannot be uploaded.
			{
				$data = array(
					'error' => $this->upload->display_errors(), //display the errors why.
					'main_content' => 'upload_form');

				$this->load->view('includes/template', $data); //load the upload view.
			}
		
			else //if photos can be uploaded.
			{	
				
				$currentuser = $this->session->userdata('username');
				$upload_data = $this->upload->data();
           		$data_ary = array(
                	'title'     => $this->input->post('photo_name'),
                	'file'      => $upload_data['file_name'],
                	'width'     => $upload_data['image_width'],
                	'height'    => $upload_data['image_height'],
                	'type'      => $upload_data['image_type'],
                	'size'      => $upload_data['file_size'],
                	'date'      => time(),
                	'user'		=> $currentuser
            	);

            	$this->load->database();
            	$this->db->insert('upload', $data_ary); //store into database table "upload".
				
				$this->load->model('upload_model'); //load the upload model
								
            	$data = array( //data to pass to view
            	'upload_data' => $upload_data,
            	'main_content' => 'upload_success',
            	'results' => $this->upload_model->getPhotos()
            	);
            	
            	
            	$this->load->view('includes/template', $data); //load the upload successful page.
			}
		}
	
}
?>