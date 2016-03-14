<?php do_action( 'hji_theme_before_footer' ); ?>

<footer id="footer" class="content-info" role="contentinfo">
	
	<h2 class="footer-company-title">Bodega Bay Real Estate, Inc.</h2>
	
	<div class="container">
		
		<?php do_action( 'hji_theme_before_footer_widgets' ); ?>
		
		<?php if( is_active_sidebar( 'blvd-footerwidgets' ) ) : ?>
			
			<div class="footer-widgets row">
				
				<?php dynamic_sidebar( 'blvd-footerwidgets' ); ?>
			
			</div>
		
		<?php endif; ?>
		
		<?php do_action( 'hji_theme_after_footer_widgets' ); ?>
		
		<?php do_action( 'hji_theme_above_copyright' ); ?>
	
	</div>
	
	<div id="copyright" class="fineprint">
		
		<div class="container">
			
			<span class="copyright"><?php hji_footer_copyright(); ?></span>
			
			<span class="hji-powered"><a href="http://www.homejunction.com/" target="_blank">Real Estate Website Design</a> powered by Home Junction.</span>
		
		</div>
	
	</div>
	
	<?php wp_footer(); ?>

</footer>

<?php do_action( 'hji_theme_after_footer' ); ?>