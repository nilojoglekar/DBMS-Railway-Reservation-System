<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
@import url(s1.css);
	li {
		font-family: sans-serif;
		font-size:15px;
	}
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>

<div class="wrapper">
		
		<nav>
			<div class="menu-icon">
        		<i class="fas fa-bars"></i>
        	</div>
		
			<div class="navbar">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="pnrstatus.php">PNR Status</a></li>
					<li><a href="booktkt.php">Book a Ticket</a></li>
					<li><a href="trainschedule.php">Schedule</a></li>
					<li><a href="contact.php">Contact us </a></li>
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
</body>
</html>