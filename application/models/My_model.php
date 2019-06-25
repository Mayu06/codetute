<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class My_model extends CI_Model
{
	
	function getfname()
	{
		$lname = $this->getlname();
		echo "My name is : Mayu $lname";
	}

	private function getlname()
	{
		return "Peiris";
	} 

	public function getage()
	{
		$age = 27;
		echo "My age is : $age";
	}

	public function getmobile()
	{
		$mobile = "My contact number is 0775555555";
		return $mobile;

	}
}