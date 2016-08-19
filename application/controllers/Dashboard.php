<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
		$data['page_title'] = 'PPB | Dashboard';
		$this->load->view('dashboardview', $data);
	}

	public function load_chart($chart_name, $yaxis)
	{	
		#Load chart config
		$chart_type = $this->config->item($chart_name.'_chart_type');
		$chart_name = $this->config->item($chart_name.'_chart_name');
		$chart_yaxis_title = $this->config->item($chart_name.'_'.$yaxis.'_chart_yaxis_title');
		$yaxis_units = $this->config->item($chart_name.'_'.$yaxis.'_yaxis_prefix');
		$view_name = $this->config->item($chart_name.'_view_name');
		$view_columns = $chart_name.','.$chart_yaxis_title;
		$color_point = $this->config->item($chart_name.'_color_point');

		#Get view data
		$view_data = $this->dashboard_model->get_sample_data($view_name, $view_columns);
		$chart_columns = array();
		$chart_data = array();
		foreach ($view_data as $row) {
			foreach ($row as $i => $v) {
				if ($i == $chart_name){
					$chart_columns[] = $v;
				}else{
					if($chart_type == 'pie'){
						$chart_data[] = array('name' => $row[$chart_name], 'y' => floatval($v));
					}else{
						$chart_data[] = floatval($v);
					}
				}
			}
		}
		#Build chart
		$data['chart_name'] = $chart_name;
		$data['chart_type'] = $chart_type;
		$data['chart_title'] = ucwords($chart_name).' Top 5 Summary';
		$data['chart_yaxis_title'] = ucwords($yaxis.$yaxis_units);
		$data['chart_columns'] = json_encode($chart_columns);
		$data['chart_data'] = json_encode(array(array('name' => $chart_name, 'colorByPoint' => $color_point, 'data' => array_values($chart_data))));

		$this->load->view('chartview', $data);
	}

}
