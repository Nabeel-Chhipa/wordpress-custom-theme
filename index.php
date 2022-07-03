<?php
  // echo get_template_directory_uri();
  // bloginfo('template_directory');
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medi</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" />
</head>

<body>
  
  <?php get_header(); ?>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="about_container">
      <div class="container">
        <div class="detail">
          <h2 class="custom_heading">
            About Us
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of g it
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="detail-2">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of g it
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- end about section -->

  <!-- product section -->
  <section class="product_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="custom_heading">
        Our Products
      </h2>
    </div>
    <div class="container layout_padding2">
      <div class="img-box box-1">
        <img src="<?php echo bloginfo('template_directory') ?>/images/p-1.jpg" alt="">
      </div>
      <div class="img-box box-2">
        <img src="<?php echo bloginfo('template_directory') ?>/images/p-2.jpg" alt="">
      </div>
      <div class="img-box box-3">
        <img src="<?php echo bloginfo('template_directory') ?>/images/p-3.jpg" alt="">
      </div>
      <div class="img-box box-4">
        <img src="<?php echo bloginfo('template_directory') ?>/images/p-4.jpg" alt="">
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="">
        See More
      </a>
    </div>
  </section>


  <!-- end product section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="d-flex flex-column align-items-center text-center">
        <h2 class="custom_heading ">
          Why choose Us
        </h2>
        <p class="">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking
          at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
          opposed to using 'Content here, content here', making it
        </p>
      </div>
    </div>
    <div class="why_container my-4">
      <div class="img_box">
        <img src="<?php echo bloginfo('template_directory') ?>/images/why-img.jpg" alt="">
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a href="">
        Read More
      </a>
    </div>
  </section>

  <!-- end why section -->



  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="col-md-6">
        <div class="d-flex mb-4 ml-4 ml-md-0">
          <h2 class="custom_heading text-center">
            CONTACT US
          </h2>
        </div>
        <form action="">
          <div>
            <input type="text" placeholder="Name" />
          </div>
          <div>
            <input type="email" placeholder="Email" />
          </div>
          <div>
            <input type="text" placeholder="Pone Number" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex justify-content-center mt-4 ">
            <button>
              SEND
            </button>
          </div>
        </form>
      </div>
    </div>

  </section>

  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="custom_heading">
        Testimonial
      </h2>
    </div>
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding">
              <div class="img_box">
                <img src="<?php echo bloginfo('template_directory') ?>/images/client.png" alt="">
              </div>

              <div class="detail_box">
                <h5>
                  <span>
                    M
                  </span>
                  <span>
                    o
                  </span>
                  <span>
                    r
                  </span>
                  <span>
                    s
                  </span>
                  <span>
                    w
                  </span>
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of
                  letters,
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding">
              <div class="img_box">
                <img src="<?php echo bloginfo('template_directory') ?>/images/client.png" alt="">
              </div>

              <div class="detail_box">
                <h5>
                  <span>
                    M
                  </span>
                  <span>
                    o
                  </span>
                  <span>
                    r
                  </span>
                  <span>
                    s
                  </span>
                  <span>
                    w
                  </span>
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of
                  letters,
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding">
              <div class="img_box">
                <img src="<?php echo bloginfo('template_directory') ?>/images/client.png" alt="">
              </div>

              <div class="detail_box">
                <h5>
                  <span>
                    M
                  </span>
                  <span>
                    o
                  </span>
                  <span>
                    r
                  </span>
                  <span>
                    s
                  </span>
                  <span>
                    w
                  </span>
                </h5>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when
                  looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of
                  letters,
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- end client section -->

  <?php get_footer(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
</body>

</html>