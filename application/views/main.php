<html>
<head>
	<title><?php echo $title?></title>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
</head>

<body class="container">

<h1><?php echo $title?></h1>

<?php $this->load->view($view)?>

</body>
</html>