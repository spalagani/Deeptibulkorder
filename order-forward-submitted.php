<?php
include('includes/dbconfig.php');
//include('phpmail/class.phpmailer.php');
//include('phpmail/class.smtp.php');
//require_once("phpmail/class.phpmailer.php");
/*
	$mail = new phpmailer();
	$mail->From = $From_Email;
	$mail->FromName = $From_Name;
	$mail->IsHTML(true);
	$mail->Subject = "DeeptiPublications Order form:- ".$order_id;
	$mail->Body = $Mail_Body;
	$mail->AddAddress($row_ci->'india2sree@gmail.com',$row_ci->ship_to);
	$mail->send();
*/	
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
//echo $_REQUEST['copies'][0];
//echo $_REQUEST['bookid'][0];
$cnt =  count($_REQUEST['copies']);
$order_date =  $_REQUEST['orderdate'];
 $ran =  $_GET['id'];
//$statename = $_REQUEST['statename'];
/////////////////Order Processing////////////////////

$order_details = "";

for($i=0; $i<=$cnt ;$i++){
	//echo "Copies :".$_REQUEST['copies'][$i];
	//echo " | ";
	//echo "Books :".$_REQUEST['bookid'][$i];
	//echo " | ";
	//echo "Discount :".$_REQUEST['dis'][$i];
	
	//echo "</br>";
	 $order_details.= $_REQUEST['bookid'][$i]."|".$_REQUEST['copies'][$i]."|".$_REQUEST['dis'][$i].",";
	//echo "</br>";
}

$order_details = substr($order_details,0,-1);

//echo "INSERT INTO nile_orders_update (user_id, ran, order_details, order_date, order_total, order_status) VALUES ('$_SESSION[uname]', '$ran', '$order_details', now(), '$Amount', '0');";
//exit;

//mysql_query("INSERT INTO nile_orders_update (user_id, ran, order_details, order_date, order_total, order_status) VALUES ('$_SESSION[uname]', '$ran', '$order_details', now(), '$Amount', '0');") or die(mysql_error());
//$order_id=mysql_insert_id();

//Order End

/*
/////////////////Shipping Address////////////////////
$address = $_SESSION["ShipingInfo"]["name"]."|".$_SESSION["ShipingInfo"]["address"]."|".$_SESSION["ShipingInfo"]["city"]."|".$_SESSION["ShipingInfo"]["state"]."|".$_SESSION["ShipingInfo"]["country"]."|".$_SESSION["ShipingInfo"]["zipcode"]."|".$_SESSION["ShipingInfo"]["phone"];

//$address = $_REQUEST['shopname']."|".$_REQUEST['address']."|".$_REQUEST['city']."|".$_REQUEST['district']."|".$_REQUEST['postalcode']."|".$_REQUEST['state']."|".$_REQUEST['board']."|".$_REQUEST['name']."|".$_REQUEST['landline']."|".$_REQUEST['mobile']."|".$_REQUEST['email']."|".$_REQUEST['transport'];


	//mysql_query("INSERT INTO nile_shipaddress (order_id, address, date) VALUES ('$ran', '$address', now())") 
	or die(mysql_error());


//Shipping End
*/


//SMS Integration

function curl($url)
{
	//echo "Enter CURL";
	//echo "http://sms.sriservers.com/sendsms?uname=dporderform&pwd=order$5&senderid=DEEPTI&to=9246402455&msg=HI&route=T";
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
 $data = curl_exec($ch);
 curl_close($ch);
 return $data;
}
$mobile = "9246402455"; //enter Mobile numbers comma seperated
$username = "dporderform"; //your username
$password = "order$5"; //your password
$sender = "DEEPTI"; //Your senderid
$username = urlencode($username);
$password = urlencode($password);
$sender = urlencode($sender);
$messagecontent = "Welcome to deepti "; //Type Of Your Message
$message = urlencode($messagecontent);
$url="http://sms.sriservers.com/sendsms?uname=$username&pwd=$password&senderid=$sender&to=$mobile&msg=$message&route=T";
//echo $url;
$response = curl($url); 


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Deepti Publications Updated Order Form</title>
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
<div>Order Updated with Discount Successfully</div>
<div><a href="discount-books-order-form.php?id=<?php echo $ran; ?>">View Discount Order Form</a></div>
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