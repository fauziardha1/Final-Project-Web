<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("partials/header.php") ?>
  <link rel="stylesheet" href="<?php echo base_url('css/cart/cart.css')?>">
</head>
<body>

<div>
  <?php $this->load->view("partials/navbar.php") ?>

  <!-- End -->

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Barang</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Harga</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Jumlah</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Subtotal</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php $jumlahBarang = 0; $totalBayar = 0;?>
                <form action="<?php if($sumCart == 0) {echo "";} else {echo base_url('checkout');} ?>" method="post">

                <?php foreach ($products as $produk) : ?>
                  <?php $jumlahBarang = $jumlahBarang+1; $totalBayar = $totalBayar+$produk->harga;?>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="<?php echo base_url().'/img/'.$produk->kategori.'/'.$produk->sub_kategori .'/'.$produk->gambar ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0">
                          <a href="<?php echo base_url()?>product/details/<?php echo $produk->id_brg ?>" class="text-dark d-inline-block align-middle" style="text-decoration:none; display: block; width: 400px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $produk->nama_brg ?></a>
                        </h5>
                        <span class="text-muted font-weight-normal font-italic d-block">Category: <?php echo $produk->sub_kategori ?></span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle">Rp <i class="hargaBarang"><?php echo $produk->harga ?></i></td>
                  <td class="border-0 align-middle" id="number">
                      <span class="minus kurang"> <strong class="v-middle">-</strong></span>
                        <input type="number"  name="banyakBarang[]" value="1" class="banyakBarang"  />
                       <span class="plus tambah">
                        <strong class="v-middle">+</strong>
                      </span>
                  </td>
                  <input type="hidden" name="idBarang[]" value="<?= $produk->id_brg; ?>">
                  <td class="border-0 align-middle">
                   <span class="spacer"></span>
                   <strong class="v-middle">Rp <i class="subTotal"><?php echo $produk->harga ?></i></strong>
                  </td>
                  <td class="align-middle">
                    <div class="cell p-ops">
                      <a href="<?php echo base_url()?>cart/hapus/<?php echo $produk->id_brg; ?>" class="btn-2">Hapus</a>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody> 
            </table>
            <!-- <?php  
                                // $dom = new DOMDocument();
                                //  $dom->loadHTML('./cart.php');
                                //  $data = $dom->getElementsByTagName('input')->length;
                                //  var_dump($data);die();
                            ?> -->
                  <div class="checkout">
                    
                        <div class="printTot"> <em>Total(<?php echo $jumlahBarang; ?>&nbsp;pieces)</em> </div>
                        <div class="sum"> <strong>Rp <i id="totalBayar"><?= $totalBayar ?></i></strong> </div>
                          
                        <div class="sum">
                           <button type="submit" class="btn btn-lg btn-block btn-sm btn btn-dark text-uppercase" ><a   style="color: white; text-decoration: none;"> Checkout</a></button>
                         </div>
                        </div>
                    </div>
                  </div>
                  
          </div>
          </form> 
          <!-- akhir form -->
          <!-- End -->
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="<?php echo base_url('js/cart/cart.js')?>"></script>
      <script src="<?php echo base_url('js/cart/cart2.js')?>"></script>


      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

