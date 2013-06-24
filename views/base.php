<html>
	<head> 
	    <title> <?= $title; ?> </title>  
	</head>  
	<body>

		<?= $this->load->view('template/header'); ?>
		<?= $this->load->view('content/'.$content); ?>	
		<?= $this->load->view('template/footer'); ?>

	</body>  
</html>