<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artificial Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link src="https://kit.fontawesome.com/c47c53326f.js" crossorigin="anonymous"></link>
    <script src="javascript/script.js"></script>
</head>

<body>
    <section id="menu">
        <div id="logo">Artificial Company</div>
        <nav>
            <a href="#home"><i class="fa-solid fa-house icon"></i>Home</a>
            <a href="#about"><i class="fa-solid fa-info icon"></i>About</a>
            <a href="#education"><i class="fa-solid fa-school icon"></i>Education</a>
            <a href="#team"><i class="fa-solid fa-users icon"></i>Team</a>
            <a href="#contact"><i class="fa-solid fa-address-book icon"></i>Contact</a>
        </nav>
    </section>

    <section id="home-banner">
        <div id="black"></div>
        <div id="content">
            <h2>Welcome to Artificial Company</h2>
            <h2>We are a team of professionals</h2>
            <hr width="300" align="left">
            <p>Welcome to Artificial Company, where innovation meets expertise. Our dedicated team of professionals is committed to delivering cutting-edge solutions in artificial intelligence and technology. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tristique dolor, in facilisis justo consectetur eget.</p>
        </div>
    </section>

    <section id="about">
        <h3>About Us</h3>
        <div class="flex-container">
            <div id="left">
                <h5 id="h5left">Our Mission</h5>
                <p id="left_p">At Artificial Company, our mission is to revolutionize the tech industry by creating intelligent solutions that solve complex problems. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed eu urna sed elit vulputate fermentum. Duis eu justo eu mauris fringilla dignissim.</p>
            </div>
            <div id="right">
                
                <p id="p_right"><span id="span-head">O</span>ur team is passionate about pushing the boundaries of innovation. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel justo id purus luctus dignissim. Fusce id ligula nec dui blandit euismod ac eu nisl. Duis ullamcorper mauris vel ultrices tincidunt.</p>
            </div>
            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pend">Innovative thinking, coupled with a client-centric approach, sets us apart. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Iusto ipsa nesciunt deserunt aperiam atque, consectetur eos tenetur placeat, vitae ipsam repudiandae nihil cumque eligendi! Modi, vitae adipisci? Ipsa, deserunt sequi.</p>
        </div>
    </section>

    <section id="education">
        <div class="product-category">
            <h3>Education</h3>
            <button class="pre-btn"><img src="img/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>
            <div class="card_container" id="containerCard">
                <div class="card">
                <button class="browse-btn">Check it out</button>         
                    <img class="img-fluid" src="img/r2.jpg" alt="">
                    <h5 class="h5head">Data Science Masterclass</h5>
  <div class="scroll-txt">
  <p class="p-card">Unlock the power of data with our comprehensive data science masterclass. Dive into data analysis and machine learning.</p>
  </div>
  
</div>

                </div>
            </div>
        </div>
    </section>

    <section id="team">
        <div class="container">
            <h3 id="team-h3">Meet Our Team</h3>
            <div class="row">
                <div class="column-team">
                    <img src="img/ekip1.jpg" alt="" class="img-fluid rounded">
                    <h4 class="team-name">John Doe</h4>
                    <p class="team-p">Lead Developer</p>
                    <span class="team-icon">
                        <a href="#"><i class="fab fa-facebook social"></i></a>
                        <a href="#"><i class="fab fa-linkedin social"></i></a>
                        <a href="#"><i class="fas fa-envelope social"></i></a>
                    </span>
                </div>
                <div class="column-team">
                    <img src="img/ekip2.jpg" alt="" class="img-fluid rounded">
                    <h4 class="team-name">Jane Smith</h4>
                    <p class="team-p">UX/UI Designer</p>
                    <span class="team-icon">
                        <a href="#"><i class="fab fa-facebook social"></i></a>
                        <a href="#"><i class="fab fa-linkedin social"></i></a>
                        <a href="#"><i class="fas fa-envelope social"></i></a>
                    </span>
                </div>
                <div class="column-team">
                    <img src="img/ekip3.jpg" alt="" class="img-fluid rounded">
                    <h4 class="team-name">Alex Johnson</h4>
                    <p class="team-p">Data Scientist</p>
                    <span class="team-icon">
                        <a href="#"><i class="fab fa-facebook social"></i></a>
                        <a href="#"><i class="fab fa-linkedin social"></i></a>
                        <a href="#"><i class="fas fa-envelope social"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <h3 id="h3-contact">Contact Us</h3>

            
            <form action="index.php" method="post">
            <div id="contact-op">
                <div id="form-group">
                    <div id="left-form">
                        <input type="text" class="form-style" placeholder="Name Surname" name="name" required id="input-text">
                        <input type="text" class="form-style" name="phone" placeholder="Phone Number" required id="input-text">
                    </div>
                    <div id="right-form">
                        <input type="text" class="form-style" name="email" placeholder="Email" required id="input-text">
                        <input type="text" class="form-style" name="subject" placeholder="Subject" required  id="input-text">
                    </div>
                    <textarea name="message" placeholder="Type a message" class="form-control" id="input-text"  required></textarea>
                    <input type="submit" name="button" value="Send" id="submitbutton">
                </div>
                <div id="adress">
                    <h4 id="adressh">Adress:</h4>
                    <p class="adressp"></p>
                    <p class="adressp">Random Street</p>
                    <p class="adressp">Manathan, New York, United States</p>
                    <p class="adressp">+90 531 7878547</p>
                    <p class="adressp">E-mail: vsincar@gmail.com</p>
                    <div id="soc-accs">
                    <a href="#"><i class="fab fa-facebook social"></i></a>
                    <a href="#"><i class="fab fa-linkedin social"></i></a>
                    <a href="#"><i class="fas fa-envelope social"></i></a>
                </div>
                </div>

            </div>
            
            </form>
            <footer>
                <div id="copyright">All rights reserved. 2023</div>
                
                <a href="#menu" id="up-footer"><i class="fa-solid fa-circle-up"></i></a>
            </footer>


        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("link.php");
    
    if(isset($_POST["name"],$_POST["phone"],$_POST["email"],$_POST["subject"],$_POST["message"])){
      $name_surname=$_POST["name"];
      $phonenumber=$_POST["phone"];
      $email=$_POST["email"];
      $subject=$_POST["subject"];
      $message=$_POST["message"];
    
    
    
      $addsend="INSERT INTO contact(name, phone, email, subject, message) VALUES ('".$name_surname."','".$phonenumber."','".$email."','".$subject."','".$message."')";
    
      if($link->query($addsend)===TRUE)
      {
      echo"<script>alert('Your message has been sent successfully')</script>";
      }
      else{
        echo"<script>alert('There was an error sending your message')</script>";
      }
    }    
?>