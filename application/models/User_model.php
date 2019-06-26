<?php

/**
 * 
 */
class User_model extends CI_Model
{
	
	function userapplicant()
	{
		$this->load->database();
		//$query = $this->db->query("SELECT * FROM users");

		// Using a query builder class -------------
		$query = $this->db->get('users'); // SELECT * FROM users
		$query = $this->db->get_where('users', array('id' => '1')); //SELECT * FROM users where id = 1

		//return["name"=>"Madhushani", "company"=>"Living Dreams"];
		$query->result_array();
		//echo "<pre>";
		//print_r($query->result_array());
		//echo "</pre>";
		//return $query->result_array();
		return $query->result();
	}
}