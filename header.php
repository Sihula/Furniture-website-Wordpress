<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' );?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); echo " | "; bloginfo('description') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css">
<?php wp_head(); ?>
  <!-- перед тегом head -->
</head>

<body>
  <div class="wrapper">

    <!-- HEADER START -->


    <header class="header">
      <div class="container">
        <div class="header__inner">
          <nav class="menu">


<?php the_custom_logo() ?>


          <?php
          wp_nav_menu( [
	'menu'            => 'Main',
	'container'       => false,
	'menu_class'      => 'menu__list',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'items_wrap'      => '<ul class="menu__list">%3$s</ul>',
	'depth'           => 1,
	] );
          ?>

          
          
          

          </nav>
          <button class="header__btn-menu">
            <span></span>
            <span></span>
            <span></span>
          </button>

        </div>
      </div>
    </header>


  

         

         

