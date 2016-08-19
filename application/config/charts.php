<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*Usp Chart*/
$config['usp_chart_type'] = 'area';
$config['usp_chart_name'] = 'usp';
$config['usp_quantity_chart_yaxis_title'] = 'quantity';
$config['usp_quantity_yaxis_prefix'] = ' (Units)';
$config['usp_price_chart_yaxis_title'] = 'usd_value';
$config['usp_price_yaxis_prefix'] = ' (USD)';
$config['usp_view_name'] = 'vw_usp_quantity_value';
$config['usp_color_point'] = FALSE;

/*Brand Chart*/
$config['brand_chart_type'] = 'pie';
$config['brand_chart_name'] = 'brand';
$config['brand_quantity_chart_yaxis_title'] = 'quantity';
$config['brand_quantity_yaxis_prefix'] = ' (Units)';
$config['brand_price_chart_yaxis_title'] = 'usd_value';
$config['brand_price_yaxis_prefix'] = ' (USD)';
$config['brand_view_name'] = 'vw_brand_quantity_value';
$config['brand_color_point'] = TRUE;

/*Manufacturer Chart*/
$config['manufacturer_chart_type'] = 'line';
$config['manufacturer_chart_name'] = 'manufacturer';
$config['manufacturer_quantity_chart_yaxis_title'] = 'quantity';
$config['manufacturer_quantity_yaxis_prefix'] = ' (Units)';
$config['manufacturer_price_chart_yaxis_title'] = 'usd_value';
$config['manufacturer_price_yaxis_prefix'] = ' (USD)';
$config['manufacturer_view_name'] = 'vw_manufacturer_quantity_value';
$config['manufacturer_color_point'] = FALSE;

/*Importer Chart*/
$config['importer_chart_type'] = 'bar';
$config['importer_chart_name'] = 'importer';
$config['importer_quantity_chart_yaxis_title'] = 'quantity';
$config['importer_quantity_yaxis_prefix'] = ' (Units)';
$config['importer_price_chart_yaxis_title'] = 'usd_value';
$config['importer_price_yaxis_prefix'] = ' (USD)';
$config['importer_view_name'] = 'vw_importer_quantity_value';
$config['importer_color_point'] = TRUE;

/*Country Chart*/
$config['country_chart_type'] = 'column';
$config['country_chart_name'] = 'country';
$config['country_quantity_chart_yaxis_title'] = 'quantity';
$config['country_quantity_yaxis_prefix'] = ' (Units)';
$config['country_price_chart_yaxis_title'] = 'usd_value';
$config['country_price_yaxis_prefix'] = ' (USD)';
$config['country_view_name'] = 'vw_country_quantity_value';
$config['country_color_point'] = TRUE;