<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsadmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home/content/65/10511365/html/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load records from 'specials'
  list($specialsRecords, $specialsMetaData) = getRecords(array(
    'tableName'   => 'specials',
    'limit'       => '3',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  
  // load records from 'news_events'
  list($news_eventsRecords, $news_eventsMetaData) = getRecords(array(
    'tableName'   => 'news_events',
    'limit'       => '3',
    'loadUploads' => true,
    'allowSearch' => false,
  ));
  
   // load records from 'new_products'
  list($new_productsRecords, $new_productsMetaData) = getRecords(array(
    'tableName'   => 'new_products',
    'loadUploads' => true,
    'allowSearch' => false,
  ));

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<title>Powered by Moyer Since 1926</title>
<meta name="description" content="Suppling the best tools, service and repairs in the Doylestown area since 1926." />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/moyer.css" rel="stylesheet" type="text/css" />

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

<body >

<a id="header_index" class="hidden-xs hidden-sm" href="index.php"></a>
<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="./" title="Powered by Moyer"><img src="images/logo_moyer_small_2.png" alt="Powered by Moyer" /></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="html/brands.php">BRANDS</a></li>
            <li><a href="html/parts.php">PARTS</a></li>
            <li><a href="html/service.php">SERVICE</a></li>
            <li><a href="html/financing.php">FINANCING</a></li>
            <li><a href="html/recycling.php">RECYCLING</a></li>
            <li><a href="http://www.poweredbymoyer.com/store/">INVENTORY</a></li>
            <li><a href="html/history.php">HISTORY</a></li>
            <li><a href="html/contact.php">CONTACT</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">   
<div class="row">
  <div class="col-md-4 noleftpadding">
    <!-- Insert another container here -->
      <h2 class="headline">Specials</h2>
      <?php foreach ($specialsRecords as $record): ?>
      <div>
 <!-- insert the beginning of the container here -->
      <?php foreach ($record['image'] as $index => $upload): ?>
          <?php if ($index >= 1) { continue; } // limit uploads shown ?>
			<img src="<?php echo $upload['thumbUrlPath'] ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" />
        <?php endforeach ?>
		<h3 class="headline_strong"><?php echo htmlencode($record['title']) ?></h3>
      <?php echo $record['content']; ?><br/>
      </div>
      <!-- insert the end of the container here -->
       <?php endforeach ?>
    </div>
    

     <div class="col-md-4 noleftpadding">
    <!-- Insert another container here -->
      <h2 class="headline">News & Events</h2>
      <?php foreach ($news_eventsRecords as $record): ?>
      
       <!-- insert the beginning of the container here -->
<div>
      <?php foreach ($record['image'] as $index => $upload): ?>
          <?php if ($index >= 1) { continue; } // limit uploads shown ?>
			<img src="<?php echo $upload['thumbUrlPath'] ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" />
        <?php endforeach ?>
		<h3 class="headline_strong"><?php echo htmlencode($record['title']) ?></h3>
      <?php echo $record['content']; ?>
      </div>
       <!-- insert the end of the container here -->
    
       <?php endforeach ?>
       </div>
       <!-- Insert another container here -->
 <div class="col-md-4 noleftpadding">
    <h2 class="headline">New &amp; Coming Soon</h2>
    <?php foreach ($new_productsRecords as $record): ?>
      
        <div>
        <?php foreach ($record['image'] as $index => $upload): ?>
          <?php if ($index >= 1) { continue; } // limit uploads shown ?>
			<img src="<?php echo $upload['thumbUrlPath'] ?>" width="<?php echo $upload['thumbWidth'] ?>" height="<?php echo $upload['thumbHeight'] ?>" alt="" />
        <?php endforeach ?>
		<h3 class="headline_strong"><?php echo htmlencode($record['title']) ?></h3>
      <?php echo $record['content']; ?><br/>
      </div>
      
       <?php endforeach ?>
  
</div>
</div>

<!--  
  Rollover Images - jQuery
  <img src="original.jpg" rel="rollover.jpg" class="rollover" /> 
-->


</div>
  

<div id="footer">
  <div class="container">&copy; 2014 Paul B. Moyer and Sons&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Offering the best products and service in the Doylestown area.</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moyer.js"></script>

</body>
</html>