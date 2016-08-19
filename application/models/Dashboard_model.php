<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_sample_data($view_name, $view_columns)
	{
		$sql = "SELECT ".$view_columns." FROM ".$view_name;
        $query = $this->db->query($sql);
        return $query->result_array();
	}

}