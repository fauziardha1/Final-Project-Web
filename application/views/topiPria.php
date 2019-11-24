<div class = "container-fluid ml-5 ">
		<div class="row text-center mt-5">
			<?php foreach ($topi_pria as $brg)  : ?>
				<div class="card ml-4" style="width: 18rem; background-color:#F8F9F9;">
				  <img src="<?php echo base_url().'/img/menFashion/topi/' .$brg->gambar ?>" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title mb-2"><?php echo $brg->nama_brg ?></h5>
				    <small><?php echo $brg->keterangan ?></small> <br>
				    <span class='badge badge-pill badge success mb-3'><?php echo "Harga : Rp ".$brg->harga ?></span> <br>
				    <a href="#" class="btn btn-sm btn-success">Lihat Detail</a>
				  </div>
				</div>
			<?php endforeach; ?>
		</div>
</div>