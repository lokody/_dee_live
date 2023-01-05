<?php
	session_start();
	$db = new SQLite3("registration.db");

	$_SESSION["reg-name"] = $_POST["reg-name"];
	$_SESSION["reg-email"] = $_POST["reg-email"];
	$_SESSION["reg-phone"] = $_POST["reg-phone"];
	$_SESSION["reg-billing-name"] = $_POST["reg-billing-name"];
	$_SESSION["reg-vatnumber"] = $_POST["reg-vatnumber"];
	$_SESSION["reg-country"] = $_POST["reg-country"];
	$_SESSION["reg-zipcode"] = $_POST["reg-zipcode"];
	$_SESSION["reg-city"] = $_POST["reg-city"];
	$_SESSION["reg-address"] = $_POST["reg-address"];

	$name = $_POST["reg-name"];
	$email = $_POST["reg-email"];
	$phone = $_POST["reg-phone"];
	$invoice_name = $_POST["reg-billing-name"];
	$invoice_vatnumber = $_POST["reg-vatnumber"];
	$invoice_country = $_POST["reg-country"];
	$invoice_zipcode = $_POST["reg-zipcode"];
	$invoice_city = $_POST["reg-city"];
	$invoice_address = $_POST["reg-address"];

	$usertype = $_POST["user-type"];
	$regtype = $_POST["reg-type"];
	$reg_date = date("Y-m-d H:i:s");

	$qtyFull = (isset($_POST["qty-full"])) ? $_POST["qty-full"] : 0;
	$qtyDay1 = (isset($_POST["qty-day1"])) ? $_POST["qty-day1"] : 0;
	$qtyDay2 = (isset($_POST["qty-day2"])) ? $_POST["qty-day2"] : 0;
	$qtyDay3 = (isset($_POST["qty-day3"])) ? $_POST["qty-day3"] : 0;
	$qtyDay4 = (isset($_POST["qty-day4"])) ? $_POST["qty-day4"] : 0;
	$qtyDinner = (isset($_POST["qty-dinner"])) ? $_POST["qty-dinner"] : 0;

	$sql = "INSERT INTO registration (name, email, phone, invoice_name, invoice_vatnumber, invoice_country, invoice_zipcode, invoice_city, invoice_address, type, ticket_full, ticket_day1, ticket_day2, ticket_day3, ticket_day4, ticket_dinner, reg_date) VALUES ('$name', '$email', '$phone', '$invoice_name', '$invoice_vatnumber', '$invoice_country', '$invoice_zipcode', '$invoice_city', '$invoice_address', '$usertype', '$qtyFull', '$qtyDay1', '$qtyDay2', '$qtyDay3', '$qtyDay4', '$qtyDinner', '$reg_date')";

	if($usertype == "participant" && $regtype == "dayticket") {
		$url = "https://sf.mome.hu/t/r/pae30-conference-day-ticket-participants";
		$qty = $qtyDay1 + $qtyDay2 + $qtyDay3 + $qtyDay4;
		$wqty = $qtyDinner;
	}else if($usertype == "audience" && $regtype == "dayticket") {
		$url = "https://sf.mome.hu/t/r/pae30-conference-day-ticket";
		$qty = $qtyDay1 + $qtyDay2 + $qtyDay3 + $qtyDay4;
		$wqty = $qtyDinner;
	}else if($usertype == "participant" && $regtype="fullticket") {
		$url = "https://sf.mome.hu/t/r/pae30-conference-full-package";
		$qty = $qtyFull;
		$wqty = 0;
	}

	$url .= "?name=".$name;
	$url .= "&email=".$email;
	$url .= "&telephone=".$phone;
	$url .= "&invoice_name=".$invoice_name;
	$url .= "&invoice_vatnumber=".$invoice_vatnumber;
	$url .= "&invoice_zipcode=".$invoice_zipcode;
	$url .= "&invoice_city=".$invoice_city.", ".$invoice_country;
	$url .= "&invoice_street=".$invoice_address;
	$url .= "&qty=".$qty;
	$url .= "&wqty=".$wqty;
	$url .= "&sub=1";

	if($db->query($sql)) {
		echo json_encode(array(1, $url));
	}else {
		echo json_encode(array(0, "Database error. Please try again."));
	}
?>