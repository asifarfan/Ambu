<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <title>AmbuCare</title>
</head>
<body>
    <div class="header">
        <div class="container1">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"> <img src="AmbuCare.png"></a>
                </div>

              <nav>
                 <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="training.html">Training</a></li>
                    <li><a href="plans.html">Subscriptions</a></li>
                </ul>
             </nav>
                 <a href="#"><button type="button">BOOK NOW</button></a>
                 <?php
                  session_start();
                  if($_SESSION['loggedin']){
                    $name = $_SESSION['username'];
                    echo "<a href='index.php'><button style='background-color:transparent;color:red;'>$name</button></a>";
                  }
                  else {
                    echo " <a href='signup.php'><button class='log'>LOGIN</button></a>";
                  }
                 ?>
         </div>
      </div>
    </div>
    <section class="section1">
        <div class="half1">
           <h1>Meet AmbuCare</h1>
           <br>
           <h2>For Emergency Medical Services</h2>
           <br>
           <p>Help / Rescues the Patient in case of the Emergency situation by doing just a click.
            <br>
             AmbuCare Ambulance comes right in front of the door for help.</p>
             <br>
             <br>
           <input type="button" value="BOOK NOW">
           <br>
           <br>
           <h5 class="or">or</h5>
           <br>
           <h3 class="cal">Call our assistance</h3>
           <br>
           <a href="#"><button class="call"><i class="fa-solid fa-phone"></i>+88 01999999999</button></a>
        </div>
        <img class="plus" src="plus-bg.108ed305c4dd9c2e.svg" alt="">
        <div class="half2">
           
          <img src="ambulance.png" alt="IMAGE">
        </div>
    </section>
    <img class="heart" src="heart-beat-icon.b9c15e1804910efc.svg" alt="">
    <div class="box">
        <h1 class="medical">Our Other medical Services</h1>
        <br>
        <p class="services">We at AmbuCare provide our clients with a one-stop solution for all healthcare needs. We deliver an exclusive
            <br> helpline number for ambulances and other healthcare services, ensuring 100% helpline number.
            <br> call answer assurance, 24*7, Bangladesh, under the same One can also find services 
            <br> like Teleconsultation, E- Pharmacy,  Diagnostics, Home health care,
            <br> Elderly Care, mental wellness, etc.</p>
            <br>
    </div>

        <h2 class="why">Why Choose Us?</h2>
        <img class="dotted" src="dotted-lines.ff33a592f91583cc.svg" alt="">
     <div class="choose">
        <img class="policy" src="f-policy.svg" class="policy">
        <h4>Patient first policy</h4>
     </div>
     <div class="Emergency">
        <img class="policy" src="15mins.svg" class="policy">
        <h4>Emergency Assistance <br> time
     </div>
     <div class="hours">
        <img class="policy" src="24hrs.svg" class="policy">
        <h4>24/7 Support</h4>
     </div>
     <div class="ambu">
        <img class="policy" src="ambulance.svg" class="policy">
        <h4>Biggest fleet of ambulances
        <br>
        <br>
    </div>
    <br>
    <section class="exp">
        <h2 class="core-service">Core Services</h2>
        <br>
           <p class="core">We have various Plans for customers and dedicated Helpline number 24x7.
           </p>
         <br>
        <div id="full" class="part1 experience">
          <h2 class="mid">Hospital</h2>
          <br>
          <p class="ex">We manage the end-to-end operations of the
             ambulance fleet of the hospital.
          </p>
        </div>
        <div id="web" class="part1 experience">
          <h2 class="mid"> Corporate</h2>
          <br>
          <p class="ex">AmbuCare is working with different 
            corporate and providing ambulance for them
        </div>
    </section>
    <section class="exp">
        <div id="full" class="part1 experience">
          <h2 class="mid">Individuals</h2>
          <br>
          <p class="ex">Anyone can book ambulance through website and mobile app.
          </p>
        </div>
        <div id="web" class="part1 experience">
          <h2 class="mid">Government</h2>
          <br>
          <p class="ex">AmbuCare is working with the Government on a 
            Public Private Partnership and PSU.
        </div>
    </section>
     <section class="top-banner">
                 <a href="plans.html"><button type="button">Subscriptions</button></a>
                 <br>
                 <br>
                 <a href="about.html"><button class="log">KNOW MORE</button></a>
                 <br>
                 <br>
                <br>
    </section>

   <br>
   <br>
    <button class="go-top-btn">
        <img src="arrow-up.png" alt="arrow up">
      </button>

     <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>AmbuCare</h4>
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Our Teams</a></li>
                        <li><a href="plans.html">Plans</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Individuals</a></li>
                        <li><a href="#">Hospital</a></li>
                        <li><a href="#">Government</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Trainings</h4>
                    <ul>
                        <li><a href="training.html">Driver Training</a></li>
                        <li><a href="training.html">Paramedical Training</a></li>
                        <li><a href="training.html">Nurse Training</a></li>
                        <li><a href="training.html">Communications Training</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-link">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p class="copy">
            Copyright © AmbuCare || All rights reserved.
        </p>
     </div>

 <script src="script.js"></script>   
</body>
</html> 