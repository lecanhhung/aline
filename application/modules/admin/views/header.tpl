<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 sidebar sidebar-collapse"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 sidebar sidebar-collapse"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 sidebar sidebar-collapse"> <![endif]-->
<!--[if gt IE 8]> <html class="ie sidebar sidebar-collapse"> <![endif]-->
<!--[if !IE]><!-->
<html class="sidebar sidebar-collapse">
<!-- <![endif]-->
<head>
    <title>{$lable.admin_cpanel_title}</title>
    <!-- Meta -->
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
    
	<!--
	<link rel="shortcut icon" href="{$base_url}/favicon.ico" type="image/x-icon">
	<link rel="icon" href="{$base_url}/favicon.ico" type="image/x-icon">
	-->
	<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
    
    <script>
		var base_url = "{$base_url}";
		var base_url_admin = "{$base_url_admin}"; 
		var base_tlp_admin = "{$base_tlp_admin}"; 
		var current_control = "{$current_control}";
		var current_method  = "{$current_method}";
		
		var require_input_field	= "{$lable.require_input_field|stripslashes}";
	
    </script>
</head>
<body class=" ">
<!-- Main Container Fluid -->
<div class="container-fluid menu-hidden" id="dashboard">