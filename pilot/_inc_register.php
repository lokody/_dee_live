	<div class="block reg-block">
		<h1>REGISTRATION</h1>

		<div class="content-container">
			<h2>PARTICIPANT - DAY TICKET</h2>

			<div class="regform-container">
				<form id="regform" method="post" action="">
					<input type="hidden" name="user-type" value="participant">
				<input type="hidden" name="reg-type" value="dayticket">

				<div class="form-group">
					<h3>Contact Details</h3>

					<div class="input-group">
						<label for="reg-name">Name</label>
						<input type="text" name="reg-name" id="reg-name" class="form-control" value="<?php echo $_SESSION["reg-name"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-email">Email</label>
						<input type="email" name="reg-email" id="reg-email" class="form-control" value="<?php echo $_SESSION["reg-email"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-phone">Phone</label>
						<input type="phone" name="reg-phone" id="reg-phone" class="form-control" value="<?php echo $_SESSION["reg-phone"]; ?>">
					</div>
				</div>

				<div class="form-group">
					<h3>Billing Details</h3>

					<div class="input-group">
						<label for="reg-billing-name">Billing Name</label>
						<input type="text" name="reg-billing-name" id="reg-billing-name" class="form-control" value="<?php echo $_SESSION["reg-billing-name"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-vatnumber">VAT Number <span>(optional)</span></label>
						<input type="text" name="reg-vatnumber" id="reg-vatnumber" value="<?php echo $_SESSION["reg-vatnumber"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-country">Country</label>
						<select id="reg-country" name="reg-country" class="form-control">
							<?php 
								include("_part_countries.php");
								foreach ($countries as $country) :
									
							?>

							<option value="<?php echo $country; ?>" <?php if($_SESSION["reg-country"] == $country) echo "selected"; ?>><?php echo $country; ?></option>

							<?php endforeach; ?>
						</select>
					</div>

					<div class="input-group">
						<label for="reg-zipcode">Postal Code</label>
						<input type="text" name="reg-zipcode" id="reg-zipcode" class="form-control" value="<?php echo $_SESSION["reg-zipcode"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-city">City</label>
						<input type="text" name="reg-city" id="reg-city" class="form-control" value="<?php echo $_SESSION["reg-city"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-address">Address</label>
						<input type="text" name="reg-address" id="reg-address" class="form-control"  value="<?php echo $_SESSION["reg-address"]; ?>">
					</div>
				</div>

				<div class="form-group">
					<h3>Order Details</h3>

					<div class="tickets-container">
						<div class="ticket">
							<div class="text-container">
								<div class="text">
									<h3>May 25, 2022</h3>
									<p>One-day participant ticket</p>
								</div>
								<div class="price">
									€20 ×
								</div>
							</div>
							<div class="quantity">
								<input type="number" name="qty-day1" placeholder="0" class="qty qty-ticket" value="0">
							</div>
						</div>

						<div class="ticket hasdinner">
							<div class="text-container">
								<div class="text">
									<h3>May 26, 2022</h3>
									<p>One-day participant ticket</p>
								</div>
								<div class="price">
									€20 ×
								</div>
							</div>
							<div class="quantity">
								<input type="number" name="qty-day2" placeholder="0" class="qty qty-ticket" value="0">
							</div>
						</div>

						<div class="ticket dinner">
							<div class="text-container">
								<div class="text">
									<p>+ Conference dinner ticket</p>
								</div>
								<div class="price">
									€40 ×
								</div>
							</div>
							<div class="quantity">
								<input type="number" name="qty-dinner" placeholder="0" class="qty qty-dinner" value="0">
							</div>
						</div>

						<div class="ticket">
							<div class="text-container">
								<div class="text">
									<h3>May 27, 2022</h3>
									<p>One-day participant ticket</p>
								</div>
								<div class="price">
									€20 ×
								</div>
							</div>
							<div class="quantity">
								<input type="number" name="qty-day3" placeholder="0" class="qty qty-ticket" value="0">
							</div>
						</div>

						<div class="ticket">
							<div class="text-container">
								<div class="text">
									<h3>May 28, 2022</h3>
									<p>One-day participant ticket</p>
								</div>
								<div class="price">
									€20 ×
								</div>
							</div>
							<div class="quantity">
								<input type="number" name="qty-day4" placeholder="0" class="qty qty-ticket" value="0">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<h3>Summary of your order</h3>

					<div class="sum-container">
						<div class="article-container ticket" data-price="20">
							<div class="text"><span class="sum">0</span> × Day Ticket - Participant</div>
							<div class="price">€0</div>
						</div>
						<div class="article-container dinner" data-price="40">
							<div class="text"><span class="sum">0</span> × Dinner Ticket - 26 May - Participant</div>
							<div class="price">€0</div>
						</div>
						<div class="total-container subtotal">
							<div class="text">Subtotal</div>
							<div class="price">€0</div>
						</div>
						<div class="total-container tax">
							<div class="text">VAT <span>27%</span></div>
							<div class="price">€0</div>
						</div>
						<div class="total-container total">
							<div class="text">Total</div>
							<div class="price">€0</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" id="submitbtn" class="button pay-button disabled">Pay €0</button>
				</div>

				</form>
			</div>
			
		</div>

		
	</div>






 




