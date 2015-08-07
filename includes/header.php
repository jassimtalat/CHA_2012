<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Community Healthcare Associates, LLC</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/global.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/jquery.ad-gallery.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="css/jquery.ad-gallery.js"></script>
  <script type="text/javascript" src="js/pagescroll.js"></script>
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27373991-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  <script type="text/javascript">
  $(function() {
    var galleries = $('.ad-gallery').adGallery();
    $('#switch-effect').change(
      function() {
        galleries[0].settings.effect = $(this).val();
        return false; }
    );
    $('#toggle-slideshow').click(
      function() {
        galleries[0].slideshow.toggle();
        return false; }
    );
    $('#toggle-description').click(
      function() {
        if(!galleries[0].settings.description_wrapper) {
          galleries[0].settings.description_wrapper = $('#descriptions');
        } else { galleries[0].settings.description_wrapper = false; }
        return false; }
    );
  });
  </script>
</head>

<body onload="initialize()">
<div id="wrapper">

	<div class="header-bluetop"></div>
    <div id="header" class="clearfix">
    	<div class="logo"> <a href="index.php"><img src="images/cha-logo.jpg" alt="Community Healthcare Associates, LLC" border="0" /></a>
    </div>
        
        <div class="nav-contact">
        	<p>
                Office: <strong>(973) 429-7900</strong>
                <span class="nav-cnt-spc">/</span>
                Fax: <strong>(973) 860-1386</strong>
            </p>
        </div>
        
        <div class="header-navigation">
        	<ul>
            	<li class="about"><a href="aboutus.php">
				    <img src="images/nav-bt-aboutus.png" alt="About Us" width="81" height="23" border="0" /> 
                </a></li>
            	<li class="residential" ><a href="residential.php">
				    <img src="images/nav-bt-residential.png" alt="residential" width="102" height="25" border="0" />
                </a></li>
            	<li class="commercial"><a href="commercial.php">
                    <img src="images/nav-bt-commercial.png" alt="commercial" width="122" height="25" border="0" />
                </a></li>
            	<li class="glenwood" ><a href="glenwood.php">
				    <img src="images/nav-bt-glenwood.png" alt="glenwood" width="115" height="25" border="0" />
                </a></li>
            	<li class="news"><a href="inthenews.php">
                    <img src="images/nav-bt-news.png" alt="News" width="77" height="25" border="0" />
                </a></li>
            	<li class="contact"><a href="contact.php">
                    <img src="images/nav-bt-contact.png" alt="Contact" width="86" height="25" border="0" />
                </a></li>
            </ul>
        </div><div class="clearfloat"></div>
    </div>
    <div class="content-line"></div>
	<div class="clearfloat"></div>

