  <?php $this->load->view("partials/header.php") ?>
   <?php $this->load->view("partials/navbar.php") ?>
   <a href="<?php echo base_url('success') ?>"  style="color: white;"></a>
 
    
  <div class="row py-5 p-4 bg-white rounded shadow-sm  d-flex justify-content-center ">
        <div class=" card " style="width: 50%">
          
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold ">Alamat Penerima</div>
          
            <div class=" d-flex justify-content-center">
            <textarea name="" cols="23" rows="2" class="form-control" style="width: 95%"></textarea>
            </div>

            <div class="bg-light rounded-pill px-4 py-3  ">Daftar belanja
              <div class=" p-4 bg-white rounded shadow-sm  ">
                
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
                      <span  class="text-muted font-weight-normal d-block" >x1</span>
                    </td>
                  </div>
                  </div>


                  <div class=" d-flex justify-content-end">
                    <td class="border-0 align-middle ">Rp <strong id="productPrice"> <?php echo $produk->harga ?></strong></td>
                    </div>

                </tr>

                
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
            </ul><button id="tombol"  class="btn btn-dark rounded-pill py-2 btn-block text-uppercase beli" >beli</button>
          </div>
        </div>
      </div>

      <script src="<?php echo base_url('js/cart/checkout.js')?>"></script>


<script src="<?php echo base_url('js/sweetalert2.all.min.js')?>"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="<?php echo base_url('js/cart/cart.js')?>"></script>