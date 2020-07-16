<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!-----Goggle fonts lato-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

    <!-----bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 

    <!----AOS library-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--font awsome kit link--->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
    <title>Project Calmify</title>
  </head>
  <body>
    <header data-aos="fade-right" >
        <nav data-aos="zoom-out">
            <div class="calm"><a href="index.html"><img src="images/Frame 2572.png" alt=""></a></div>
            <div class="hamburger">
              <div class="line"></div>
              <div class="line"></div>
              <div class="line"></div>
            </div>
            <ul class="nav-links">
              <li class="mobile"><a href="https://www.facebook.com/"><i class="fab fa-facebook-square" ></i></a></li>
              <li class="mobile"><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
              <li class="mobile"><a href="https://twitter.com/"><i class="	fab fa-twitter"></i></a></li>
              <li class="mobile"><a href="https://dribbble.com/"><i class="fab fa-dribbble"></i></a></li>
            </ul>
          </nav>
          <div></div>
          <div class="headercontent">
            <div class="content1">
              <h1>Controlling Your Anger with Music is Our Goal</h1>
            <p class="lorem0">Our anger management app records your voice in 2 decibel states (Resting and aggravated ) and plays a tune to help you calm down.</p>
           <img class="phone1" src="images/Group 48.png" alt="">
            <p class="lorem1">Coming Soon! Get Notified when we launch</p>
            <?php
            if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
              unset ($_SESSION['message']);
            }
            ?>
            <form action="emailsubmit.php" method="post">
          
              <input class="email" type="email" name="email" Placeholder="Your email address"></br></br>
              <input class="submit" type="submit" value="NOTIFY ME">
           </form>

           <p id="demo"></p>
           <script>
            var countDownDate = new Date("July 19, 2020 15:37:25").getTime();
            var x = setInterval(function() {
              var now = new Date().getTime();
              var distance = countDownDate - now;
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);
            </script>
            </div>
            <div class="content2">
              <img class="phone2" src="images/Group 48.png" alt="">
            </div>
            <img class="bg" src="images/Rectangle 11.png" alt="">
          </div>
    </header>

    <!----section 1-->
    <section   class="firstsec">
      <div class="firstsecin">
        <div data-aos="flip-right" class="box">
          <div class="prebrain"><i class="fas fa-atom"></i></div>
          <p class="bold">Fully Secured</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis enim id viverra eget.</p>
        </div>
        <div data-aos="flip-left" class="box">
          <div class="prebrain"><i class="fas fa-brain"></i></div>
          <p class="bold">Retina Friendy</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis enim id viverra eget.</p>
        </div>
        <div data-aos="flip-left" class="box">
          <div class="prebrain"><i class="fas fa-balance-scale-left"></i></div>
          <p class="bold">Small size</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisis enim id viverra eget.</p>
        </div>
      </div>
    </section>

    <!----section 2-->
    <section class="secondsec">
      <div class="secondsecin">
        <div  data-aos="fade-up-right" class="twinimg">
          <img src="images/Group 48.png" alt="">
          <img class="scale" src="images/Group 48.png" alt="">
        </div>
        <div  data-aos="fade-up-left" class="twincontent">
          <h3>How does this App Work ?</h3>
          <h4>How it works</h4>
            <div class="features">
              <p class="feat">Create Your Account</p>
              <div class="featstats"><i class="fa fa-laptop" ></i>Using your gmail or facebook account ,signing  up
                is pretty much hassle free </div>

            <p class="feat">Record Your voice </p>
          <div class="featstats"><i class="fa fa-microphone"></i></i>Make recordings of your voice in its calm state and its aggravated state. The intensity is measured in decibels</div>

            <p class="feat">MUSIC</p>
          <div class="featstats"><i class="fa fa-bars"></i>Pre-installed calming tunes or a playlist of your own choosing would be played if your voice is in its aggravated state for a predetermined amount of time </div>
            </div>
        </div>
        <div data-aos="fade-down-right" class="twinimg1">
          <img class="phonny" src="images/Group 48.png" alt="">
          <img class="scale1" src="images/Group 48.png" alt="">
        </div>
      </div>
      <img class="vector3" src="images/Vector 3.png" alt="">
      <img class="vector4" src="images/Vector 4.png" alt="">
    </section>
    

    <!----section 3-->
    <section class="thirdsec">
      <h1>Advanced Features</h1>
      <div class="thirdsecin">
        <div  data-aos="flip-left" class="box1">
          <i id="atom" class="fas fa-atom"></i>
          <p class="bold">Ease of Access</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit id nam enim in. Nam mi nec.</p>
        </div>
        <div data-aos="flip-right" class="box">
          <img src="images/Vector.png" alt="">
          <p class="bold">Personalization</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit id nam enim in. Nam mi nec.</p>
        </div>
        <div data-aos="flip-left" class="box">
          <img src="images/Vector.png" alt="">
          <p class="bold">Chat</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit id nam enim in. Nam mi nec.</p>
        </div>
      </div>
  
      <div class="thirdsecin">
        <div data-aos="flip-right" class="box">
          <img src="images/Vector.png" alt="">
          <p class="bold">Time and Language</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit id nam enim in. Nam mi nec.</p>
        </div>
        <div data-aos="flip-left" class="box">
          <img src="images/Vector.png" alt="">
          <p class="bold">Update and security</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit id nam enim in. Nam mi nec.</p>
        </div>
        <div data-aos="flip-right" class="box">
          <img src="images/Vector.png" alt="">
          <p class="bold">Free Account</p>
          <p class="lorem2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit id nam enim in. Nam mi nec.</p>
        </div>
      </div>

      <div class="phones">
        <h1>Gallery</h1>
        <div data-aos="zoom-out-down" class="phonesin">
          <img   src="images/Group 48.png" alt="">
          <img   src="images/Group 48.png" alt="">
          <img  class="gallery" src="images/Group 48.png" alt="">
          <img   src="images/Group 48.png" alt="">
          <img   src="images/Group 48.png" alt="">
          <img  class="mobile1" src="images/Group 48.png" alt="">
        </div>
      </div>

      <div data-aos="fade-up" class="comingsoon">
        <h1>Coming Soon! Get Notified when we launch</h1>
        <?php
            if (isset($_SESSION['message'])) {
              echo $_SESSION['message'];
              unset ($_SESSION['message']);
            }
            ?>
        <form action="emailsubmit.php" method="post">
          
          <input class="nemail" type="email" name="email" Placeholder="Your email address"></br></br>
          <input class="nsubmit" type="submit" value="NOTIFY ME">
       </form>
      </div>
      <button class="topbutton" onclick="topFunction()"  id="myBtn" title="Go to top on every page"> <i class="fa fa-arrow-up"></i> </button>
      <script src="button.js"></script>
    </section>

    <!-----footer-->
    <footer data-aos="flip-up">
      <div  class="footer">
        <div><a href="index.html"><img src="images/Frame 2572.png" alt=""></a></div>
        <li ><a href="https://www.facebook.com/"><i class="fab fa-facebook-square" ></i></a></li>
        <li ><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
        <li ><a href="https://twitter.com/"><i class="	fab fa-twitter"></i></a></li>
        <li ><a href="https://dribbble.com/"><i class="fab fa-dribbble"></i></a></li>
      </div>
    </footer>

    
    <script>
      AOS.init();
    </script>
      <script src="app.js"></script>
  </body>
</html>
