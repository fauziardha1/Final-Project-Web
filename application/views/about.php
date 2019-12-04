
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("partials/header.php") ?>
</head>
<body>
	<?php $this->load->view("partials/navbar.php", $sumCart) ?>	
	<div class = "container" id = "about" >
		<h2 class="mt-5 mb-4" style="text-align: center;">About this website</h2>
		<p>Website <b><em>FashionID</em></b> merupakan sebuah website toko pakaian yang melayani pembelian berbagai jenis pakaian. Website ini terinspirasi dari salah satu website pakaian yang terkenal, yaitu <a href='http://zalora.co.id'>zalora.co.id</a> dan gambar-gambar yang ada di website ini sebagian besar berasal dari <a href='http://blibli.com'>blibli.com</a>. Pada webite ini, terdapat pakaian untuk pria, wanita, maupun anak-anak. Website ini menyadiakan berbagai jenis <em>Fashion</em> hits masa kini mulai dari baju, celana, jaket, topi, sepatu, dan jam tangan. </p> 
		<br>
		<h2 class="mt-5 mb-4" style="text-align: center;">Developer</h2>
		<div class="row">
			<div class="card mb-3 mr-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?php echo base_url()?>img/fauzi.JPG" class="card-img" alt="Fauzi">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Fauzi Arda Saputra</h5>
			        <p class="card-text">Fauzi Arda Saputra merupakan salah satu mahasiswa program studi Ilmu Komputer Universitas Pertamina yang mendedikasikan dirinya untuk berbagai jenis cabang ilmu komputer. </p>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <img src="<?php echo base_url()?>img/fifah1.JPG" class="card-img" alt="Nurul Afifah">
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Nurul Afifah</h5>
			        <p class="card-text">Nurul Afifah merupakan salah satu mahasiswa Ilmu Komputer Universitas Pertamina yang masih mencari jati diri. Fifah ini merupakan satu-satunya wanita yang mengembangkan website <b><em>FashionID</em></b> ini lho.... </p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div class="row">
			<div class="card mb-3 mr-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <a href="<?php echo base_url('home/man/jam')?>">
			      	<img src="<?php echo base_url()?>img/sandy.JPG" class="card-img" alt="Marrosandy Bagus Saputra">
			      </a>
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Marrosandy Bagus Saputra</h5>
			        <p class="card-text">Marrosandy Bagus Saputra merupakan salah satu mahasiswa Universitas Pertamina yang memfokuskan dirinya untuk belajar Pemrograman dan <em>Data Science</em>. Mahasiswa dengan Panggilan Marro atau Sandy ini merupakan orang yang pekerja keras.</p>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="card mb-3" style="max-width: 540px;">
			  <div class="row no-gutters">
			    <div class="col-md-4">
			      <a href="<?php echo base_url('home/man/baju')?>">
			      	<img src="<?php echo base_url()?>img/dheny.jpg" class="card-img" alt="Dheny Dwi Prakoso">
			      </a>
			    </div>
			    <div class="col-md-8">
			      <div class="card-body">
			        <h5 class="card-title">Dheny Dwi Prakoso</h5>
			        <p class="card-text">Dheny Dwi Prakoso merupakan salah satu Mahasiswa Ilmu Komputer Universitas Pertamina yang menyukai <em>Anime</em> Jepang serta <em>Idol Group</em> Jepang dan Korea Selatan.<em>Idol Group</em> kesukaannya adalah ClariS, Nogizaka46, Twice, GFriend,dan IZ*ONE</p>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>


	<?php $this->load->view("partials/footer.php") ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>