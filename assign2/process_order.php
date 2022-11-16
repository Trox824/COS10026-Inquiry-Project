<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $errormsg = "";
    function sanitise_input($data){
        $data = trim($data);				//remove spaces
        $data = stripslashes($data);		//remove backslashes in front of quotes
        $data = htmlspecialchars($data);	//convert HTML special characters to HTML code
        return $data;
    }
    function checkInt($number){		//return true if number is a positive integer
        $number = filter_var($number, FILTER_VALIDATE_INT);
        return ($number !== FALSE && $number > 0);
    }

    $firstname = sanitise_input($_POST["First_name"]);
    if (!preg_match("/^[a-zA-Z]{1,25}$/", $firstname )){
        $errormsg .= "<p class='errormsg'>First name must be only alphabetical characters and it must between 1-25 characters.</p>\n";
    }
    $lastname = sanitise_input($_POST["last_Name"]);		
		
    if (!preg_match("/^[a-zA-Z]{1,25}$/", $lastname)) {
	        $errormsg .= "<p class='errormsg'>Last name must be only alphabetical characters and it must between 1-25 characters.</p>\n";
	}

	    //Last name validation
	    $email = sanitise_input($_POST["Email"]);			
		if (!preg_match("/\S+@\S+\.\S+/", $email)) {
	        $errormsg .= "<p class='errormsg'>Your email must be in the format of something@something.something</p>\n";
	    }

        $phone = sanitise_input($_POST["Phone_number"]);			//sanitise input
		if (!preg_match("/^\d{8,12}$/", $phone)) {
	        $errormsg .= "<p class='errormsg'>Your phone number must contains only numbers and in between 8-12 digits length .</p>\n";
	    }

        
	    $street_address = sanitise_input($_POST["Street"]);		
		if (!preg_match("/^[a-zA-Z0-9 ,.'-]{1,40}$/", $address)) {
	        $errormsg .= "<p class='errormsg'>Your address must contains only alphabetical characters, numbers, commas, dots and hyphens.</p>\n";
	    }
	    //Suburb validation


	    $suburb = sanitise_input($_POST["Suburb/town"]);			
		if (!preg_match("/^[a-zA-Z]{1,20}$/", $suburb)) {
	        $errormsg .= "<p class='errormsg'>Your suburb must contains only alphabetical characters and in between 1-20 characters length.</p>\n";
	    }
	    //State validation


	    $state = sanitise_input($_POST["State"]);			
		if ($state == "none"){								
			$errormsg .= "<p class='errormsg'>You must select your state.</p>\n";
		}


        $postcode = sanitise_input($_POST["Postcode"]);		//sanitise input
		if (!preg_match("/^\d{4}$/", $postcode)) {
	        $errormsg .= "<p class='errormsg'>Your post code must be a 4-digit number.</p>\n";
	    }
	    else{
	    	switch ($state){
			case "VIC":
				if ($postcode[0] != "3" && $postcode[0] != "8"){					//VIC post code must start with 3 or 8
					$errormsg .= "<p class='errormsg'>VIC post code must start with 3 or 8.</p>\n";
				}
			case "NSW":
				if ($postcode[0] != "1" && $postcode[0] != "2"){					//NSW post code must start with 1 or 2
					$errormsg  .= "<p class='errormsg'>NSW post code must start with 1 or 2.</p>\n";
				}
			case "QLD":
				if ($postcode[0] != "4" && $postcode[0] != "9"){					//QLD post code must start with 4 or 9
					$errormsg  .= "<p class='errormsg'>QLD post code must start with 4 or 9.</p>\n";
				}
			case "WA":
				if ($postcode[0] != "6"){										//NA post code must start with 6
					$errormsg  .= "<p class='errormsg'>WA post code must start with 6.</p>\n";
				}
			case "SA":
				if ($postcode[0] != "5"){										//SA post code must start with 5
					$errormsg  .= "<p class='errormsg'>SA post code must start with 5.</p>\n";
				}
			case "TAS":
				if ($postcode[0] != "7"){										//TAS post code must start with 7
					$errormsg  .= "<p class='errormsg'>TAS post code must start with 7.</p>\n";
				}
			case "ACT":
				if ($postcode[0] != "0"){										//NT and ACT post code must start with 0
					$errormsg .= "<p class='errormsg'>$state post code must start with 0.</p>\n";
				}
			}
	    }

        
        $quantity = sanitise_input($_POST["quantity"]);	
        if ( $quantity == ""){
            $errormsg .= "<p class='align-center'>You must enter quantity.</p>\n";
        }
        else if ( checkInt($quantity) == false) {
            $errormsg .= "<p class='align-center'>Quantity must be positive.</p>\n";
        }

        $cardtype = sanitise_input($_POST["cardType"]);			//sanitise input
		if ($cardType == "none"){								//if state has not been selected
			$errormsg .= "<p class='align-center'>You must select your card type.</p>\n";
		}

		//Card name validation
		$cardname = sanitise_input($_POST["cardName"]);			//sanitise input
		if ($cardname == ""){
			$errormsg .= "<p class='align-center'>You must enter your name on card.</p>\n";
		}
		else if (!preg_match("/^[a-zA-Z ]{1,40}$/", $cardname)) {
	        $errormsg .= "<p class='align-center'>Card name must contains only alphabetical characters and spaces and cannot exceed 40 characters length.</p>\n";
	    }

	    //Card number validation
	    $cardnumber = sanitise_input($_POST["cardNumber"]);		//sanitise input
		if ($cardNumber == ""){								//if state has not been selected
			$errormsg .= "<p class='align-center'>You must enter your card number.</p>\n";
		}
		else{
			switch ($cardtype){
			case "visa": 																							//post code check for visa type
				if ($cardnumber[0] != "4"){																			//check if first number is 4
					$errormsg .= "<p class='align-center'>Visa card number must start with 4.</p>\n";
				}
				else if (!preg_match("/^\d{16}$/", $cardnumber)){													//check if length is 16 and only contains numbers
					$errormsg .= "<p class='align-center'>Visa card number must be 16 digits and contains numbers only.</p>\n";
				}
				break;
			case "master": 																							//post code check for mastercard type
				if (!($cardnumber[0] == "5" && ($cardnumber[1] >= 1 && $cardnumber[1] <= 5))){						//check if first 2 numbers are 51->55
					$errormsg .= "<p class='align-center'>MasterCard must start with digits \"51\" through to \"55\".</p>\n";
				}
				else if (!preg_match("/^\d{16}$/", $cardnumber)){													//check if length is 16 and only contains numbers
					$errormsg .= "<p class='align-center'>MasterCard number must be 16 digits and contains numbers only.</p>\n";
				}
				break;
			case "amex": 																							//post code check for amex type
				if (!($cardnumber[0] == "3" && ($cardnumber[1] == "4" || $cardnumber[1] == "7"))){					//check if first 2 numbers are 34 or 37
					$errormsg .= "<p class='align-center'>American Express must start with \"34\" or \"37\".</p>\n";
				}
				else if (!preg_match("/^\d{15}$/", $cardnumber)){															//check if length is 15 and only contains numbers
					$errormsg .= "<p class='align-center'>MasterCard number must be 15 digits and contains numbers only.</p>\n";
				}
				break;
			}
		}

		//Card expiry date validation
		$cardexpiry = sanitise_input($_POST["cardExpiry"]);					//sanitise input
		if ($cardexpiry == ""){
			$errormsg .= "<p class='align-center'>Card expiry date cannot be left blank.</p>\n";	//Check if expiry date is left empty
		}
		else if (!preg_match("/^\d{2}\/\d{2}$/", $cardexpiry)){		//Check if expiry date is in the right format
			$errormsg .= "<p class='align-center'>Please enter expiry in the format of mm/yy.</p>\n";
		}
		else{		//Check if the card is expired
			$date = explode("/", $cardexpiry);
			$month = $date[0];
		    $year = $date[1];
		    $expires = \DateTime::createFromFormat('my', $month . $year);
		    $now     = new \DateTime();
		    if ($expires < $now) {
		        $errormsg .= "<p class='align-center'>Card is expired.</p>\n";
		    }
		}

		//CVV validation
		$cardCVV = sanitise_input($_POST["cardCVV"]);					//sanitise input
		if ($cardCVV == ""){
			$errMsg .= "<p class='align-center'>Card CVV cannot be left blank.</p>\n";		//Check if CVV is left empty
		}
		else if (!preg_match("/^\d{3}$/", $cardCVV)){
			$errMsg .= "<p class='align-center'>CVV must be a 3-digit number.</p>\n";		//check if CVV is a 3-digit number
		}

		//Store preferred contact radio button
	    $preferred_contact = sanitise_input($_POST["preferred_contact"]);		//sanitise input

	    //Store selected feautures checkbox

        $products = sanitise_input($_POST["products"]);		//sanitise input
	    if ($products == ""){
	    	$errormsg .= "<p class='align-center'>You must select your Products.</p>\n";
	    }


	    if (isset($_POST["products"])){			//for data submitted from payment.php
	    	$products = sanitise_input($_POST["products"]);
	    }
	    else{									//for data submitted from fix_order.php
	        $products = "";
			if(in_array('Dell', $_POST['products'])){
				$products = "Dell";
			}
			if(in_array('HP', $_POST['products'])){
				if ($products != "")
					$products .= ",";
				$products .= "HP";
			}
			if(in_array('Asus', $_POST['products'])){
				if ($products != "")
					$products .= ",";
				$fproducts .= "Asus";
			}
            if(in_array('Macbook', $_POST['products'])){
				if ($products != "")
					$products .= ",";
				$fproducts .= "Macbook";
			}
            if(in_array('LG', $_POST['products'])){
				if ($products != "")
					$products .= ",";
				$fproducts .= "LG";
			}
		}
        if ($errormsg != "") {
        	session_start();
		    $_SESSION["errormsg"] = $errormsg;
		    $_SESSION["firstname"] = $firstname;
		    $_SESSION["lastname"] = $lastname;
		    $_SESSION["email"] = $email;
		    $_SESSION["street_address"] = $street_address;
		    $_SESSION["suburb"] = $suburb;
		    $_SESSION["state"] = $state;
		    $_SESSION["postCode"] = $postcode;
		    $_SESSION["phone"] = $phone;
		    $_SESSION["contact"] = $contact;
		    $_SESSION["products"] = $products;
            $_SESSION["quantity"] = $quantity;

		   

		    header("location:fix_order.php");
		    exit();
        }

    
    require_once('settings.php');	
    	//Acquire connection to database
        
    $conn = @mysqli_connect($host,$user,$pwd,$sql_db);	//connect to database  
    if ($conn){   
    $create_table = "CREATE TABLE IF NOT EXISTS orders (
                            order_id INT AUTO_INCREMENT PRIMARY KEY,
                            order_cost INT NOT NULL,
                            order_date DATETIME NOT NULL,
                            order_status VARCHAR(10) NOT NULL, /*CHECK (order_status IN ('PENDING','FULFILLED','PAID','ARCHIVED')) DEFAULT 'PENDING',*/
                            first_name VARCHAR(25) NOT NULL,
                            last_name VARCHAR(25) NOT NULL,
                            email VARCHAR(50) NOT NULL,
                            address VARCHAR(40) NOT NULL,
                            suburb VARCHAR(20) NOT NULL,
                            state VARCHAR(3) NOT NULL, /*CHECK (state IN ('VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'))*/
                            post_code VARCHAR(4) NOT NULL,
                            phone VARCHAR(15) NOT NULL,
                            contact VARCHAR(10) NOT NULL, /*CHECK (contact_method IN ('by_email', 'by_phone', 'by_post'))*/
                            products VARCHAR(100) NOT NULL,
                            card_type VARCHAR(20) NOT NULL,
                            card_name VARCHAR(20) NOT NULL,
                            card_number VARCHAR(20) NOT NULL,
                            card_expiry VARCHAR(20) NOT NULL,
                            card_CVV INT NOT NULL
                            )";
    $result = @mysqli_query($conn, $create_table);


        if ($result){
            //calculating cost
            $total_cost = 0;
            if ($products == "Dell")
                $total_cost += 1300 * $quantity;
            if ($products == "Asus")
                $total_cost += 1400 * $quantity;
            if ($products == "Macbook")
                $total_cost += 1500 * $quantity;
            if ($products == "HP")
                $total_cost += 1600 * $quantity;
            if ($products == "Asus")
                $total_cost += 1700 * $quantity;

            //order date
            $datetime = date('Y-m-d H:i:s');

            //insert order query
            $add_order = "INSERT INTO orders 
            (order_cost, order_date, order_status, first_name, last_name, email, address, suburb, state, post_code, phone, contact, products, 
            card_type, card_name, card_number, card_expiry, card_CVV) 
            VALUES ('$total_cost', '$datetime', 'PENDING', '$firstname', '$lastname', '$email', '$street_address', '$suburb', '$state', '$postcode', '$phone', 
            '$preferred_contact', '$products', '$cardtype', '$cardname', '$cardnumber', '$cardexpiry', '$cardCVV');";
            $execute = mysqli_query($conn, $add_order);

            if ($execute){
                $db_msg = "<p class='align-center'>Your order is recorded, please check the information below:</p>"
                        ."<table class='receiptTable'><tr><th>ITEM</th><th>VALUE</th></tr>"
                        ."<tr><th>Order ID</th><td>" . mysqli_insert_id($conn) . "</td></tr>"
                        ."<tr><th>Total cost ($)</th><td>$total_cost</td></tr>"
                        ."<tr><th>Order date</th><td>$datetime</td></tr>"
                        ."<tr><th>Order status</th><td>PENDING</td></tr>"
                        ."<tr><th>First name</th><td>$firstname</td></tr>"
                        ."<tr><th>Last name</th><td>$lastname</td></tr>"
                        ."<tr><th>Email</th><td>$email</td></tr>"
                        ."<tr><th>Address</th><td>$street_address</td></tr>"
                        ."<tr><th>Suburb</th><td>$suburb</td></tr>"
                        ."<tr><th>State</th><td>$state</td></tr>"
                        ."<tr><th>Post Code</th><td>$postcode</td></tr>"
                        ."<tr><th>Phone number</th><td>$phone</td></tr>"
                        ."<tr><th>Contact method</th><td>$preferred_contact</td></tr>"
                        ."<tr><th>Enquiry about</th><td>$products</td></tr>"
                        ."</table>";
            }
            else{
                $db_msg= "<p>Failed to add order.</p>";
            }
        }
        else{
            $db_msg= "<p>Failed to create table.</p>";
        }
        mysqli_close($conn);
    }
    else{
        $db_msg= "<p>Unable to connect to the database.</p>";
    }
    header("location:receipt.php?db_msg=$db_msg");
    ?>
</body>
</html>