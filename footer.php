<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
  </div>
  
		<footer id="footer" class="footer source-org vcard copyright fixed-bottom" role="contentinfo">
			<div class="footer-copyright__text">
        <span class="footer-copyright__text-brand">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
        <div>
          <span class="footer-copyright__text-design-brand">Help/Trouble Designs</span>
          <span class="footer-copyright__text-rights">All Rights Reserved</span>
        </div>
      </div>
		</footer>


	<?php wp_footer(); ?>


<!-- jQuery is called via the WordPress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
         Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-XXXXXX-XX', 'domainname.com');
  ga('send', 'pageview');

</script>

-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.bundle.min.js"></script>

</body>

</html>
