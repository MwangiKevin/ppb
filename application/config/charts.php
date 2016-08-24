<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*Brand Chart*/
$config['brand_chart_type'] = 'pie';
$config['brand_quantity_chart_metric_title'] = 'quantity';
$config['brand_quantity_metric_prefix'] = ' (Units)';
$config['brand_price_chart_metric_title'] = 'usd_value';
$config['brand_price_metric_prefix'] = ' (USD)';
$config['brand_view_name'] = 'vw_brand_category_quantity_value';
$config['brand_color_point'] = TRUE;

/*Dosage Chart*/
$config['dosage_chart_type'] = 'area';
$config['dosage_quantity_chart_metric_title'] = 'quantity';
$config['dosage_quantity_metric_prefix'] = ' (Units)';
$config['dosage_price_chart_metric_title'] = 'usd_value';
$config['dosage_price_metric_prefix'] = ' (USD)';
$config['dosage_view_name'] = 'vw_dosage_category_quantity_value';
$config['dosage_color_point'] = FALSE;

/*Manufacturer Chart*/
$config['manufacturer_chart_type'] = 'line';
$config['manufacturer_quantity_chart_metric_title'] = 'quantity';
$config['manufacturer_quantity_metric_prefix'] = ' (Units)';
$config['manufacturer_price_chart_metric_title'] = 'usd_value';
$config['manufacturer_price_metric_prefix'] = ' (USD)';
$config['manufacturer_view_name'] = 'vw_manufacturer_category_quantity_value';
$config['manufacturer_color_point'] = FALSE;

/*Importer Chart*/
$config['importer_chart_type'] = 'bar';
$config['importer_quantity_chart_metric_title'] = 'quantity';
$config['importer_quantity_metric_prefix'] = ' (Units)';
$config['importer_price_chart_metric_title'] = 'usd_value';
$config['importer_price_metric_prefix'] = ' (USD)';
$config['importer_view_name'] = 'vw_importer_category_quantity_value';
$config['importer_color_point'] = TRUE;

/*Country Chart*/
$config['country_chart_type'] = 'column';
$config['country_quantity_chart_metric_title'] = 'quantity';
$config['country_quantity_metric_prefix'] = ' (Units)';
$config['country_price_chart_metric_title'] = 'usd_value';
$config['country_price_metric_prefix'] = ' (USD)';
$config['country_view_name'] = 'vw_country_category_quantity_value';
$config['country_color_point'] = TRUE;