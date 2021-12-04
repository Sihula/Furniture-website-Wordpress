<?php
/*
Template Name: Gallery
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

      <div class="galery">
      <div class="container-fluid">
        <div class="galery__buttons">
          <button class="galery__btn" data-filter=".bedroom"><?php the_field('button_bedroom',2, 234) ?> </button>
          <button class="galery__btn" data-filter=".living"><?php the_field('living_room',2, 234,2, 234) ?> </button>
          <button class="galery__btn" data-filter=".office"><?php the_field('button_office',2, 234) ?></button>
          <button class="galery__btn" data-filter=".dining"><?php the_field('button_dining',2, 234) ?></button>
          <button class="galery__btn" data-filter=".chair"><?php the_field('button_chair',2, 234) ?></button>
        </div>
        <div class="galery__inner">

          <div class="galery__items mix bedroom">



            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_1',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_2',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_3',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_4',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('bedroom_image_5',2, 234) ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix living">
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_1',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_2',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_3',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_4',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('living_room_image_5',2, 234) ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix office">
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_1',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_2',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_3',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_4',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('office_image_5',2, 234) ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix dining">
            <a href="#" class="galery__item">
    
              <img src="<?php the_field('dining_image_1',2, 234,2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_2',2, 234,2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_3',2, 234,2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_4',2, 234,2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('dining_image_5',2, 234,2, 234) ?>" alt="img">
            </a>
          </div>
          <div class="galery__items mix chair">
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_1',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_2',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_3',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_4',2, 234) ?>" alt="img">
            </a>
            <a href="#" class="galery__item">
              <img src="<?php the_field('chair_image_5',2, 234) ?>" alt="img">
            </a>
          </div>
        </div>
      </div>
    </div>
    </main>


<?php
get_footer();
?>