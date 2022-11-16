<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $page = "managerPage";
    	include("header.inc");
        session_start();
    ?>
<h1 class="align-center">Manager</h1>
	<br><br>
	<!-- Search criteria and sort options -->
	<h2 class="align-center">Orderrrrr Search</h2>
	<form method="post" action="manager.php">
		<fieldset>
			<legend>Search for a particular order</legend>
			<p>
				<label for="firstName">Customer's first name:</label>
				<input type="text" name="firstName" id="firstName">
			</p>
			<p>
				<label for="lastName">Customer's last name:</label>
				<input type="text" name="lastName" id="lastName">
			</p>
			<p>
				<label>Search for particular product:</label>
			</p>
			<p>
            	<input type="checkbox" id="product1" name="productSearch[]" value="Dell">               
                <label for="product1">Dell</label>
            </p>
            <p>
            	<input type="checkbox" id="product2" name="productSearch[]" value="HP">               
                <label for="product2">HP</label>
            </p>
			<p>
            	<input type="checkbox" id="product3" name="productSearch[]" value="Macbook">               
                <label for="product3">Macbook</label>
            </p>
            <p>
            	<input type="checkbox" id="product4" name="productSearch[]" value="Asus">               
                <label for="product4">Asus</label>
            </p>
            <p>
            	<input type="checkbox" id="product5" name="productSearch[]" value="LG">               
                <label for="product5">LG</label>
            </p>
			<p>
				<label>Search for pending orders:</label>
                <br><br>
				<span>
                	<input type="radio" id="searchPending" name="pendingSearch" value="yes">               
                    <label for="searchPending">Yes</label>
                </span>
                <span>
                	<input type="radio" id="noSearchPending" name="pendingSearch" value="no" checked>               
                    <label for="noSearchPending">No</label>
                </span>
			</p>
			<p>
				<label>Sort orders by cost:</label>
                <br><br>
				<span>
                	<input type="radio" id="orderSorted" name="orderSort" value="yes">               
                    <label for="orderSorted">Yes</label>
                </span>
                <span>
                	<input type="radio" id="orderUnsorted" name="orderSort" value="no" checked>               
                    <label for="orderUnsorted">No</label>
                </span>
			</p>
			<p>
				<label for="sort">Sort results by other criteria (choose again to reverse order):</label>
                <select name="sort" id="sort">
                    <option value="">Select field...</option>
                    <option value="orderIDSort">Order ID</option>
                    <option value="orderDateSort">Order Date</option>
                    <option value="orderStatusSort">Order Status</option>
                    <option value="firstNameSort">First Name</option>
                    <option value="lastNameSort">Last Name</option>
                </select>
			</p>
		</fieldset>
		<input class="button" type="submit" value="Search" name="Search">
	</form>
    <?php 
    	require_once('settings.php');		//Acquire connection to database
        $conn = @mysqli_connect($host,$user,$pwd,$sql_db);	//connect to database
        echo json_encode($conn);
        if (!$conn){
            echo "<h2 class='align-center'>Unable to connect to the database.</h2>";
        }
        else {
         
        }
    ?>
    <?php
        include("footer.inc");
    ?>
    
</body>
</html>