<?php
	$Carousel = new Pod('carousel_gallery');
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