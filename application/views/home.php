<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("partials/header.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/home/home.css')?>">
</head>
<body>


<div>
	<?php $this->load->view("partials/navbar.php", $sumCart) ?>	
</div>
<p></p>
<div class="container">
	<?php $this->load->view("partials/carousel.php") ?>
	<?php $this->load->view($konten) ?>
	<?php $this->load->view("partials/footer.php") ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>