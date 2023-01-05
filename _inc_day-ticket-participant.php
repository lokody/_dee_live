	<div class="block reg-block">
		<h1>GET TICKETS</h1>

		<div class="content-container">
			<h2>DAY TICKET FOR PARTICIPANTS</h2>

			<div class="regform-container">
				<form id="regform" method="post" action="">
					<input type="hidden" name="user-type" value="participant">
				<input type="hidden" name="reg-type" value="dayticket">

				<?php include("_part_reg_personal_data.php"); ?>

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
				<div class="form-group legal">
					<p>I declare that I accept the <a href="#dtd" id="dtd-link" class="modal-btn">Data Transfer Declaration</a> and agree to the <a href="#pp" id="pp-link" class="modal-btn">Privacy Policy</a> by clicking on the payment button!</p>

					<p><b>Please note:</b> payment will be made in Hungarian Forint with a 385 HUF/EUR exchange rate.</p>
				</div>
				<div class="form-group">
					<button type="submit" id="submitbtn" class="button pay-button disabled">Pay €0</button>
					
				</div>
				</form>


			</div>
			
		</div>

	</div>

	<?php include("_part_modals.php"); ?>





 




