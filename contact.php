<!DOCTYPE html>
<html lang="en">
<head>
<?php 
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <LINK REL="STYLESHEET" HREF="STYLE.CSS">
</head>
<body>

<div class="wrapper">
		<nav>
      
			<div class="menu-icon">
        		<i class="fas fa-bars"></i>
        	</div>
			<div class="logo">
				<h1></h1>
			</div>
			<div class="navbar">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="pnrstatus.php">PNR Status</a></li>
          <li><a href="booktkt.php">Book a Ticket</a></li>
          <li><a href="trainschedule.php">Schedule</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><?php  
				if(isset($_SESSION['user_info'])){
					echo '<div id="dropdown">'.$_SESSION['user_info'].'<div id="Logout" style="display:none">Logout</div>';
        }
				else
					echo '<A HREF="register.php">Login/Register</A>';
				?>
			</li>
                    
				</ul>
			</div>
        </nav>
    <section class="contact">
        <div class="content">
            <h2> Contact Us </h2>
            <p> KTX Railway offers transportation services and Book your train tickets today by choosing from over train routes that runs throughout the Country.</p>
        </div>   
        <div class="container">
           <div class="contactInfo">
              <div class="box">
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="text">
                        <h3>Address</h3>
                        <p>202 Egmore,<br> Chennai,Tamil Nadu,<br>605124</p>
                  </div>
                </div>
                 <div class="box">
                   <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                   <div class="text">
                        <h3>Phone</h3>
                        <p>987-5415-549</p>
                        <p>507-5815-559</p>
                   </div>
                 </div>
                 <div class="box">
                   <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                   <div class="text">
                        <h3>Email</h3>
                        <p>KTXRailway@info.com</p>  
                    </div>
                 </div>
              </div>
              <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                      <input type="text" name="" required="required">
                      <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                      <input type="text" name="" required="required">
                      <span>Email</span>
                    </div>
                    <div class="inputBox">
                      <textarea required="required"></textarea>
                      <span>Type your Message...</span>
                    </div>
                    <div class="inputBox">
                      <input type="submit" name="" value="Send">  
                    </div>
                </form>
              </div>
            </div> 
          </div>
      </section>             
    </body>
</html>