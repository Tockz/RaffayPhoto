<?php
/*
Template Name: Home Page with SSP
*/
?>
<?php get_header(); ?>
<div class="page">
	<div id="content">
		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>
				<?php 
					slidepress_display_gallery('home');
					the_content();        
				?>
			<?php endwhile; ?>
		<?php endif; ?>
		<div style="clear:both"></div>
   	</div>
</div>
<?php get_footer(); ?>