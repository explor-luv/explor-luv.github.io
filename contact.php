<!DOCTYPE html>
<html>
<title>Contact</title>
<link rel"icon" href"logo.png" </link>
<link rel='shortcut icon' type='image/x-icon' href="logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<style>


body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 0.7;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('contact.jpg');
    min-height: 100%;
}



.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%);
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
.indent{
	text-indent: 10px;
}
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
  <li><a href="Website.html" class="w3-padding-large w3-hover-purple" style= "color:black;">Home</a></li>
<li><a href="Schedule.html"  class="w3-padding-large w3-hover-purple" style= "color:black;">Schedule</a></li>

		<li><a href="closingShows.html" class="w3-padding-large w3-hover-purple" style="color:black;">Closing Shows</a></li>

		<li><a href="Quiz.html"class="w3-padding-large w3-hover-purple" style="color:black;">Quiz</a></li>
		<li><a href="BBDC.html" class="w3-padding-large w3-hover-purple" style= "color:black;">DC</a></li>
		<li><a href="synopsis.html" class="w3-padding-large w3-hover-purple" style= "color:black;">Synopsis</a></li>
		<li class="w3-hide-small w3-right">
      <a href="contact.php" style= "color:black;" class="w3-padding-large w3-hover-purple">Contact Me</a>
    </li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">CONTACT <span class="w3-hide-small">ME</span>
  </div>
</div>

    <!-- Hide this text on small devices -->

  </div>
</div>






<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-closebtn w3-hover-red w3-text-white w3-xxxlarge w3-container w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" style="max-width:100%">
  </div>
</div>


<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center" style= "color:black;">CONTACT ME</h3>
    <div data-role="main" class="ui-content">
  <div class="w3-row w3-padding-32 w3-section">

      <!-- Add Google Maps -->
	  <div class="ui-grid-a">
      <div class="ui-block-a">
      <span><text name="text" cols="50" rows="50" style= "color:black;" >
I'm Lauren Divney, a student at a Girls Who Code program in the US. Broadway and Computer Science are two things I love, so I decided to combine them and make this website! I am obsessed with Hamilton, I know almost every word to the soundtrack, but it is not my favorite show. This was a very hard decision but out of all the Broadway shows I have seen, Wicked would have to be my favorite. It was the first show I ever saw and it changed my life. I believe that these shows have made me become a better person and that is how this website got its name because every show teaches me something new and it guides me through life, like a lighthouse, or a like beacon.
</text></span>
</div>
        <div class="ui-block-b">
        <span><h6  style= "color:black;" class="indent">Have any questions, comments, or concerns? Email me!</h6>
		<i class="fa fa-envelope w3-hover-text-black, indent"  style= "color:black;" style="width:25px"> </i> Email: broadwaybeacon@gmail.com<br>
		<i class="fa fa-linkedin w3-hover-text-black, indent" style= "color:black;" style="width:25px" > </i> Lauren Divney<br></span>
      <div class="w3-row-padding">
        <div class="w3-half">



		<form method="post" action="#" id="form" name="form">
          <input class="w3-input w3-border w3-hover-light-grey" name= "vname" type="text" placeholder="Name">

          <input class="w3-input w3-border w3-hover-light-grey" name="vemail" type="text" placeholder="Email">

      <textarea <input class="w3-input w3-border w3-hover-light-grey" name="msg" type="text" rows="5" cols="25" placeholder="Comment"></textarea>
    <input id="send" name= "submit" type="submit" value="Submit" class="w3-btn w3-section w3-right">
    </div>
  </div>
</div>

</form>


<h3><?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("broadwaybeacon@gmail.com", $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your input";
}
}
}
?></h3>
</div>




</body>
</html>
