<?php
	
?>

<?php
	$d = 1;
	if(isset($_REQUEST["d"])) $d = $_REQUEST["d"];


?>

		<div class="venue-flex-container">
		<div class="venue-text">
			<h1>PROGRAM</h1>
		</div>
		<div class="venue-list-items">
			<ul class="day-link-list venue">
			<li><a href="index.php?p=program&d=1" class="<?php if($d==1) echo "active"; ?>">Day 1</a></li>
				<li><a href="index.php?p=program&d=2" class="<?php if($d==2) echo "active"; ?>">Day 2</a></li>
				<li><a href="index.php?p=program&d=3" class="<?php if($d==3) echo "active"; ?>">Day 3</a></li>
				<li><a href="index.php?p=program&d=4" class="<?php if($d==4) echo "active"; ?>">Day 4</a></li>
			</ul>
		</div>
	</div>

		<div class="list-wrapper-program-day">
			<?php include("_inc_program_day".$d.".php"); ?>
		</div>
	</div>