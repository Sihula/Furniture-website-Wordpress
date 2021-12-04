<?php
/*
Template Name: Contacts
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
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55011.136571133444!2d-122.45335805694255!3d37.79398024275678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580e839d7e541%3A0xf89b6220c55337a7!2zR3JlZW4gU3QsIFNhbiBGcmFuY2lzY28sIENBIDk0MTMzLCDQodCo0JA!5e0!3m2!1sru!2spl!4v1636827609270!5m2!1sru!2spl"
          width="100%" height="578" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <section class="contact">
        <div class="container">
          <h3 class="contact__title">
            Contact Us
          </h3>
          <ul class="contact__social">
            <li class="contact__social-item"><a href="<?php the_field('social-facebook',2 ,227, 230, 237) ?>" class="contact__social-link">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/facebook.svg" alt="" class="contact__social-img"></a></li>
            <li class="contact__social-item"><a href="<?php the_field('social-instagram',2 ,227, 230, 237) ?>" class="contact__social-link">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/instagram.svg" alt="" class="contact__social-img"></a></li>
            <li class="contact__social-item"><a href="<a href="<?php the_field('social-pinterest',2 ,227, 230, 237) ?>" class="contact__social-link">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/pinteres.svg" alt="" class="contact__social-img"></a></li>
            <li class="contact__social-item"><a href="<a href="<?php the_field('social-whatsapp',2 ,227, 230, 237) ?>" class="contact__social-link">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/what.svg" alt="" class="contact__social-img"></a></li>
            <li class="contact__social-item"><a href="<a href="<?php the_field('social-youtube',2 ,227, 230, 237) ?>" class="contact__social-link">
                <img src="<?php echo bloginfo('template_url');?>/assets/images/youtube.svg" alt="" class="contact__social-img"></a></li>
          </ul>
          <div class="contact__box">
            <p class="contact__text">
              <?php the_field('contact_us_inforamtion',2 ,227, 230, 237) ?>
            </p>
            <a class="contact__phone" href="tel:+14158297934">
              <?php the_field('phone_company',2 ,227, 230, 237) ?>
            </a>
            
            <div class="contact__city">
              <?php the_field('adress_company',2 ,227, 230, 237) ?>
            </div>
            <a class="info-email" href="mailto:<?php the_field('email_company',2 ,227, 230, 237) ?>">
              <?php the_field('email_company',2 ,227, 230, 237) ?>
            </a>
          </div>



          <form class="contact__form">
            <?php echo do_shortcode('[contact-form-7 id="309" title="Contact Us form"]') ?>
          </form>





        </div>
      </section>

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


    </main>


<?php
get_footer();
?>