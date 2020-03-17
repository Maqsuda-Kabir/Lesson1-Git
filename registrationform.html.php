<!DOCTYPE html>
<!--
File Name:registrationform.html.php
Date: 03/17/20
Programmer: Maqsuda Kabir
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
        <h2>Registration Form</h2>
        
        <form class="registration-form" action="registrationform.html.php" method="post">
            
            <input type="text" name="name" placeholder="First name">
            <input type="text" name="name" placeholder="Last name">
            <input type="text" name="age" placeholder="Age">
            <input type="tel" name="phone" placeholder="Phone">
            <input type="text" name="mail" placeholder="Email">
            <input type="tel" name="emergencyphone" placeholder="Emergency Phone">
            <input type="text" name="contact" placeholder="Emergency Contact">
            
           <form method="post" action="http://webdevbasics.net/scripts/demo.php">     
            
               <h3>Gender</h3>
             
                <select name="gender"> 
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="nonbinary">Non-binary</option>
                </select>
               
                <form method="post" action="http://webdevbasics.net/scripts/demo.php">   
                
                <h3>Events</h3>
                
                    <select name="events">
                         <option value="eventsaturday">Event Saturday</option>
                         <option>Long Course Triathlon 7:00AM</option>
                         <option>Half Marathon 7:15AM</option>
                         <option>10K 7:15AM</option>
                         <option>Olympic Triathlon 7:30AM</option>
                           
                    </select>       
                    <select name="events">
                        <option value="eventsunday">Event Sunday</option>
                        <option> Sprint Triathlon 8:00AM</option>
                         <option>Try-a-Tri 8:20AM</option>
                         <option>Splash n Dash 12:00PM</option>
                            
                    </select> 
                    <textarea name="myAccommodation" rows="5" cols="19" placeholder="Accommodation"></textarea>
                    
                <form method="post" action="http://webdevbasics.net/scripts/demo.php">    
                    
                    <h3>Participants</h3>
                  
                    <select name="participants">
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                    <br>
                   
                    <textarea name="mycomments" rows="5" cols="19" placeholder="Comments"></textarea>
                    <button type="submit" name="submit">Submit</button>
                </form>
               </form>
            </form>
        </form>
        
    <?php if (isset($_POST["submit"])) {$name=$_POST["name"]; $name=$_POST["contact"]; $name=$_POST["gender"]; $name=$_POST[ "events"]; $name=$_POST["accommodation"]; $name=$_POST["participants"]; $subject=$_POST["subject"]; $comment=$_POST[ "comments"]; $mailTo="maqsuda.kabir@pcc.edu" ; $headers="From: " .$mailFrom; $txt="You have received an e-mail from " .$name. ".\n\n".$comments; mail($mailTo, $subject, $txt, $headers); header( "Location: index.php?mailsend"); } ?>

    <?php include 'footer.inc.html.php';?>
            
          
    </main>
    
</body>

</html>