<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

</div><!-- / end page container, begun in the header -->

<footer class="site-footer" role="contentinfo">
	<div class="site-info container">
		
		<p>2014 kleach</p>
		
	</div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>
