<?php $ptitle='Cabot Cruises'; include "_top.php";?>

<!-- START BODY -->

<div id="body">
  <h1 class='headerTitle'>Book a Cruise</h1>

  <form class='bookingForm'>
  <label for="fname">First name</label><br>
  <input type="text" id="fname" name="fname" required><br>
  <label for="lname">Last name</label><br>
  <input type="text" id="lname" name="lname" required><br>
  <label for="address">Address Line</label><br>
  <input type="text" id="address" name="address"><br>
  <label for="city">City</label><br>
  <input type="text" id="city" name="city"><br>
  <label for="state">State</label><br>
  <select name ="State"><br>
  <option value = "Please Select a State" selected>Please Select a State...</option>
  <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
  </select><br>
  <label for="zipcode">Zipcode</label><br>
  <input type="text" id="zipcode" name="zipcode"><br>
  <label for="phone">Phone Number</label><br>
  <input type="text" id="phone" name="phone"><br>
  <label for="email">Email</label><br>
  <input type="text" id="email" name="email" required><br>
  <label for="cruise">Cruise Selection</label><br>
  <select name ="cruise"><br>
  <option value = "Please Select a Cruise" selected>Please Select a Cruise...</option>
  <option value = "Mexico">Mexican Cruise (7-9 Days)</option>
  <option value = "Bahamas">Bahamas Cruise (10 Days)</option>
  <option value = "Australia and New Zealand">Australian and New Zealand Cruise (14-17 Days)</option>
  <option value = "Alaska">Alaskan Cruise (6 Days)</option>
</select>
<br>
<button class="bookCruise" type="submit" form="cruiseForm" value="Submit">Book my Cruise!</button>
</form>
</div>


<?php include "_bot.php";?>