<?php  ?>

<div class="gallery-content">
	<div class="photos-container">
		<?php
			$dir = "gallery/photos/";
			$dirFull = $dir."full/";
			$dirTn = $dir."tn/";
			$images = glob($dirTn."*.jpg");

			foreach($images as $image) :
		?>

		<a href="<?php echo $dirFull.basename($image); ?>"><img src="img/pixel.png" data-src="<?php echo $image; ?>" class="lazyload"></a>

		<?php endforeach; ?>

		<div class="padder"></div>

	</div>
</div>