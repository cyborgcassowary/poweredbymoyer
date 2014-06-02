<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
  /* STEP 1: LOAD RECORDS - Copy this PHP code block near the TOP of your page */
  
  // load viewer library
  $libraryPath = 'cmsadmin/lib/viewer_functions.php';
  $dirsToCheck = array('/home/content/65/10511365/html/','','../','../../','../../../');
  foreach ($dirsToCheck as $dir) { if (@include_once("$dir$libraryPath")) { break; }}
  if (!function_exists('getRecords')) { die("Couldn't load viewer library, check filepath in sourcecode."); }

  // load record from 'contact'
  list($contactRecords, $contactMetaData) = getRecords(array(
    'tableName'   => 'contact',
    'where'       => '', // load first record
    'loadUploads' => true,
    'allowSearch' => false,
    'limit'       => '1',
  ));
  $contactRecord = @$contactRecords[0]; // get first record
  if (!$contactRecord) { dieWith404("Record not found!"); } // show error message if no record found

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<title>Contact Powered by Moyer</title>
<meta name="description" content="Contact Moyer today for the best tools and service in the Doylestown area since 1926." />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
<link href="../css/moyer.css" rel="stylesheet" type="text/css" />
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
            <li><a href="brands.php">BRANDS</a></li>
            <li><a href="parts.php">PARTS</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="financing.php">FINANCING</a></li>
            <li><a href="recycling.php">RECYCLING</a></li>
            <li><a href="http://www.poweredbymoyer.com/store/">INVENTORY</a></li>
            <li><a href="history.php">HISTORY</a></li>
            <li><a href="contact.php" class="currentpage">CONTACT</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div> 


<div class="container" id="maincontent"> 
  <div class="row">
    <div class="col-md-9" id="correctmargin">

      <h2 class="headline">CONTACT</h2>
     <?php echo $contactRecord['content']; ?>
     <!-- Begin MailChimp Signup Form -->


<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
          

          <div id="mc_embed_signup">
          <form action="http://poweredbymoyer.us7.list-manage.com/subscribe/post?u=0cda27858e24a866aa82294e2&amp;id=7e6f222958" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          	<h2>Subscribe to our mailing list</h2>
                    <div class="mc-field-group">
                    	<label for="mce-EMAIL">Email Address </label>
                    	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
          	<div id="mce-responses" class="clear">
          		<div class="response" id="mce-error-response" style="display:none"></div>
          		<div class="response" id="mce-success-response" style="display:none"></div>
          	</div>	
            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </form>
          </div>
              
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