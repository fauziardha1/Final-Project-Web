<html>
	<head>
		<?php $this->load->view("partials/header.php") ?>
	</head>
	<body>

		<div>
			<?php $this->load->view("partials/navbar.php", $sumCart) ?>	
		</div>

		<div class = "container-fluid ml-5 ">
			<div class="row text-center mt-5">
				<?php foreach ($produk as $brg)  : ?>
					<div id="barang" class="card ml-4 mb-4" style="width: 18rem; background-color:#F8F9F9;">
					  <img src="<?php echo base_url().'/img/'.$brg->kategori.'/'.$brg->sub_kategori .'/'.$brg->gambar ?>" class="card-img-top" alt="...">
					  <div class="card-body">
					    <h5 class="card-title mb-2"><?php echo $brg->nama_brg ?></h5>
					    <small><?php echo $brg->keterangan ?></small> <br>
					    <span class='badge badge-pill badge success mb-3'><?php echo "Harga : Rp ".$brg->harga ?></span> <br>
					    
						<a href="<?php echo base_url()?>product/details/<?php echo $brg->id_brg ?>" class="btn btn-sm btn-success">Lihat Detail</a>
					    
					  </div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Live Data Search in Codeigniter using Ajax JQuery</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>ajaxsearch/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>