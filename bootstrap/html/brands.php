<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsadmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home/content/65/10511365/html/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'brands'
  list($brandsRecords, $brandsMetaData) = getRecords(array(
    'tableName'   => 'brands',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $brandsRecord = @$brandsRecords[0]; // get first record
  if (!$brandsRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<title>Powered by Moyer | Brands</title>
<meta name="description" content="Our brands have been around for years, so when you 'buy here&quot; you're guaranteed to get quality equipment with the backing of industry leading companies." />

<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" /> <link href="../css/moyer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

  // var _gaq = _gaq || [];
  // _gaq.push(['_setAccount', 'UA-39417149-1']);
  // _gaq.push(['_trackPageview']);

  // (function() {
  //   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  //   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  // })();

</script>
</head>

<body>
<a id="header_interior" class="hidden-xs hidden-sm" href="index.php"></a>
<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="../" title="Powered by Moyer"><img src="../images/logo_moyer_small_2.png" alt="Powered by Moyer" /></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="brands.php" class="currentpage">BRANDS</a></li>
            <li><a href="parts.php">PARTS</a></li> 
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="financing.php">FINANCING</a></li>
            <li><a href="recycling.php">RECYCLING</a></li>
            <li><a href="http://www.poweredbymoyer.com/store/">INVENTORY</a></li>
            <li><a href="history.php">HISTORY</a></li>
            <li><a href="contact.php">CONTACT</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container" id="maincontent"> 
  <div class="row">
    <div class="col-md-9" id="correctmargin">
  <h2 class="headline">BRANDS</h2>
      <?php echo $brandsRecord['content']; ?><br/><br />
      <div class="row" >
          <div class="col-md-4 brands">
              <img src="../images/logo_bobcat.png" width="124" height="85" /><br />
              BOB-CAT, a leading brand of commercial walk-behind and zero-turn riding mowers, has new offerings in their compact, lightweight FastCat line of zero-turn riding mowers.<br />
              <br />
              <br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=6">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_bob_cat.php">LEARN MORE</a><br />
            </div>
          <div class="col-md-4 brands">
              <img src="../images/logo_dewalt.png" width="124" height="85" /><br />
              DEWALT Power Tools line consists of over 200 electric power tools and over 800 accessories.<br />
              <br /><br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=7">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_dewalt.php">LEARN MORE</a> <br />
          </div>
          <div class="col-md-4 brands">
              <img src="../images/logo_honda.png" width="124" height="85" /><br />
              Since 1973 Honda Generators has been producing generators with unwavering reliability, quality, durability and environmentally conscious efficiency that can't be beat.<br />
                <br /><br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=4">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_honda.php">LEARN MORE</a> <br />
          </div>

    </div> 


    <div class="row">
            <div class="col-md-4 brands">

              <img src="../images/logo_husqvarna.png" width="124" height="85" /><br />
              Husqvarna is the world's largest producer of outdoor power products including robotic mowers, garden tractors, chainsaws and trimmers. <br />
                <br />
                <br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=1">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_husqvarna.php">LEARN MORE</a> <br />
            </div>
            <div class="col-md-4 brands">
              <img src="../images/logo_jennyt.png" width="124" height="85" /><br />
              Jenny manufactures a complete and extensive line of Hand Carry, Single and Two-Stage Wheeled Portable, Service Vehicle Compressors.<br />
                <br />
                <br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=11">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_jenny.php">LEARN MORE</a> <br />
            </div>

            <div class="col-md-4 brands">
              <img src="../images/logo_mantis.png" width="124" height="85" /><br />
              Mantis developed the first, original small tiller concept over 35 years ago and have been satisfying the consumer market ever since.<br />
                <br />
                <br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=9">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_mantis.php">LEARN MORE</a> <br />
            </div>
      </div> <!-- end of row -->

      <div class="row">
            <div class="col-md-4 brands">
              <img src="../images/logo_porter.png" width="124" height="85" /><br />
              Porter-Cable is known for introducing a number of noteworthy power tools, such as the first portable belt sander, helical-drive circular saw, and portable band saw.<br />
                <br /><br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=8">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_porter_cable.php">LEARN MORE</a> <br />
            </div>
            
            <div class="col-md-4 brands">


              <img src="../images/logo_redmax.png" width="124" height="85" /><br />
              
              RedMax offers commercial outdoor power equipment for the land care professional.<br />
            <br /><br />
              <a href="http://poweredbymoyer.com/store/index.php?main_page=index&amp;cPath=3">VIEW INVENTORY</a><br />
                or<br />
              <a href="brands_redmax.php">LEARN MORE</a> <br />
            </div>
            
      </div> <!-- end of row -->
    
    <!-- <div class="clear"></div> -->
  </div>
  </div>
</div>

<div id="footer">
  <div class="container">&copy; 2014 Paul B. Moyer and Sons&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Offering the best products and service in the Doylestown area.</div>
</div>


<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/moyer.js"></script>

</body>
</html>