
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" href="fontAwesome/css/all.css" />
    <title>pypproprojects</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/script.js"></script>
</head>
<body>
  
  <div class="circle"></div> 
  <section>
    <header>
     <a href="index.php" class="logo" style="text-decoration: none;"><img src="images/logoto.png" alt="logo-image" class="logo-image"><span>PYP PRO GREEN <span style="color: rgb(18, 167, 167);">PROJECTS</span></span></a>
        <label id="menu-bar"  onclick="openNav()"><i class="fas fa-bars"></i></label>
        <div id="mySidenav" class="sidenav">
          <a  class="closebtn" onclick="closeNav()"><span>&times;close<span></a> 
          <ul>
              <li id="" class="active"><a href="index.php">Home</a></li>
              <li id="about.php" ><a href="">About</a></li>
              <li><a href="contact-us.php">Contact us</a></li>
              <li><a class="apply" href="application.php">Apply now</a></li>
          </ul>
        </div>
    </header>  
    <div id="header-text" class="row" >
                <div id="textBox" class="col-lg-12 col-md-12">
                  <div class="text-container">
                    <div class="slideshow-container">
                      <div class="mySlides">
                        <h2>Green Energy.<br> <p style="color:rgb(255, 230, 9) ; font-size: 20px;">Play Your Part</p></h2>
                        
                      </div>
	  
								<div class="dots" >
								  <span class="dot"></span>
								  <span class="dot"></span>
								  <span class="dot"></span>
								</div> 
							</div>
	  
	
							<div class="apply-cont"><a class="apply" href="application.php">Apply now</a></div>
	
							<div class="call-us">
							  <a class="call" href="tel:078 352 1065"><p><i id="phone" class="fas fa-phone"></i> </p></a>
							  <a class="whatsapp" href=""><p><i id="whatsapp" class="fa-brands fa-whatsapp"></i> </p></a>
							  <a class="facebook" href="" style="text-decoration: none;"><p><i id="facebook" class="fa-brands fa-facebook"></i> </p></a>
							  <a class="twitter" href="" style="text-decoration: none;"><p><i id="facebook" class="fa-brands fa-twitter"></i> </p></a>
							</div>
						</div>
                </div>        
        </div>
  </section>

    <div class="container">
	    <div id="home-tiles" class="row">

			<h2>contact us</h2>
		<div class="layer3">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="form-container">
				<form method="post" action="#">
				<!-- <?php include('errors.php'); ?> -->
				<div class="input-cnt">
				<i id="name" class="fas fa-user"></i>
				<input type="text" placeholder="name"  name="name" >
				</div>


					<div class="input-cnt">
						<i id="email" class="fas fa-envelope"></i>
						<input type="text" placeholder="email" name="email" >
						</div>

				<div class="input-cnt">
					<i id="message" class="fas fa-message"></i>
					<textarea placeholder="your message here..." name="message"></textarea>
					</div>
				<div class="input-cnt">
					<input type="submit" />
				</div>
				
				</form>
				</div>

				</div>

				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
					<div class="description">
					<div class="pic1"><img src="images/contact us hrere.jpg" alt="solar-panel" class="solar-panel">
					
					</div>
					
					</div>
				</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a id="map" href="Here is 1 place:Mohlala St - https://goo.gl/maps/AvtEFomU5sw5pUKx5" target="_blank">
					  <div id="map-tile">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.2140505281263!2d28.39267457471063!3d-26.287160067356336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9523f7efa6d987%3A0xbad0ede9fa272819!2sMohlala%20St%2C%20Kwa-Thema%2C%20Springs!5e0!3m2!1sen!2sza!4v1684007094522!5m2!1sen!2sza" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					  </div>
					</a>
				  </div>
        </div>
    </div>

	<!-- FOOOTER -->
	<footer class="panel-footer">
		<div class="container">
		  <div class="row">
			<section id="hours" class="col-sm-4">
			  <span>Hours:</span><br>
			  Sun-Thurs: 11:15am - 10:00pm<br>
			  Fri: 11:15am - 2:30pm<br>
			  Saturday Closed
			  <hr class="visible-xs">
			</section>
			<section id="address" class="col-sm-4">
			  <span>Address:</span><br>
			  41 mohlala st <br>
			  Kwa-Thema, Springs.<br>
			  1575
			  <p>* The map above is a pin pointed location of our office.</p>
			  <hr class="visible-xs">
			</section>
			<section id="testimonials" class="col-sm-4">
				<p><i id="phone" class=""></i> CONTACTS</p>
				<p>EMAIL: msizaeiragmail.com</p>
				<p>EMAIL: jogiramaje@gmail.com</p>
				<p>CALL: 078 352 1065</p>
				<p>CALL: 062 008 9567</p>
				<p>""</p>
			  </section>
		  </div>
		  <div class="text-center">&copy; PYP PRO GREEN PROJECTS pty Ltd 2023</div>
		</div>
	  </footer>
	
	  <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
	  <script src="popper/popper.min.js" type="text/javascript"></script>
	  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	  <script src="js/bootstrap.bundle.js" ></script> 
	  <script src="js/landingPageImageSlider.js"></script>


</body>
</html>