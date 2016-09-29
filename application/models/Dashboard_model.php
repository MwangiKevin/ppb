<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_view_data($view_name, $chart_name, $metric, $filter_array, $order, $limit)
	{	
		//Build custom view query
		$query = $this->db->select("$chart_name,SUM($metric) $metric", FALSE)
							->where($filter_array)
							->group_by($chart_name)
							->order_by($metric, $order)
							->limit($limit)
							->get($view_name);

        return $query->result_array();
	}

	public function get_categories()
	{
		$sql = "SELECT category from vw_usp_category";
        $query = $this->db->query($sql);
        return $query->result_array();
	}

}