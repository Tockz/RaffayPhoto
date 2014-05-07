<?php
/*
Template Name: Image Pages (No Tree)
*/
?>
<?php get_header(); ?>
<div class="page">
	<div id="content">
		<div id="categories_raffay">
			<h3><a href="#">Subjects</a></h3>
		<div>
			<?php include('/home/raffayphoto/public_html/wp-content/uploads/wpsc/themes/Raffay/category_widget.php'); ?>
		</div>
		<?php if(wpsc_cart_item_count() > 0): ?>
			<h3><a href="#">Cart</a></h3>
			<div>
				<?php include('/home/raffayphoto/public_html/wp-content/uploads/wpsc/themes/Raffay/cart_widget.php'); ?>
			</div>
		<?php endif; ?>
		<h3><a href="#">Prices</a></h3>
		<table id="store_prices" style="margin-top:5px;">
			<tr>
				<td>Sizes:</td>
				<td>Prices:</td>
				<td>S&H:</td>
			</tr>
			<tr><td>11x14"</td><td>$25.00</td><td>S&H: $12.00</td></tr>
			<tr><td>16x20"</td><td>$70.00</td><td>S&H: $20.00</td></tr>
			<tr><td>20x24"</td><td>$90.00</td><td>S&H: $20.00</td></tr>
			
			<tr><td colspan="3"><p>Signed prints: $20 each.</p>
				</td>
			</tr>
		</table>
		<h3>Store Info</h3>
		<div>
			<p><a href="/portfolio/store-policy" target="_blank">Store Policy</a></p>
			<p>Raffay Photography does not store identifiable financial information.</p>
			<script language="JavaScript" type="text/javascript"> SiteSeal("https://seal.networksolutions.com/images/basicsqgreen.gif", "NETSB", "none");</script>
		</div>
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div><!--end entry-->
		</div><!--end post-->
		
	<?php endwhile; endif; ?>
	
</div><!--end content-->
<script type="text/javascript">
	jQuery(function() {
		jQuery("#categories_raffay").accordion({
			collapsible: true,
			autoHeight: true
		});
	});
	</script>
	

<?php include (TEMPLATEPATH . '/footer_notree.php'); ?>
