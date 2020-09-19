
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container pt-3 pb-3">
		<div class="site-info">				
			<?php if ( is_active_sidebar( 'site-info' )) : ?>
				<div class="col-12 col-md-4"><?php dynamic_sidebar( 'site-info' ); ?></div>
			<?php else : ?>				
				&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
				<span class="sep"> | </span>
				<a class="credits" href="https://lawoftime.org/" target="_blank" 
					title="Foundation for the Law of Time" 
					alt="Foundation for the Law of Time">
				<?php echo esc_html__('Foundation for the Law of Time','wp-bootstrap-starter'); ?>
				</a>
			<?php endif; ?>
		</div><!-- close .site-info -->
	</div>
</footer><!-- #colophon -->
