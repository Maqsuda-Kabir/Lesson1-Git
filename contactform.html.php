<!DOCTYPE html>
<!--
File Name:contactform.html.php
Date: 03/17/20
Programmer: Maqsuda Kabir
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <img src="images/triathlonlogo.jpg" width="125" height="95" alt="Triathlon Logo" id="logo">
    <nav class="mobile-nav">
        <div class="menu-btn" id="menu-btn">
            <div></div>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="responsive-menu">
            <ul style="list-style-type:none">
                <li><a href="events.html.php">Events</a></li>
                <li><a href="participants.html.php">Participants</a></li>
                <li><a href="registrationform.html.php">Registration</a></li>
                <li><a href="contactform.html.php">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/template.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Include Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>



    <script type="text/javascript">
        jQuery(function($) {
            $('.menu-btn').click(function() {
                $('.responsive-menu').toggleClass('expand')
            })
        })
    </script>
</head>

<body>
  <header>
  <div class="plate">
  <p class="script"><span>  </span></p>
  <p class="shadow text1">Ace In The Hole</p>
  <p class="shadow text1">Multisport Events</p>
  <p class="script"><span>  </span></p>
</div>
 </header>        
        
    <main>
        <h2>Contact Form</h2>
            <form class="contact-form" action="contactform.html.php" method="post"> 
            <input type="text" name="name" placeholder="First name">
            <input type="text" name="name" placeholder="Last name">
            <input type="text" name="mail" placeholder="Email">
            
        <form method="post" action="http://webdevbasics.net/scripts/demo.php">      
            <h3>Participants</h3>
            
            <select name="participants">
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
            </select>
            <br> 
        
            <textarea name="mycomments" rows="4" cols="19" placeholder="Comments"></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
        </form>
        
  <?php if (isset($_POST["submit"])) { $name=$_POST["name"]; $name=$_POST["name"]; $subject=$_POST["subject"]; $name=$_POST[ "participants"]; $mailFrom=$_POST["mail"]; $comment=$_POST["comments"]; $mailTo="maqsuda.kabir@pcc.edu" ; $headers="From: " .$mailFrom; $txt="You have received an e-mail from " .$name. ".\n\n".$comments; mail($mailTo, $subject, $txt, $headers); header( "Location: index.php?mailsend"); } ?>
        
  
        <!--Google Map with a Marker-->
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=123%20NW%20Everett%2C%20Portland%2COR%2097205&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/">tefinkom & co s.a</a></div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 600px;
                }
                
                .gmap_canvas {
                    overflow: hidden;
                    background: none!important;  
                    height: 500px;
                    width: 600px;
                }
            </style>
        </div>

        <p>Location &amp; Hours</p>
        <p>123 NW Everett, Portland,OR 97205</p>
        <p>Open Saturday& Sunday: 7am-4pm</p>
        <p><a href="tele:503-555-5555">Call 503-555-5555</a></p>


        <?php include 'footer.inc.html.php';?>

    </main>

</body>

</html>