 <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: 50px  25%;
        padding: 50px;
        border: 1px solid #eee;
        box-shadow: 0 10px 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
     
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
 
        
    }
    

    </style>
    <?php $this->load->view("partials/header.php") ?>
 
</head>

<body>
    <div class="invoice-box py-5">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                	<div class="title py-2 d-flex justify-content-center ">
                    <h1 class="navbar-brand " ><i class="" style="font-size: 3em">FashionID</i></h1></div>
                     <div class=" font-weight-bold py-2" style="font-size: 1.5em">Invoice:</div>
                   
                </td>
            </tr>
            
            <tr >
                <td colspan="2">
                	<div class="p-3" style="  background: #eee;">
                
                    <div><b>Nama Penerima   : </b><?php echo $pesanan['nama'] ?></div>
                     <div><b>No. Hp Penerima: </b><?php echo $pesanan['no_telp'] ?></div>
                      <div><b>Alamat Penerima: </b><?php echo $pesanan['alamat'] ?> </div>
                     
                    </div>
                </td>
            </tr>
            
            <tr  >
                <td var_dump($order)>
                    <div class="py-3"> <b> Rincian Pembelian (2 produk) </b> </div>
                </td>
                
                
            </tr>
            
            <tr >
               <table class="table " >
               	<thead class="thead-dark">
   				 <tr >
        			<th>No</th>
            		<th>Produk</th>
           			<th>Harga </th>
           			<th>Jumlah</th>
           			<th>Subtotal</th>
           		</tr>
           	</thead>

           		<div>
           	
           		<?php
			        $i=1 ?>
			         <?php foreach ($products as $produk) : ?>
			            	<tr class="" style="font-size: 12px" >
			                    <td><?php echo $i ?></td>
			                    <td><?php echo $produk->nama_brg ?></td>
			                    <td><?php echo $produk->harga ?></td>
			                    <td>208r093</td>
			                    <td>hgucgaui</td>
			                </tr>
			          <?php  $i++ ?>
			       <?php endforeach; ?>
			       </div>
           		
     
				</table>
            </tr>
            
          
        </table>
    </div>
</body>
</html>