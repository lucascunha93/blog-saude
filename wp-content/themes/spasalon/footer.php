<?php 
$current_options = wp_parse_args(  get_option( 'spa_theme_options', array() ), default_data() );
?>
<!-- Footer Section -->
<footer class="footer-sidebar">	
	
	<?php if( is_active_sidebar('footer-sidebar1') || is_active_sidebar('footer-sidebar2') || is_active_sidebar('footer-sidebar3') || is_active_sidebar('footer-sidebar4')) : ?>
	<div class="empty-footer-sidebar">
	<!-- Footer Widgets -->	
	<div class="container">		
		<div class="row">		
			
			<div class="col-md-3 col-sm-6">
				<?php 
				if( is_active_sidebar('footer-sidebar1') ) :
					dynamic_sidebar( 'footer-sidebar1' ); 
				endif;
				?>
			</div>
					
			<div class="col-md-3 col-sm-6">		
				<?php 
				if( is_active_sidebar('footer-sidebar2') ) :
					dynamic_sidebar( 'footer-sidebar2' ); 
				endif;
				?>
			</div>	
			
			<div class="col-md-3 col-sm-6">	
				<?php 
				if( is_active_sidebar('footer-sidebar3') ) :
					dynamic_sidebar( 'footer-sidebar3' ); 
				endif;
				?>
			</div>
			
			<div class="col-md-3 col-sm-6">
				<?php 
				if( is_active_sidebar('footer-sidebar4') ) :
					dynamic_sidebar( 'footer-sidebar4' ); 
				endif;
				?>
			</div>
			
		</div>
	</div>
	<!-- /End of Footer Widgets -->	
	</div>
	<?php endif; ?>
	
	<!-- Copyrights -->	
	<div class="site-info">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12">
				
					<?php if( $current_options['footer_tagline'] ){ ?>
					<p><?php echo wp_kses_post($current_options['footer_tagline']); ?></p>
					<?php } ?>
					
				</div>
				
			</div>
		</div>
	</div>
	<!-- Copyrights -->	
	
</footer>
<!-- /End of Footer Section -->

<!--Scroll To Top--> 
<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/End of Scroll To Top--> 	
<?php wp_footer(); ?>
</body>
</html>

