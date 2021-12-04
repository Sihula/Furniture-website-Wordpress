<?php
/*
Template Name: Blog
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
      <!-- START BLOG -->
      <section class="blog">
        <div class="container">
          <div class="blog__inner">


            <div class="blog__items">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category_name'    => 'blog-items',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывода постов, функции цикла: the_title() и т.д. -->
    <div class="blog__item">
                <img src="<?php the_field('blog_item_image') ?>" alt="" class="blog__item-img">
                <div class="blog__item-info">
                  <span class="blog__item-date"><?php the_field('blog_item_date') ?> |</span>
                  <a class="blog__item-author" href="#"><?php the_field('blog_item_author') ?> |</a>
                  <a class="blog__item-theme" href="#"><?php the_field('blog_item_category') ?></a>
                </div>
                <a href="blog-one.html">
                  <h3 class="blog__item-title">
                    <?php the_field('blog_item_title') ?>
                  </h3>
                </a>

                <p class="blog__item-text">
                  <?php the_field('blog_item_text') ?>
                </p>
              </div>

        

		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>


              
              <blockquote class="blog__blockquote">
                <?php the_field('blockquote_text') ?>
                <div class="blog__blockquote-author">
                 <?php the_field('blockquote_author') ?>
                </div>
              </blockquote>

              

              <div class="pagination">

                <a href="#" class="pagination__arrow pagination__arrow--disabled">
                  <img src="<?php echo bloginfo('template_url');?>/assets/images/arrow-left.svg" alt="">
                </a>

                <ul class="pagination__list">
                  <li class="pagination__list-item">
                    <a href="#" class="pagination__list-num pagination__list-num--active">1</a>
                  </li>
                  <li class="pagination__list-item">
                    <a href="#" class="pagination__list-num">2</a>
                  </li>
                </ul>

                <a href="#" class="pagination__arrow">
                  <img src="<?php echo bloginfo('template_url');?>/assets/images/arrow-right.svg" alt="">
                </a>

              </div>

            </div>

            <aside class="aside">

              <?php get_search_form(); ?>
             


              <div class="blog__category">
                <h6 class="blog__category-title">Categories</h6>
                <ul class="blog__category-list">
                  <li class="blog__category-item"><a href="#" class="blog__category-link">
                      Dining room (1)

                    </a></li>
                  <li class="blog__category-item"><a href="#" class="blog__category-link">
                      Office furniture (12)

                    </a></li>
                  <li class="blog__category-item"><a href="#" class="blog__category-link">
                      Simple interiror design (2)

                    </a></li>
                  <li class="blog__category-item"><a href="#" class="blog__category-link">
                      Design (4)

                    </a></li>
                  <li class="blog__category-item"><a href="#" class="blog__category-link">
                      Bedroom Furniture (1)

                    </a></li>
                </ul>
              </div>
              <div class="recent-posts">
                <h6 class="recent-posts__title">
                  Recent Posts
                </h6>


                <ul class="recent-posts__list">

                  <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category_name'    => 'blog-items',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывода постов, функции цикла: the_title() и т.д. -->
    <div class="blog__item">
                
                <div class="blog__item-info">
                  <a href="blog-one.html">
                    <h3 class="recent-posts__item-title">
                      <?php the_field('blog_item_title') ?>
                    </h3>
                  </a>
                  <span class="blog__item-date"><?php the_field('blog_item_date') ?> |</span>
                  <a class="blog__item-author" href="#"><?php the_field('blog_item_author') ?> |</a>
                  <a class="blog__item-theme" href="#"><?php the_field('blog_item_category') ?></a>
                </div>

                
              </div>

        

		<?php 
	}
} 
wp_reset_postdata(); // Сбрасываем $post
?>
                </ul>
              </div>
              <div class="blog__tags">
                <h6 class="blog__tags-title">
                  Tags
                </h6>
                <a href="#" class="blog__tags-link">Dining room futniture</a>
                <a href="#" class="blog__tags-link">Chair</a>
                <a href="#" class="blog__tags-link">Table</a>
                <a href="#" class="blog__tags-link">Bedroom</a>
                <a href="#" class="blog__tags-link">Office Furniture</a>
              </div>
              <ul class="blog__social">
                <li class="blog__social-item"><a href="<?php the_field('social-facebook',2 ,227, 230) ?>" class="blog__social-link">
                  
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/facebook.svg" alt="" class="blog__social-img"></a></li>

                <li class="blog__social-item"><a href="<?php the_field('social-instagram',2 ,227, 230) ?>" class="blog__social-link">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/instagram.svg" alt="" class="blog__social-img"></a></li>

                <li class="blog__social-item"><a href="<?php the_field('social-pinterest',2 ,227, 230) ?>" class="blog__social-link">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/pinteres.svg" alt="" class="blog__social-img"></a></li>
                <li class="blog__social-item"><a href="<?php the_field('social-whatsapp',2 ,227, 230) ?>" class="blog__social-link">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/what.svg" alt="" class="blog__social-img"></a></li>
                <li class="blog__social-item"><a href="<?php the_field('social-youtube',2 ,227, 230) ?>" class="blog__social-link">
                    <img src="<?php echo bloginfo('template_url');?>/assets/images/youtube.svg" alt="" class="blog__social-img"></a></li>
              </ul>
            </aside>
          </div>
        </div>
      </section>





      <!-- END BLOG -->



    </main>


<?php
get_footer();
?>