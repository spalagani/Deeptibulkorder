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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    <div class="col-md-6 text-right"><a href="/"><img src="http://www.deeptipublications.com/image/catalog/Deepti-Publication-Logo.jpg" alt="Deepti Publications - Tenali" style="width: 40%;"></a></div>
    <div class="col-md-6 text-left"><h2  style="color: #2e3289;">View Order Form</h2></div>
    </div>
   
</header>
<?php include("./topnav.php"); ?>
<div class="container-fluid ">
<?php
	$s_orders=mysql_query("select * from nile_orders where ran='$id'");
    $sorders=mysql_fetch_array($s_orders);
	
	 $numrows = mysql_num_rows($s_orders);
	
	if($numrows){
?>
	<table width="" border="0" cellspacing="0" cellpadding="0" align="center">

  <tr>
    <td width="750" align="center" valign="middle" class="title_txt" background="images/long_bar1.jpg" height="26" ><strong stlye="font-size:18px"><?php echo $sorders['c_name'] ?>&nbsp;Order History </strong></td>
  </tr>
  <tr>
    <td height="5" class="orange_txt" style="font-size:13px; font-weight:normal" align="left"> <strong>Your Order Number :</strong> <strong>
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
    <td  align=""><strong><font class="protab_txt">Ship To :</font></strong></td>
  </tr>
  <tr>
    <td align="left" class="cart-txt" style="font-size:12px"><font class="cart-txt ">
      <?php  foreach($address as $value) { 
	  //echo $value."<br>";
	  }
	  ?>	  
      <table width="100%" align="center"  cellspacing="" class="contable">
        <col width="52">
        <col width="481">
        <col width="88">
        <col width="101">
        
        <tr>
          <td width="29%"><span class="colorstar">*</span>Shop / College / Others : </td>
          <td width="26%"><input name="shopname" type="text"readonly class="textuserbox" id="shopname" value="<?php echo $address['0'];  ?>" /></td>
          <td width="16%"></td>
          <td width="29%"></td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Address :  </td>
          <td><input name="address" type="text" readonly class="textuserbox" id="address" value="<?php echo $address['1'];  ?>" /></td>
          <td><span class="colorstar">*</span>City / Town :  </td>
          <td><input name="city" type="text" class="textuserbox" id="city" value="<?php echo $address['2'];  ?>" /></td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Postal Code : </td>
          <td><input name="postalcode" type="text" class="textuserbox" id="postalcode" value="<?php echo $address['4'];  ?>" /></td>
          <td><span class="colorstar">*</span>District :</td>
          <td><input name="district" type="text" required class="textuserbox" id="district" value="<?php echo $address['3'];  ?>" /></td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>State : </td>
          <td><input name="state" type="text" required class="textuserbox" id="state" value="<?php echo $address['5'];  ?>" /></td>
          <td>Transport : </td>
          <td><input name="transport" type="text" class="textuserbox" id="transport" value="<?php echo $address['11'];  ?>" /></td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Title / S.M Board : </td>
          <td><input name="board" type="text" required class="textuserbox" id="board" value="<?php echo $address['6'];  ?>"/></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Person Name : </td>
          <td><input name="name" type="text" required class="textuserbox" id="name" value="<?php echo $address['7'];  ?>" /></td>
          <td>Land Line : </td>
          <td><input name="landline" type="text"  class="textuserbox" id="landline" value="<?php echo $address['8'];  ?>" /></td>
        </tr>
        <tr>
          <td><span class="colorstar">*</span>Mobile :  </td>
          <td><input name="mobile" type="text" required class="textuserbox" id="mobile" value="<?php echo $address['9'];  ?>"/></td>
          <td><span class="colorstar">*</span>EMail ID :</td>
          <td><input name="email" type="text" required class="textuserbox" id="email" value="<?php echo $address['10'];  ?>" /></td>
        </tr>
      </table></td>
  </tr>
  <?php   $details = explode(",", $orders["order_details"]); 
  
  ?>
  <tr>
    <td  align="center"><table cellspacing="1" cellpadding="1" border="1" width="99%" class="acborder">
      <tr align="center" valign="middle" bgcolor="orange" class="protab_txt">
        <td width="39%" height="25"><font class="accttrtext">Product Name</font></td>
        <td width="30%" height="25"><font class="accttrtext">Category</font></td>
        <td width="10%" height="25"> Price</td>
        <td width="8%"><font class="accttrtext"> Copies</font></td>
        <td width="8%"><font class="accttrtext"> Discount (%)</font></td>

        <td width="13%" height="25"><font class="accttrtext">Total</font></td>
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
        <td class="accttrd" align="" style="font-size:12px"><?php echo $det['item_name'] ?>         </td>
        <td  class="accttrd" align="center" style="font-size:12px"><?php $q_subcat=mysql_query("select * from  nile_sub_category where sub_cat_id=$det[sub_cat_id]");
		$subcat=mysql_fetch_array($q_subcat);
		echo $subcat[sub_cat_name];
		
		?>          </td>
        <td  class="accttrd" align="center " style="font-size:12px"><?php echo $det['new_price'] ?></td>
        <td   class="accttrd" align="center" style="font-size:12px"><?php echo $pro[1] ?></td>
        <td   class="accttrd" align="center" style="font-size:12px">
        <select class="discount">
        	<option value="0">Discount</option>

                <?php
		for ($i=20; $i<=70; $i=$i+5){
		
	?>
        	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>

        </select>
        </td>
        <td   class="accttrd" align="center" style="font-size:12px">
        <input type="text" class="itemprice" value="<?php echo $price[]=$pro[1]*$det['new_price'] ?>"/>
        <input type="hidden" class="itemprice1" value="<?php echo $price[]=$pro[1]*$det['new_price'] ?>"/>
        </td>
      </tr>
      <?php }} 
	  ?>
    </table></td>
  </tr>
  <tr bgcolor="#FFFFFF" style="font-size: 21px;">
    <td><table width="100%">
      <tr align="center" bgcolor="#F3F1D1" class="table_txt" >
        <td width="25%" height="21" align="right" bgcolor="#FFFFFF" ><strong> Total Amount :</strong></td>
        <td width="13%" align="left" bgcolor="#FFFFFF" ><span id="totalval">
          
        </span></td>
        <td width="44%" align="right" bgcolor="#FFFFFF" ><strong>Number of Copies : </strong></td>
        <td width="11%" align="left" bgcolor="#FFFFFF" ><span style="">
          <?php		 
		 echo $totalqty;
		 ?>
        </span></td>
        <td width="7%" height="21" align="left" valign="middle" bgcolor="#FFFFFF" style="">&nbsp;</td>
      </tr>
      <tr  bgcolor="#FFFFFF" align="center" class="table_txt" >
        <td height="21" colspan="4" align="right" >&nbsp;</td>
        <td width="7%" height="21" align="left" valign="middle" style="">&nbsp;</td>
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
<?php } else { ?>
<div style="text-align: center; padding: 60px 39px;">
	<div>No Order Form Available with this Order ID <?php echo $id; ?></div>
    <div><a href="/order-search.php">Search Another Order ID</a></div>
</div>
<?php } ?>
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
<script>
$(document).ready(function(){
	var $total = 0; 
	for(i=0; i<$('.itemprice').length; i++){
		
		$total += Number($('.itemprice').eq(i).val());
		//console.log('ITEM VAL',$('.itemprice').eq(i).val());
		
	}
	$('#totalval').text($total);
   $( ".discount" ).change(function(e) {
	   var row = $(this).closest('tr');
	var d = e.target.value;
	  var x = row.find('.itemprice1').val();
	  
	  var y =  row.find('.itemprice');
	  
	  z = x - x*(d/100);
	   y.val(z);
	
	//console.log($('.itemprice'));
	var $total = 0; 
	for(i=0; i<$('.itemprice').length; i++){
		
		$total += Number($('.itemprice').eq(i).val());
		//console.log('ITEM VAL',$('.itemprice').eq(i).val());
		
	}
	$('#totalval').text($total);
	//alert($total);
	
	  console.log(row)
  //alert( "Discount Calculation" );
    //var x = document.getElementById("discount").value;
    //let y = document.getElementById("itemprice").value;
   // let z = document.getElementById("itemprice1").value;
    //document.getElementById("itemprice").value = z*(x/100);
});
});
</script>
 
