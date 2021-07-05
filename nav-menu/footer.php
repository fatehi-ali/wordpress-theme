  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.12.4.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sidr.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      $(".sliderbox").owlCarousel({
        'items': 1,
        'rtl': true,
      });
      $('#sidemobilev').sidr();
    });
  </script>
  <?php wp_footer(); ?>
  </body>
  </html>