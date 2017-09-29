<?php
include('includes/dbconfig.php');
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
//echo $_REQUEST['copies'][0];
//echo $_REQUEST['bookid'][0];
$cnt =  count($_REQUEST['copies']);
$order_date =  $_REQUEST['orderdate'];
$ran =  $_REQUEST['ordernumber'];
$statename = $_REQUEST['statename'];
/////////////////Order Processing////////////////////

$order_details = "";

for($i=0; $i<=$cnt ;$i++){
	//echo "Copies :".$_REQUEST['copies'][$i];
	//echo " | ";
	//echo "Books :".$_REQUEST['bookid'][$i];
	
	//echo "</br>";
	 $order_details.= $_REQUEST['bookid'][$i]."|".$_REQUEST['copies'][$i].",";
}

$order_details = substr($order_details,0,-1);

mysql_query("INSERT INTO nile_orders (user_id, ran, order_details, order_date, order_total, order_status, c_name) VALUES ('$_SESSION[uname]', '$ran', '$order_details', now(), '$Amount', '0', '$statename');") or die(mysql_error());
$order_id=mysql_insert_id();

//Order End


/////////////////Shipping Address////////////////////
//$address = $_SESSION["ShipingInfo"]["name"]."|".$_SESSION["ShipingInfo"]["address"]."|".$_SESSION["ShipingInfo"]["city"]."|".$_SESSION["ShipingInfo"]["state"]."|".$_SESSION["ShipingInfo"]["country"]."|".$_SESSION["ShipingInfo"]["zipcode"]."|".$_SESSION["ShipingInfo"]["phone"];

$address = $_REQUEST['shopname']."|".$_REQUEST['address']."|".$_REQUEST['city']."|".$_REQUEST['district']."|".$_REQUEST['postalcode']."|".$_REQUEST['state']."|".$_REQUEST['board']."|".$_REQUEST['name']."|".$_REQUEST['landline']."|".$_REQUEST['mobile']."|".$_REQUEST['email']."|".$_REQUEST['transport'];


	mysql_query("INSERT INTO nile_shipaddress (order_id, address, date) VALUES ('$ran', '$address', now())") 
	or die(mysql_error());


//Shipping End

//exit;
//email start
$mainemail = 'deeptipublications@gmail.com';
//$to = $_REQUEST['email'];
$to = 'india2sree@gmail.com';
$subject = $ran.' DeeptiPublication Order Form';

/*$headers = "From: " . strip_tags($mainemail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($mainemail) . "\r\n";
$headers .= "CC: deeptipublications@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '<html><body>';
$message .= '<h1>Deepti Publications Order Form Message</h1>';
$message .= '</body></html>';

mail($to, $subject, $message, $headers);*/


//$to = "somebody@example.com, somebodyelse@example.com";
//$subject = "HTML email";

$message = "<html>
<head>
<title>DeeptiPublication Order Form</title>
</head>
<body>
<p>DeeptiPublication Order Form</p>
<table>
<tr>
<th>DeeptiPublication Order Form</th>
<th>DeeptiPublication Order Form</th>
</tr>
<tr>
<td>DeeptiPublication Order Form</td>
<td>DeeptiPublication Order Form</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Deepti Publications Confirm Order Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Bootstrap core CSS -->
    <link href="./supportfiles/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./supportfiles/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./supportfiles/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./supportfiles/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
header {
    background-color: #f4efaf;
    color: #ffffff;
    padding: 10px 0px;
}
footer {
    background-color: #F58216;
    color: #ffffff;
    padding: 10px 0px;
    margin-bottom: 15px;
}
	body{
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
	}
	.textboxnum{
		padding:2px;
		width:45px;
		font-size:1p2x;
	}
	.textuserbox{
		padding:2px;
		width:145px;
		font-size:12px;
	}
	.contable{
		    border: 1px solid orange;
			    margin-top: 10px;
	}
	.snotext{
		text-align:center;
	}
	td, th {
    padding-left: 10px;
    padding-top: 5PX;
    padding-bottom: 5px;
}
.button {
    background-color: #FF3A00;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.colorstar{
	color:red;
}
.navbar-fixed-bottom, .navbar-fixed-top {
    position: static;
    right: 0;
    left: 0;
    z-index: 1030;
}
/* Custom, iPhone Retina */ 
    @media only screen and (max-width : 320px) {
      .text-right{
      	text-align:center;
      }  
      .text-left{ text-align:center; }
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 480px) {
     .text-right{
      	text-align:center;
      }  
      .text-left{ text-align:center; }
    }

    /* Small Devices, Tablets */
    @media only screen and (max-width : 768px) {
    .text-right{
      	text-align:center;
      }  
      .text-left{ text-align:center; }
    }


</style>
</head>

<body>
<header class="container-fluid">
    <div>
    <div class="col-md-6 text-right"><img src="http://www.deeptipublications.com/image/catalog/Deepti-Publication-Logo.jpg" alt="Deepti Publications - Tenali" style="width: 40%;"></div>
    <div class="col-md-6 text-left"><h2  style="color: #2e3289;">Order Form</h2></div>
    </div>
   
</header>
<?php include("./topnav.php"); ?>
<div class="container-fluid text-center">
<div>Order Id <?php echo $ran; ?></div>
<div>Order Submitted Successfully</div><div>Our Deepti Publications Executive will call you back before processing the order</div>
<div><a href="index.php">Back to Home</a></div>
</div>
<footer class="">
<div class="container-fluid">
	<div class="col-md-4 text-center">
    	<h3>Contact Us</h3>
        <div>Land Line : +91 (08644) 228465, 227677</div>
        <div>Mobile Number : 09848128465</div>
    </div>
    <div class="col-md-4 text-center">
    	<h3>Email</h3>
        <div>deeptipublications@gmail.com</div>
    </div>
    <div class="col-md-4 text-center">
    	<h3>Address</h3>
        <div>22-7-38, Kothapet, TENALI - 522201</div>
        <div>Andhra Pradesh</div>
    </div>
</div>
</footer>
</body>
</html>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./supportfiles/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./supportfiles/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./supportfiles/ie10-viewport-bug-workaround.js"></script>