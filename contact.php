<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ThemesNerd">
    <meta name="author" content="ThemesNerd">
    <title>Pole Star</title>
    <link rel="icon" href="img/fabicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-face.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style-3.css" rel="stylesheet">
    <link href="css/contact-2.css" rel="stylesheet">
    <link rel="stylesheet" href="css/colors/default.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <!-- Modernizr -->
    <script src="js/modernizr.custom.12691.js"></script>
</head>

<body>
    <h1 class="sr-only">PoleStar*</h1>
    <!-- nav-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- navbar-toggle btn -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /navbar-toggle btn -->
                <!-- navbar btn search -->
                
                <!-- /navbar btn search -->
                <!-- logo -->
                <a class="navbar-brand" href="index.html">
                    <div class="brand-logo"><img alt="themesnerd" src="img/logo.png">
                    </div>
                </a>
                <!-- /logo -->
            </div>



            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="main-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Product<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="chair.html">Chair</a>
                            </li>
                            <li><a href="table.html">Table</a>
                            </li>
                            <li><a href="gym.html">Outdoor Gym</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Work Station <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="design.html">Design</a></li>
                         
                            <li><a href="project.html">Accomplished</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="client.html">Client</a>
                    </li>

                    <li>
                        <a href="contact.php" >Contact </a>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <div class="container">
            <div class="form-wrap collapse">
                <form id="form-search" role="search" action="search.php" method="post">
                    <div class="form-group">
                        <input id="form-search-input" type="text" class="form-control" name="search-input" value="type to search" onfocus="this.value='';">
                        <button type="submit"><i class="fa fa-search"></i>
                        </button>
                        <button type="reset" data-toggle="collapse" data-target=".form-wrap"><i class="fa fa-close"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- /nav-->
    <!-- Header Section -->
    <header class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="header-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header Section -->
    <!-- Contact Form Section -->
    <section id="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h2 class="section-heading">Send Your Feedback</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" action="contact.php" method="post">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Aman Sing" />
                            <label>Your Email Address</label>
                            <input name="email" type="text" class="form-control" placeholder="aman@gmail.com" />
                            <label>Your Message</label>
                            <textarea name="message" class="" placeholder="your message"></textarea>
                            <button type="submit" class="btn btn-outline" name="SEND">Submit</button>
                        </div>
                        <?php
if(isset($_POST['SEND'])){
    $name=$_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to ='aman76079@gmail.com';
     $from = "amansingh13vit@gmail.com"; 

    $subject = 'Form Submission';
     $headers = "From: $from";
         

    $message ="Email from Eagan Business solution"."\n"."Name:".$name."\n"."Email:".$email."\n"."Message".$message;

      $ok = mail($to, $subject, $message, $headers); 

 if ($ok) { 
        echo "<p><center>Thank You ! We acknowledged your message. We'll get in touch soon.</center></p>"; 
    } else { 
        echo "<p><b>mail could not be sent!</b></p>"; 
    } 
    
}

?>
                    </form>
                </div>

                <div class="col-md-6 visible-md visible-lg">
                    <img class="img-responsive text-center" src="img/promo-product-6.jpg" alt="themesnerd">
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Form Section -->
    <!-- Offices Section -->
    <section id="location">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-heading">Visit Our Office</h2>
                </div>
            </div>
             <div class="col-md-6 col-sm-12 no-padding">
                    <div class="map-area">
                        <div>
                            <p  style="text-align: center; color: red"><b>Head Office location</b></p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62212.02582639319!2d77.54795869590411!3d12.955744809177803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d8ad4ebfa9b%3A0x335e104221044cf2!2sPole+Star+Office+Furniture!5e0!3m2!1sen!2sin!4v1515606296761" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

           

                <div class="col-md-6 col-sm-12 no-padding">
                    <div class="map-area">
                        <div>
                            <p  style="text-align: center; color: red"><b>Branch Office location</b></p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62212.02582639319!2d77.54795869590411!3d12.955744809177803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d8ad4ebfa9b%3A0x335e104221044cf2!2sPole+Star+Office+Furniture!5e0!3m2!1sen!2sin!4v1515606296761" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- /Offices Section -->
    <!-- CTA -->
    <section id="location">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- /CTA -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer-links">
                    <h4 class="link-title">Contact Us</h4>
                    <ul>
                        <li>
                            <h6>Head Office</h6>
                        </li>
                        <li>
                            <p># 1029, 1st Main, 4th Block, Rajajinaga
                                <br> Opp. Suguna Hospital.</p>
                        </li>
                        <li>
                            <p>TDr Rajkumar Road Bangalore-560010</p>
                        </li>
                        <li><a href="mailto:example@email.com?Subject=Your%20message" target="_top">info@polestarfurniture.in</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 footer-links">
                    <h4 class="link-title">Contact us</h4>
                    <div class="col-xs-6 no-padding">
                        <ul>
                        <li>
                            <h6>Branch office</h6>
                        </li>
                        <li>
                            <p>132A Bridge Road Richmond VIC
                                <br> Australia.</p>
                        </li>
                        <li>
                            <p>Talk to us on 1300 132</p>
                        </li>
                        <li><a href="mailto:example@email.com?Subject=Your%20message" target="_top">info@interior.com</a>
                        </li>
                    </ul>
                    </div>
                   
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 col-sm-12 footer-links">
                    <h4 class="link-title">Let's Stay in Touch!</h4>
                    <p>Suscribe to know about our latest news, products and special offers just for suscribers.</p>
                    <p>We never send spam. You can unsubscribe at anytime.</p>
                    <form id="newsletter-signup" action="#" method="post">
                        <input class="form-control" type="text" id="email" name="subscribe-input" required="" maxlength="50" placeholder="email address">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
                <div class="clearfix"></div>
                <div class="credit">
                    <div class="col-xs-12 text-center visible-sm-block visible-xs-block">
                        <ul class="list-inline social-buttons">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="credit-text">© Copyright - INTERIOR 2016. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center hidden-sm hidden-xs">
                        <ul class="list-inline social-buttons">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <p class="brand-credit">Design & Developed by <a href="http://www.appaddindia.com/"><b>Appaddindia</b></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/map.js"></script>
</body>

</html>