<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Getinfo_controller extends CI_Controller
{
	
	function index()
	{
		$this->load->view('getinfo');
	}

	public function getdetail()
	{
		$this->load->model('my_model');
		$this->my_model->getfname();
		echo "<br><br>";
		//echo "Last Name is : ";
		//echo $this->my_model->getlname();
		$this->my_model->getage();
		$mob = $this->my_model->getmobile();
		echo "<br><br> $mob";
	}
	public function authentication()
	{
		$this->load->model('authentication_from_google', 'google');
		echo $this->google->userdata();
	}
}
?>