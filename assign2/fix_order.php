<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="COS100026 assignment 2">
	<meta name="keywords"    content="COS100026, assignment 2, server-side programming">
	<meta name="author"      content="The Son Ngo">
	<meta name="viewport"	 content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Fix order</title>
</head>
<body>
	<?php
		//Prevent accessing directly from URL
		if(!isset($_SERVER['HTTP_REFERER'])){
		    header('location:enquire.php');		//redirect to enquire.php if attempted to access directly
		    exit;
		}
        else{
			//Include header, navigation bar
			$page = "processPage";
			include_once("header.inc");
			#include_once("nav.inc");
			//Print out error message
			session_start();
	    	print_r($_SESSION["errMsg"]);
	    }
    ?>
    	<!-- Display form again, filled with information entered from previous pages -->
    	<section>              
		<h1 class="align-center">Application Form</h1>
            <!-- Form -->
            <form class="container" method="post" action="process_order.php" novalidate="novalidate">
                <fieldset>                                                          
                    <legend>Personal Information</legend>
                    <p>
                        <label for="first_name">First Name:</label>                    <!-- first name -->
                        <input type="text" name="firstname" id="first_name" maxlength="25" size="30"
                            pattern="[a-zA-Z]{1,25}" required="required" value="<?php echo $_SESSION["firstname"] ?>" />	<!-- get first name by SESSION -->
                    </p>
                    <p>
                        <label for="last_name">Last Name:</label>                       <!-- last name -->
                        <input type="text" name="lastname" id="last_name" maxlength="25" size="30"
                            pattern="[a-zA-Z]{1,25}" required="required" value="<?php echo $_SESSION["lastname"] ?>"/>		<!-- get last name by SESSION -->
                    </p>
                    <p> 
                        <label for="email">Email:</label>                               <!-- email -->
                        <input type="email" name="email" id="email" required="required" value="<?php echo $_SESSION["email"] ?>"/>	<!-- get email by SESSION -->
                    </p>

                    <fieldset>
                        <legend>Address</legend>
                        <p> 
	                        <label for="address">Street Address:</label>               	<!-- address -->
	                        <input type="text" name="address" id="address" maxlength="40" size="45" required="required" 
	                        		value="<?php echo $_SESSION["address"] ?>"/>		<!-- get address by SESSION -->
	                    </p>
	                    <p>
	                        <label for="suburb">Suburb/Town:</label>                   <!-- suburb -->
	                        <input type="text" name="suburb" id="suburb" maxlength="20" size="25" pattern="[a-zA-Z]{1,20}" 
	                        		required="required" value="<?php echo $_SESSION["suburb"] ?>" />		<!-- get suburb by SESSION -->
	                    </p>
	                    <p>
	                        <label for="state">State:</label>                            <!-- state -->
	                        <select id="state" name="state">
			                    <option value="none">Please select</option>              <!-- Initial select -->
			                    <!-- check which state was selected -->
			                    <option value="VIC" <?php echo ($_SESSION["state"] == "VIC") ? "selected" : "" ?> >VIC</option>		
			                    <option value="NSW" <?php echo ($_SESSION["state"] == "NSW") ? "selected" : "" ?> >NSW</option>
			                    <option value="QLD" <?php echo ($_SESSION["state"] == "QLD") ? "selected" : "" ?> >QLD</option>
			                    <option value="NT"  <?php echo ($_SESSION["state"] == "NT") ? "selected" : "" ?>  >NT</option>
			                    <option value="WA"  <?php echo ($_SESSION["state"] == "WA") ? "selected" : "" ?>  >WA</option>
			                    <option value="SA"  <?php echo ($_SESSION["state"] == "SA") ? "selected" : "" ?>  >SA</option>
			                    <option value="TAS" <?php echo ($_SESSION["state"] == "TAS") ? "selected" : "" ?> >TAS</option>
			                    <option value="ACT" <?php echo ($_SESSION["state"] == "ACT") ? "selected" : "" ?> >ACT</option>
                			</select>
	                    </p>
	                    <p>
                            <label for="postcode">Post Code</label>                    <!-- post code -->
                            <input type="text" name="postcode" id="post_code" maxlength="4" size="4" value="<?php echo $_SESSION["postcode"] ?>"/>  <!-- get post code by SESSION -->
                        </p>
                    </fieldset>

                    <fieldset>
                        <legend>Preferred contact</legend>
                        <p>
                            <label for="phone">Phone Number</label>                     <!-- phone number -->
                            <input type="text" name="phone" id="phone" maxlength="20" size="20"
                                pattern="[\d\s]{8,12}" required="required" placeholder="Enter your phone number" value="<?php echo $_SESSION["phone"] ?>"/> <!-- get phone number by SESSION -->
                        </p>
                        <div id="contactmethod">                                        <!-- preferred contact method -->
                        	<p>Preferred Contact:</p>
                        	<p>
                        		<!-- contact by email -->
                        		<input type="radio" id="by_email" name="contact" required="required" value="by_email"     
			                    	   <?php echo ($_SESSION["contact"] == "by_email") ? "checked" : "" ?>>       <!-- check if email method was selected -->  
			                    <label for="by_email">Email</label>
			                    <span>
			                    	<!-- contact by post -->
			                    	<input type="radio" id="by_post" name="contact" value="by_post"
			                    	<?php echo ($_SESSION["contact"] == "by_post") ? "checked" : "" ?>>           <!-- check if post method was selected -->   
			                        <label for="by_post">Post</label>
			                    </span>
			                    <span>
			                    	<!-- contact by phone -->
			                    	<input type="radio" id="by_phone" name="contact" value="by_phone"
			                    	<?php echo ($_SESSION["contact"] == "by_phone") ? "checked" : "" ?>>          <!-- check if phone method was selected -->     
			                        <label for="by_phone">Phone</label>
			                    </span>
                			</p>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Enquiry</legend>                <!-- enquiry section -->
                        <p>
                        	<label for="enquire_about">Product:</label>                <!-- enquire topic -->
	                        <select required='required' id="enquire_about" name="enquire">
			                    <option value="">What is your problem?</option>
			                    <option value="laptop_price" <?php echo ($_SESSION["enquire"] == "laptop_price") ? "selected" : "" ?> >Laptop prices</option>             <!-- car price topic -->
			                    <option value="tech_index"  <?php echo ($_SESSION["enquire"] == "tech_index") ? "selected" : "" ?>  >Laptop technical indexes</option>               <!-- warranty topic -->
			                    <option value="services"  <?php echo ($_SESSION["enquire"] == "services") ? "selected" : "" ?>  >Laptop services</option>           <!-- car services topic -->
                			</select>
                        </p>
                        <div>
                        	<p>Product functions</p>                                    <!-- product functions with checkbox inputs implementation -->
                        	<?php
                        		//Split the value stored in $_SESSION["functions"] into an array of strings
                        		function splitf($string){
                        			return explode(",", $string);
                        		}
                        		$functions = splitf($_SESSION["functions"]);
                        		$isfunction1 = false;
                        		$isfunction2 = false;
                        		$isfunction3 = false;
                        		for ($i = 0; $i < count($functions); $i++){
                        			if ($functions[$i] == "function 1")
                        				$isfunction1 = true;
                        			if ($functions[$i] == "function 2")
                        				$isfunction2 = true;
                        			if ($functions[$i] == "function 3")
                        				$isfunction3 = true;
                        		}
                        	?>
                            <p>
                            	<input type="checkbox" name="ft[]" value="function1" id="ft1" <?php echo ($isfunction1) ? "checked" : "" ?>>	<!-- Checked if function1 was selected -->
                            	<label for="ft1">function 1</label>
                            </p>
                            <p>
                            	<input type="checkbox" name="ft[]" value="function2" id="ft2" <?php echo ($isfunction2) ? "checked" : "" ?>>	<!-- Checked if function2 was selected -->
                        		<label for="ft2">function 2</label>
                        	</p>
                        	<p>
                        		<input type="checkbox" name="ft[]" value="function3" id="ft3" <?php echo ($isfunction3) ? "checked" : "" ?>>	<!-- Checked if function3 was selected -->
                        		<label for="ft3">function 3</label>
                            </p>
                            <!--<p>
                            	<input type="hidden" name="functions" value="<?php echo $_SESSION["functions"] ?>">	
                            </p>-->
                        </div>
                        
                        <p>
                            <label for="cmt_text">Comments</label>                      <!-- ccomment section implmented by textarea input -->
                        </p>
                        <p>
                            <textarea id="cmt_text" name="comment" rows="4" cols="80"
                                placeholder="Write your comment here..." > <?php echo $_SESSION["comment"] ?> </textarea>
                        </p>
                    </fieldset>
                </fieldset>

                <fieldset>
                    <legend>Purchase product</legend>                                        <!-- Purchase section -->
                    <div>                                                                    <!-- Product 1-->
                        <p>
                        	<!-- Checked if Mercedes was selected -->
                            <input type="checkbox" name="isDell" value="true" id="DellCheckbox" <?php echo ($_SESSION["isDell"] == "true") ? "checked" : "" ?> >
                            <label for="DellCheckbox">Dell Inspiron 16</label>
                        </p>                                               
                        <ul class="extraOptions">                                           <!-- Extra options-->
                            <li>
                                <label for="DellQuantity">Quantity: </label>                <!-- Quantity picker-->
                                <input type="text" name="DellQuantity" id="DellQuantity" placeholder="Please enter quantity here" 
                                value="<?php echo $_SESSION["DellQuantity"] ?>">
                            </li>
                            <li>                                                            <!-- Color picker-->
                                <label for="DellColor">Color:</label>
                                <select id="DellColor" name="DellColor">
                                    <option value="red" <?php echo ($_SESSION["DellColor"] == "red") ? "selected" : "" ?> >Red</option>				<!-- if red was selected then initialise-->
                                    <option value="black" <?php echo ($_SESSION["DellColor"] == "black") ? "selected" : "" ?> >Black</option>  		<!-- if black was selected then initialise-->
                                    <option value="yellow" <?php echo ($_SESSION["DellColor"] == "yellow") ? "selected" : "" ?> >Yellow</option>	<!-- if yellow was selected then initialise-->
                                </select>
                            </li>
                            <li>                                                            <!-- Price showing -->
                                <label for="DellPrice">Price: </label>
                                <input type="text" name="DellPrice" id="DellPrice" value="A$1,170/ each" readonly>
                            </li>
                        </ul>
                    </div>

                    <div>                                                                    <!-- Product 2-->
                        <p>
                        	<!-- Checked if HP was selected -->
                            <input type="checkbox" name="isHP" value="true" id="HPCheckbox" <?php echo ($_SESSION["isHP"] == "true") ? "checked" : "" ?>>
                            <label for="HPCheckbox">HP Envy X360 13</label>
                        </p>                                               
                        <ul class="extraOptions">                                           <!-- Extra options-->
                            <li>
                                <label for="HPQuantity">Quantity: </label>                <!-- Quantity picker-->
                                <input type="text" name="HPQuantity" id="HPQuantity" placeholder="Please enter quantity here"
                                value="<?php echo $_SESSION["HPQuantity"] ?>">
                            </li>
                            <li>                                                            <!-- Color picker-->
                                <label for="HPColor">Color: </label>
                                <select id="HPColor" name="HPColor">
                                    <option value="red" <?php echo ($_SESSION["HPColor"] == "red") ? "selected" : "" ?> >Red</option>			<!-- if red was selected then initialise-->
                                    <option value="blue" <?php echo ($_SESSION["HPColor"] == "blue") ? "selected" : "" ?> >Dark blue</option>	<!-- if blue was selected then initialise-->
                                    <option value="white" <?php echo ($_SESSION["HPColor"] == "white") ? "selected" : "" ?> >White</option>	<!-- if white was selected then initialise-->
                                </select>
                            </li>
                            <li>                                                            <!-- Price showing -->
                                <label for="HPPrice">Price: </label>
                                <input type="text" name="HPPrice" id="HPPrice" value="A$1,293 / each" readonly>
                            </li>
                        </ul>
                    </div>

                    <div>                                                                    <!-- Product 3-->
                        <p>
                        	<!-- Checked if mac was selected -->
                            <input type="checkbox" name="ismac" value="true" id="macCheckbox" <?php echo ($_SESSION["ismac"] == "true") ? "checked" : "" ?>>
                            <label for="macCheckbox">Macbook Pro 16</label>
                        </p>                                               
                        <ul class="extraOptions">                                           <!-- Extra options-->
                            <li>
                                <label for="macQuantity">Quantity: </label>                <!-- Quantity picker-->
                                <input type="text" name="macQuantity" id="macQuantity" placeholder="Please enter quantity here"
                                value="<?php echo $_SESSION["macQuantity"] ?>">
                            </li>
                            <li>                                                            <!-- Color picker-->
                                <label for="macColor">Color: </label>
                                <select id="macColor" name="macColor">
                                    <option value="brown" <?php echo ($_SESSION["macColor"] == "brown") ? "selected" : "" ?> >Brown</option>	<!-- if brown was selected then initialise-->
                                    <option value="silver" <?php echo ($_SESSION["macColor"] == "silver") ? "selected" : "" ?> >Silver</option>	<!-- if silver was selected then initialise-->
                                    <option value="copper" <?php echo ($_SESSION["macColor"] == "copper") ? "selected" : "" ?> >Copper</option>	<!-- if copper was selected then initialise-->
                                </select>
                            </li>
                            <li>                                                            <!-- Price showing -->
                                <label for="macPrice">Price: </label>
                                <input type="text" name="macPrice" id="macPrice" value="A$3,749 / each" readonly>
                            </li>
                        </ul>
                    </div>

                    <div>                                                                    <!-- Product 4-->
                        <p>
                        	<!-- Checked if asus was selected -->
                            <input type="checkbox" name="isasus" value="true" id="asusCheckbox" <?php echo ($_SESSION["isasus"] == "true") ? "checked" : "" ?>>
                            <label for="asusCheckbox">Asus Zenbook Pro Duo 14</label>
                        </p>                                               
                        <ul class="extraOptions">                                           <!-- Extra options-->
                            <li>
                                <label for="asusQuantity">Quantity: </label>                <!-- Quantity picker-->
                                <input type="text" name="asusQuantity" id="asusQuantity" placeholder="Please enter quantity here"
                                value="<?php echo $_SESSION["asusQuantity"] ?>">
                            </li>
                            <li>                                                            <!-- Color picker-->
                                <label for="asusColor">Color: </label>
                                <select id="asusColor" name="asusColor">
                                    <option value="metallic" <?php echo ($_SESSION["asusColor"] == "metallic") ? "selected" : "" ?> >Metallic</option>	<!-- if metallic was selected then initialise-->
                                    <option value="yellow" <?php echo ($_SESSION["asusColor"] == "yellow") ? "selected" : "" ?> >Yellow</option>		<!-- if yellow was selected then initialise-->
                                    <option value="lotus" <?php echo ($_SESSION["asusColor"] == "lotus") ? "selected" : "" ?> >Lotus</option>			<!-- if lotus was selected then initialise-->
                                </select>
                            </li>
                            <li>                                                            <!-- Price showing -->
                                <label for="asusPrice">Price: </label>
                                <input type="text" name="asusPrice" id="asusPrice" value="A$4,200 / each" readonly>
                            </li>
                        </ul>
                    </div>


                    <div>                                                                    <!-- Product 4-->
                        <p>
                        	<!-- Checked if lg was selected -->
                            <input type="checkbox" name="islg" value="true" id="lgCheckbox" <?php echo ($_SESSION["islg"] == "true") ? "checked" : "" ?>>
                            <label for="lgCheckbox">LG Gram 17</label>
                        </p>                                               
                        <ul class="extraOptions">                                           <!-- Extra options-->
                            <li>
                                <label for="lgQuantity">Quantity: </label>                <!-- Quantity picker-->
                                <input type="text" name="lgQuantity" id="lgQuantity" placeholder="Please enter quantity here"
                                value="<?php echo $_SESSION["lgQuantity"] ?>">
                            </li>
                            <li>                                                            <!-- Color picker-->
                                <label for="lgColor">Color: </label>
                                <select id="lgColor" name="lgColor">
                                    <option value="metallic" <?php echo ($_SESSION["lgColor"] == "metallic") ? "selected" : "" ?> >Metallic</option>	<!-- if metallic was selected then initialise-->
                                    <option value="yellow" <?php echo ($_SESSION["lgColor"] == "yellow") ? "selected" : "" ?> >Yellow</option>		<!-- if yellow was selected then initialise-->
                                    <option value="lotus" <?php echo ($_SESSION["lgColor"] == "lotus") ? "selected" : "" ?> >Lotus</option>			<!-- if lotus was selected then initialise-->
                                </select>
                            </li>
                            <li>                                                            <!-- Price showing -->
                                <label for="lgPrice">Price: </label>
                                <input type="text" name="lgPrice" id="lgPrice" value="A$2,039 / each" readonly>
                            </li>
                        </ul>
                    </div>

                </fieldset>

                <fieldset>				<!-- Payment and card details -->
				<legend>Payment details</legend>
				<p>																<!-- Card types -->
					<label for="cardType">Card Type:</label>
					<select name="cardType" id="cardType">
						<option value="none">Please select your card type</option>
						<option value="visa">Visa</option>			
						<option value="master">MasterCard</option>
						<option value="amex">American Express</option>
					</select>
				</p>	
				<p>																<!-- Name on card -->
					<label for="cardName">Name on Card:</label> 
					<input type="text" name= "cardName" id="cardName" >
				</p>
				<p> 															<!-- Card number -->
					<label for="cardNumber">Card Number:</label> 
					<input type="text" name= "cardNumber" id="cardNumber"  >
				</p>
				<p> 															<!-- Expiry date -->
					<label for="cardExpiry">Card Expiry date:</label> 
					<input type="text" name= "cardExpiry" id="cardExpiry" placeholder="mm/yy" >
				</p>
				<p> 
					<label for="cardCVV">Card security code:</label> 		<!-- Card CVV -->
					<input type="text" name= "cardCVV" id="cardCVV"  >
				</p>
				</fieldset>

                <!-- Submit and reset buttons -->
                <input class="button" type="submit" value="Pay" />
                <input class="button" type="reset" value="Reset" />
            </form>
	</section>

	<?php
    	include_once("includes/footer.inc");
	?>
</body>
</html>