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

//e-Mail To Customer


$q_orders=mysql_query("select * from nile_orders where ran='$ran'");
        $orders=mysql_fetch_array($q_orders);
		
		$q_ship=mysql_query("select * from nile_shipaddress where order_id='$ran'");
        $ship=mysql_fetch_array($q_ship);
		$address=explode("|",$ship['address']);
		
		
		$qry_user=mysql_query("select * from nile_user where username='$orders[user_id]'");
		$user_info=mysql_fetch_array($qry_user);
		
		//print_r($address);
          foreach($address as $value) { 
	    //echo $value."<br>";
	  }
	   	 $dateview = $orders['order_date'];
		 $shopname = $address['0'] ;	 
		 $address1 = $address['1'];  
		 $city1  = $address['2'];  
		 $postalcode1 = $address['4'];  
		 $district1 = $address['3'];  
		 $state1 = $address['5'];  
		 $transport1 = $address['11'];  
		 $name1 = $address['7'];  
		 $landline1 = $address['8'];  
		 $mobile1 = $address['9'];  
		 $email1 = $address['10'];  
		 $board1 = $address['6']; 

	require_once("class.phpmailer.php");
	
	
	
	
$message = '<table width="" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>
    <td width="750" align="center" valign="middle" class="title_txt" background="images/long_bar1.jpg" height="26" ><strong stlye="font-size:18px">&nbsp;Order History </strong></td>
  </tr>
  <tr>
    <td height="5" class="orange_txt" style="font-size:13px; font-weight:normal" align="left"> <strong>Your Order Number : '.$ran.'</strong></td>
  </tr>
 
  
  <tr>
    <td  align=""><strong><font class="protab_txt">Shipped To :</font></strong></td>
  </tr>
  <tr>
    <td align="left" class="cart-txt" style="font-size:12px"><font class="cart-txt ">
      <table width="100%" align="center"  cellspacing="" class="contable">
        <col width="52">
        <col width="481">
        <col width="88">
        <col width="101">
        
        <tr>
          <td width="29%"><span class="colorstar">*</span>Shop / College / Others : </td>
          <td width="26%">'.$shopname.'</td>
        <td width="17%">Date :</td>
        <td width="31%">'.$dateview.'</td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Address :  </td>
          <td>'.$address1.'</td>
          <td><span class="colorstar">*</span>City / Town :  </td>
          <td>'.$city1.'</td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Postal Code : </td>
          <td>'.$postalcode1.'</td>
          <td><span class="colorstar">*</span>District :</td>
          <td>'.$district1.'</td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>State : </td>
          <td>'.$state1.'</td>
          <td>Transport : </td>
          <td>'.$transport1.'</td>
        </tr>
        
        <tr>
          <td><span class="colorstar">*</span>Person Name : </td>
          <td>'.$name1.'</td>
          <td>Land Line : </td>
          <td>'.$landline1.'</td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Mobile :  </td>
          <td>'.$mobile1.'</td>
          <td><span class="colorstar">*</span>EMail ID :</td>
          <td>'.$email1.'</td>
        </tr>
        <tr>
        <td colspan="4"><span class="colorstar">*</span>College Name on Cover Page of Study Materials Required :  
          '.$board1.'       </td>
        
      </tr>
      </table></td>
  </tr>';
  
  
 $details = explode(",", $orders["order_details"]); 
  $message.='<tr>
    <td  align="center"><table cellspacing="0" cellpadding="0" border="1" width="99%" class="acborder">
      <tr align="center" valign="middle" bgcolor="orange" class="protab_txt">
        <td width="30%" height="15"><font class="accttrtext">Product Name</font></td>
        <td width="21%" height="15"><font class="accttrtext">Category</font></td>
        <td width="7%" height="15"> Price</td>
        <td width="9%"><font class="accttrtext"> Copies</font></td>

        <td width="21%" height="15"><font class="accttrtext">Total</font></td>
        <!--<td width="17%" height="25"><font class="accttrtext">Tracking No</font></td>-->
      </tr>';
	  $totalqty = '';
	  $totprice = '';
	  foreach($details as $p_det) {
	  $pro=explode("|",$p_det);
	  $q_det=mysql_query("select * from nile_items where item_id='$pro[0]'");
	  $det=mysql_fetch_array($q_det);
	  if($pro[1]){
		$totalqty +=  $pro[1];	
		
		         $dis = $pro[1]*$det['new_price']*$pro[2]/100; 
		         $price=$pro[1]*$det['new_price']-$dis; 
	
	$totprice += $price;
	$q_subcat=mysql_query("select * from  nile_sub_category where sub_cat_id=$det[sub_cat_id]");
		$subcat=mysql_fetch_array($q_subcat);
      $message.='<tr>
        <td class="accttrd" align="" style="font-size:12px">'. $det['item_name'] .'         </td>
        <td  class="accttrd" align="center" style="font-size:12px">'.$subcat['sub_cat_name'].'</td>
        <td  class="accttrd" align="center " style="font-size:10px">'. $det['new_price'] .'</td>
        <td   class="accttrd" align="center" style="font-size:10px">'. $pro[1].'</td>
        <td   class="accttrd" align="center" style="font-size:10px">'.$price.'
        </td>
      </tr>';
	  }}
    $message.='</table></td>
  </tr>
  <tr>
    <td>Total Quantity : '.$totalqty.'</td>
    
  </tr>
  <tr>
    <td>Total Amount : '.$totprice.'</td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
' ; 

$replyEmail = "deeptipublications@gmail.com";
$fromName = "Deepti Publications";
$username = "deeptipublications@gmail.com";
$password = "aqyzlyvcqrjzpymi";


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = $username;  
$mail->Password = $password;   
$mail->IsHTML(true);
$mail->SetFrom($replyEmail, $fromName);
$mail->AddReplyTo($replyEmail,$fromName);
$mail->Subject = "Deepti Publications $statename Order Form - $ran ";
$mail->Body = $message;
$mail->AddAddress($email1);
$mail->send();


$mail1 = new PHPMailer(); // create a new object
$mail1->IsSMTP(); // enable SMTP
$mail1->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail1->SMTPAuth = true; // authentication enabled
$mail1->SMTPSecure = 'ssl';
$mail1->Host = "smtp.gmail.com";
$mail1->Port = 465;
$mail1->Username = $username;  
$mail1->Password = $password;   
$mail1->IsHTML(true);
$mail1->SetFrom($replyEmail, $fromName);
$mail1->AddReplyTo($replyEmail,$fromName);
$mail1->Subject = "Deepti Publications $statename Order Form - $ran ";
$mail1->Body = $message;
$mail1->AddAddress("deeptipublications@gmail.com");
$mail1->send();
	
$mail2 = new PHPMailer(); // create a new object
$mail2->IsSMTP(); // enable SMTP
$mail2->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail2->SMTPAuth = true; // authentication enabled
$mail2->SMTPSecure = 'ssl';
$mail2->Host = "smtp.gmail.com";
$mail2->Port = 465;
$mail2->Username = $username;  
$mail2->Password = $password;   
$mail2->IsHTML(true);
$mail2->SetFrom($replyEmail, $fromName);
$mail2->AddReplyTo($replyEmail,$fromName);
$mail2->Subject = "Deepti Publications $statename Order Form - $ran ";
$mail2->Body = $message;
$mail2->AddAddress("india2sree@gmail.com");
$mail2->send();
	
	/*
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = "deeptipublications@gmail.com";  
$mail->Password = "aqyzlyvcqrjzpymi";   
$mail->IsHTML(true);
$mail->SetFrom("deeptipublications@gmail.com");
$mail->Subject = "Deepti Publications $statename Order Form - $ran ";
$mail->Body = $message;
$mail->AddAddress("india2sree@gmail.com");
	
	*/
	
//SMS 

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
$mobile = "$mobile1"; //enter Mobile numbers comma seperated
$username = ""; //your username
$password = ""; //your password
$sender = "DEEPTI"; //Your senderid
$username = urlencode($username);
$password = urlencode($password);
$sender = urlencode($sender);
$messagecontent = "Dear $name1, Thank you for placing order. Order No : $ran, Date : $dateview  -- DEEPTI PUBLICATIONS - TENALI.  Ph: (08644)228465,227677"; //Type Of Your Message
$message = urlencode($messagecontent);
$url="http://sms.sriservers.com/sendsms?uname=$username&pwd=$password&senderid=$sender&to=$mobile&msg=$message&route=T";
//echo $url;
$response = curl($url); 


$mobile = "9030535453,9848128465"; //enter Mobile numbers comma seperated
$username = ""; //your username
$password = ""; //your password
$sender = "DEEPTI"; //Your senderid
$username = urlencode($username);
$password = urlencode($password);
$sender = urlencode($sender);
$messagecontent = "Dear Sir, We Recieved $statename Order Form. Order No : $ran, Date : $dateview From $shopname($name1,$mobile1), Landline : $landline1 "; //Type Of Your Message
$message = urlencode($messagecontent);
$url="http://sms.sriservers.com/sendsms?uname=$username&pwd=$password&senderid=$sender&to=$mobile&msg=$message&route=T";
//echo $url;
$response = curl($url); 


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
