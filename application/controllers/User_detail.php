<?php
/**
 * 
 */
class User_detail extends CI_Controller
{
	
	function index()
	{
		$this->load->model('user_model');
		$showdata['userArray'] = $this->user_model->userapplicant();
		//var_dump($showdata);
		//print_r($showdata);
		$this->load->view('user_view', $showdata);
	}
}