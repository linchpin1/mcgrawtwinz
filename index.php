<!DOCTYPE html>
<html lang="en">
<!--notes: Developed using WEB 3.0 Technology from original designs supplied under Creative Commons Attribution (CCA) Licence 3.0 by html5up.net/licence -->
	<head>
		<title>McGraw Twinz</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="The official McGraw Twinz website." />
		<meta name="keywords" content="McGraw Twinz, McGraw Twins, McGraw Twin, McGraw Twinz Music, Forced Entry" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
				<script src="js/jquery.min.js"></script>
				<script src="js/jquery.poptrox.min.js"></script>
				<script src="js/skel.min.js"></script>
				<script src="js/init.js"></script>
        <script src="//api.html5media.info/1.1.8/html5media.min.js"></script>
        <script src="validator/jquery.validator-0.3.6.min.js"></script>

				<noscript>
					<link rel="stylesheet" href="css/skel-noscript.css" />
					<link rel="stylesheet" href="css/style.css" />
				</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

<script>
		function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
</script>

<script src="wimpy/wimpy.js" type="text/javascript"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type='text/javascript' src='js/modernizr.custom.13303.js'></script>
<script type='text/javascript' src='js/jquery.shockwave.js'>

/***********************************************
* Shockwave 3D slideshow script- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>
<script type='text/javascript' src='js/jquery.shockwave.effects.js'></script>


<script>

var imagesDataArray = [ //For demos, define a single set of images to be used in all of the demos below
   {
      src: 'images/rotator1/0.PNG',
      url: 'index.html#one',
      target: '_self',  // default is _self, which opens in the same window (_blank in new window)
      description: ''
   },
   {
      src: 'images/rotator1/1.PNG',
      url: 'index.html#two',
      description: ''
   },
   {
      src: 'images/rotator1/2.PNG',
			description: '',
   },
   {
      src: 'images/rotator1/3.PNG',
			url: 'index.html#contact',
      description: ''
   },
   {
      src: 'images/rotator1/4.PNG',
			description: '',
   },
   {
      src: 'images/rotator1/6.PNG',
			description: '',
   }
];


jQuery(function(){

	$('#unhookshow').shockwave(imagesDataArray, {
	 'slider-type': 'UnhookedSlider',
   'random-time-to-unhook': 1500, // in ms
   'free-fall-time': 150, // ms
	 'autostart-slideshow': true,
	 'maximum-slideshow-cycles': 2,
	 'slideshow-delay': 2000,
	 'duration': 100,
   'tiles-in-x': 5,
   'tiles-in-y': 3,
	 'show-permanent-description': false,
	 'standard-control-buttons-area': $('#unhookbuttons'),
	 'viewport-dimension': {width: 750, height: 320}
	});



	$('#flipedge').shockwave(imagesDataArray, {
	 'slider-type': 'FlipEdgeSlider',
   'tiles-in-x': 7,
   'tiles-in-y': 1,
   'fixed-rotation-axis': [1, 0, 0],
   'controller-default-wave-origin': ['50%', '50%'],
	 'autostart-slideshow': true
	});

	$('#cubeslider').shockwave(imagesDataArray, {
   'slider-type': 'CubeSlider',
   'rotation-duration': 600,  // in ms
   'tiles-in-x': 1,
   'tiles-in-y': 1,
   'rotation-axis': 'x',
	 'show-description-onimage': false,
	 'autostart-slideshow': true
	});

	$('#cubeslider2').shockwave(imagesDataArray, {
   'slider-type': 'CubeSlider',
   'rotation-duration': 600,  // in ms
   'tiles-in-x': 5,
   'tiles-in-y': 1,
   'wave-fixed-origin': [0, 0],
	 'standard-control-buttons-area': null,
   'next-slide-button': $('#cubeslider2next'),
   'previous-slide-button': $('#cubeslider2prev'),
   'play-pause-slideshow-buttons': $('#cubeslider2playpause')
	});

})

</script>

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<a href="#intro"><img id="logo" src="images/mtz_logo_big.png" alt="McGraw Twinz Logo" style="float:left;width:325px;height:77px;border:2"></a>
				<h1 id="logo"></h1>
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="fa solo fa-home"></a></li>
							<li><a href="#one" class="fa solo fa-star-o"> OUR STORY</a></li>
							<li><a href="#two" class="fa solo fa-music"> LISTEN TO MUSIC</a></li>
							<li><a href="#contact" class="fa solo fa-envelope-o"> SEND US MAIL</a></li>
						</ul>
					</nav>

			</header>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
				<div id='unhookshow'></div>
				<br />
				<br />
				<header>
				<p > Welcome to our website.</p>
				<h2>PRAISE HIM YAWL</h2>
				<br /><br />
				</header>
				</div>

			</section>

		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Our Story</h2>
					</header>
					<hr style="width: 100%; height: 8px;">
					<p >The dynamic due, the McGraw Twinz, are a hip-hop musical sensation with a soulful flavor that incorporates rap with a taste of gospel, jazz, and R&B.</p>
					<p >Their musical careers began in the early 80s in the “Dirty South” in the twin cities, Helena and West Helena, Arkansas on the school grounds where Linda aka “Ore00” would freestyle to Gwen’s aka “Double” human beat box challenging other local rappers.</p>
					<p >They quickly became well known for their “gut-busting” lyrical flow and hip beats. After hearing a commercial for “the Really Big Show”, a local talent contest held at Phillips Community College, their fans encouraged them to audition, thus the Rappin Twins was formed.</p>
					<p >They began writing more original songs with the hopes getting signed to a major label. While gospel rap was slowly beginning to emerge and hittin' the airwaves: they pressed on, ministering in local churches and performing on shows where it was accepted. </p>
					<p >In the summer of 1994, the twins were asked to record a radio commercial for Talent search 94, which was sponsored in part by the American Association of Blacks and Energy, and be the opening act.</p>
					<p >With the explosion of hip-hop in the late 90s, the dynamic duo chose to produce music that told their story. Their determination and mere love for music was a catalyst in creating a catalog of hundreds of songs ranging from gut busting raps to heartfelt inspirational praise and worship songs.</p>
					<p >In the spring of 2003 they began recording their demo. Due to great reviews and request from their fans to purchase their music, in the fall of 2004, the McGraw Twinz launched LuvIt Records, an independent record label, and <a href="#two">Forced Entry</a> was released. </p>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
					<h2>Music</h2>
					</header>

	    			<hr style="width: 100%; height: 8px;">
				    <p >Listen to samples of our music.<br/></p>

					<!-- Wimpy Player -->
					<div style="width:100%;height:100%;" data-wimpyplayer data-skin="/wimpy/wimpy.skins/_defaultskin.tsv" data-coverArt="forced_entry.jpg" data-responsive=1 data-startUpText='{"title":"Click To Play","album":"Forced Entry","artist":"McGraw Twinz"}' data-limitPlayTime=40 data-loop=2 data-numberTracks=1 data-media='[{"title":"Unconditional Love","file":"__1aHR0cDovL3d3dy5tY2dyYXd0d2luei5jb20vd2ltcHkvRm9yY2VkIEVudHJ5LzAxIFVuY29uZGl0aW9uYWwgTG92ZS5tNGE=","image":"http://www.mcgrawtwinz.com/wimpy/forced_entry.jpg","kind":"m4a","album":"Forced Entry","artist":"McGraw Twinz","date":"1442515654"},{"title":"Recognize Momma","file":"__1aHR0cDovL3d3dy5tY2dyYXd0d2luei5jb20vd2ltcHkvRm9yY2VkIEVudHJ5LzAyIFJlY29nbml6ZSBNb21tYS5tNGE=","image":"http://www.mcgrawtwinz.com/wimpy/forced_entry.jpg","kind":"m4a","album":"Forced Entry","artist":"McGraw Twinz","date":"1442515656"},{"title":"Praise Him Yawl","file":"__1aHR0cDovL3d3dy5tY2dyYXd0d2luei5jb20vd2ltcHkvRm9yY2VkIEVudHJ5LzAzIFByYWlzZSBIaW0gWWF3bC5tNGE=","image":"http://www.mcgrawtwinz.com/wimpy/forced_entry.jpg","kind":"m4a","album":"Forced Entry","artist":"McGraw Twinz","date":"1442515670"},{"title":"Da Remix","file":"__1aHR0cDovL3d3dy5tY2dyYXd0d2luei5jb20vd2ltcHkvRm9yY2VkIEVudHJ5LzA0IERhIFJlbWl4IFByYWlzZUhpbVlhd2wubTRh","image":"http://www.mcgrawtwinz.com/wimpy/forced_entry.jpg","kind":"m4a","album":"Forced Entry","artist":"McGraw Twinz","date":"1442515672"}]'></div>

					<br /><br />
					<div>
					<ul class="fa-ul">
					<li><i class="fa-li fa fa-music"></i><b>Freshmen Album</b></li>
					<li>  FORCED ENTRY </li>
					<li>  2004 LuvIt Records</li>
					</ul>
					</div>

					<div>
					<ul class="fa-ul">
					<li><i class="fa-li fa fa-music"></i><b>Sophomore Album</b></li>
					<li>  HOOD-RICH </li>
					<li>  2006 LuvIt Records</li>
					</ul>
					</div>

					<div>
					<ul class="fa-ul">
					<li><i class="fa-li fa fa-music"></i><b>Singles</b></li>
					<li>  Do You Remember</li>
					<li>  Material Things</li>
					<li>  Bring It in The World</li>
					</ul>
					</div>
				</div>


			</section>

		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
					</header>
					<div class="box container small">
                    <h2>Contact</h2>
                    <hr style="width: 100%; height: 8px;">
					<p>We love to hear from our fans. <a href="mailto:gwen@mcgrawtwinz.com">Send Mail</a>!</p>

						<!--
							 Contact Form Disabled



					<form method="post" action="mail-html.php">
                    <p>
                    <script>
					var prodId = getParameterByName('success');
					if(prodId=="ok"){
					var msg="Thank You!";
					document.write(msg);
					}
					</script>
                    </p>

<div class="row half">
	<div class="6u"><input type="text"  name="name" placeholder="Name" validate="vgroup" require="Please enter your name."/></div>
	<div class="6u"><input type="text" name="email" placeholder="Email" validate="vgroup" require="Please enter a valid email" email="Invalid email address, please check for typos." /></div>
</div>
<div class="row half">
	<div class="12u"><textarea name="message"  placeholder="Message" rows="6" validate="vgroup" require="Please enter a message"></textarea></div>
</div>


<div class="row"><div class="12u">
<?php $CapImage = 'captcha_new/securimage_show.php?cap='.rand(1,10);?><img src="<?php echo $CapImage ?>" width="120" height="30"/><input type="text" id="security_code" name="security_code"  class="input required" validate="vgroup" require="Please enter a message"/>
<?php if(isset($_GET['captcha'])){
echo 'Incorrect captcha. Please try again.';
}
	?>

		<ul class="actions"><br />
<li><center><input type="submit" class="button" value="Send" onClick="return validate('vgroup');"/></center></li>
		</ul>
	</div>
</div>
							</form>  Contact Form Disabled-->
					</div>
				</div><br ><br >
			</section>

		<!-- Footer -->
			<footer id="footer">

				<!--
				     Social Icons

				     Use anything from here: http://fortawesome.github.io/Font-Awesome/cheatsheet/)
				-->
					<ul class="actions">
						<li><a href="#intro" class="fa solo fa-home"><span>HOME</span></a></li>
						<li><a href="#one" class="fa solo fa-star-o"> OUR STORY <span>OUR STORY</span></a></li>
						<li><a href="#two" class="fa solo fa-music"> LISTEN TO MUSIC <span>MUSIC</span></a></li>
					    <li><a href="#" class="fa solo fa-envelope-o"> SEND US MAIL <span>CONTACT</span></a></li>
					</ul>



				<!-- Menu -->
					<ul class="menu">
						<li>&copy; 2015 McGraw Twinz, LLC.<a href="htp://www.mcgrawtwinz.com" target="_blank"></a> All rights reserved.</li>
					</ul>

			</footer>

	</body>
</html>
