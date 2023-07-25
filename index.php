<?php
session_start();
if (!isset($_SESSION['username'])) {
  echo " you are logout";
  header('Location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'links/style.php' ?>
  <?php include 'links/links.php' ?>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-static-top custom-navbar" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="registration.php">My App</a>
      </div>

      <div class="collapse navbar-collapse">

        <ul class="nav navbar-nav">
          <li class="contact-btn"><a href="">Home</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="contact-btn"><a href="#">Portfolio</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="contact-btn"><a href="#">About</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="contact-btn"> <a href="#">Contact_us</a></li>
        </ul>  
        <ul class="nav navbar-nav">
          <li class="contact-btn"><a href="logout.php">logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  



  <div class="container-fluid bg-primary px-0 custom-container">
    <div class="col-lg-3  col-md-6 col-12 pt-4 text-center  ms-4 px-4 pb-4 col-gy-4 ">
      <img src="images/sushil.jpeg" alt="" class="img-fluid  border rounded-circle" style=" width: 300px; height: 300px;">
      <h1 class="text-primary text-capitalize">
        <span class="text-decoration-underline" style="background-color: darkblue;"> Name: Mr.Sushil Ashok Jawale</span>
      </h1>
      <span style="background-color:darkblue;"><a href="#">jawalesushil70@gmail.com</a></span><br>

      <i class="fas fa-envelope fa-beat-fade" style="color:darkblue;"></i>&nbsp; &nbsp;
      <a href="https://www.linkedin.com/in/sushil-jawale">
        <i class="fab fa-linkedin fa-beat-fade" style="color:darkblue;"></i>
      </a>&nbsp; &nbsp;
      <a href="https://github.com/Sushiljawale"><i class="fab fa-github" style="color:black;"></i>
      </a> &nbsp; &nbsp;
      <a href="https://twitter.com/SushilJawale3">
        <i class="fab fa-twitter-square fa-beat" style="color:darkblue;"></i>
      </a> <br><br><br>

      
<div class="text-uppercase text-danger text-lg">
      <B>Technologies:</B>
      <p class="text-warning text-md">
        Java , Angular, SpringBoot <br> PHP , MySQL , Bootsrap <br> CSS , HTML , Javascript
        <br> Ajax , C++ 
      </p>
      </div>

    </div>


 <!-- internship -->
    <div class="col-lg-3  col-md-6 col-12 ms-4 px-4  col-gy-4 ">
      <h1 class="fst-bold "> hi.. <?php echo $_SESSION['username'];  ?></h1>
      <h2>
        <p class="text-warning text-capitalize">Wel come to my application and thank you for login</p> <br> <br>
        <strong>
          <p style="color: black;">INTERNSHIP : </p>
        </strong>
        <span class="text-italic text-center" style="background-color:darkslategrey"> Go Digital Technology Consulting LLP-Mumbai
          {Angular/SpringBoot/MySQL}
          @Intern Java Full Stack Developer
          6th, March 2023 to 5th,May 2023.</span> <br><br>


        <strong>
          <p style="color: black;">INTERNSHIP : </p>
        </strong>
        <span class="text-italic" style="background-color:darkslategrey"> UNIVERSITY NETWORK INFORMATION CENTER (UNIC) <br>
          Dr. Babasaheb Ambedkar Marathwada University Aurangabad.<br>
          <b> • LIVE PROJECT:-"Centralized store management system" </b> <br>
          this "CSMS"project we made Inventory for managing all the
          stock records of Dr.BAM University <br>
          <b>• Roll : </b> ( As a Full Stack Developer ) <br>
          <b> • Used Technology: </b> Php, html,css,MySQL,
          Javascript,Ajax, Bootsrap server; xampp,wamp <br>
          May-2022 to Oct-2022.
        </span>
    </div> <br><br><br>

<!-- middle page resume about -->
    <div class="col-lg-3 col-md-6 col-12 pt-4   ms-4 px-4  col-gy-4 ">
      <div class=" text-capitalize">
        <br>
        <p class="text-capitalize text-break"> As a Full Stack Developer with experience in Java, Angular, SpringBoot, and PHP,
          I am passionate about leveraging technology to create innovative and impactful solutions.
          With a focus on clean, efficient code and a user-centric approach, I have successfully delivered projects for
          clients across a variety of industries.
          My expertise lies in building responsive, scalable, and dynamic applications that deliver an exceptional user experience.
          From designing intuitive interfaces to integrating complex backend systems, <br>
          I am committed to delivering high-quality software that meets the needs of both clients and end-users.
          In addition to my technical skills, I am a dedicated team player who thrives in collaborative environments. I am able to communicate effectively.
        </p>
      </div>
    </div>

<!-- right side -->
    <div class="col-lg-3 col-12 col-md-12 pt-4 pb-4 float-end ">
      <div class="card w-100">
       <b> <p class="text-warning ">Hobbies</p> </b>
        <img src="images/Sport01.jpeg" style="width: 250px; height:300px;" alt="" class="card-img-top " />
        <p class="text-primary text-center">Exersice & Sport</p>
        <p class="text-secondary text-start d-inline-block text-truncate">
          Engaging in hobbies, exercising regularly, and participating in sports can significantly contribute to
          personal growth and enhance one's overall personality by fostering discipline, building resilience, and promoting self-confidence.
        </p>

        <img src="images/hacker2.jpg" alt="" class="card-img-top" />
        <div class="card-body">
          <p class="text-primary">Learn New Technologies</p>
          <p class="text-secondary text-start text-truncate">
            Passionate about continuously expanding knowledge and skills in emerging technologies to enhance
            personal growth and contribute to professional success. </p>
          <input type="button" class="btn btn-info" value="Read more" name="" />
        </div>
      </div>
    </div>

    <!-- table -->
    <div class="col-12 py-4 pb-0">
      <div class="table-responsive">
        <table class="table table-striped table-dark table-hover 
                  table-border border-danger">
          <thead>
            <tr>
              <th>Sr.No.</th>
              <th>Class</th>
              <th>College</th>
              <th>University</th>
              <th>Percentage (%)</th>
              <th>Month/Year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>M.Sc(CS)</td>
              <td>Department of Computer Science & IT</td>
              <td>DR.Babasaheb Ambedkar Marathawada University Aurangabad</td>
              <td>79.50%</td>
              <td>Sep/2022</td>
            </tr>
            <tr>
              <td>2</td>
              <td>B.Sc(CS)</td>
              <td>New Model Degree College Hingoli</td>
              <td>Swami.Ramanand Teerth Marathawada University Nanded.</td>
              <td>72%</td>
              <td>Oct/2020</td>
            </tr>

            <tr>
              <td>3</td>
              <td>H.S.C</td>
              <td>Sant Gajanan Maharaj Junior College Sawad</td>
              <td>State Board of Maharashtra Pune.</td>
              <td>55.38%</td>
              <td>May/2016</td>
            </tr>

            <tr>
              <td>4</td>
              <td>S.S.C</td>
              <td>Late.Meeratai High School Sawad</td>
              <td>State Board of Maharashtra Pune.</td>
              <td>77.20%</td>
              <td>June/2014</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>



  <!-- Small modal -->
  <div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4>Log Out <i class="fa fa-lock"></i></h4>
        </div>
        <div class="modal-body">
          <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
          <div class="actionsBtns">
            <form action="/logout" method="post">
              <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}" />
              <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Logout" />
              <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sticky-lg-bottom">
    <?php include 'footer.php';  ?>
  </div>
</body>

</html>