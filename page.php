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
    <?php get_header('inner') ?>
    
    <!-- about section -->
  <section class="about_section layout_padding">
    <div class="about_container">
      <div class="container">
        <div class="detail">
          <h2 class="custom_heading">
            <?php the_title() ?>
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
    
    <?php get_footer() ?>
</body>