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

<title>Deepti Publications Andhra Pradesh Bulk Order Form</title>
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
    @media only screen and (max-width : 1200px) {
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

.imgwid{width:40%}
</style>
</head>

<body>
<header class="container-fluid">
<div>
    <div class="col-md-6 text-right"><img class="imgwid" src="http://www.deeptipublications.com/image/catalog/Deepti-Publication-Logo.jpg" ></div>
    <div class="col-md-6 text-left">
      <h2  style="color: #2e3289;">Andhra Pradesh Bulk Order Form</h2></div>
</div>
 

</header>
<?php include("./topnav.php"); ?>
<div class="container-fluid">
<form name="dporderform" action="order-book-bl.php" onsubmit="return(validate());" method="post">
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
        <td width="25%"><input name="ordernumber" type="text" class="	textuserbox" id="ordernumber" value="<?php echo $date->format('ydmHis');
 ?>" readonly />
          <input name="statename" type="hidden" value="Andhra Pradesh"/></td>
        <td width="17%">Date :</td>
        <td width="31%"><input name="orderdate" type="text" class="textuserbox" id="orderdate" value="<?php echo $date->format('d-m-Y');
 ?>" readonly /></td>
      </tr>
      <tr>
        <td colspan="4"><span class="colorstar">*</span>College Name on Cover Page of Study Materials Required :  
          <input type="radio" name="board" value="yes"  > Yes 
          <input type="radio" name="board" value="no"  > No        </td>
        
      </tr>
    </table></td>
  </tr>
  <tr>
  <td colspan="4"><span class="colorstar">NOTE : PRICES ARE SUBJECT TO CHANGE WITH OUT PRIOR NOTICE.</span></td>
  </tr>
  <tr>
    <td colspan="4">
    	<table class="contable" align="center" border="1"  cellspacing="5" width="100%" >
  <col width="52">
  <col width="481">
  <col width="88">
  <col width="101">
  <tr>
    <td colspan="4" style="background-color:#FF3A00; text-align:center; color:white;"><strong>ANDHRA PRADESH BULK ORDER FORM <?php echo $financial_year = (date('Y')); ?></strong></td>
    </tr>
  <tr>
    <td></td>
    <td><strong>TEXT BOOKS  (INSPIRE  SERIES)</strong></td>
    <td><strong>Price</strong></td>
    <td><strong>No. of copies</strong></td>
  </tr>
  <tr>
    <td></td>
    <td><strong>JUNIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhratextsjrintersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '2' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" /></td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>SENIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td>
  </tr>
   <?php 
  $andhratextssrintersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '3' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc. I YEAR</strong></td>
    <td></td>
    <td></td>
  </tr>
    <?php 
  $andhratextsbsc1intersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '4' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc. II YEAR</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhratextsbsc2intersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '5' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc. III YEAR</strong></td>
    <td></td>
    <td></td>
  </tr>
   <?php 
  $andhratextsbsc3intersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '6' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>EAMCET (RANK SERIES)</strong></td>
    <td></td>
    <td></td>
  </tr>
    <?php 
  $andhraemcetsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '7' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>JEE MAIN (SPARK SERIES)</strong></td>
    <td></td>
    <td></td>
  </tr>
     <?php 
  $andhrajeesql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '8' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>OTHER  BOOKS</strong></td>
    <td></td>
    <td></td>
  </tr>
     <?php 
  $andhraothersql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '9' and status='1'");
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
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>EAMCET STUDY MATERIALS</strong></td>
    <td></td>
    <td></td>
  </tr>
<?php 
  $andhraESMsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '10' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraESMsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraESMsql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>MINI QUESTION BANKS (STAR SERIES)</strong></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><strong>JUNIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhraJIsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '11' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraJIsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraJIsql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>SENIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhraSRsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '12' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraSRsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraSRsql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>FOR ALL UNIVERSITIES IN A.P.</strong></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><strong>B.Sc.  I YEAR (Semester   - 1)</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhraALLSSC1sql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '13' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraALLSSC1sql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraALLSSC1sql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc.  I YEAR (Semester   - 2)</strong></td>
    <td></td>
    <td></td>
  </tr>
<?php 
  $andhraALLSSC2sql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '14' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraALLSSC2sql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraALLSSC2sql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc.  II YEAR (Semester   - 3)</strong></td>
    <td></td>
    <td></td>
  </tr>
<?php 
  $andhraALLSSC3sql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '15' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraALLSSC3sql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraALLSSC3sql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc.  II YEAR (Semester   - 4)</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhraALLSSC4sql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '16' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraALLSSC4sql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraALLSSC4sql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>B.Sc.  III YEAR (Semester   - 5)</strong></td>
    <td></td>
    <td></td>
  </tr>
 <?php 
  $andhraALLSSC41sql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '17' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraALLSSC41sql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraALLSSC41sql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
 <tr>
    <td></td>
    <td><strong>B.Sc.  III YEAR (Semester   - 6)</strong></td>
    <td></td>
    <td></td>
  </tr>
 <?php 
  $andhraALLSSC41sql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '41' and status='1'   ORDER BY `item_id` ASC");
//echo $sql;
  $numrows = mysql_num_rows($andhraALLSSC41sql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraALLSSC41sql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>STUDY MATERIALS (SHARP SERIES)</strong></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><strong>JUNIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhraSMSSJIsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '18' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraSMSSJIsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraSMSSJIsql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
    <td></td>
    <td><strong>SENIOR INTERMEDIATE</strong></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  $andhraSMSSSIsql = mysql_query("SELECT * FROM  `nile_items` WHERE  `cat_id` =  '27' AND  `sub_cat_id` =  '19' and status='1'");
//echo $sql;
  $numrows = mysql_num_rows($andhraSMSSSIsql);
//echo $numrows;

$i = 1;
while($data1=mysql_fetch_array($andhraSMSSSIsql)) { 

?>
  <tr>
    <td class="snotext"><?php echo $i;  ?></td>
    <td><?php echo $data1[item_name];  ?></td>
    <td><?php echo $data1[new_price];  ?></td>
    <td>
    <input name="copies[]" type="text" class="textboxnum" id="copies" />
    <input name="bookid[]" type="hidden" class="textboxnum" id="bookid" value="<?php echo $data1[item_id];  ?>" />
    </td>
  </tr>
<?php $i++; } ?>
  <tr>
  <td colspan="4">
  <?php include("./termsandcondition.php"); ?>

  </td>
  
  </tr>
  <tr>
    <td colspan="2"><?php include("./note.php"); ?></td>
    <td colspan="2"><input type="submit" class="button" value="Place Order"></td>
  </tr>
    <tr>
    <td colspan="4">
 
    </td>
   
  </tr>
        </table>
    </td>
    
  </tr>
</table>
</form>
</div>
<footer class="">
<?php include("./footer.php"); ?>

</footer>
</body>
</html>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./supportfiles/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./supportfiles/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./supportfiles/ie10-viewport-bug-workaround.js"></script><?php
