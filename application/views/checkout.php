<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view("partials/header.php") ?>
</head>
<body>
  <?php $this->load->view("partials/navbar.php") ?>

  <div class="row py-5 p-4 bg-white rounded shadow-sm  d-flex justify-content-center ">
        <div class=" card " style="width: 50%">
          
           <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold ">Penerima</div>
          
          
            <form class="px-4" method="POST" action="<?= base_url('checkout/invoice');?>">

              <div class="d-flex justify-content-between py-3" >
              <div class=" " style="width: 45% ">Nama:
              
                <input class="form-control" type="text" name="name" id="name" placeholder="Nama" required="">
              </div>
              <div class=" " style="width: 45% " >Nomor Telepon:
                <input class="form-control" type="number"name="noHp" id="noHp" placeholder="No. Hp" required="" />
              </div>
              </div>

              <div class=" " style="" >Alamat:
                
                <textarea name="alamatPenerima" id="address" cols="23" rows="2" class="form-control " placeholder="Alamat" required=""></textarea>

              </div>
            

             <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold ">DAFTAR BELANJA</div>

            <div class="bg-light rounded-pill px-4 ">
              <div class=" p-4 bg-white rounded shadow-sm  ">
                
                <?php foreach ($products as $produk) : ?>
                <tr>
                  <div class="d-flex justify-content-between text-muted font-weight-normal font-italic d-block">
                    <th scope="row" class="border-0 ">
                      <div class="p-2  ">
                        <img src="<?php echo base_url().'/img/'.$produk->kategori.'/'.$produk->sub_kategori .'/'.$produk->gambar ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0">
                          <a href="<?php echo base_url()?>product/details/<?php echo $produk->id_brg ?>" class="text-dark d-inline-block align-middle" style="text-decoration:none; display: block; width: 300px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo $produk->nama_brg ?></a>
                        </h5>
                        <span class="text-muted font-weight-normal font-italic d-block">Category: <?php echo $produk->sub_kategori ?></span>
                      </div>
                      </div>
                    </th>
                  <div class="d-flex align-items-center">

                    <td>
                      <span  class="text-muted font-weight-normal d-block" >x2</span>
                    </td>
                  </div>
                  </div>


                  <div class=" d-flex justify-content-end">
                    <td class="border-0 align-middle ">Rp <strong id="productPrice"> <?php echo $produk->harga ?></strong></td>
                    </div>

                </tr>
                <?php endforeach; ?>
                
              </div>
            </div>
          </div>



        <div class="card " style="width: 23%">
       
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">rincian pembelian</div>
          <div class="p-4">
            <ul class="list-unstyled ">
              <li class="d-flex justify-content-between py-1 border-bottom text-muted">Total Belanja <p> $390.00</p></li>
              <li class="d-flex justify-content-between py-1 border-bottom text-muted">Diskon <p>$10.00</p></li>
              <li class="d-flex justify-content-between py-1 border-bottom text-muted">Biaya Pengiriman <p>$0.00</p></li>
              <li class="d-flex justify-content-between py-3 border-bottom text-muted"><strong>Total</strong>
                <h5 class="font-weight-bold">$400.00</h5>
              </li>
            </ul>
            <button id="tombol" class="btn btn-dark rounded-pill py-2 btn-block text-uppercase beli" type="submit">beli</button>
          </div>
        </div>
      </div>


    <script src="<?php echo base_url('js/cart/checkout.js')?>"></script>

    <script src="<?php echo base_url('js/sweetalert2.all.min.js')?>"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('js/cart/cart.js')?>"></script>

    <!-- bootstrap  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>
