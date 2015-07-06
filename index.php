<?php
$email = '';
if($_POST) {
	$email = trim($_POST['email']);
	$errors = array();
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		array_push($errors, "Please specify a valid email address");

	//Prepare errors for output
	$output = '';
	foreach($errors as $val) {
		$output .= "<p class='output'>$val</p>";
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Guardian House</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		-->
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- CSS Files comes here -->
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet" media="screen">
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    <link href="css/nivo-lightbox.css" rel="stylesheet" media="screen">
    <link href="css/nivo_lightbox_themes/default/default.css" rel="stylesheet" media="screen">
    <link href="css/colors/green.css" rel="stylesheet" media="screen">
    <link href="css/responsive.css" rel="stylesheet" media="screen">
	<link href="css/jquery.cookiebar.css" rel="stylesheet" media="screen">

    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic" rel="stylesheet" type="text/css">

    <!-- Modernizer and IE specyfic files -->
    <script src="js/modernizr.custom.js"></script>


    <!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="css/switcher.css" media="all" />
    <link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800" rel="stylesheet" type="text/css">
    <!-- END Switcher Styles -->

    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/vine.css" title="vine" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/violet.css" title="violet" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/torquoise.css" title="torquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/green.css" title="green" media="all" />
    <!-- END Demo Examples -->




  </head>

  <body>
	<a name="top"></a>

    <!--###############################-->
    <!--PRELOADER #####################-->
    <!--###############################-->

    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>


		<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
				<a class="navbar-brand" href="#top">
	        <img alt="Guardian House" width="40" height="40"  src="images/logo_sito.png" style="max-width:100px; margin-top: -10px;">
	      </a>
				<a class="navbar-brand" href="#top">Guardian House</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#features_2">How it works</a></li>
				<li><a href="#features_1">About us</a></li>
				<li><a href="#footer">Contacts</a></li>
			</ul>
		</div>
	</div>
</nav>

    <section id="home">
		<div class="container">
			<div id="learn_more" class="container">
				<div class="row">
				<div id="homescreen" class="col-sm-14 col-md-14 col-lg-14">
					<div class="embed-responsive embed-responsive-16by9">
  					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VMbqHAZP-OE" frameborder="0" allowfullscreen></iframe>
					</div>
					<div id="slogan"><h1>Guardian House is the best way to rent your room guided by feedbacks.</h1>

					<!-- <img src="images/homescreen.png" class="img-responsive" id="home_image" alt="img"> -->
				</div> <div class="clearfix"></div>
			</div>
		</div>
    </section>

    <!--###############################-->
    <!--Features 1 ####################-->
    <!--###############################-->

    <section id="features_1">
        <div id="learn_more" class="container">
					<caption> <h1 id="who_we_are">About us</h1> </caption>
            <div class="row row-centered">
                <div class="col-sx-1 col-md-3 col-lg-3 col-centered margin-top" ><img class="img-responsive" src="images/carlo.png" alt="img"> <h3>Branca Carlo </h3> <span class="ruolo">Frontend / Backend Developer</span></div>
							  <div class="col-sx-1 col-md-3 col-lg-3 col-centered margin-top col-md-offset-1" ><img class="img-responsive" src="images/fabio.png"   alt="img"> <h3>Cuccaro Fabio </h3> <span class="ruolo">Frontend Developer</span></div>
								<div class="col-sx-1 col-md-3 col-lg-3 col-centered margin-top col-md-offset-1"><img class="img-responsive" src="images/luigi.png"   alt="img"> <h3>Vecchione Luigi </h3> <span class="ruolo">Frontend Developer</span></div>
                <div class="col-sx-1 col-md-3 col-lg-3 col-centered margin-top"><img class="img-responsive" src="images/cosmo.png"  alt="img"> <h3>D'Uva Cosmo </h3>  <span class="ruolo">Web Developer / Designer </span></div>
							  <div class="col-sx-1 col-md-3 col-lg-3 col-centered margin-top col-md-offset-1"><img class="img-responsive" src="images/nae.png"   alt="img"> <h3>Nae Vasilica </h3> <span class="ruolo">Community Developer</span></div>
						</div>
        </div>

    </section>
		<!--
		<section id="features_1">
				<div id="learn_more" class="container">
						<div class="row"  >
								<div class="col-sm-12 col-md-12  col-lg-12">
									<table id="table_who">
									<caption> <h1 id="who_we_are">About us</h1> </caption>
									<tr>
										<td id="features1d_image">   <img class="chi_siamo" src="images/carlo.png"   alt="img"> <h3>Branca Carlo </h3> <span class="ruolo">Frontend / Backend Developer</span> </td>
										<td> </td>
										<td id="features1b_image">  <img class="chi_siamo" src="images/fabio.png"   alt="img"> <h3>Cuccaro Fabio </h3> <span class="ruolo">Frontend Developer</span>  </td>
										<td> </td>
										<td id="features1e_image"> <img class="chi_siamo" src="images/luigi.png"   alt="img"> <h3>Vecchione Luigi </h3> <span class="ruolo">Frontend Developer</span>  </td>
									</tr>
									<tr>
										<td> </td>
										<td id="features1a_image">  <img class="chi_siamo" src="images/cosmo.png"  alt="img"> <h3>D'Uva Cosmo </h3>  <span class="ruolo">Web Developer / Designer </span> </td>
										<td> </td>
										<td id="features1c_image"> <img class="chi_siamo" src="images/nae.png"   alt="img"> <h3>Nae Vasilica </h3> <span class="ruolo">Community Developer</span>  </td>

										<td> </td>
									</tr>
								</table>

						</div>

				</div>

		</section>
	-->




<!--     ############################### -->
<!--     Features 2 #################### -->
<!--     ############################### -->

    <section id="features_2">
        <div class="container">
					<caption> <h1 id="how_it_work">How it works?</h1> </caption>
							<div class="row row-centered">
	                <div class="col-sx-12 col-md-12 col-lg-12 col-centered margin-top screen" ><h3>Find an apartment</h3><img class="img-responsive" src="images/2.png" alt="img"></div>
								  <div class="col-sx-12 col-md-12 col-lg-12 col-centered margin-top screen2" ><h3>View apartment's infos</h3><img class="img-responsive" src="images/4.png" alt="img"></div>
									<div class="col-sx-12 col-md-12 col-lg-12 col-centered margin-top screen3"><h3>View reviews of other users</h3><img class="img-responsive" src="images/5.png" alt="img"></div>
							</div>
			</div>

    </section>

    <!--###############################-->
    <!--Newsletter and Footer #########-->
    <!--###############################-->

    <section id="footer">
        <div class="container">
            <div class="row" id="newsletter">
                <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3" >

                    <h2>Subscribe to our Newsletter for more Updates</h2>

                    <div id="newsletter_form">
                        <form action="http://carlo.teammolise.rocks/api/newsletter"" method="post" class="subscribe-form" id="subscribe-form">
                            <input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..."  required>
                                <button type="submit" class="subscribe-submit">Subscribe</button>
                        </form>
                    </div>
                    <div id="preview"></div>

                </div>
            </div>

           <div class="row">
               <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" id="share">


				     <a href="https://www.facebook.com/pages/Guardian-House/796482390422393?fref=ts" target="blank"> <img class="follow_button" src="images/facebook.png">  </a>
                     <a onclick="alert('coming soon!')" target="blank"> <img class="follow_button" src="images/twitter.png">  </a>
				   <p>Copyright © 2015, Guardian House. Tutti i diritti riservati.</p>


               </div>

           </div>

        </div>

    </section>

 <!--    ADD Switcher
    <div class="demo_changer">
        <div class="demo-icon"></div>
        <div class="form_holder">
            <p>Choose your homepage</p>
            <a href="../solid/index.html"  ><img src="images/switcher/solid.jpg" alt="" class="variant"></a>
            <a href="index-2.html"  ><img src="images/switcher/img.jpg" alt="" class="variant"></a>
            <a href="../video/index.html"  ><img src="images/switcher/video.jpg" alt="" class="variant"></a>
            <p>&amp; color</p>
            <div class="predefined_styles">
                <a href="#" rel="green" class="styleswitch"><img src="images/switcher/green.jpg" alt=""></a>
                <a href="#" rel="torquoise" class="styleswitch"><img src="images/switcher/torquoise.jpg" alt=""></a>
                <a href="#" rel="blue" class="styleswitch"><img src="images/switcher/blue.jpg" alt=""></a>
                <a href="#" rel="violet" class="styleswitch"><img src="images/switcher/violet.jpg" alt=""></a>
                <a href="#" rel="yellow" class="styleswitch"><img src="images/switcher/yellow.jpg" alt=""></a>
<!--                 <a href="#" rel="orange" class="styleswitch"><img src="images/switcher/orange.jpg" alt=""></a> -->
<!--                 <a href="#" rel="red" class="styleswitch"><img src="images/switcher/red.jpg" alt=""></a> -->
<!--                 <a href="#" rel="vine" class="styleswitch"><img src="images/switcher/vine.jpg" alt=""></a> -->




<!--             </div> -->


<!--         </div> -->
<!--     </div> -->
<!--     END Switcher -->

    <!-- JavaScript plugins comes here -->
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/main.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
	<script src="js/jquery.cookiebar.js"></script>
    <script type="text/javascript">
        $('document').ready(function(){
                $('#subscribe-form').ajaxForm( {
                target: '#preview',
                success: function() {
                      $('#subscribe-form').slideUp('slow');
                      $('#preview').css({"opacity":"1"});
                    }
                });
            });
    </script>
    <script>
        var url ='images/icons.svg';
        var c=new XMLHttpRequest(); c.open('GET.html', url, false); c.setRequestHeader('Content-Type', 'text/xml'); c.send();
        document.body.insertBefore(c.responseXML.firstChild, document.body.firstChild)
    </script>

    <!-- Demo Switcher JS -->
    <script type="text/javascript" src="js/fswit.js"></script>

  </body>
</html>
