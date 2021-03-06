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
	<!--select2-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/lib/select2/css/select2.min.css';?>" />
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
			<nav class="collapse navbar-collapse" id="filter-navbar"> 
				<!--filter_frm-->
				<div id="filter_frm" class="nav navbar-nav navbar-form navbar-right">
				  	<div class="form-group">
				  		<label for="metric" class="white">Metric</label>
				    	<select class="form-control metric">
                            <option value="quantity" selected="selected">Quantity</option>
                        </select>
				  	</div>
				  	<div class="form-group">
				  		<label for="usp" class="white">Usp</label>
				    	<select class="usp form-control">
							<option value="all" selected="selected">All Categories</option>
						</select>
				  	</div>
				  	<div class="form-group">
				  		<label for="order" class="white">Order</label>
				    	<select class="order form-control">
							<option value="desc" selected="selected">Top</option>
						</select>
				  	</div>
				  	<div class="form-group">
				  		<label for="limit" class="white">Limit</label>
				    	<select class="limit form-control">
							<option value="5" selected="selected">5</option>
						</select>
				  	</div>
				  	<button id="filter_btn" class="btn btn-success"> <i class="glyphicon glyphicon-filter" aria-hidden="true"></i> Filter</button>
				</div>
			</nav> 
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
						Brand Analysis
					</div>
					<div class="chart-stage">
						<div id="brand_chart"></div>
					</div>
					<div class="chart-notes">
						<span class="heading"></span> Brands
					</div>
				</div>
			</div>
			<!--usp_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						Dosage Analysis
					</div>
					<div class="chart-stage">
						<div id="dosage_chart"></div>
					</div>
					<div class="chart-notes">
						<span class="heading"></span> Dosages
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
						Manufacturer Analysis
					</div>
					<div class="chart-stage">
						<div id="manufacturer_chart"></div>
					</div>
					<div class="chart-notes">
						<span class="heading"></span> Manufacturers
					</div>
				</div>
			</div>
			<!--importer_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						Importer Analysis
					</div>
					<div class="chart-stage">
						<div id="importer_chart"></div>
					</div>
					<div class="chart-notes">
						<span class="heading"></span> Importers
					</div>
				</div>
			</div>
			<!--country_chart-->
			<div class="col-sm-4">
				<div class="chart-wrapper">
					<div class="chart-title">
						Country Analysis
					</div>
					<div class="chart-stage">
						<div id="country_chart"></div>
					</div>
					<div class="chart-notes">
						<span class="heading"></span> Countries
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
	<!--select2-->
	<script type="text/javascript" src="<?php echo base_url().'public/lib/select2/js/select2.full.min.js';?>"></script>
	<!--dashboard-->
	<script type="text/javascript" src="<?php echo base_url().'public/js/dashboard.js';?>"></script>
</body>
</html>