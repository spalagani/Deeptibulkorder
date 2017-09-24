<?php
ob_start();
session_start();
include("includes/dbconfig.php");
extract($_REQUEST);

//$id = 2017200952;
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Andhra Pradesh Deeptipublication Order Form</title>
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
</style>
</head>

<body>
<header class="container-fluid">
    <div>
    <div class="col-md-6 text-right"><a href="/"><img src="http://www.deeptipublications.com/image/catalog/Deepti-Publication-Logo.jpg" alt="Deepti Publications - Tenali" style="width: 40%;"></a></div>
    <div class="col-md-6 text-left"><h2  style="color: #2e3289;">Order Form</h2></div>
    </div>
   
</header>
<?php include("./topnav.php"); ?>
<div class="container-fluid ">
	<table width="" border="0" cellspacing="0" cellpadding="0">
<?php
	$s_orders=mysql_query("select * from nile_orders where ran='$id'");
    $sorders=mysql_fetch_array($s_orders);
?>
  <tr>
    <td width="750" align="left" valign="middle" class="title_txt" background="images/long_bar1.jpg" height="26" ><?php echo $sorders['c_name'] ?>&nbsp;Order History </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="5" class="orange_txt" style="font-size:13px; font-weight:normal" align="left"> Your Order Number : <strong>
      <?php echo $id; ?>
    </strong></td>
  </tr>
  
   		<?php
		
		$q_orders=mysql_query("select * from nile_orders where ran='$id'");
        $orders=mysql_fetch_array($q_orders);
		
		$q_ship=mysql_query("select * from nile_shipaddress where order_id='$id'");
        $ship=mysql_fetch_array($q_ship);
		$address=explode("|",$ship['address']);
		
		
		$qry_user=mysql_query("select * from nile_user where username='$orders[user_id]'");
		$user_info=mysql_fetch_array($qry_user);
		
	  ?>
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td  align="center"><table cellspacing="1" cellpadding="1" border="0" width="100%" class="acborder">
      <tr align="center" valign="middle" class="accttr">
        <td width="20%" height="15" align="left" bgcolor=""><font class="protab_txt">Ship To :</font></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" class="cart-txt" style="font-size:12px"><font class="cart-txt ">
      <?php  foreach($address as $value) { 
	  echo $value."<br>";
	  }
	  ?>	  </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  
  
  <tr>
    <td>&nbsp;</td>
  </tr>
  <?php   $details = explode(",", $orders["order_details"]); 
  
  ?>
  <tr>
    <td  align="center"><table cellspacing="1" cellpadding="1" border="1" width="99%" class="acborder">
      <tr align="center" valign="middle" bgcolor="orange" class="protab_txt">
        <td width="20%" height="25"><font class="accttrtext">Product Name</font></td>
        <td width="24%" height="25"><font class="accttrtext">Category</font></td>
        <td width="9%" height="25">Unit Price</td>
        <td width="10%"><font class="accttrtext">Ship Qty</font></td>
        <td width="7%" height="25"><font class="accttrtext">Total</font></td>
        <!--<td width="17%" height="25"><font class="accttrtext">Tracking No</font></td>-->
      </tr>
      <?php 
      		$totalqty = '';
	  foreach($details as $p_det) { 
	   
          $pro=explode("|",$p_det);	   
	   
	  $q_det=mysql_query("select * from nile_items where item_id='$pro[0]'");
	  $det=mysql_fetch_array($q_det);
	  if($pro[1]){
		$totalqty +=  $pro[1];		
	?>
      <tr>
        <td class="accttrd" align="center" style="font-size:12px"><?php echo $det['item_name'] ?>         </td>
        <td  class="accttrd" align="center" style="font-size:12px"><?php $q_subcat=mysql_query("select * from  nile_sub_category where sub_cat_id=$det[sub_cat_id]");
		$subcat=mysql_fetch_array($q_subcat);
		echo $subcat[sub_cat_name];
		
		?>          </td>
        <td  class="accttrd" align="center " style="font-size:12px"><?php echo $det['new_price'] ?></td>
        <td   class="accttrd" align="center" style="font-size:12px"><?php echo $pro[1] ?></td>
        <td   class="accttrd" align="center" style="font-size:12px"><?php echo $price[]=$pro[1]*$det['new_price'] ?></td>
      </tr>
      <?php }} 
	  ?>
    </table></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td><table width="100%">
      <tr align="center" bgcolor="#F3F1D1" class="table_txt" >
        <td width="87%" height="21" align="right" bgcolor="#FFFFFF" > Total&nbsp;&nbsp;&nbsp;</td>
        <td width="13%" height="21" align="left" valign="middle" bgcolor="#FFFFFF" style="font-size:12px">
         <?php 
		 foreach($price as $pri)
		 	$act_price=$act_price+$pri;
		 
		 echo $act_price;
		 
		 ?>
          &nbsp;</td>
      </tr>
      <tr  bgcolor="#FFFFFF" align="center" class="table_txt" >
        <td height="21" align="right" >Number of Books </td>
        <td width="13%" height="21" align="left" valign="middle" style="font-size:12px">
         <?php		 
		 echo $totalqty;
		 ?>
          &nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
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