<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="<?php echo site_url() ?>">
            <img src="<?php echo bloginfo('template_directory') ?>/images/logo.png" alt="" />
            <span>
              Medi
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <?php wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class' => 'navbar-nav',
              )) ?>
              <!-- <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About us </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html"> Products </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="client.html"> Clients </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul> -->
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- hero section -->
    <section class="hero_section">
      <div class="hero_detail">
        <h1>
          <span>
            h
          </span>
          <span>
            e
          </span>
          <span>
            r
          </span>
          <span>
            b
          </span>
          <span>
            a
          </span>
          <span>
            l
          </span>
        </h1>
        <h3>
          Natural product
          </h2>
      </div>
      <div class="hero_btn-box">
        <a href="">
          Contact Us
        </a>
      </div>
    </section>
    <!-- end hero section -->
  </div>
  <!-- end hero area -->