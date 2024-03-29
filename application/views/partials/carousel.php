<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <?php if ($this->uri->segment(2) == ''): ?>
        <div class="carousel-item active">
          <a class="nav-link" href="<?php echo base_url('home/women') ?>">
            <img src="<?php echo base_url()?>img/2.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Women's Fashion</h5>
            <p><em>Trend Fashion</em> Wanita masa kini</p>
          </div>
        </div>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/man') ?>">
            <img src="<?php echo base_url()?>img/1.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5 >Men's Fashion</h5>
            <p>Menunjang penampilan pria dalam berbagai keadaan</p>
          </div>
        </div>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/child') ?>">
            <img src="<?php echo base_url()?>img/4.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Child's Fashion</h5>
            <p>Berbagai jenis <em>Fashion</em> yang cocok untuk anak</p>
          </div>
        </div>
  
      <?php elseif($this->uri->segment(2) == 'women'): ?>
        <div class="carousel-item active">
          <a class="nav-link" href="<?php echo base_url('home/women') ?>">
            <img src="<?php echo base_url()?>img/2.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Women's Fashion</h5>
            <p><em>Trend Fashion</em> Wanita masa kini</p>
          </div>
        </div>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/man') ?>">
            <img src="<?php echo base_url()?>img/1.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5 >Men's Fashion</h5>
            <p>Menunjang penampilan pria dalam berbagai keadaan</p>
          </div>
        </div>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/child') ?>">
            <img src="<?php echo base_url()?>img/4.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Child's Fashion</h5>
            <p>Berbagai jenis <em>Fashion</em> yang cocok untuk anak</p>
          </div>
        </div>  

      <?php elseif($this->uri->segment(2) == 'man'): ?>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/women') ?>">
            <img src="<?php echo base_url()?>img/2.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Women's Fashion</h5>
            <p><em>Trend Fashion</em> Wanita masa kini</p>
          </div>
        </div>
        <div class="carousel-item active">
          <a class="nav-link" href="<?php echo base_url('home/man') ?>">
            <img src="<?php echo base_url()?>img/1.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5 >Men's Fashion</h5>
            <p>Menunjang penampilan pria dalam berbagai keadaan</p>
          </div>
        </div>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/child') ?>">
            <img src="<?php echo base_url()?>img/4.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Child's Fashion</h5>
            <p>Berbagai jenis <em>Fashion</em> yang cocok untuk anak</p>
          </div>
        </div>

      <?php elseif($this->uri->segment(2) == 'child'): ?>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/women') ?>">
            <img src="<?php echo base_url()?>img/2.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Women's Fashion</h5>
            <p><em>Trend Fashion</em> Wanita masa kini</p>
          </div>
        </div>
        <div class="carousel-item">
          <a class="nav-link" href="<?php echo base_url('home/man') ?>">
            <img src="<?php echo base_url()?>img/1.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5 >Men's Fashion</h5>
            <p>Menunjang penampilan pria dalam berbagai keadaan</p>
          </div>
        </div>
        <div class="carousel-item active">
          <a class="nav-link" href="<?php echo base_url('home/child') ?>">
            <img src="<?php echo base_url()?>img/4.jpg" class="d-block mx-auto mt-2" style="border-radius: 50px;" width="90%" height="500px" alt="...">
          </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>Child's Fashion</h5>
            <p>Berbagai jenis <em>Fashion</em> yang cocok untuk anak</p>
          </div>
        </div> 
      <?php endif; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>