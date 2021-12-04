<footer class="footer">
      <div class="footer__content">
        <div class="container">
          <div class="footer__inner">
            <div class="footer__info">
              <div class="footer__info-title">
                <h6>
                  Contact Us
                </h6>
              </div>
              <p class="footer__info-text">
                <?php the_field('adress_company',2 ,227, 230, 237) ?>
              </p>
              <a href="mailto:<?php the_field('email_company',2 ,227, 230) ?>" class="info-email">
                <?php the_field('email_company',2 ,227, 230, 237) ?>
              </a>
              <form class="footer__form" action="">

              <?php echo do_shortcode('[contact-form-7 id="226" title="home"]') ?>
                
                
              </form>

            </div>
            <ul class="footer__social-list">
              <li class="footer__social-item"><a href="<?php the_field('social-facebook',2 ,227, 230, 237) ?>" class="footer__social-link footer__social-link--facebook">
                  Facebook
                </a></li>
              <li class="footer__social-item"><a href="<?php the_field('social-instagram',2 ,227, 230, 237) ?>" class="footer__social-link footer__social-link--instagram">
                 Pinterest
                </a></li>
              <li class="footer__social-item"><a href="<?php the_field('social-pinterest',2 ,227, 230, 237) ?>" class="footer__social-link footer__social-link--pinterest">
                   Pinterest
                </a></li>
              <li class="footer__social-item"><a href="<?php the_field('social-whatsapp',2 ,227, 230, 237) ?>" class="footer__social-link footer__social-link--what">
                  WhatSapp
                </a></li>
              <li class="footer__social-item"><a href="<?php the_field('social-youtube',2 ,227, 230, 237) ?>" class="footer__social-link footer__social-link--youtube">
                   Youtube
                </a></li>
            </ul>
            <nav class="footer__menu">
              <ul class="footer__menu-list">
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">Delivery</a></li>
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">FAQ</a></li>
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">Help</a></li>
                <li class="footer__menu-item"><a href="#" class="footer__menu-link">More About Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="footer__copy">
        <p class="content">
          674 Gonzales Drive. Washington, PA 15301</p>
      </div>
    </footer>
  </div>

<?php wp_footer(); ?>
<!-- перед тегом script -->
  <script src="js/main.min.js"></script>
</body>

</html>
