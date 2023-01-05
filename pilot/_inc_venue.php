<?php
	$v = 1;
	if(isset($_REQUEST["v"])) $v = $_REQUEST["v"];

	if($v == 1) $map = "_inc_venue_map1.php";
	if($v == 2) $map = "_inc_venue_map2.php";
?>

	<div class="venue-flex-container">
		<div class="venue-text">
			<h1>VENUE</h1>
		</div>
		<div class="venue-list-items">
			<ul class="day-link-list">
				<li><a href="index.php?p=venue&v=1" class="<?php if($v==1) echo "active"; ?>">Campus Map</a></li>
				<li><a href="index.php?p=venue&v=2" class="<?php if($v==2) echo "active"; ?>">Traffic Map</a></li>
			</ul>
		</div>
	</div>

	


	<?php include($map); ?>
	
