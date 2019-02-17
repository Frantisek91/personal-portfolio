<?php

$msg = "";
$msgClass = "";

if(filter_has_var(INPUT_POST, "submit")){
    //GET FORM DATA
    $name =  htmlspecialchars($_POST["name"]);
    $email =  htmlspecialchars($_POST["email"]);
    $message =  htmlspecialchars($_POST["message"]);

    if(!empty($name) && !empty($name) && !empty($message)) {
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
            $msg = "Please use a valid email";
            $msgClass = "alert-danger";
        } else {
            $toEmail = "Frantisek.Demi@gmail.com";
            $subject = "Message from" .$name; 
            $body = "<h2>Message</h2>
                     <h4>Name</h4> <p>".$name."</p>
                     <h4>Email</h4> <p>".$email."</p>
                     <h4>Message</h4> <p>".$message."</p>";
            $headers = "MIME-Version 1.0" ."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                $msg = "Your email was sent";
                $msgClass = "alert-success";
            } else {
                $msg = "Your email was not sent";
                $msgClass = "alert-danger";
            }
        }
    }else {
        //FAILED
        $msg = "Please fill in all fields";
        $msgClass = "alert-danger";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/index.css" />
  <title>Personal Portfolio</title>
</head>
<body>

        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark ">
            <a class="navbar-brand" href="#">
                    <img src="img/Logo.png" width="50" height="50" alt="">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#skills">SKILLS <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#portfolio">PORTFOLIO <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#about">ABOUT ME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#contact">CONTACT ME <span class="sr-only">(current)</span></a>
                
                </div>
            </div>
        </nav>

    <div class="intro-page">
        <div class="overlay">
            <div class=intro>
                <h1> Cheers, I am Frantisek</h1>
                <h2> and this is my personal portfolio page.</h2> 
            </div> 
        
        </div>
    </div>

    <section class=text-bg> 
        <div class="container"> 
            <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus excepturi provident ad est, distinctio repellendus qui unde sapiente eaque eum numquam adipisci labore laudantium non mollitia.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore quaerat dignissimos, sint, ab totam architecto numquam veritatis quae quibusdam voluptas voluptates cum fuga reprehenderit inventore. Repellat fugiat aliquid vel. Voluptatum laborum iste quis accusamus consectetur culpa velit aperiam perferendis optio, commodi numquam harum laudantium debitis, qui ab veniam dolores sunt?</p>
            </div>
    </section>

    <section class="services-bg">
        <div class="container"> 
            <div class="services">
                <div class="list" data-aos="zoom-in">
                    <h3>Discover</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, deleniti.</p>          
                </div>
                <div class="list" data-aos="zoom-in">
                    <h3>Design</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, repellat?</p>
                </div>
                <div class="list" data-aos="zoom-in">
                    <h3>Deploy</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, fuga.</p>
                </div>
                <div class="list" data-aos="zoom-in">
                    <h3>Be Ready</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, qui?</p>
                </div>              
            </div>
        </div>
    </section>

    <section class="skills-bg">
        <div class="container"> 
            <h2 id="skills">SKILLS</h2>

            <div class="skills">
                <p>HTML</p>
                <div class="progress">
                    <div class = "htmlbar">
                        <p>80%</p>
                    </div>
                </div>
            </div>

            <div class="skills">
                <p>CSS</p>
                <div class="progress">
                    <div class = "cssbar">
                        <p>70%</p>
                    </div>
                </div>
            </div>
            
            <div class="skills">
                <p>JavaScript</p>
                <div class="progress">
                    <div class = "jsbar">
                        <p>50%</p>
                    </div>
                </div>
            </div>

            <div class="skills">
                <p>Paint</p>
                <div class="progress">
                    <div class = "paintbar">
                        <p>90%</p>
                    </div> <!-- HOW TO ADD MARGIN -->
                </div>
            </div>
        </div>    
    </section>

    <section class="portfolio-bg">
        <div class="container">
            <div class="portfolio">
                <h2 id="portfolio">MY PORTFOLIO</h2>
                <div class= "d-flex flex-column flex-md-row flex-wrap justify-content-around">
                    <div class="card mb-3 col-12 col-md-5 col-lg-3 mx-2" data-aos="zoom-in">
                        <div class="card-header text-center">
                        Project 1 
                        </div>
                        <img src="img/pic1.jpg" class="card-img-top" alt="Project1">
                        <div class="card-body">
                        <p class="card-text"> 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptatem accusantium, magni natus suscipit maiores! 
                        </p>
                        </div>
                    </div>

                    <div class="card mb-3 col-12 col-md-5 col-lg-3 mx-2" data-aos="zoom-in">
                        <div class="card-header text-center">
                            Project 2 
                        </div>
                        <img src="img/pic2.jpg" class="card-img-top" alt="Project2">
                        <div class="card-body">
                            <p class="card-text"> 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptatem accusantium, magni natus suscipit maiores! 
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3 col-12 col-md-5 col-lg-3 mx-2" data-aos="zoom-in">
                        <div class="card-header text-center">
                            Project 3
                        </div>
                        <img src="img/pic2.jpg" class="card-img-top" alt="Project3">
                        <div class="card-body">
                            <p class="card-text"> 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptatem accusantium, magni natus suscipit maiores! 
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3 col-12 col-md-5 col-lg-3 mx-2" data-aos="zoom-in">
                        <div class="card-header text-center">
                            Project 4
                        </div>
                        <img src="img/pic1.jpg" class="card-img-top" alt="Project4">
                        <div class="card-body">
                            <p class="card-text"> 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptatem accusantium, magni natus suscipit maiores! 
                            </p>
                        </div>
                    </div>   
                    
                    <div class="card mb-3 col-12 col-md-5 col-lg-3 mx-2" data-aos="zoom-in">
                        <div class="card-header text-center">
                            Project 5
                        </div>
                        <img src="img/pic2.jpg" class="card-img-top" alt="Project5">
                        <div class="card-body">
                            <p class="card-text"> 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptatem accusantium, magni natus suscipit maiores! 
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3 col-12 col-md-5 col-lg-3 mx-2" data-aos="zoom-in">
                        <div class="card-header text-center">
                            Project 6
                        </div>
                        <img src="img/pic1.jpg" class="card-img-top" alt="Project6">
                        <div class="card-body">
                            <p class="card-text"> 
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi voluptatem accusantium, magni natus suscipit maiores! 
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <section class="about-me-bg">
        <div class="container">
            <h2 id="about">About me</h2>  
            <div class="about-me">                       
                <img src="img/lama.jpg" alt="picture">           
                <div class="field">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, obcaecati vitae fuga laudantium molestias maxime incidunt placeat ad mollitia! Provident veritatis illum animi minus tempore corrupti tenetur alias dolorum laudantium!</p> 
                    <button type="button" a href="Contact">Contact Me!</button>   
                </div> 
            </div>

           
        </div>   
    </section>

    <section class="find-me-bg">
        <div class="container">
            <div class="find">
                <h3>FIND ME HERE</h3>
                    <div class="icons">
                        <i class="fab fa-github"></i>
                        <i class="fab fa-linkedin"></i> 
                        <i class="fab fa-facebook"></i>            
                    </div>
        </div>
        </div>
    </section>   

    <section class="form-bg">
        <div class="container">
            <h2 id="contact">Contact me</h2>
            <?php if($msg != "") :?>
                <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ;?></div>
            <?php endif ; ?>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <input class="form" type="text" name="name" placeholder="Enter your name.." value="<?php echo isset($_POST["name"]) ? $name : ""; ?>"> 
                <input class="form" type="text" name="email" placeholder="Enter your e-mail.." value="<?php echo isset($_POST["email"]) ? $email : ""; ?>">                 
                <textarea class="message" name="message" rows="5" placeholder="Write your message here.."> <?php echo isset($_POST["message"]) ? $message : ""; ?></textarea>
                <button class="button" type="submit" name="submit" >Send me message</button>  
            </form>            
        </div>
    </section>
   

                            
  <script 
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  ></script>
  <script 
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
  >
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
  
  </script>
</body>
</html>