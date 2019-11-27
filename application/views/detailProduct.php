<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("partials/header.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/product/detailProduct.css')?>">
</head>
<body>

<div>
	<?php $this->load->view("partials/navbar.php") ?>	
</div>

<div class="card">
  <div class="card-header">
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#" id="generalProduct">General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="deskripsiProduct">Deskripsi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="spesifikasiProduct">Spesifikasi</a>
      </li>
    </ul>
  </div>
  <div class="card-body">

  	<div class="detailProduct" style="display: none;" id="spesifikasiContent">
		<h4><?php echo $produk->nama_brg ?></h4>
		<br>

		<h3>Spesifikasi Produk</h3>
		<table class="table table-hover">
		  <tbody>
		    <tr>
		      <th>Tipe Produk</th>
		      <td>-</td>      
		    </tr>
		    <tr>
		      <th>Material</th>
		      <td>Mesh Upper</td>
		    </tr>
		    <tr>
		    	<th>Berat</th>
		    	<td>801 gram</td>
		    </tr>
		    <tr>
		    	<th>Garansi Produk</th>
		    	<td>No Waranty</td>
		    </tr>
		    <tr>
		    	<th>Kelengkapan Paket</th>
		    	<td>1x Nike Air Max 270 Running Shoes Men Sport Outdoor Sneakers [AH8050-002]</td>
		    </tr>
		    <tr>
		    	<th>Brand</th>
		    	<td>NIKE</td>
		    </tr>
		  </tbody>
		</table>
	</div>

  	<div class="detailProduct" style="display: none;" id="deskripsiContent">
		<h4><?php echo $produk->nama_brg ?></h4><br>
		<p><?php echo $produk->keterangan ?></p>

		<h3>Size Chart (US) :</h3>
		<ul>
			<li>Size 6.5 (39)</li>
			<p>Length: 24.5 cm</p>
			<li>Size 6.5 (39)</li>
			<p>Length: 24.5 cm</p>
			<li>Size 6.5 (39)</li>
			<p>Length: 24.5 cm</p>
		</ul>
	</div>

    <div class="detailProduct" id="generalContent">
    	<h5 class="card-title text-center">
	    	<?php echo $produk->nama_brg ?>
		</h5>
    
 	  <div class="row">
	    <div class="col" id="gambarProduk">
	      	<img src="<?php echo base_url().'/img/'.$produk->kategori.'/'.$produk->sub_kategori .'/'.$produk->gambar ?>" class="card-img mt-5">
	    </div>
	    <div class="col">
	      <div class="card-body">

	      	<div class="row mb-3">
		      	<div class="col-md-4">
		      		<div><strong>Harga</strong></div>	
		      	</div>
		      	<div class="col-md-8">
		      		<div>Rp <?php echo $produk->harga ?></div>
		      	</div>
		    </div>

		    <div class="row mb-3">
		      	<div class="col-md-4">
		      		<div><strong>Rewards</strong></div>	
		      	</div>
		      	<div class="col-md-8">
		      		<div><strong style="color: green;">+200 poin</strong> FashionID Rewards</div>
		      	</div>
		    </div>

		    <div class="row mb-3">
		      	<div class="col-md-4">
		      		<div><strong>Cicilan</strong></div>	
		      	</div>
		      	<div class="col-md-8">
		      		<div class="mb-3"><strong style="color: green;">Cicilan 0%</strong> mulai dari <strong>Rp 53.333,00</strong> / bulan</div>
		      		<div>Cicilan Tanpa Kartu Kredit</div>
		      	</div>
		    </div>

		    <div class="row mb-3">
		      	<div class="col-md-4">
		      		<div><strong>Ukuran</strong></div>	
		      	</div>
		      	<div class="col-md-8" id="ukuranSepatu">
		      		<div class="card p-3">38</div>
		      		<div class="card p-3">39</div>
		      		<div class="card p-3">40</div>
		      		<div class="card p-3">41</div>
		      		<div class="card p-3">42</div>
		      		<div class="card p-3">43</div>		      		
		      	</div>
		    </div>

		    <div class="row mb-3">
		      	<div class="col-md-4">
		      		<div><strong>Cicilan</strong></div>	
		      	</div>
		      	<div class="col-md-8">
		      		<div class="mb-3"> Brown White </div>
		      	</div>
		    </div>

	        <div class="row" id="buy-or-addToCart">
		      	<div class="col">
		      		<a href="<?php echo base_url()?>checkout/checkout/<?php echo $produk->id_brg ?>" class="btn btn-primary">Buy Now!</a>	
		      	</div>
		      	<div class="col">
		      		<a href="<?php echo base_url()?>cart/cart/<?php echo $produk->id_brg ?>" class="btn btn-success">Add to Cart!</a>
		      	</div>
		    </div>
	      
	    </div>
	  </div>
    </div>

  </div>
  
</div>

<div>
	<?php $this->load->view("partials/footer.php") ?>
</div>


<script src="<?php echo base_url('js/product/detailProduct.js')?>"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>