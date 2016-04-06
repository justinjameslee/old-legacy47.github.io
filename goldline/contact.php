<?php
 
// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LcDnhwTAAAAALCXJ8oQnge0bEV1K3jRQadsD_aM";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
 
?>

<?php
 
if(isset($_POST['action'])) {
 
 
    $email_to = "justinivip@gmail.com,support@goldlineit.com.au";

    
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $phone = $_POST['phone']; // not required
    
    $email_subject = $_POST['subject']; // not required
 
    $message = $_POST['message']; // required
    
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
    
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        echo '<script language="javascript">';
        echo 'alert("Error, please go back and check you have filled in all the required(*) fields.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location = "http://www.goldlineit.com.au/contact.html"';
        echo '</script>';
    }
    
    if (empty($_POST['phone'])) {
        $phone = "No phone number was given.";
    }
    
    if (empty($_POST['subject'])) {
        $email_subject = "No subject was given.";
    }
 
    $email_message = "Goldline IT Contact Form.\n\n";
    
    $email_message .= "Form details below.\n\n";
    
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Phone: ".clean_string($phone)."\n";
    
    $email_message .= "Subject: ".clean_string($email_subject)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n\n";
    
    $email_message .= "From: ".clean_string($email_from)."\n";
    
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    @mail($email_to, $email_subject, $email_message, $headers);  
?>

<!--Page to go to once php has been executed-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Goldline IT</title>
      
    <!--Icon for Goldline-->
    <link rel="shortcut icon" href="images/favicon.ico?v=2" type="image/x-icon">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Custom CSS-->
    <link href="css/custom.css" rel="stylesheet">
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
    <!--Materialize JS-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    <!--Materialize-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Validate-->
    <script type="text/javascript"> 
        $(document).ready(function(){
            
            $('.scrollspy').scrollSpy();
            
            $('#message').trigger('autoresize'); 
            
        });
    </script>
    <style>
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }
        html {
          position: relative;
          min-height: 100%;
        }
        body {
          /* Margin bottom by footer height */
         margin-bottom: 60px;
        }
        .footer-wrapper {
          position: absolute;
          bottom: 0;
          width: 100%;
          /* Set the fixed height of the footer here */
          background-color: #f5f5f5;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html" class="contact"><img alt="Brand" src="images/logo.png" height="60"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html" class="glyphicon glyphicon-home"  style="font-size: 16px; padding-top: 20px"><span class="sr-only">(current)</span></a></li>
            <li><a href="about.html" style="font-size: 16px; padding-top: 20px">About</a></li>
            <li class="active"><a href="contact.html"  style="font-size: 16px; padding-top: 20px">Contact</a></li>
            <li><a href="products.html"  style="font-size: 16px; padding-top: 20px">Products</a></li>
            <li><a href="services.html"  style="font-size: 16px; padding-top: 20px">Services</a></li>
            <li><a href="contact.html"  style="font-size: 16px; padding-top: 20px"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> 03 9816 8377</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <br class="hide-on-small-only">
    <main>
    <div class="container">
    <div class="row">
    <div class="col s12 m12 l12 hide-on-small-only">
        <div class="well well-sm" style="border-bottom: 0px; border-radius: 3px 3px 0px 0px; margin-bottom: 0px;">
        <ul class="nav nav-tabs nav-justified">
          <li role="presentation"><a href="about.html" style="color: black;">About</a></li>
          <li role="presentation"><a href="contact.html" style="color: black;">Contact</a></li>
          <li role="presentation"><a href="products.html" style="color: black;">Products</a></li>
          <li role="presentation"><a href="solutions.html" style="color: black;">Solutions</a></li>
          <li role="presentation"><a href="services.html" style="color: black;">Services</a></li>
        </ul>
        </div>
        <div class="panel panel-default" style="border-top: 0px; border-radius: 0px 0px">
          <div class="panel-heading">
              <div class="media">
                <div class="media-left media-middle">
                    <img class="media-object" src="images/server.png" height="65px">
                </div>
                <div class="media-body">
                  <h2>Thank You!</h2>
                </div>
              </div>
          </div>
          <div class="panel-body flow-text">
              <h1 class="center-align">Thank you for contacting us. We will be in touch with you very soon.</h1>
              <div class="center-align">
              <a href="about.html" style="font-size: 25px; color: #ff9100">Read more about us here!</a>
              </div>
          </div>
        </div>
    </div>   
    </div>
    </div>
    <div class="row">
    <div class="col s12 m12 l12 hide-on-med-and-up">
        <div class="well well-sm" style="border-bottom: 0px; border-radius: 3px 3px 0px 0px; margin-bottom: 0px;">
        <ul class="nav nav-tabs">
          <li role="presentation"><a href="about.html" style="color: black;">About</a></li>
          <li role="presentation"><a href="contact.html" style="color: black;">Contact</a></li>
          <li role="presentation"><a href="products.html" style="color: black;">Products</a></li>
          <li role="presentation"><a href="solutions.html" style="color: black;">Solutions</a></li>
          <li role="presentation"><a href="services.html" style="color: black;">Services</a></li>
        </ul>
        </div>
        <div class="panel panel-default" style="border-top: 0px; border-radius: 0px 0px">
          <div class="panel-heading section scrollspy" id="Contact">
              <div class="media">
                <div class="media-left media-middle">
                    <img class="media-object" src="images/server.png" height="65px">
                </div>
                <div class="media-body">
                  <h2>Thank You!</h2>
                </div>
              </div>
          </div>
          <div class="panel-body flow-text">
              <h3 class="center-align">Thank you for contacting us. We will be in touch with you very soon.</h3>
              <div class="center-align">
              <a href="about.html" style="font-size: 16px; color: #ff9100">Read more about us here!</a>
              </div>
          </div>
        </div>
    </div>
    </div>
    </main>
    <footer class="page-footer grey lighten-3 footer-wrapper">
          <div class="container">
            <div class="row">
                <div class="col s12 m4 l4">
                <a href="index.html"><img src="images/logo.png"></a>
                </div>
                <div class="col s12 m4 l4">
                  <li><a class="black-text text-lighten-3" href="about.html">About Goldline IT</a></li>
                  <li><a class="black-text text-lighten-3" href="contact.html">Contact</a></li>
                  <li><a class="black-text text-lighten-3" href="http://get.teamviewer.com/goldlineit">Remote Support</a></li>
                </div>
                <div class="col s12 m4 l4">
                  <li><a class="black-text text-lighten-3" href="services.html">Our Services</a></li>
                  <li><a class="black-text text-lighten-3" href="products.html">Our Products</a></li>
                  <li><a class="black-text text-lighten-3" href="http://get.teamviewer.com/goldline">Remote Support Install</a></li>
                </div>
            </div>
          </div>
          <div class="footer-copyright grey lighten-2">
            <div class="container black-text">Copyright © 2016 Goldline IT Pty. Ltd. All rights reserved
            </div>
          </div>
        </footer>
    </body>
</html>

<?php
 
}
 
?>