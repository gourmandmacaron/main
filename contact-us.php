<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>Gourmand Macaron & Pastry | Contact Us, Vancouver</title>

    <!--legacy meta desc. and keyword, left intact to preserve SE ranking -->
    <meta name="description" content="Fill out our contact form to get prices on wholesale orders, custom flavours, events and decorations. Contact direct: Paulin@gourmand-macaron.ca" />
    <meta name="keywords" content="macarons, macaron, vancouver,cuisine, pastry" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Font Awesome for glyphicons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!--Google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>

    <!--Internal customs styles -->
    <link rel="stylesheet" href='css/style.css' />

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "0f684e7e-a0f0-4dcb-b8a4-b17fc19cb5a5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72314714-1', 'auto');
  ga('send', 'pageview');

</script>

  </head>

  <body>

   <div class='top-head-border'></div>
    
    <div class='container'>

      <div class='row'>
        <header>
          <a href='./'><img src='assets/gourmand-type-logo.png' alt='Gourmand Macaron logo' class='img-responsive' id='gourmand-logo' /></a>
        </header>
      </div>

      <div class='row'>
        <nav class='menu-left'>
          <ul>
            <a href='./our-macarons.html'><li>OUR MACARONS</li></a>
            <a href='./where-to-buy.html'><li>WHERE TO BUY</li></a>
            <a href='#' data-toggle="modal" data-target=".bs-example-modal-lg"><li>SHARE US</li></a>
          </ul>
        </nav>
        <nav class='menu-right'>
          <ul>
            <a href='./about-us.html'><li>ABOUT US</li></a>
            <a href='./in-the-press.html'><li>IN THE PRESS</li></a>
            <a href='./contact-us.php'><li>CONTACT</li></a>
            <a href="#scroll-2"><div id='arrow'></div></a>
          </ul>  
        </nav>
      </div>

      <div class='row'>
        <div class='hori-rule'>
        </div>
      </div>
      <div class='row'>
        <span id="scroll-2"</span>
        <div class='col-md-6'>
        <h4>Our Kitchen:</h4><br>
        <div id='contactInfo'>
          Gourmand Macaron<br> 
          260 E 5th Ave,<br>
          Vancouver, BC<br>
          V5T 1H3<br>
          <a tel='+17788091207'>(778) 809-1207</a><br>
          <a href="mailto:paulin@gourmand-macaron.ca">paulin@gourmand-macaron.ca</a><br/>
          <p class="details-email">Please leave us a few details on the volume of your order, the flavours you would like, and the date of delivery.</p>
        </div>


        <?php 
          $action=$_REQUEST['action']; 
          if ($action=="")    /* display the contact form */ 
              { 
              ?> 
              <form  class="form-horizontal request-info" action="" method="POST" enctype="multipart/form-data">
	              <input type="hidden" name="action" value="submit">

	              <div class="form-group">
	              	<label for="fullName" class="col-md-1 control-label">Name</label>
	              	<div class="col-md-6">
	              		<input class="form-control" id="fullName" name="name" type="text" value="" size="30" placeholder="Your name" /><br>
	              	</div>
	              </div>

	              <div class="form-group">
	              	<label for="inputEmail" class="col-md-1 control-label">Email</label>
	              	<div class="col-md-6">
	              		<input class="form-control" id="inputEmail" name="email" type="text" value="" size="30" placeholder="Email" /><br>
	              	</div>
	              </div>

	              <div class="form-group">
	              	<label for="inputTel" class="col-md-1 control-label">Tel#</label>
	              	<div class="col-md-6">
	              		<input type="tel" class="form-control" id="inputTel" placeholder="Tel#" name="tel" /><br>
	              	</div>
	              </div>

	              <div class="form-group">
	              	<label for="message" class="col-md-1 control-label">Message</label>
	              	<div class="col-md-6">
	              		<textarea name="message" id="message" rows="3" cols="4" class="form-control" id="message" placeholder="What's on your mind?"></textarea><br>
	              	</div>
	              </div>

	              <div class="form-group">
	              	<div class="col-md-offset-1 col-md-6">
	             			<input class="btn btn-default merci-btn" type="submit" value="Send email"/>
	             		</div>
	             	</div>

              </form> 
              <?php 
              }  
          else                /* send the submitted data */ 
              { 
              $name=$_REQUEST['name']; 
              $email=$_REQUEST['email']; 
              $message=$_REQUEST['message']; 
              if (($name=="")||($email=="")||($message=="")) 
                  { 
                  echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
                  } 
              else{         
                  $from="From: $name<$email>\r\nReturn-path: $email"; 
                  $subject="Message sent using your contact form"; 
                  mail("paulin@gourmand-macaron.ca", $subject, $message, $from); 
                  echo "Email sent!"; 
                  } 
              }   
          ?>

        </div>
        <!-- <img id='box-macarons' src='assets/box-macarons.jpg' class='col-md-6 img-responsive' /> -->
        <img id='box-macarons' src='assets/macarons/decores/tower.jpg' class='col-md-6 img-responsive' />
      </div>
        
      <div class='row'>
        <div class='hori-rule-2'>
        </div>
      </div>

      <div class='row'>
        <section class='social-icons'>
          <div class='facebook col-xs-4'>
            <a href='http://www.facebook.com/GourmandMacaron'><i class="fa fa-facebook-square"></i></a>
          </div>
          <div class='twitter col-xs-4'>
            <a href='https://twitter.com/GourmandMacaron'><i class="fa fa-twitter-square"></i></a>
          </div>
          <div class='instagram col-xs-4'>
            <a href='http://www.instagram.com/gourmandmacaron'><i class="fa fa-instagram"></i></a>
          </div>
        </section>
        <div class='hori-rule'>
        </div>
      </div>

      <footer class='col-xs-12 copyright'>
        <section class='slogan'>
          <img id='brush-logo-footer' src='assets/brush-slogan.png' />
        </section><br>
        <p>Gourmand Macaron <span id='thisyear'></span><br> <a href='http://www.aliyazdani.ca'>Web Design in Vancouver</a> by <a href='http://www.aliyazdani.ca'>Ali Yazdani</a></p>
      </footer>

      <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <h4 style='text-align:center;'>We're delicious, spread the word!</h4><br>
            <span class='st_facebook_large' displayText='Facebook'></span>
            <span class='st_twitter_large' displayText='Tweet'></span>
            <span class='st_pinterest_large' displayText='Pinterest'></span>
            <span class='st_googleplus_large' displayText='Google +'></span>
            <span class='st_sharethis_large' displayText='ShareThis'></span>
          </div>
        </div>
      </div>

    </div>

    <div class='top-head-border'></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        var date = new Date;
        var year = date.getFullYear()
        document.getElementById('thisyear').innerHTML = year;
      })
    </script>
  </body>
</html>