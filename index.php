<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Welcome To Arpan Portfolio</title>
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="assets/pf.png" type="image/x-icon" />

  <!-- Aos link for animation on scrolling -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Remix icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,700" rel="stylesheet" />

  <!-- For Contact Form -->

  <link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</head>

<body>

  <!-- Preloader -->
  <div id="preloader"></div>

  <script>
    var preloader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      preloader.style.display = "none";
    })
  </script>
  <!-- First Page -->

    
  <div class="main" >
    <!-- Movable Cursor -->
    <div class="movable_point_cursor"></div>
    <div class="bg_video">
      <div id="navbar" data-aos="fade-left" [data-aos-duration='10000' ]>
        <ul>
          <li><a data-text="Home" href="#">Home</a></li>
          <li><a data-text="Internships" href="#internships">Internships</a></li>
          <li><a data-text="Projects" href="#projects">Projects</a></li>
          <li><a data-text="Skills" href="#skills-heading">Skills</a></li>
          <li><a data-text="Contact&nbsp;Me" href="#footer">Contact Me</a></li>
        </ul>
      </div>
      <div id="nav-icon"><i class="ri-menu-line"></i></div>
      <video data-aos="zoom-in-down" [data-aos-duration='10000' ] src="assets/bg_video.mp4" loop autoplay muted></video>
    </div>
  </div>

  <script>
    var navbar = document.querySelector('#navbar ul');
    var nav_icon = document.querySelector(".ri-menu-line");
    var nav_icon2 = document.querySelector("#nav-icon");
    nav_icon2.onclick = () => {
      nav_icon.classList.toggle('ri-menu-line');
      nav_icon2.classList.toggle('ri-close-fill');
      navbar.classList.toggle('open');
    }
  </script>
  <!-- INTERNSHIPS -->
  <div class="container_vertical" id="internships">
    <div class="experience" data-aos="fade-right" [data-aos-duration='6000' ]>
      <h1>INTERNSHIPS</h1>
      <h1>INTERNSHIPS</h1>
    </div>
    <div class="timeline">
      <ul>
        <li class="container_vertical_li" data-aos="fade-right" [data-aos-duration='6000' ]>
          <div class="timeline-content">
            <h4>May 2023 - June 2023</h4>
            <h1>Internship in Metallurgy:-</h1>
            <h2>Summer Intern at IIT Kharagpur</h2>
            <p>
              I worked on a project/research topic entitled “Processing
              microstructure, texture, property correlation of metallic
              materials (Dual Phase Steel)”. In this project I learned about
              Dual Phase Steel (Future of Automobile Industries), How to
              improve its strength and ductility, How to measure Grain Size
              and Volume Fraction using ImageJ Software, Different Generations
              of Advance High Strength Steel, Fracture Mechanism of DP Steel,
              How SEM Image taking place, How Optical Microscope operates.
              <br /><br />
              ● Internship Report:
              <a href="https://www.canva.com/design/DAFjuXSdMk0/SJ10yA-p_Hgtq4D6uZSu2w/edit?utm_content=DAFjuXSdMk0&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank"><b> Report </b></a>
              <br />
              ● Certificate:
              <a href="https://drive.google.com/file/d/1wN_wqun5nHBw8yUyP2K1QsLFAuW_MNWO/view?usp=sharing" target="_blank"><b>Certificate</b></a>
            </p>
          </div>
        </li>

        <li class="container_vertical_li" data-aos="fade-left" [data-aos-duration='6000' ]>
          <div class="timeline-content">
            <h4>May 2022 - Aug 2022</h4>
            <h1>Internship in Computer Science:-</h1>
            <h2>Summer Intern at Nit Durgapur</h2>

            <p>
              Developed a Telemedicine software for underprivileged people for
              Shoshan Surin Foundation Telemedicine Center NGO. Work is going
              on so the webpage will be modified day by day.
              <br /><br />
              ● Page Structure and Style: HTML, CSS
              <br />
              ● Languages: Php, Javascript, SQL
              <br />
              ● Database: MySQL
              <br />
              ● Internship Report:
              <a href="https://drive.google.com/file/d/1NbVmQgQwMlXU7UnzrEVs1tALnvt7j3Rk/view" target="_blank"><b> Report </b></a>
              <br />
              ● Certificate:
              <a href="https://drive.google.com/file/d/1kJGMgGVw8CD90iQ3j1LZCLR4d1rdBEGC/view" target="_blank"><b> Certificate </b></a>
            </p>
          </div>
        </li>

        <li class="container_vertical_li" data-aos="fade-right" [data-aos-duration='6000' ]>
          <div class="timeline-content">
            <h4>May 2022 - June 2022</h4>
            <h1>Internship in Computer Science:-</h1>
            <h2>Web Developer at Decordill Company</h2>

            <p>
              Worked on a WordPress Ecommerce Website. I made some Pages,
              added categories and subcategories also added many products to
              the website.
              <br /><br />
              ● Theme: Woodmart
              <br />
              ● Platform: WordPress
              <br />
              ● Component: Elementor
              <br />
              ● Link -
              <a href="www.decordill.com" target="_blank"><b> Website </b></a>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <!-- PROJECTS / Third Page-->

  <div class="projects" id="projects" data-aos="fade-right" [data-aos-duration='6000' ] >
    <span style="--i: 1">P</span>
    <span style="--i: 2">R</span>
    <span style="--i: 3">O</span>
    <span style="--i: 4">J</span>
    <span style="--i: 5">E</span>
    <span style="--i: 6">C</span>
    <span style="--i: 7">T</span>
    <span style="--i: 8">S</span>
  </div>
  <div class="card_container">
    <div class="card" data-aos="zoom-in" [data-aos-duration='10000' ]>
      <video data-aos="fade-right" [data-aos-duration='10000' ] class="vid" src="assets/project1.mp4" controls muted></video>

      <div class="context">
        <h1>
          <b>Full E-Commerce Site With Paytm Payment Integration</b>
        </h1>

        <h3 class="desc">
          It is an E-commerce website for food delivery with six different
          pages consisting of features like search, order placing, cart
          operations, payment gateway, and dashboard.
        </h3>
        <p>
          <!-- <br> -->
          ● Page Structure and Style: HTML, CSS
          <br />
          ● Languages: JS, PHP
          <br />
          ● Database: MYSQL
          <br />
          ● Payment: PAYTM PAYMENT GATEWAY
          <br />
          ● Link:
          <a href="https://drive.google.com/file/d/1lXuqcCZUF7JMcw97vRY9wzJjmRFUOiO3/view"><b>Project Demonstration</b></a>
        </p>
      </div>
    </div>

    <div class="card" data-aos="zoom-in" [data-aos-duration='10000' ]>
      <video class="vid" src="assets/project2.mp4" controls muted></video>

      <div class="context">
        <h1>
          <b>Multiplayer Snake Game With Winner Certificate</b>
        </h1>

        <h3 class="desc">
          It's a Multiplayer Snake Game. Players can showcase their skills and
          the winner will receive an auto-generated certificate in their mail
          ID.
        </h3>
        <p>

          ● Page Structure and Style: HTML, CSS
          <br />
          ● Language: JS
          <br />
          ● Technology: Text-to-Speech (using Espeak), Google form,
          <span>Certificate designing, Automation of Mail</span>
          <br />
          ● Link:
          <a href="https://drive.google.com/file/d/1YffPpDvrLE9D_VW_Aow9Sl_F4PiXl5K_/view"><b>Project Demonstration</b>
          </a>
        </p>
      </div>
    </div>
  </div>

  <script src="js/card_movement.js"></script>


  <!-- Skills -->

  <div class="skills-heading" id="skills-heading" >

    <div class="txt" id="txt" data-aos="fade-up" [data-aos-duration='6000' ]>
      <b>S</b><b>K</b><b>I</b><b>L</b><b>L</b><b>S</b>
    </div>
  </div>
  <div class="skills" data-aos="fade-left" [data-aos-duration='1000' ] >
    <div style="--v: 1"><img src="./assets/clogo.png"></div>
    <div style="--v: 2"><img src="./assets/c++logo.png"></div>
    <div style="--v: 3"><img src="./assets/html.png"></div>
    <div style="--v: 4"><img src="./assets/css.jpg"></div>
    <div style="--v: 5"><img src="./assets/js.png"></div>
    <div style="--v: 6"><img src="./assets/php.png"></div>
    <div style="--v: 7"><img src="./assets/mysql.png"></div>
    <div style="--v: 8"><img src="./assets/mysql_workbench.png"></div>
    <div style="--v: 9"><img src="./assets/gsap.jpg"></div>
    <div style="--v: 10"><img src="./assets/scrolltrigger.png"></div>
    <div style="--v: 11"><img src="./assets/data-preprocessing.jpg"></div>
  </div>


  <!-- Feedback Form -->
  <div class="feedback-heading" id="feedback" data-aos="fade-right" [data-aos-duration='6000' ] >
    <h2 data-text="Feedback">Feedback</h2>
  </div>
  <div class="contact" ng-app="" data-aos="zoom-in" [data-aos-duration='10000' ] >
    <div class="contact-form">
      <form action="feedback.php" method="POST">
        <label for="firstName">First Name:</label>
        <br>
        <input type="text" placeholder="Please Enter your First Name" name="firstName" ng-model="firstName" required />

        <br>
        <label for="lastName">Last Name:</label>
        <br>
        <input type="text" placeholder="Please Enter your Last Name" name="lastName" ng-model="lastName" required />
        <br>
        <label for="email">Email ID:</label>
        <br>
        <input type="email" placeholder="Please enter your Email ID" name="email" ng-model="email" required />
        <br>
        <label for="place">Country:</label>
        <br>
        <input type="text" placeholder="Please enter your Country" name="place" ng-model="place" required />
        <br>
        <label for="message">Message:</label>
        <br>
        <textarea name="message" ng-model="message" placeholder="Improvent Oppertunity"></textarea>
        <button type="submit" class="submit" name="submit">Submit</button>
      </form>
    </div>

    <div class="writing">
      <div class="paper">
        <div class="lines">
          <div class="Lettertext" spellcheck="false">
            Hello {{ firstName+" "+lastName }},
            <br /><br />
            Your Feedback is -> {{message}}
            <br /><br />
            Thank you so much for this feedback. I will definitely try to resolve it.
            <br /> <br />
            Do you Like my Work? Let's connect through Linkedin.
            <br /> <br />
            You can reach me back on arpan817089@gmail.com also.
            <br /><br />
            Thanks and Regards,
            <br>
            Arpan Chakraborty
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer" id="footer" data-aos="zoom-in" [data-aos-duration='10000' ]>
    <div class="footer-heading" data-aos="flip-left" [data-aos-duration='10000' ] >
      <h1>Arpan<span>Chakraborty</span></h1>
    </div>
    <ul class="social-icon" data-aos="zoom-in" [data-aos-duration='6000' ] >
      <li class="social-icon__item"><a class="social-icon__link" href="tel:7029782276">
          <ion-icon name="call-outline"></ion-icon>
        </a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="mailto: arpan817089@gmail.com">
          <ion-icon name="mail-outline"></ion-icon>
        </a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://github.com/arpan817089">
          <ion-icon name="logo-github"></ion-icon>
        </a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/in/arpan-chakraborty-093a0221b">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

    </ul>
    <p>&copy;2024 Arpan Chakraborty | All Rights Reserved</p>
    <div class="footer-bg">
      <div class="footer-bg1">
      </div>
      <div class="footer-bg2">
      </div>
    </div>
  </div>


  <!-- Ion Icons  Script CDN -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Aos Script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="js/script.js"></script>

</body>

</html>