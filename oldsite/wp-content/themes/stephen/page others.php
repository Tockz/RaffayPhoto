<?php
/*
Template Name: No Tree
*/
?><?php get_header(); ?>
<div class="page">
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div><!--end entry-->
		</div><!--end post-->
		
		<?php endwhile; endif; ?>
	<!--php edit_post_link('You must be Stephen. You can edit this entry.', '<p>', '</p>'); ?>-->
	
	</div><!--end content-->

<?php include (TEMPLATEPATH . '/footer_notree.php'); ?>