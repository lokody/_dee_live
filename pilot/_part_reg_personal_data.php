				<div class="form-group">
					<h3>Contact Details</h3>

					<div class="input-group">
						<label for="reg-name">Name<span style="color:blue;">*</span></label>
						<input type="text" name="reg-name" id="reg-name" class="form-control" value="<?php echo $_SESSION["reg-name"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-email">Email<span style="color:blue;">*</span></label>
						<input type="email" name="reg-email" id="reg-email" class="form-control" value="<?php echo $_SESSION["reg-email"]; ?>">
						<div id="not-valid-msg" class="not-valid-msg">Please enter a valid email address.</div>
					</div>

					<div class="input-group">
						<label for="reg-phone">Phone<span style="color:blue;">*</span></label>
						<input type="phone" name="reg-phone" id="reg-phone" class="form-control" value="<?php echo $_SESSION["reg-phone"]; ?>">
					</div>
				</div>

				<div class="form-group">
					<h3>Billing Details</h3>

					<div class="input-group">
						<label for="reg-billing-name">Billing Name<span style="color:blue;">*</span></label>
						<input type="text" name="reg-billing-name" id="reg-billing-name" class="form-control" value="<?php echo $_SESSION["reg-billing-name"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-vatnumber">VAT Number <span>(optional)</span></label>
						<input type="text" name="reg-vatnumber" id="reg-vatnumber" value="<?php echo $_SESSION["reg-vatnumber"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-country">Country<span style="color:blue;">*</span></label>
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
						<label for="reg-zipcode">Postal Code<span style="color:blue;">*</span></label>
						<input type="text" name="reg-zipcode" id="reg-zipcode" class="form-control" value="<?php echo $_SESSION["reg-zipcode"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-city">City<span style="color:blue;">*</span></label>
						<input type="text" name="reg-city" id="reg-city" class="form-control" value="<?php echo $_SESSION["reg-city"]; ?>">
					</div>

					<div class="input-group">
						<label for="reg-address">Address<span style="color:blue;">*</span></label>
						<input type="text" name="reg-address" id="reg-address" class="form-control"  value="<?php echo $_SESSION["reg-address"]; ?>">
					</div>

					<div class="msg" id="fill-msg">
						<p><span style="color:blue;">*</span> Please fill in all the required fields.</p>
					</div>
				</div>

