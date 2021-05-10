<?php      
    session_start();
    if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }
          $name = $_SESSION['use'];
          echo "<h2><font color=#e6e6ff>Login success $name</font></h2>";
?> 

 <link rel="icon" href="/comparisonapp/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/comparisonapp/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/comparisonapp/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="/comparisonapp/css/style.css">
  <style>
  .card
  {
	  margin:5px;
	  border-radius:30px;
  }
  img
  {
	  height:180px;
  }
  span
  {
	  font-weight:bolder;
	  font-size: large;
  }
  #visitsite
  {
	  text-decoration:none;
	  color:white;
  }
  .card-text
  {
	  font-weight:bolder;
	  font-size:large;
  }
  body
  {
	  background-image:url("bgpic.jpg")
  }
</style>
  
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark btn-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand">PriceComparison</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Log out!
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" target="_blank">About Us</a>
      </li>
           
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<br><br>
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="index.php" method="POST">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" name="searchtext" value=""
    aria-label="Search"><br><br>
  <input class="btn btn-dark btn-rounded " type="submit" value="Search">
</form>

<!--Section: Group of personal cards-->
<div class="container">
<section class="pt-5 mt-3 pb-3">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group" style="width=50rem;">

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="flp.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">flipkart.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			 <?php
require 'simple_html_dom.php';


$searchtext="";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$searchtext = $_POST["searchtext"];

}
$searchtext = str_replace(' ', '%20', $searchtext);
$flp_str1="https://www.flipkart.com/search?q=";
$flp_str2="&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off&as-pos=1&as-type=HISTORY";
$flp_query=$flp_str1.$searchtext.$flp_str2;

$html = file_get_html($flp_query);


$ht=$html->find('a[class="s1Q9rs"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('a[class="_8VNy32"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('a[class="s1Q9rs"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('a[class="_8VNy32"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('a[class="s1Q9rs"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('a[class="_8VNy32"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";
?>
			
			
			
			
			</p>
            <hr>
            <button type="button" class="btn btn-primary"><a href="https://www.flipkart.com/" id="visitsite">Visit Flipkart</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="amz.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">amazon.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			<?php


$amz_str1="https://www.amazon.in/s?k=";
$amz_str2="&ref=nb_sb_noss_2";

$amz_query=$amz_str1.$searchtext.$amz_str2;



$html = file_get_html($amz_query);
$ht=$html->find('span[class="a-size-medium a-color-base a-text-normal"]',0);
if($ht)
{
	echo $ht->plaintext;
}

echo "<span class='float-right'>";
$ht=$html->find('span[class="a-price-whole"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('span[class="a-size-medium a-color-base a-text-normal"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="a-price-whole"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('span[class="a-size-medium a-color-base a-text-normal"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="a-price-whole"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

?>
			
			
			
			
			
			
			
			
			</p>
            <hr>
           <button type="button" class="btn btn-deep-orange"><a href="https://amazon.com" id="visitsite">Visit amazon</a></button>
	   
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

       

       

      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->




  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">
       <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="snp.png" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
           
            <a>
              <h4 class="card-title">snapdeal.com</h4>
            </a>
            <a class="card-meta">Search Result</a>

           
            <p class="card-text">
			
			<?php
			
$snap_str1="https://www.snapdeal.com/search?keyword=";
$snap_str2="&santizedKeyword=samsung&catId=0&categoryId=0&suggested=true&vertical=p&noOfResults=20&searchState=&clickSrc=suggested&lastKeyword=&prodCatId=&changeBackToAll=false&foundInAll=false&categoryIdSearched=&cityPageUrl=&categoryUrl=&url=&utmContent=&dealDetail=&sort=rlvncy";
$snap_query=$snap_str1.$searchtext.$snap_str2;

$html = file_get_html($snap_query);
$ht=$html->find('p[class="product-title"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="lfloat product-price"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('p[class="product-title"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="lfloat product-price"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('p[class="product-title"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="lfloat product-price"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

?>
			
				
			
			</p>
			
			
			
            <hr>
           <button type="button" class="btn btn-danger"><a href="https://www.snapdeal.com/" id="visitsite">Visit Snapdeal</a></button>
	  </div>
         <!--Card content-->
          </div>
        <!--Card-->
       <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="paytm.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
           
            <a>
              <h4 class="card-title">paytmmall.com</h4>
            </a>
            <a class="card-meta">Search Result</a>

           
            <p class="card-text">
			
			<?php
$snap_str1="https://paytmmall.com/shop/search?q=";
$snap_str2="&from=organic&child_site_id=6&site_id=2";
$snap_query=$snap_str1.$searchtext.$snap_str2;

$html = file_get_html($snap_query);
$ht=$html->find('div[class="UGUy"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('div[class="_1kMS"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('div[class="UGUy"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('div[class="_1kMS"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('div[class="UGUy"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('div[class="_1kMS"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

?>
			
			
			
			
			
			
			
			
			
			
			</p>
			
			
			
            <hr>
           <button type="button" class="btn btn-danger"><a href="https://paytmmall.com/" id="visitsite">Visit Paytm Mall</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->
	
        

      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

 <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="ss.png" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">shoppersstop.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			 <?php


$am_str1="https://www.shoppersstop.com/search/?text=";
$am_query=$am_str1.$searchtext;

$html = file_get_html($am_query);

$ht=$html->find('div[class="product_name_full_label"]',0);

if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('div[class="price_div"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('div[class="product_name_full_label"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('div[class="price_div"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('div[class="product_name_full_label"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('div[class="price_div"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";
?>
			
			
			
			
			</p>
            <hr>
            <button type="button" class="btn btn-primary"><a href="https://www.shoppersstop.com/" id="visitsite">Visit Shoppers Stop</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-4">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="dec.jpg" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">decathlon.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			<?php


$amz_str1="https://www.decathlon.in/search?query=";
$amz_query=$amz_str1.$searchtext;

$html = file_get_html($amz_query);
$ht=$html->find('div[class="mb-3 card-title"]',0);
if($ht)
{
	echo $ht->plaintext;
}

echo "<span class='float-right'>";
$ht=$html->find('span[class="mrp before mr-4"]',0);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('div[class="mb-3 card-title"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="mrp before mr-4"]',1);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

$ht=$html->find('div[class="mb-3 card-title"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "<span class='float-right'>";
$ht=$html->find('span[class="mrp before mr-4"]',2);
if($ht)
{
	echo $ht->plaintext;
}
echo "</span><br><br>";

?>
			
			
			
			
			
			
			
			
			</p>
            <hr>
           <button type="button" class="btn btn-deep-orange"><a href="https://decathlon.com" id="visitsite">Visit Decathlon</a></button>
	   
          </div>
          <!--Card content-->

        </div>
        <!--Card--> 

      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->



</section>
<!--Section: Group of personal cards-->
  </div>
  <!-- Container -->


<!-- Footer -->
<footer class="page-footer font-small  pt-4 btn-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Price Comparison Tool</h5>
        <p>Here you can compare prices of a product on various e-commerce platforms.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">E-commerce sites</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Amazon</a>
          </li>
          <li>
            <a href="#!">Flipkart</a>
          </li>
          <li>
            <a href="#!">Snapdeal</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.amazon.com">amazon.com</a>
          </li>
          <li>
            <a href="https://www.flipkart.com">flipkart.com</a>
          </li>
          <li>
            <a href="https://www.snapdeal.com">snapdeal.com</a>
          </li>
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href=""> Created by SRM students</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





















<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>