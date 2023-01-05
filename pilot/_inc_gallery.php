<?php

?>

<div class="gallery-block">
	<div class="venue-flex-container">
		<div class="venue-text">
			<h1>GALLERY</h1>
		</div>
		<div class="list-wrapper venue-list-items">
			<ul class="day-link-list gallery">
				<li><a href="index.php?p=gallery&d=1" class="<?php if ($d == 1)
	            echo "active"; ?>">Photos</a></li>
				<li><a href="index.php?p=gallery&d=2" class="<?php if ($d == 2)
	            echo "active"; ?>">Videos</a></li>
			</ul>
		</div>
	</div>

	<div class="list-wrapper">
		<?php include("_inc_gallery_type" . $d . ".php"); ?>
	</div>
</div>

<script type="text/javascript">
	let lightbox = new SimpleLightbox('.gallery-content a', {
		"overlayOpacity": 0.8
	});
</script>
<script type="text/javascript" src="js/simple-lazyload.js" id="lazyloadjs" data-offset="300"></script>