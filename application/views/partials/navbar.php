<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url() ?>"><i>FashionID</i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $this->uri->segment(2) == 'women' ? 'active' : '' ?> <?php echo $this->uri->segment(1) == '' ? 'active' : '' ?>" >
        <a class="nav-link" href="<?php echo base_url('home/women') ?>">Wanita <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'man' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('home/man') ?>">Pria</a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'child' ? 'active' : '' ?> dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url('home/child') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Anak-anak
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('home/child') ?>">< 6 tahun</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('under-maintenance') ?>">6 tahun - 15 tahun</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('under-maintenance') ?>">> 15 tahun</a>
        </div>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'about' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('home/about') ?>">About</a>
      </li>
    </ul>

    <ul class="form-inline my-2 my-lg-0 mr-3" >
     <li class="nav-item active">
      <a class="nav-link" href="<?php if($this->session->userdata('islogin') !== true){ echo base_url('login'); } else { echo base_url('cart'); } ?>">
        <img  src="<?php echo base_url()?>img/cart/bag.png"> 
        <span class="sr-only">(current)</span>
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger"><?php if($this->session->userdata('islogin') == true) { echo $sumCart; } ?></span>
      </a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="search" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php if (isset($this->session->userdata)) :?>

      <?php if($this->session->userdata('islogin') === true) : ?>
       <!-- coba -->
      <li class="nav-item dropdown">
        <a class="dropdown-toggle font-weight-bold text-white" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
          <?= $this->session->userdata('username'); ?>
          <img class="img-profile rounded-circle  " width="40" height="40" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('') ?>">Home</a>
        </div>
      </li>
      <!-- akhir coba -->
      <?php else : ?>
        <button class="btn btn-outline-success my-2 my-sm-0 ml-3"><a href="<?php echo base_url('login') ?>"  style="color: white; text-decoration: none;">Masuk</a></button>
      <?php endif ?>

    <?php else : ?>
    <button class="btn btn-outline-success my-2 my-sm-0 ml-3"><a href="<?php echo base_url('login') ?>"  style="color: white; text-decoration: none;">Masuk</a></button>
    
    <?php endif ?>

  </div>
</nav>