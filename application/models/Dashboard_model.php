<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_view_data($view_name, $chart_name, $metric, $usp_category, $order, $limit)
	{	
		//Filter based on usp category
		$usp_filter = "";
		if ($usp_category != 'all'){
			$usp_filter = "WHERE category = '".$usp_category."'";
		}
		//Build custom view query
		$sql = "SELECT $chart_name,SUM($metric) $metric 
				from $view_name
				$usp_filter
				GROUP BY $chart_name
				ORDER BY $metric $order
				LIMIT $limit";
        $query = $this->db->query($sql);
        return $query->result_array();
	}

	public function get_categories()
	{
		$sql = "SELECT category from vw_usp_category";
        $query = $this->db->query($sql);
        return $query->result_array();
	}

}