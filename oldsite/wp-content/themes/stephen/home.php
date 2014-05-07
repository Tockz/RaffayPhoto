<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<div class="page">
	<div id="content">
        <?php the_content(); ?>
        <style type="text/css">

			.stepcarousel{
			position: relative; /*leave this value alone*/
			overflow: scroll; /*leave this value alone*/
			width: 860px; /*Width of Carousel Viewer itself*/
			height: 460px; /*Height should enough to fit largest content's height*/
			}
			
			.stepcarousel .belt{
			position: absolute; /*leave this value alone*/
			left: 0;
			top: 0;
			}
			
			.stepcarousel .panel{
			float: left; /*leave this value alone*/
			overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
			margin: 10px; /*margin around each panel*/
			width: 860px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
			text-align: center;
			}
			
		</style>

<!--         <h1>Stephen Raffay Photography</h1> -->
		
        <div id="carousel" class="stepcarousel">
			<div class="belt">
				<?php
					$CCarousel = new Pod('carousel_gallery');
					$Carousel->findRecords('displayorder ASC');
					$total_pics = $Carousel->getTotalRows();
				?>
				
				<?php if( $total_pics > 0 ) : ?>
				  <?php while ( $Carousel->fetchRecord() ) : ?>
				
				    <?php
				      // set our variables
						$id = $Carousel->get_field('id');
						$name = $Carousel->get_field('name');
						$image = $Carousel->get_field('image');
						$order = $Carousel->get_field('displayorder');
						$portfolioURL = $Carousel->get_field('portfolio_url');
						
						$image = $image[0]['guid'];
					?>
					<div class="panel">
						<a href="<?php echo $portfolioURL; ?>">
							<img src="<?php echo $image ?>" alt="<?php echo $name; ?>" />
						</a>
					</div>
					<?php endwhile ?>
				<?php endif ?>
			</div>
		</div>	
		<p id="carousel-paginate" style="margin: 10px 0 0 0;width:860px; text-align:center">
			<img src="<?php echo bloginfo('template_url') ?>/images/opencircle.png" data-over="<?php echo bloginfo('template_url') ?>/images/graycircle.png" data-select="<?php echo bloginfo('template_url') ?>/images/closedcircle.png" data-moveby="1" />
		</p>
	</div>
</div>
	<script type="text/javascript">
/* 	jQuery(document).oncomplete(function() { */
	  	stepcarousel.setup({
		galleryid: 'carousel', //id of carousel DIV
		beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
		panelclass: 'panel', //class of panel DIVs each holding content
		autostep: {enable:true, moveby:1, pause:3000},
		panelbehavior: {speed:500, wraparound:true, persist:true},
		defaultbuttons: {enable: true, moveby: 1, leftnav: ['<?php echo bloginfo('template_url') ?>/images/left.png', -5, 80], rightnav: ['<?php echo bloginfo('template_url') ?>/images/right.png', -20, 80]},
		statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
		contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
		});
/* 		}); */
</script>
	<?php get_footer(); ?>
	