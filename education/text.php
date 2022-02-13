<!DOCTYPE html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ieducation-Transforming Online Education</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">   
</head>
<body>
    
    <nav class="navbar background h-class-resp">
       
        <div class="logo"><img src="logo.jpg" alt="logo"></div>
        
        <ul class="navlist v-class-resp">
            
            <li><a href="#Home">Home</a></li>
            <li><a href="http://localhost/education/about/about.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="rightnav v-class-resp" >
            
            
        </div> 
        
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    </nav>
    <section class="background firstsection" id="Home">
        <div class="box-main">
            <div class="firsthalf">
                <p class="text-big">Learn coading for free with us</p>
                <div id="line"> </div>
            
                <p class="heading"><br>CODE SMASHERS</p>
                <div class="button">
                   
                   <!-- <button class="btn1" id="apply" ><a href="file:///C:/Users/radhika%20rakesh%20patil/Desktop/css/ieducation/form/form.html" target="_blank">Apply now</a></button> -->
                   
                </div>
            </div>
            
        </div>
    </section>
    <section class="about">
    <section class="section-right" id="About">
        <div class="para">
        <p class="sectionTag text-big1">The End Of Your Search Is Here</p><br>
        <p class="section-subtag text-small">Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, morals, beliefs, habits, and personal development. Educational methods include teaching, training, storytelling, discussion and directed research. Education frequently takes place under the guidance of educators; however, learners can also educate themselves. Education can take place in formal or informal settings, and any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational.</p>
        </div>
        <div class="thumbnail">
            <img src="laptop1.jpg" alt="laptop">
        </div>
    </section>
    <section class="sectionleft">
        <div class="thumbnail">
            <img src="laptop3.jpg" alt="laptop">
        </div>
        
        <div class="para">
        <p class="sectionTag text-big1">Transforming Education In India</p><br>
        <p class="section-subtag text-small">We have yet to encounter a teacher whose aims for their students stop at the classroom wall. At the end of each lesson, each unit, each school year, teachers hope their students carry with them an arsenal of new knowledge and skills that will help them better understand and impact the world in which they live. They hope that studying the water cycle will help students care for the environment, that studying government will help them take part in civic life, that studying fractions will help them double a recipe when the time comes. In short, they want students to transfer their learning to the real world.  </p>
        
        </div>
        
    </section>
    <section class="section-right">
        <div class="para">
        <p class="sectionTag text-big1">Lets Grow Together</p><br>
        <p class="section-subtag text-small">There are movements for education reforms, such as for improving quality and efficiency of education towards relevance in students' lives and efficient problem solving in modern or future society at large, or for evidence-based education methodologies. A right to education has been recognized by some governments and the United Nations. Global initiatives aim at achieving the Sustainable Development Goal 4, which promotes quality education for all.  <p>
        </div>
        <div class="thumbnail">
            <img src="laptop2.webp" alt="laptop">
        </div>
    </section>
    </section>
    <section class="contact" id="contact">
        
        <h2>Contact Us</h2>
        
        <div class="form" >
            <form action="" method="POST" onsubmit="return validateForm()">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name"   required>
            <input class="form-input" type="number" name="phone" id="phone" placeholder="Enter your phone"  required minlength="10">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter your email"   required>
            <textarea class="form-input" name="text" id="text" rows="10" cols="30" placeholder="Ellaborate your concern" ></textarea>
            <div id="btn">
            <button class="btn btn-sm btn-dark" name="submit">Submit</button></div>
            </form>
        </div>
    </section>
    <footer>
        <p class="text-footer">
            copyright &copy; 2027 codesmashers.com. All copyright reserved
        </p>
    </footer>
    
    
    <script src="resp.js"></script>
    
</body>  
<?php
include "backend.php";
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $text=$_POST['text'];

  $insertquery="INSERT INTO `contact`( `name`, `phone`, `email`, `concern`) VALUES ('$name','$phone','$email','$text')";

  $res=mysqli_query($conn,$insertquery);
  if($res){

    
    echo("data inserted successfully");
    
      
  }
  else{
    
    
      echo("data not inserted");
    
    
  }
  }

?>