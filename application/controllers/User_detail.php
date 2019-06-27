<?php
/**
 * 
 */
class User_detail extends CI_Controller
{
	
	function index()
	{
// Set the libraries
		//$this->load->library('form_validation');
		//$this->form_validation->set_rule();

// Set the helpers
		//$this->load->helper('email');
		

		$this->load->model('user_model');
		$showdata['userArray'] = $this->user_model->userapplicant();
		//var_dump($showdata);
		//print_r($showdata);
		$this->load->view('user_view', $showdata);
	}
}