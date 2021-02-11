<?php
require ('_inc/config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<title>KALENDAR</title>
		<style>
			.<?php echo date("_m_d_Y_").', .'.date("_mdY");?>{
				color: #e88973;
				background: #d6e0591c;
			}
		</style>
	</head>
<body>
