<?php
/*
Template Name: About
*/
?>

<?php get_header();?>

<!-- тут вставить контент -->

<main class="main">
      <div class="breadcrumbs">
        <div class="container">
          <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item">
              <a href="#" class="breadcrumbs__link">
                Home
              </a>
            </li>
            <li class="breadcrumbs__item">
              <a href="#" class="breadcrumbs__link">
                About
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- SEction ABOUT start -->
      <section class="about">
        <div class="about__prev">
          <div class="container">
            <h2 class="about__prev-title">
              <?php the_field('main_about') ?>
            </h2>
          </div>
        </div>
        <div class="about__content">
          <div class="container">
            <h3 class="about__title">
              <?php the_field('main_about_title') ?>
            </h3>
            <div class="about__text">
              <P><?php the_field('main_about_text') ?>
              </P>
            </div>
          </div>
        </div>
        <div class="about__popup">
          <a class="about__popup-play" data-fancybox
            href="<?php the_field('main_about_video_link') ?>">

            <img class="about__popup-img" src="<?php echo bloginfo('template_url');?>/assets/images/play-button.svg" alt="btn">

          </a>
        </div>
      </section>

      <!-- SEction ABOUT END -->


      <!--START INSPIRATION  -->
      <section class="inspiration">
        <div class="container-fluid ">
          <div class="inspiration__inner">
            <img src="<?php the_field('inspiration_section_image') ?>" alt="#" class="inspiration__inner-img">
            <div class="inspiration__content">
              <h3 class="inspiration__title">
                <?php the_field('inspiration_section_title') ?>
              </h3>
              <p class="inspiration__text">
                <?php the_field('inspiration_section_text') ?>
              </p>
              <ul class="inspiration__list">
                <li class="inspiration__item">
                  <div class="inspiration__item-content">
                    <p class="inspiration__item-text"><?php the_field('inspiration_section_item_1') ?></p>
                    <p class="inspiration__num"><?php the_field('inspiration_section_percent_1') ?></p>
                  </div>
                  <div class="inspiration__line" style="width: <?php the_field('inspiration_section_percent_1') ?>;"></div>
                </li>
                <li class="inspiration__item">
                  <div class="inspiration__item-content">
                    <p class="inspiration__item-text"><?php the_field('inspiration_section_item_2') ?></p>
                    <p class="inspiration__num"><?php the_field('inspiration_section_percent_2') ?></p>
                  </div>
                  <div class="inspiration__line" style="width:<?php the_field('inspiration_section_percent_2') ?>;"></div>
                </li>
                <li class="inspiration__item">
                  <div class="inspiration__item-content">
                    <p class="inspiration__item-text"><?php the_field('inspiration_section_item_3') ?></p>
                    <p class="inspiration__num"><?php the_field('inspiration_section_percent_3') ?></p>
                  </div>
                  <div class="inspiration__line" style="width: <?php the_field('inspiration_section_percent_3') ?>;"></div>
                </li>
                <li class="inspiration__item">
                  <div class="inspiration__item-content">
                    <p class="inspiration__item-text"><?php the_field('inspiration_section_item_4') ?></p>
                    <p class="inspiration__num"><?php the_field('inspiration_section_percent_4') ?></p>
                  </div>
                  <div class="inspiration__line" style="width:<?php the_field('inspiration_section_percent_4') ?>;"></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!--END INSPIRATION  -->

      <!--START partners  -->
      <div class="partners">
        <div class="container-fluid">
          <div class="partners__items">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/parters/parnters-1.svg" alt="" class="partners__img">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/parters/parnters-2.svg" alt="" class="partners__img">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/parters/parnters-1.svg" alt="" class="partners__img">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/parters/parnters-2.svg" alt="" class="partners__img">
            <img src="<?php echo bloginfo('template_url');?>/assets/images/parters/parnters-1.svg" alt="" class="partners__img">
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="collection">

        <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category_name'    => 'new-collection',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывода постов, функции цикла: the_title() и т.д. -->
    <a class="collection__item" href="#">
            <img src="<?php the_field('new_collection_image') ?>" alt="" class="collection__img">
            <div class="collection__info">
              <h6 class="collection__info-title"><?php the_field('new_collection_title') ?></h6>
              <p class="collection__info-text"><?php the_field('new_collection_subtitle') ?></p>
            </div>
          </a>
		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>


        </div>
      </div>


      <!--END partners  -->
    </main>

<?php get_footer();?>