<?php
include("connection.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Stuckongo</title>
  <meta name="description" content="StuckOnGo is a tech start-up company aimed towards creating a digital bridge between freelancers' products & services and clients.
          Our goals are to provide a new standard of engagement between freelance workers and clients and aslo create new jobs targeted at the youths.  " />
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4551e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">StuckOnGo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">OPERATIONS</a></li>
        <li><a href="#pricing">FREELANCERS</a></li>
        <li><a href="#contact">CONTACT US</a></li>
        <li><a href="index2.php">REGISTER</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>StuckOnGo</h1> 
  <p>Endless Possibilities</p> 
  <form method='post'>
    <div class="input-group">
      <input type="email" name='subscribe' class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger" name='post'>Subscribe</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About StuckOnGo</h2><br>
      <h4>StuckOnGo is a tech start-up company aimed towards creating a digital bridge between freelancers' products & services and clients.
          Our goals are to provide a new standard of engagement between freelance workers and clients and aslo create new jobs targeted at the youths.
      </h4><br>
      <p>Freelancing is a contract-based profession where instead of being recruited in an organisation, the person uses his skills and experience to provide services to a number of clients.
        In simple terms, freelancing is when you use your skills, education, and experience to work with multiple clients and take on various assignments without committing to a single employer.
        The number of assignments or tasks that you can take just boils down to your ability to deliver on them as asked from them.
        Freelancing usually involves jobs (called gigs) that allow you to work-from-home situations. But don’t associate freelancing as the same as having a work-from-home job.</p>
        <br><a href='index.php#contact'><button class="btn btn-default btn-lg">Get in Touch</button></a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong>Our mission at StuckOnGo is to create a stress free experience for our customers while also providing them with freelancers with fresh innovations.
    Transparency is at the center of our operations at StuckOnGo as we recommend freelancers based on performance ratings giving you the best hardworkers we have. </h4><br>
      <p><strong>VISION:</strong> Our vision at StuckOnGo is to create jobs and alleviate people from poverty. According to the National Bureau Of Statistics Nigeria’s unemployment rate as at 2020 stands at 27.1% while the percentage of people living in poverty is at a staggering 40.1%. 
        At StuckOnGo we tend to create jobs for the people affected by the economic downturn through freelancing.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>A1 PROFESSIONALS</h4>
      <p>We provide the best professionals in all fields listed</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-time logo-small"></span>
      <h4>SAVE TIME</h4>
      <p>We save you time by providing freelancers once you request</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-check logo-small"></span>
      <h4>JOB DONE</h4>
      <p>We always make sure the job is done through effective customer service</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-random logo-small"></span>
      <h4>CONNECT</h4>
      <p>We connect freelancers with clients as soon as we can</p>
    </div>
    <div class="col-sm-4">
        <span class="glyphicon glyphicon-phone logo-small"></span>
      <h4>QUICK RESPONSE</h4>
      <p>We respond to a registration or request in 5 minutes</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Our freelancers are hardworkers always providing efficiency</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Operations</h2><br>
  <h4>How We Work</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="MEDIA/image0.png" alt="Paris" width="400" height="300">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="MEDIA/image2.png" alt="New York" width="400" height="300">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="MEDIA/image1.png" alt="San Francisco" width="400" height="300">
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <?php 
      $select = mysqli_query($db,"SELECT * FROM review ORDER BY RAND() ");
      $select2 = mysqli_query($db,"SELECT * FROM review ORDER BY RAND() ");
      $select3 = mysqli_query($db,"SELECT * FROM review ORDER BY RAND() ");
      while($row=mysqli_fetch_array($select)){
          $name=$row['name'];
          $review=$row['review'];
      while($row=mysqli_fetch_array($select2)){
          $name2=$row['name'];
          $review2=$row['review'];
      while($row=mysqli_fetch_array($select3)){
          $name3=$row['name'];
          $review3=$row['review'];
          
           
      }
      }
      }
      echo"<div class='carousel-inner' role='listbox'>
      <div class='item active'>
        <h4>$review<br><span>-$name</span></h4>
      </div>
      <div class='item'>
        <h4>$review2<br><span>-$name2</span></h4>
      </div>
      <div class='item''>
        <h4>$review3<br><span>-$name3</span></h4>
      </div>
    </div>";
      ?>
      
      
   

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Freelancers</h2>
    <h4>Freelancers We Have Under Us </h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Tech</h1>
        </div>
        <div class="panel-body">
          <p><strong>Graphic Designers</strong></p>
          <p><strong>Web Developers</strong></p>
          <p><strong>Ethical Hackers</strong></p>
          <p><strong>Virtual Assistants</strong></p>
          <p><strong>Copywriters</strong></p>
          <p><strong>Customer Support</strong></p>
          <p><strong>Branding Services</strong></p>
          <p><strong>Data Scientist</strong></p>
          <p><strong>IT Managers</strong></p>
        </div>
        <div class="panel-footer">

            <a href='index.php#contact'><button class="btn btn-lg">Request</button></a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Creatives</h1>
        </div>
        <div class="panel-body">
          <p><strong>Producers</strong></p>
          <p><strong>Directors</strong></p>
          <p><strong>Content Creators</strong></p>
          <p><strong>Social Media Influencers</strong></p>
          <p><strong>Make Up Artists</strong></p>
          <p><strong>Photographers</strong></p>
          <p><strong>Event Planners</strong></p>
          <p><strong>Interior Designers</strong></p>
          <p><strong>Models</strong></p>

        </div>
        <div class="panel-footer">
            <a href='index.php#contact'><button class="btn btn-lg">Request</button></a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Handymen</h1>
        </div>
        <div class="panel-body">
          <p><strong>Drivers</strong></p>
          <p><strong>Cleaners</strong></p>
          <p><strong>Barbers</strong></p>
          <p><strong>Tutors</strong></p>
          <p><strong>Bakers</strong></p>
          <p><strong>Chefs</strong></p>
          <p><strong>Phone Repairers</strong></p>
          <p><strong>Dog Breeders</strong></p>
          <p><strong>Gardeners</strong></p>
        </div>
        <div class="panel-footer">
            <a href='index.php#contact'><button class="btn btn-lg">Request</button></a>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT US</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you as soon as possible.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Lagos, Nigeria</p>
      <p><span class="glyphicon glyphicon-phone"></span> +234 8155666739</p>
        <a href="mailto:work@stuckongo.com"><p><span class="glyphicon glyphicon-envelope"></span> work@stuckongo.ng</p></a>
<font size='6px'><a href="https://m.facebook.com/profile.php?id=100807742089733&ref=content_filter"><i class="fa fa-facebook"></i></a></font>
    <font size='6px'><a href="https://www.instagram.com/wearestuckongo/"><i class="fa fa-instagram"></i></a></font>
    <font size='6px'><a href="https://mobile.twitter.com/wearestuckongo"><i class="fa fa-twitter"></i></a></font>



    </div>
     <script>
            function validate(){
                
            var name=document.getElementById("name").value;
            var email=document.getElementById("email").value;
            var comments=document.getElementById("comments").value;
            var phone=document.getElementById("phone").value;
            var location=document.getElementById("location").value;

            if(name=="" || name==" "){
                alert("Please fill your name");
                return false;
            }
            else if(email=="" || email==" "){
                alert("Please fill the email section");
                return false;
            }
            else if(comments=="" || comments==" "){
                alert("Please write something");
                return false;
            }
            else if(phone=="" || phone==" "){
                alert("Please enter your Phone number");
                return false;
            }
            else if(location=="" || location==" "){
                alert("Please enter your Location");
                return false;
            }
            
            else{
                return true;
            }

            }
            </script>
    
    <div class="col-sm-7 slideanim">
    <form method='post' onsubmit="return validate()">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
    <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="Phone no" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="location" name="location" placeholder="Location" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="How can we help you?" rows="5"></textarea><br>
      <input type="hidden" value="<?php echo date('Y-m-d h:i:s');?>" name="date">
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit" name='submit'>Send</button>
        </div>
      </div>
    </div>
    </form>


<!-- Image of location/map -->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Website Made By <a href="wale@stuckongo.ng" title="wale@stuckongo.ng">Wale Arojojoye</a></p>

   

<font size='6px'><a href="https://m.facebook.com/profile.php?id=100807742089733&ref=content_filter"><i class="fa fa-facebook"></i></a></font>
    <font size='6px'><a href="https://www.instagram.com/wearestuckongo/"><i class="fa fa-instagram"></i></a></font>
    <font size='6px'><a href="https://mobile.twitter.com/wearestuckongo"><i class="fa fa-twitter"></i></a></font>




</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
<?php
if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$date=mysqli_real_escape_string($db,$_POST['date']);
$comments=mysqli_real_escape_string($db,$_POST['comments']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$location=mysqli_real_escape_string($db,$_POST['location']);
/*$select=mysqli_query($db,"SELECT * FROM service");

if(mysqli_num_rows($select)==1){
    echo"<script>alert('Email/Password Exists')</script>"; 
}
else{*/
$insert=mysqli_query($db,"INSERT INTO contact (name,email,comments,date,phone,location) VALUES ('$name','$email','$comments','$date','$phone','$location')") or die (mysqli_error($db));
    
    
$from="wale@stuckongo.ng";
$from2=$email;
$to=$email;
$too="adebowalearojojoye@yahoo.com";
$too2="wale@stuckongo.ng";
$subject="stuckongo.ng";
$message="Hello,\r \n Welcome to StuckOnGo, \r \n We know rendering services is hard especially when you don’t have a lot options, but we make it less difficult  
We are a platform firmly focused on providing our customers with the best freelancers Nigeria has to offer. At StuckOnGo we hold our clients at a very high esteem and our clients always come first.  
Please note that your information would not be shared with anyone except the people working on our team,  as we hold our freelancers identities as discreet as possible. 
We hope to have a fantastic working relationship with you and please be sure that you’d receive a call from a member of our team as soon as possible. \r \n  StuckOnGo ";
    
$message2=$comments;
    
$headers="From:".$from;
$headers2="From:".$from2;
    
mail($to,$subject,$message,$headers);
mail($too,$subject,$message,$headers);    
mail($too2,$subject,$message2,$headers2);     

echo"<script>alert('Submission Successful')</script>";



/*}*/
}
?>
    
    
    
<?php
if(isset($_POST['post'])){
$email=mysqli_real_escape_string($db,$_POST['subscribe']);
$select=mysqli_query($db,"SELECT * FROM subscribe WHERE email='$email'");

if(mysqli_num_rows($select)==1){
    echo"<script>alert('You have Subscribed Already')</script>"; 
}
else{
$insert=mysqli_query($db,"INSERT INTO subscribe (email) VALUES ('$email')") or die (mysqli_error($db));
    
$from="wale@stuckongo.ng";

$to=$email;
$too="adebowalearojojoye@yahoo.com";

$subject="stuckongo.ng";
$message="Hello,\r \n Welcome to StuckOnGo, \r \n Thank you for Subscribing ";
    

    
$headers="From:".$from;

    
mail($to,$subject,$message,$headers);
mail($too,$subject,$message,$headers);      
    

echo"<script>alert('Subscription Successful')</script>";



/*}*/
}
}
?>
    
<?php mysqli_close($db); ?>