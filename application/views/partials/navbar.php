<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url() ?>">ZALORA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $this->uri->segment(1) == '' ? 'active' : '' ?> <?php echo $this->uri->segment(1) == 'women' ? 'active' : '' ?>" >
        <a class="nav-link" href="<?php echo base_url('women') ?>">Wanita <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'man' ? 'active' : '' ?>">
        <a class="nav-link" href="<?php echo base_url('man') ?>">Pria</a>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(1) == 'child' ? 'active' : '' ?> dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo base_url('child') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Anak-anak
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('child') ?>">< 6 tahun</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('child') ?>">6 tahun - 15 tahun</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('child') ?>">> 15 tahun</a>
        </div>
      </li>
    </ul>

    <ul class="form-inline my-2 my-lg-0 mr-3" >
     <li class="nav-item active">
      <a class="nav-li\nk" href="">
        <img  src="<?php echo base_url('img/cart/bag.png')?>"> 
        <span class="sr-only">(current)</span>
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger">21</span>
      </a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button class="btn btn-outline-success my-2 my-sm-0 ml-3"><a href="<?php echo base_url('login') ?>"  style="color: white; text-decoration: none;">Masuk</a></button>
    
  </div>
</nav>