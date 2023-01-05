<?php
	
?>

	<div class="block gallery-block">
			<h1>GALLERY</h1>

			<div class="list-wrapper">
				<ul class="day-link-list gallery">
					<li><a href="gallery/1/" class="<?php if($d==1) echo "active"; ?>">Photos</a></li>
					<li><a href="gallery/2/" class="<?php if($d==2) echo "active"; ?>">Videos</a></li>
				</ul>
			</div>

			<div class="list-wrapper">
				<?php include("_inc_gallery_type".$d.".php"); ?>
			</div>
	</div>


<script type="text/javascript">
	let lightbox = new SimpleLightbox('.gallery-content a', {
		"overlayOpacity" : 0.8
	});
</script>
<script type="text/javascript" src="js/simple-lazyload.js" id="lazyloadjs" data-offset="300"></script>