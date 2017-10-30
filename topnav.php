<?php 
$currURL =  $_SERVER['REQUEST_URI'];
?>
<!-- Nav Start -->
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="http://www.deeptipublications.com">Home</a></li>
            <li <?php if($currURL == '/andhra-pradesh-order-form.php'){ ?>class="active" <?php } ?>><a href="andhra-pradesh-order-form.php">Andhra Pradesh Bulk Order Form</a></li>
            <li <?php if($currURL == '/telangana-books-order-form.php'){ ?>class="active" <?php } ?>><a href="telangana-books-order-form.php">Telangana State Bulk Order Form</a></li>
            <li <?php if($currURL == '/karnataka-books-order-form.php'){ ?>class="active" <?php } ?>><a href="karnataka-books-order-form.php">Karnataka Bulk Order Form</a></li>
            <li <?php if($currURL == '/order-search.php'){ ?>class="active" <?php } ?>><a href="order-search.php">View Order</a></li>
            <li <?php if($currURL == '/deeptipublications-contact-us.php'){ ?>class="active" <?php } ?>><a href="/deeptipublications-contact-us.php">Contact Us</a></li>
            
           
          </ul>
        
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- End of Nav -->