<nav class="navbar navbar-expand-lg position-fixed w-100">
  <div class="container-fluid p-0">
    <a href="<? echo site_url('/home'); ?>" class="navbar-brand">
      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/home" class="nav-link">home</a>
        </li>
        <li class="nav-item">
          <a href="/pages" class="nav-link">pages</a>
        </li>
        <li class="nav-item">
          <a href="/portfolio" class="nav-link">portfolio</a>
        </li>
        <li class="nav-item">
          <a href="/shop" class="nav-link">shop</a>
        </li>
        <li class="nav-item-icon">
          <a href="/cart" class="nav-link-icon"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
        <li class="nav-item-icon">
          <a href="" class="nav-link-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
        </li>
        <li class="nav-item-icon">
          <a href="" class="nav-link-icon"><i class="fa-solid fa-bars"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>