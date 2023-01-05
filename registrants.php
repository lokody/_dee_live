<?php
	session_start();

	if(isset($_POST["passfield"])) {
		if($_POST["passfield"] == "paeregs") {
			$_SESSION["loggedin"] = true;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrants</title>

	<style type="text/css">
		* { 
			-webkit-box-sizing: border-box; 
			-moz-box-sizing:    border-box; 
			box-sizing:         border-box;
			-webkit-font-smoothing: antialiased;
		  	-moz-osx-font-smoothing: grayscale;
		  	-webkit-overflow-scrolling: touch;
		}
		body {
			width: 100%;
			height: 100%;
			font-family: sans-serif;
			padding: 0;
			margin: 0;
		}
		.wrapper {
			position: relative;
			width: 100%;
			height: 100%;
			min-height: 90vh;
			display: flex;
			align-items: center;
			padding: 2rem;
		}
		.form-container {
			padding: 2rem;
			width: 100%;
			max-width: 320px;
			margin: 0 auto;
			background-color: #f5f5f5;
		}

		label {
			font-size: 0.9rem;
			display: block;
		}

		input {
			padding: 0.5rem;
			display: block;
			font-size: 1rem;
			margin-bottom: 1rem;
			width: 100%;
		}
		button {
			padding: 0.5rem;
			border: 1px solid black;
			color: white;
			background-color: black;
			cursor: pointer;
			font-size: 1rem;
			font-weight: bold;
		}
		table {
			position: relative;
			border: 1px solid black;
			width: 100%;
			text-align: left;
			align-self: flex-start;
			
		}
		tr, tbody {
			position: relative;
			width: 100%;
		}
		th {
			background-color: black;
			color: white;
		}
		th, td {
			position: relative;
			padding: 0.5rem;
		}

		tr:nth-child(odd) {
			background-color: lightgrey;
		}

		td.star {
			text-align: center;
			font-size: 0.9rem;
		}

		.col-regdate {
			width: 190px;
		}

		.col-name {
			width: 150px;
		}

		.col-email {
			width: 150px;
		}

		.col-phone {
			width: 150px;
		}

		
	</style>
</head>
<body>
	<div class="wrapper">
<?php
	if(!isset($_SESSION["loggedin"])) :
?>
		<div class="form-container">
			<form action="registrants.php" method="post">
				<label for="pass">Jelszó</label>
				<input type="password" name="passfield" id="pass">

				<button type="submit">Mehet</button>
			</form>
		</div>

<?php elseif (isset($_SESSION["loggedin"])) : ?>

	<table cellspacing="2">
		<colgroup>
			<col span="1" class="col-number">
			<col span="1" class="col-regdate">
			<col span="1" class="col-name">
			<col span="1" class="col-email">
			<col span="1" class="col-phone">
			<col span="1" class="col-country">
			<col span="1" class="col-city">
			<col span="1" class="col-type">
			<col span="1" class="col-ticket ticket-full">
			<col span="1" class="col-ticket ticket-day">
			<col span="1" class="col-ticket ticket-day">
			<col span="1" class="col-ticket ticket-day">
			<col span="1" class="col-ticket ticket-day">
			<col span="1" class="col-ticket ticket-dinner">
		</colgroup>

		<tr>
			<th>#</th>
			<th class="regtime">Reg. time</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Country</th>
			<th>City</th>
			<th>Type</th>
			<th class="ticket">Full</th>
			<th class="ticket">Day 1</th>
			<th class="ticket">Day 2</th>
			<th class="ticket">Day 3</th>
			<th class="ticket">Day 4</th>
			<th class="ticket">Dinner</th>
		</tr>
	<?php
		$counter = 0;
		$db = new SQLite3("registration.db");
		$res = $db->query("SELECT * FROM registration WHERE id>10 ORDER BY reg_date ASC");

		while($row = $res->fetchArray()) :
			$time = $row["reg_date"];
			$email = $row["email"];
			$name = $row["name"];
			$phone = $row["phone"];
			$country = $row["invoice_country"];
			$city = $row["invoice_city"];
			$type = $row["type"];
			$counter++;
			//$ticket_full = $row["ticket_full"];
			//$subEvent = $row["subscribe_events"] == "yes" ? "&#9733;" : "";
			//$subOpen = $row["subscribe_open"] == "yes" ? "&#9733;" : "";;
			//$subMentor = $row["subscribe_mentor"] == "yes" ? "&#9733;" : "";;
	?>

		<tr>
			<td><?php echo $counter; ?></td>
			<td class="regtime"><?php echo $time; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $phone; ?></td>
			<td><?php echo $country; ?></td>
			<td><?php echo $city; ?></td>
			<td><?php echo $type; ?></td>
			<td><?php echo $row["ticket_full"]; ?></td>
			<td><?php echo $row["ticket_day1"]; ?></td>
			<td><?php echo $row["ticket_day2"]; ?></td>
			<td><?php echo $row["ticket_day3"]; ?></td>
			<td><?php echo $row["ticket_day4"]; ?></td>
			<td><?php echo $row["ticket_dinner"]; ?></td>
		</tr>

	<?php endwhile; ?>

	</table>

<?php endif; ?>

	</div>
</body>
</html>