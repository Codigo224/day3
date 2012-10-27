<?php 

//Declare and instantize variables
//Get the user data from the form

$product_description = $_POST["product_description"];
$list_price = $_POST["list_price"];
$discount_percent = $_POST["discount_percent"];

//Calculate the discount

$discount = $list_price * $discount_percent * 0.01;
$discount_price = $list_price - $discount;

//Apply currency formatting to the dollar amounts for output

$list_price_formatted = "$".number_format($list_price, 2);
$discount_percent_formatted = $discount_percent."%";
$discount_formatted = "$".number_format($discount, 2);
$discount_price_formatted = "$".number_format($discount_price, 2);

//Output the results


?>


<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
		<title>Product Discount Calculator</title>
		<link rel="shortcut icon" href="images/homer.ico" />
    	<link rel="stylesheet" type="text/css" href="css/main.css" />
    	<link rel="stylesheet" type="text/css" href="css/nav.css" />
	</head>
	
	<style>
	#content {
	background-color: white;
	}
	h1 {
	text-align: center;
	}
	#shtuff {
	background-color: pink;
	}
	
	
	</style>
	
	<header>

<img src="images/Homer_Rock_and_Roll.jpg" alt="Homer" width="100" height="100" />

<hgroup>

<h1>Homer's Music Store</h1>
<h2>Rock On!</h2>

</hgroup>

<nav>
<ul id="main">
	<li><a href="index.html">Home</a></li>
	<li><a href="multi_column.html">Layout</a>
		<ul>
		<li><a href="2_column_float_left.html">2-Column Float Left</a></li>
		<li><a href="2_column_float_right.html">2-Column Float Right</a></li>
		<li><a href="3_column_float.html">3-Column Float</a></li>
		<li><a href="multi_column.html">Multi-Column</a></li>
		</ul>
	</li>
	<li><a href="table.html">Tables</a></li>
	<li><a href="images.html">Graphics</a></li>
	<li><a href="video.html">Multimedia</a></li>
	<li><a href="email_form.html">Forms</a>
		<ul>
			<li><a href="product-discount.html">Product Discount</a></li>
			<li><a href="invoice_total.html">Invoice Total</a></li>
		</ul>
	</li>
	<li><a href="product.php">Products</a></li>
	<li><a href="geolocation.html">Stuff</a></li>
</ul>
</nav>

</header>
	
	<body>
    <div id="content">
        <h1>Product Discount Calculator</h1><br />

        <div id="shtuff">
        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
        </div>
    </div>
</body>
</html>