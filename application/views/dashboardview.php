<!DOCTYPE html>
<html>
<head>
	<!--title-->
	<title><?php echo $page_title; ?> </title>
	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
	<!--favicon-->
	<link rel="shortcut icon" type="text/css" href="<?php echo base_url().'public/img/favicon.ico';?>">
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/lib/bootstrap/dist/css/bootstrap.min.css';?>" />
	<!--bootstrap-toggle-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/lib/bootstrap-toggle/css/bootstrap-toggle.min.css';?>" />
	<!--keen-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/css/keen-dashboards.css';?>" />
</head>
<body class="application">
	<!--navbar-->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		  	<div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
		    	</button>
			    <a class="navbar-brand" href="#">
			      	<span class="glyphicon glyphicon-dashboard"></span>
			    </a>
		    	<a class="navbar-brand" href="#">PPB Dashboard</a>
		  </div>
		</div>
	</div>
	<!--container-->
	<div class="container-fluid">
		<!--toprow-->
		<div class="row">
			<!--brand_chart-->
			<div class="col-sm-8">
				<div class="chart-wrapper">
					<div class="chart-title">
						<input class="chart_filter" chart="brand" type="checkbox" checked data-toggle="toggle" data-on="Quantity" data-off="Price" data-onstyle="info" data-offstyle="success"> by Brand (Top 5) 
					</div>
					<div class="chart-stage">
						<div id="brand_chart"></div>
					</div>
					<div class="chart-notes">
						Top 5 Imported Brands
					</div>
				</div>
			</div>
			<!--usp_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						<input class="chart_filter" chart="usp" type="checkbox" checked data-toggle="toggle" data-on="Quantity" data-off="Price" data-onstyle="info" data-offstyle="success"> by USP (Top 5)
					</div>
					<div class="chart-stage">
						<div id="usp_chart"></div>
					</div>
					<div class="chart-notes">
						Top 5 USP Categories
					</div>
				</div>
			</div>
		</div>
		<!--bottomrow-->
		<div class="row">
			<!--manufacturer_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						<input class="chart_filter" chart="manufacturer" type="checkbox" checked data-toggle="toggle" data-on="Quantity" data-off="Price" data-onstyle="info" data-offstyle="success"> by Manufacturer (Top 5)
					</div>
					<div class="chart-stage">
						<div id="manufacturer_chart"></div>
					</div>
					<div class="chart-notes">
						Top 5 Manufacturers
					</div>
				</div>
			</div>
			<!--importer_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						<input class="chart_filter" chart="importer" type="checkbox" checked data-toggle="toggle" data-on="Quantity" data-off="Price" data-onstyle="info" data-offstyle="success"> by Importer (Top 5)
					</div>
					<div class="chart-stage">
						<div id="importer_chart"></div>
					</div>
					<div class="chart-notes">
						Top 5 Importers
					</div>
				</div>
			</div>
			<!--country_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						<input class="chart_filter" chart="country" type="checkbox" checked data-toggle="toggle" data-on="Quantity" data-off="Price" data-onstyle="info" data-offstyle="success"> by Country (Top 5)
					</div>
					<div class="chart-stage">
						<div id="country_chart"></div>
					</div>
					<div class="chart-notes">
						Top 5 Countries
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<hr>
		<p class="small text-muted">Built by <a href="http://www.clintonhealthaccess.org" target="_blank">CHAI</a></p>
	</div>
	<!--jquery-->
	<script type="text/javascript" src="<?php echo base_url().'public/lib/jquery/dist/jquery.min.js';?>"></script>
	<!--highcharts-->
	<script src="<?php echo base_url().'public/lib/highcharts/highcharts.js';?>"></script>
	<script src="<?php echo base_url().'public/lib/highcharts/exporting.js';?>"></script>
	<!--bootstrap-->
	<script type="text/javascript" src="<?php echo base_url().'public/lib/bootstrap/dist/js/bootstrap.min.js';?>"></script>
	<!--bootstrap-toggle-->
	<script type="text/javascript" src="<?php echo base_url().'public/lib/bootstrap-toggle/js/bootstrap-toggle.min.js';?>"></script>
	<!--spin-->
	<script type="text/javascript" src="<?php echo base_url().'public/js/spin.min.js';?>"></script>
	<!--dashboard-->
	<script type="text/javascript" src="<?php echo base_url().'public/js/dashboard.js';?>"></script>
</body>
</html>