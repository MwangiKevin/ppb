<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
		$data['page_title'] = 'PPB | Dashboard';
		$this->load->view('dashboardview', $data);
	}

	public function load_chart()
	{	
		$titles = array('desc'=>'Top','asc'=>'Bottom');
		$chart_name = $this->input->post('name');
		$metric = $this->input->post('metric');
		/*$usp = $this->input->post('usp');*/
		$order = $this->input->post('order');
		$limit = $this->input->post('limit');

		#Load chart config
		$chart_type = $this->config->item($chart_name.'_chart_type');
		$metric_title = $this->config->item($chart_name.'_'.$metric.'_chart_metric_title');
		$metric_units = $this->config->item($chart_name.'_'.$metric.'_metric_prefix');
		$view_name = $this->config->item($chart_name.'_view_name');
		$color_point = $this->config->item($chart_name.'_color_point');

		#Get view data                                                                             /*Replace with filter_array*/
		$view_data = $this->dashboard_model->get_view_data($view_name, $chart_name, $metric_title, array(), $order, $limit);
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
		$data['chart_title'] = ucwords(str_replace('_', ' ', $chart_name)).' '.$titles[$order].' '.$limit.' Summary';
		$data['chart_metric_title'] = ucwords($metric.$metric_units);
		$data['chart_columns'] = json_encode($chart_columns);
		$data['chart_data'] = json_encode(array(array('name' => $chart_name, 'colorByPoint' => $color_point, 'data' => array_values($chart_data))));

		$this->load->view('chartview', $data);
	}

	public function get_categories()
	{	
		$data = array();
		$categories = $this->dashboard_model->get_categories();
		foreach ($categories as $item) {
			$data[] = array('id'=> $item['category'], 'text' =>  ucwords(strtolower($item['category'])));
		}
		echo json_encode($data);
	}

}
