<?php
/*
Template Name: home
*/
?>
<?php get_header() ?>


    <!--END HEADER  -->

    <!-- MAIN START -->
    <main class="main">
      <section class="top">
        <div class="top__inner">
          <div class="top__slider">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category_name'    => 'slider-header',
  
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывода постов, функции цикла: the_title() и т.д. -->
     <div class="top__slider-item">
              <img src="<?php the_field('slider-top_image') ?>" alt="" class="top__slider-img">
              <div class="top__slider-info">
                <h2 class="top__slider-title">
                  <?php the_field('slider-top_title') ?>
                </h2>
                <p class="top__slider-text">
                  <?php the_field('slider-top_text') ?>
                </p>
              </div>
            </div>
		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>







            

            
          </div>
        </div>
      </section>

    </main>


    <!--END MAIN  -->
    <!-- NEW COLECTION -->
    <section class="new-collection">
      <div class="container-fluid">
        <h1 class="new-collection__title">
          <?php the_field('collection_title') ?>
        
        </h1>
        <p class="new-collection__text"><?php the_field('collection_text') ?>
        </p>
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
    </section>
    <!--END  NEW COLECTION -->

    <!-- DECOR START -->
    <section class="decor">
      <div class="container">
        <h2 class="decor__title">
          Aesthetic
          ethical drinking
        </h2>
        <p class="decor__text">
          Deep v you probably haven't heard of them banh mi synth actually affogato. Artlyft ethical the one drinking
          vinegar
          austint

        </p>
      </div>
    </section>

    <!-- DECOR END -->
    <!-- START WORKS-PATH -->
    <section class="works-path">
      <div class="container">
        <h3 class="works-path__title">
         
         <?php the_field('how_it_works_title') ?>
        </h3>
        <div class="works-path__items">
          <div class="works-path__items-box">
            <div class="works-path__item works-path__item--consultation">
              <img src="<?php the_field('item_works_image') ?>" alt="" class="works-path__item-img">

              <h6 class="works-path__item-title"><?php the_field('item_works_title') ?></h6>
              <p class="works-path__item-text">
               <?php the_field('item_works_text') ?>
              </p>
            </div>
            <div class="works-path__item works-path__item--prodaction">
              <img src="<?php the_field('item_works_image_2') ?>" alt="" class="works-path__item-img">
              <h6 class="works-path__item-title"><?php the_field('item_works_title_2') ?></h6>
              <p class="works-path__item-text">
                <?php the_field('item_works_text_2') ?>
              </p>
            </div>
          </div>
          <div class="works-path__item works-path__item--measurements">
            <img src="<?php the_field('item_works_image_3') ?>" alt="" class="works-path__item-img">
            <h6 class="works-path__item-title"><?php the_field('item_works_title_3') ?></h6>
            <p class="works-path__item-text">
              <?php the_field('item_works_text_3') ?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--WORKS-PATH END -->

    <!-- START GALERY -->
    <div class="galery">
      <div class="container-fluid">
        <div class="galery__buttons">
          <button class="galery__btn" data-filter=".bedroom"><?php the_field('button_bedroom') ?> </button>
          <button class="galery__btn" data-filter=".living"><?php the_field('living_room') ?> </button>
          <button class="galery__btn" data-filter=".office"><?php the_field('button_office') ?></button>
          <button class="galery__btn" data-filter=".dining"><?php the_field('button_dining') ?></button>
          <button class="galery__btn" data-filter=".chair"><?php the_field('button_chair') ?></button>
        </div>
        <div class="galery__inner">

          <div class="galery__items mix bedroom">



            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_1') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_2') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_3') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_4') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_5') ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix living">
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_1') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_2') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_3') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_4') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_5') ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix office">
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_1') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_2') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_3') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_4') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_5') ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix dining">
            <a href="#" class="galery__item">
    
              <img src="<?php the_field('dining_image_1') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_2') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_3') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_4') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_5') ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix chair">
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_1') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_2') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_3') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_4') ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_5') ?>" alt="img">
            </a>
          </div>
        </div>
      </div>
    </div>



    <!-- END GALERY -->


    <!-- START BLOG -->
    <section class="blog-box">
      <div class="container">
        <h3 class="blog-box__title">
                    <?php the_field('home_blog_section_title') ?>
        </h3>
        <div class="blog-box__items">
<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => 2,
	'category_name'    => 'blog-items',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывода постов, функции цикла: the_title() и т.д. -->
     <div class="blog-box__item">
            <a href="<?php echo get_page_link(230) ?>" class="blog-box__img-link">
              <img class="blog-box__img" src="<?php the_field('blog_item_image') ?>" alt="">
            </a>
            <div class="blog-box__links">

              <span class="blog-box__date"> <?php the_field('blog_item_date') ?></span>|
              <a href="#" class="blog-box__author"><?php the_field('blog_item_author') ?></a>|
              <a href="#" class="blog-box__theme"><?php the_field('blog_item_category') ?></a>
            </div>
            <a href="#" class="blog-box__item-titlelink">
              <h4 class="blog-box__item-title">
                <?php the_field('blog_item_title') ?>
              </h4>
            </a>
          </div>

		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>

</div>


       
          

          

        </div>
      </div>
    </section>

    <!-- END BLOG -->




    <!--FOOTER  -->

    


<?php get_footer() ?>