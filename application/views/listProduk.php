<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("partials/header.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product/listProduct.css')?>">
</head>
<body>

<div>
	<?php $this->load->view("partials/navbar.php") ?>	
</div>

<div class = "container-fluid ml-5 ">
		<div class="row text-center mt-5">
			<?php foreach ($produk as $brg)  : ?>
				<div class="card ml-4 mb-4" style="width: 18rem; background-color:#F8F9F9;">
				  <img src="<?php echo base_url().'/img/'.$brg->kategori.'/'.$brg->sub_kategori .'/'.$brg->gambar ?>" class="card-img-top" alt="...">
				  <div class="card-body" id="barang">
				    <h5 class="card-title mb-2"><?php echo $brg->nama_brg ?></h5>
				    <small><?php echo $brg->keterangan ?></small> <br>
				    <span class='badge badge-pill badge success mb-3'><?php echo "Harga : Rp ".$brg->harga ?></span> <br>
				    
					<a href="<?php echo base_url()?>product/details/<?php echo $brg->id_brg ?>" class="btn btn-sm btn-success">Lihat Detail</a>
				    
				  </div>
				</div>
			<?php endforeach; ?>
		</div>
</div>

<div>
	<?php $this->load->view("partials/footer.php") ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



