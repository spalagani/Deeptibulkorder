<?php
include('includes/dbconfig.php');
$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));



//echo "Today is " . date("Ydms") . "<br>";
//echo "Today is " . date("s");

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Deepti Publications Karnataka Order Form</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="validation-OrderForm.js" type="application/javascript"></script>
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
    <div class="col-md-6 text-right"><img src="http://www.deeptipublications.com/image/catalog/Deepti-Publication-Logo.jpg" alt="Deepti Publications - Tenali" style="width: 40%;"></div>
    <div class="col-md-6 text-left"><h2  style="color: #2e3289;">Karnataka Order Form</h2></div>
</header>
<?php include("./topnav.php"); ?>
<div class="container-fluid">
<form name="dporderform" action="order-submitted.php" onsubmit="return(validate());" method="post">

<table  cellpadding="5" cellspacing="5" align="center">
  <col width="52">
  <col width="481">
  <col width="88">
  <col width="101">
  <tr>
    <td width="52"></td>
    <td width="481"></td>
    <td width="88"></td>
    <td width="101"></td>
  </tr>
  <tr>
    <td colspan="4">
    <table width="100%" align="center"  cellspacing="10" class="contable">
      <col width="52">
      <col width="481">
      <col width="88">
      <col width="101">
       <tr>
        <td width="27%">ORDER NO :</td>
        <td width="25%"><input name="ordernumber" type="text" class="textuserbox" id="ordernumber" value="<?php echo $date->format('Ydms');
 ?>" readonly /></td>
        <td width="17%">Date :</td>
        <td width="31%"><input name="orderdate" type="text" class="textuserbox" id="orderdate" value="<?php echo $date->format('d-m-Y');
 ?>" readonly /></td>
      </tr>
      <tr>
        <td><span class="colorstar">*</span>Shop / College / Others :          </td>
        <td><input name="shopname" type="text"  class="textuserbox" id="shopname" />
        <input name="statename" type="hidden" value="Karnataka"/></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><span class="colorstar">*</span>Address :           </td>
        <td><input name="address" type="text"  class="textuserbox" id="address" /></td>
        <td><span class="colorstar">*</span>City / Town :           </td>
        <td><input name="city" type="text"  class="textuserbox" id="city" /></td>
      </tr>
      <tr>
        <td><span class="colorstar">*</span>Postal Code :          </td>
        <td><input name="postalcode" type="text"  class="textuserbox" id="postalcode" /></td>
        <td><span class="colorstar">*</span>District :</td>
        <td><input name="district" type="text"  class="textuserbox" id="district" /></td>
      </tr>
      <tr>
        <td><span class="colorstar">*</span>State :          </td>
        <td><input name="state" type="text"  class="textuserbox" id="state" /></td>
        <td>Transport : </td>
        <td><input name="transport" type="text" class="textuserbox" id="transport" /></td>
      </tr>
      
      <tr>
        <td><span class="colorstar">*</span>Person Name :          </td>
        <td><input name="name" type="text"  class="textuserbox" id="name" /></td>
        <td>Land Line : </td>
        <td><input name="landline" type="phone"  class="textuserbox" id="landline" /></td>
      </tr>
      <tr>
        <td><span class="colorstar">*</span>Mobile :           </td>
        <td><input name="mobile" type="tel"  class="textuserbox" id="mobile" pattern="[1-9]{1}[0-9]{9}"/></td>
        <td><span class="colorstar">*</span>EMail ID :</td>
        <td><input name="email" type="email"  class="textuserbox" id="email" /></td>
      </tr>
      <tr>
        <td colspan="4"><span class="colorstar">*</span>College Name on Cover Page of Study Materials Required :  
          <input type="radio" name="board" value="yes"  > Yes 
  <input type="radio" name="board" value="no"  > No        </td>
        
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4">
    	<table class="contable" align="center" border="1"  cellspacing="5" width="100%" >
  <col width="52">
  <col width="481">
  <col width="88">
  <col width="101">
  <tr>
    <td colspan="4" style="background-color:#FF3A00; text-align:center; color:white;"><strong>KARNATAKA ORDER FORM 2017-18</strong></td>
    </tr>
  <tr>
    <td></td>
    <td><strong>TEXT BOOKS </strong></td>
    <td><strong>Price</strong></td>
    <td><strong>No. of copies</strong></td>
  </tr>
  <!-- <tr>
    <td></td>
    <td><strong>JUNIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td> -->
  </tr>
  <tr>
    <td></td>
    <td><strong>I PUC</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhratextsjrintersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '33' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhratextsjrintersql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhratextsjrintersql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>II PUC</strong></td>
    <td></td>
    <td></td>
  </tr>
   <?php 
  $andhratextssrintersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '34' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhratextssrintersql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhratextssrintersql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>JEE MAINS</strong></td>
    <td></td>
    <td></td>
  </tr>
    <?php 
  $andhratextsbsc1intersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '35' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhratextsbsc1intersql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhratextsbsc1intersql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>NEET STUDY MATERIALS</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhratextsbsc2intersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '36' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhratextsbsc2intersql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhratextsbsc2intersql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>KCET BOOKS</strong></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><strong>VOL - I</strong></td>
    <td></td>
    <td></td>
  </tr>
   <?php 
  $andhratextsbsc3intersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '37' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhratextsbsc3intersql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhratextsbsc3intersql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>VOL - II</strong></td>
    <td></td>
    <td></td>
  </tr>
    <?php 
  $andhraemcetsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '38' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraemcetsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraemcetsql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>PUC STUDY MATERIALS</strong></td>
    <td></td>
    <td></td>
  </tr>
   <tr>
    <td></td>
    <td><strong>I PUC</strong></td>
    <td></td>
    <td></td>
  </tr>
  
     <?php 
  $andhrajeesql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '39' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhrajeesql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhrajeesql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>II PUC</strong></td>
    <td></td>
    <td></td>
  </tr>
     <?php 
  $andhraothersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '40' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraothersql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraothersql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td><input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
<?php 
  $andhraESMsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '28' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraESMsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraESMsql)) { 

?>
<?php $i++; } ?>
  <?php 
  $andhraJIsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '29' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraJIsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraJIsql)) { 

?>
<?php $i++; } ?>
  <?php 
  $andhraSRsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '30' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraSRsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraSRsql)) { 

?>
<?php $i++; } ?>
  <?php 
  $andhraSMSSJIsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '31' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraSMSSJIsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraSMSSJIsql)) { 

?>
<?php $i++; } ?>
  <?php 
  $andhraSMSSSIsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '29' AND  `sub_cat_id` =  '32' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraSMSSSIsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraSMSSSIsql)) { 

?>
<?php $i++; } ?>
<tr>
  <td colspan="4">
  <?php include("./termsandcondition.php"); ?>

  </td>
  
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td colspan="2"><input type="submit" class="button" value="Place Order"></td>
  </tr>
        </table>
    </td>
    
  </tr>
</table>
</form>
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
    <script src="./supportfiles/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./supportfiles/ie10-viewport-bug-workaround.js"></script>
   