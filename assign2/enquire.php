
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content = "Enquiries about products">
	<meta name = "keywords" content="fix, problem, broken, product">
	<title>Products Enquiry</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php
    	include("header.inc");
    ?>
	<section id = "enquirepart"> 
		<h1> PRODUCT ENQUIRY </h1>
		<h3 class = "enquirepartdiscription">This is where all your problems or questions will be fully solved and elaborated by us. If you have any, please feel free to fill in the enquiry form down below:</h3>
		<form id="paymentForm" method="post" action="process_order.php" novalidate="novalidate">
			<fieldset>
				<legend>Personal Information</legend>
				<p>
				
					<label for="fname">First Name</label>
					<br>
					<input type="text" name="First_name" id="fname" maxlength="25" required="required">
					<br>
					<label for="lname">Last Name</label>
					<br>
					<input type="text" name="Last_name" id="lname" maxlength="25" required="required">
				</p>
				<p>
					<br>
					<label for="emailadd">Email Address</label>
					<br>
					<input type="email" name="Email" id="emailadd" required="required">
				</p>
				<p>
					<br>
					<label for="phonenum"> Phone Number</label>
					<br>
					<input type="text" name="Phone_number" id="phonenum" pattern="[0-9]{10}" placeholder="Enter your phone number" required="required">
				</p>
			</fieldset>
			<fieldset class = "fieldset">
				<legend>Address</legend>
				<div>
					<ol type="i">
						<li>
							<label for="straddress"> Street Address</label>
							<br>
							<input type="text" name="Street" id="straddress" maxlength="40" required="required">
						</li>
						<li>
							<label for="sburb"> Suburb/Town</label>
							<br>
							<input type="text" name="Suburb/town" id="sburb" maxlength="20" required="required">
						</li>
						<li>
							<label for="state">State</label>
							<br>
							<select name ="State" id="state" required="required">
								<option value =""></option>
								<option value ="VIC">VIC</option>
								<option value ="NSW">NSW</option>
								<option value ="QLD">QLD</option>
								<option value ="NT">NT</option>
								<option value ="WA">WA</option>
								<option value ="SA">SA</option>
								<option value ="TAS">TAS</option>
								<option value ="ACT">ACT</option>
							</select>
						</li>
						<li>
							<label for="pcode">Postcode</label>
							<br>
							<input type="text" name="Postcode" id="pcode" pattern="\d{4}" maxlength="4" required="required">
						</li>

					</ol>
				</div>
			</fieldset>
			<fieldset>
				<legend>Preferred contact</legend>
				<div class = "fieldset1">
					<label for="email">Email</label>
					<input type="radio" name="preferred_contact" id="email" value="Email" checked = "checked">
					<label for="phone">Phone</label>
					<input type="radio" name="preferred_contact" id="phone" value="Phone">
					<label for="post">Email</label>
					<input type="radio" name="preferred_contact" id="post" value="Post">
				</div>
				
			</fieldset>
			<fieldset>
                    <legend>Purchase product</legend>                                        <!-- Purchase section -->
                    <div>
							<label for="prod">Product</label>
							<div>
								<label>Dell</label>
								<input type="radio" name="products" id="Dell" value="Dell" checked = "checked">
								<label>HP</label>
								<input type="radio" name="products" id="HP" value="HP" >
								<label>Macbook</label>
								<input type="radio" name="products" id="Macbook" value="Macbook">
								<label>Asus</label>
								<input type="radio" name="products" id="Asus" value="Asus">
								<label>LG</label>
								<input type="radio" name="products" id="LG" value="LG">
							</div>
			                                                                                                     
                        <ul class="extraOptions">                                           <!-- Extra options-->
                            <li>
                                <label for="mercQuantity">Quantity: </label>  
								<br><br>              <!-- Quantity picker-->
                                <input type="text" name="quantity" id="quantity" placeholder="Please enter quantity here">
                            </li>
							<li>                                                            <!-- Color picker-->
                                <label for="Color">Color: </label>
                                <select id="Color">
									<br><br>  
									<option value=""></option>
                                    <option value="Red">Red</option>
                                    <option value="Black">Black</option>
                                    <option value="Yellow">Yellow</option>
                                </select>
                            </li>
                        </ul>
					</div>
                </fieldset>
				<fieldset>				<!-- Payment and card details -->
				<legend>Payment details</legend>
				<p>																<!-- Card types -->
					<label for="cardType">Card Type:</label>
					<br><br>  
					<select name="cardType" id="cardType">
						<option value="none">Please select your card type</option>
						<option value="visa">Visa</option>			
						<option value="master">MasterCard</option>
						<option value="amex">American Express</option>
					</select>
				</p>	
				<br><br>  
				<p>																<!-- Name on card -->
					<label for="cardName">Name on Card:</label> 
					<br><br>  
					<input type="text" name= "cardName" id="cardName" >
				</p>
				<p> 															<!-- Card number -->
					<label for="cardNumber">Card Number:</label> 
					<br><br>  
					<input type="text" name= "cardNumber" id="cardNumber"  >
				</p>
				<p> 															<!-- Expiry date -->
					<label for="cardExpiry">Card Expiry date:</label> 
					<br><br>  
					<input type="text" name= "cardExpiry" id="cardExpiry" placeholder="mm/yy" >
				</p>
				<p> 
					<label for="cardCVV">Card verification value:</label>
					<br><br>   		<!-- Card CVV -->
					<input type="text" name= "cardCVV" id="cardCVV"  >
				</p>
			</fieldset>

				<input type="submit" name="Submit">
				<input type="reset" name="Reset">
		</form>
	</section>
	<?php
        include("footer.inc");
    ?>
</body>
</html>