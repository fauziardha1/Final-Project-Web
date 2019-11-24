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
                <tr>
                  
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle">$<strong id="productPrice">79.00</strong></td>

                 <td class="border-0 align-middle" id="number">
                      <span class="minus"> <strong class="v-middle">-</strong></span>
                        <input type="text" value="1"/>
                       <span class="plus">
                        <strong class="v-middle">+</strong>
                      </span>
                  </td>

                  <td class="border-0 align-middle">
                   <span class="spacer"></span>
                    <strong class="v-middle" id="subTotal">0</strong>
                  </td>
                  <td class="align-middle"><div class="cell p-ops">
                  
                  <a href="javascript:;" class="btn-2" clstag="pageclick|keycount|epi_cart_shoppinglist_delete_2016120713|6">Hapus</a>
                </div>
                  </td>

                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5><span class="text-muted font-weight-normal font-italic">Category: Electronics</span>
                      </div>
                    </div>
                  </th>
                  <td class="align-middle"><strong>$79.00</strong></td>
                    <td class="border-0 align-middle" id="number">
                      <span class="minus"> <strong class="v-middle">-</strong></span>
                        <input type="text" value="1"/>
                       <span class="plus">
                        <strong class="v-middle">+</strong>
                      </span>
                  </td>
                  <td class="border-0 align-middle">
                   <span class="spacer"></span>
                    <strong class="v-middle">0</strong>
                  </td>

                  <td class="align-middle"><div class="cell p-ops">
                  
                  <a href="javascript:;" class="btn-2" clstag="pageclick|keycount|epi_cart_shoppinglist_delete_2016120713|6">Hapus</a>
                </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="p-2">
                      <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                      </div>
                    </div>
                    <td class="align-middle"><strong>$79.00</strong></td>
                     <td class="border-0 align-middle" id="number">
                      <span class="minus"> <strong class="v-middle">-</strong></span>
                        <input type="text" value="1"/>
                       <span class="plus">
                        <strong class="v-middle">+</strong>
                      </span>
                  </td>

                    <td class="border-0 align-middle">
                   <span class="spacer"></span>
                    <strong class="v-middle">0</strong>
                  </td>

                  <td class="align-middle"><div class="cell p-ops">
                  
                  <a href="javascript:;" class="btn-2" clstag="pageclick|keycount|epi_cart_shoppinglist_delete_2016120713|6">Hapus</a>
                </div>
                  </td>
                </tr>

              </tbody> 
            </table>
                  <div class="checkout">
                    
                        <div class="printTot"> <em>Total(3&nbsp;pieces)</em> </div>
                        <div class="sum"> <strong >Rp 51,800</strong> </div>
                          
                        <div class="sum">
                           
                           <button class="btn btn-lg btn-block btn-sm btn btn-dark text-uppercase"><a href="<?php echo base_url('checkout') ?>"  style="color: white; text-decoration: none;">Checkout</a></button>
                         </div>
                        </div>
                    </div>
                  </div>
          </div>
          <!-- End -->
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="<?php echo base_url('js/cart/cart.js')?>"></script>


</body>
</html>