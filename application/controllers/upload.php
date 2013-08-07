<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$data = array(
			'error' => ' ',
			'main_content' => 'upload_form');
		$this->load->view('includes/template', $data);
	}

	function do_upload()
	{
		$config['upload_path'] = './thumbs';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$data = array(
				'error' => $this->upload->display_errors(),
				'main_content' => 'upload_form');

			$this->load->view('includes/template', $data);
		}
		else
		{
			$upload_data = $this->upload->data();
            $data_ary = array(
                'title'     => $upload_data['client_name'],
                'file'      => $upload_data['file_name'],
                'width'     => $upload_data['image_width'],
                'height'    => $upload_data['image_height'],
                'type'      => $upload_data['image_type'],
                'size'      => $upload_data['file_size'],
                'date'      => time(),
            );

            $this->load->database();
            $this->db->insert('upload', $data_ary);

            $data = array(
            	'upload_data' => $upload_data,
            	'main_content' => 'upload_success');
            $this->load->view('includes/template', $data);
		}
	}
}
?>