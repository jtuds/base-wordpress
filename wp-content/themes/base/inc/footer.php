<footer class="footer" role="contentinfo">
  <div class="wrapper wrapper--thin">
    <div class="wrapper wrapper--x-thin">

      <div class="pre-footer">
        <div class="grid">
          <div class="grid__item desk-narrow-two-fifths">
            <div class="desk-narrow-max-panel--half">
              <h1 class="gamma">Footer Content</h1>
              <div class="grid">
                <div class="grid__item palm-one-whole five-fifths">
                    <p><?php echo gimme_ipsum(); ?></p>
                  </div><!--/.grid__item -->
              </div><!--/.grid -->
            </div><!--/.panel -->
          </div><!--/.grid__item-->
          <div class="grid__item desk-narrow-two-fifths push--desk-narrow-one-fifth">
            <h1 class="gamma">Newsletter</h1>
            <p>Enter your email to join our newsletter.</p>
            <?php include('subscribe-form.php'); ?>
          </div><!--/.grid__item -->
        </div><!--/.grid -->
      </div><!--/.pre-footer -->

          <div class="footer-text">
          <div class="grid">
            <div class="grid__item palm-one-whole one-half">
              <p>Copyright <?php echo date('Y') ?> <?php bloginfo('name'); ?></p>
            </div><!--/.grid__item -->
            <div class="grid__item palm-one-whole  one-half">
              <ul class="footer-links">
                <li><a href="">Link 1</a></li>
                <li><a href="">Link 2</a></li>
                <li><a href="">Link 3</a></li>
              </ul>
            </div><!--/.grid__item -->
          </div><!--/.grid -->
        </div><!--/.footer-text -->

    </div><!--/.wrapper -->
  </div><!--/.wrapper -->
</footer>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="<?php getThemePath(); ?>/dist/js/selectivizr.js"></script>
<![endif]-->

<?php wp_footer(); ?>

<noscript>
  <link rel="stylesheet" href="<?php getThemePath(); ?>/dist/css/no-js.css">
</noscript>

</body>
</html>