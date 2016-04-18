<?php
 
// grab recaptcha library
//require_once "recaptchalib.php";

// your secret key
//$secret = "6LcDnhwTAAAAALCXJ8oQnge0bEV1K3jRQadsD_aM";
 
// empty response
//$response = null;
 
// check secret key
//$reCaptcha = new ReCaptcha($secret);

// if submitted check response
//if ($_POST["g-recaptcha-response"]) {
   // $response = $reCaptcha->verifyResponse(
   //     $_SERVER["REMOTE_ADDR"],
   //     $_POST["g-recaptcha-response"]
  //  );
//}
 
?>

<?php
 
if(isset($_POST['action'])) {
 
 
    $email_to = "justinlee9850@gmail.com";
 
    $email_from = $_POST['email']; // required
 
    $message = $_POST['message']; // required
    
    $subject = $_POST['subject'];
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
    
    if (empty($_POST['email']) || empty($_POST['message']) || empty($_POST['subject'])) {
        echo '<script language="javascript">';
        echo 'alert("Error, please go back and check you have filled in all the required(*) fields.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location = "http://www.legacy47.tk"';
        echo '</script>';
    }
    
    $email_message = "Legacy47 Contact Form.\n\n";
    
    $email_message .= "Form details below.\n\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    
    $email_message .= "Subject: ".clean_string($subject)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n\n";
    
    $email_message .= "From: ".clean_string($email_from)."\n";
    
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    if (empty($_POST['copy'])) {
        @mail($email_to, $subject, $email_message, $headers); 
    }
    
    else {
       @mail($email_to, $subject, $email_message, $headers);  
       @mail($email_from, $subject, $email_message, $headers); 
    }
     
?>

<!--Page to go to once php has been executed-->
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Legacy47</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/ico" href="images/icon.ico">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="one-half column" style="margin-top: 15%">
        <h1>Hello!</h1>
        <h4>Welcome to Legacy47's Page</h4>
        <p>Hello, I'm Justin Lee, however I prefer being refered to as Legacy47 which is my online handler or FiLeZekk which is my
            <a href="http://steamcommunity.com/id/FiLeZekk">Steam</a> 
            Username. I enjoy programming and gaming and here on this site you can find some already completed progamming projects that include but are not limited to: C#, Python, HTML/CSS, Websites, iOS Applications and some Arduino work.
        <br>
        <a href="http://www.getskeleton.com">Say Hello to my Old Page!</a>
        </p>
      </div>
    </div>
  </div>
</div>
<div class="section info" style="margin-top: 5%">
    <div class="container">
        <div class="row">
            <div class="three columns top-and-bottom">
                <h2 class="info-title">C#</h2>
                <p>You will find below some of my C# Projects that I have worked on as a programmer. Some of these were completed during my early years of programming as such may not be up to my current standard.</p>
                <br>
                <table class="u-full-width">
                <thead>
                    <tr>
                        <th>C# Projects</th>
                        <th>Links</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PONG: ReBirth</td>
                        <td><a href="https://github.com/Legacy47/Pong-ReBirth">My Code!</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="six columns top-and-bottom">
                <h2 class="info-title">HTML/CSS</h2>
                <p>Here are some of my HTML/CSS Projects. Some are currently being hosted either by myself or my client and can be viewed by the public. Some things to note, some of these were created in a collabrative group as such not all credit can be given to myself. For more information vist the site and look for the 'About' page. My works are not limited to personal projects and include legitimate clients who have purchased my services for a rework of their website.</p>
                <br>
                <table class="u-full-width">
                <thead>
                    <tr>
                        <th>HTML/CSS Projects</th>
                        <th>Code</th>
                        <th>Links</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>OneFud</td>
                        <td><a href="https://github.com/OneFud/OneFud.github.io">My Code!</a></td>
                        <td><a href="http://onefud.legacy47.tk">Live Website!</a></td>
                    </tr>
                    <tr>
                        <td>CS:GO Tournament</td>
                        <td><a href="https://github.com/CGSTournament/CGSTournament.github.io">My Code!</a></td>
                        <td><a href="http://cgstournament.legacy47.tk">Live Website!</a></td>
                    </tr>
                    <tr>
                        <td>Goldline IT</td>
                        <td><a href="https://github.com/Legacy47/legacy47.github.io/tree/master/goldline">My Code!</a></td>
                        <td><a href="http://www.goldlineit.com.au">Live Website!</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
            <div class="three columns top-and-bottom">
                <h2 class="info-title">Python</h2>
                <p>Only just recently picking up Python as a programming language many of projects are limited. Here are some of the projects I have completed so far.</p>
                <br>
                <br>
                <br>
                <table class="u-full-width">
                <thead>
                    <tr>
                        <th>Python Projects</th>
                        <th>Links</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PONG: ReBirth</td>
                        <td><a href="https://github.com/Legacy47/Pong-ReBirth">My Code!</a></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="section contact">
   <div class="container" style="width: 45%; margin-top: 5%;">
    <h2 class="section-heading">Need my services?</h2>
       <p class="section-description">I will dedciate myself to your needs accomplishing only your expectations. I will not stop until you. The client is satisfied with the result. If you have an inquire please do not hesitate to contact me through this form below. </p>
        <form>
          <div class="row">
            <div class="six columns">
              <label for="exampleEmailInput">Your email</label>
              <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
            </div>
            <div class="six columns">
              <label for="exampleRecipientInput">Reason for contacting</label>
              <select class="u-full-width" id="exampleRecipientInput">
                <option value="Option 1">Question</option>
                <option value="Option 2">Inquire</option>
                <option value="Option 3">Support/Help</option>
              </select>
            </div>
          </div>
          <label for="exampleMessage">Message</label>
          <textarea class="u-full-width" placeholder="Hi Justin…" id="exampleMessage"></textarea>
          <label class="example-send-yourself-copy">
            <input type="checkbox">
            <span class="label-body">Send a copy to yourself</span>
          </label>
          <input class="button-primary" type="submit" value="Submit">
        </form>
    </div>
</div>
<div class="section info2">
   <div class="container">
        <div class="row">
            <div class="one-third column top-and-bottom">
                <h2 class="info-title">Github</h2>
                <img class="u-max-full-width" src="images/github.png" style="height: 100px">
                <p>On github you will find all of my existing coding repositorys that can be viewed for free.</p>
                <a href="https://github.com/Legacy47">Github Profile: 'Legacy47'</a>
            </div>
            <div class="one-third column top-and-bottom">
                <h2 class="info-title">Youtube</h2>
                <img class="u-max-full-width" src="images/youtube-grey.png" style="height: 100px">
                <p>I occasionally record and upload some of my gaming videos on youtube. These games include CS:GO and Osu!.</p>
                <a href="https://www.youtube.com/c/Legacy47GamingHighlights">Youtube Channel: 'Legacy47 Gaming'</a>
            </div>
            <div class="one-third column top-and-bottom">
                <h2 class="info-title">Osu!</h2>
                <img class="u-max-full-width" src="images/osu.png">
                <p>Osu! is a free to play rhythm game that I've been involved in for about 2 years now. 'Rhythm is just a click away' ~Osu!</p>
                <a href="https://osu.ppy.sh/u/Legacy47">Osu! Profile: 'Legacy47' </a>
            </div>
        </div>
    </div> 
</div>
<div class="section discord">
   <div class="container">
    <div class="row">
        <div class="row">
            <div class="three columns top-and-bottom"></div>
            <div class="six columns top-and-bottom">
                <h2>Discord</h2>
                <p>You can find me on discord!</p>
                <iframe src="https://discordapp.com/widget?id=122136827225309188&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                <br><br>
                <p>Join us now and start chatting!</p>
            </div>
            <div class="three columns top-and-bottom"></div>
        
        </div>
    </div>
    
    </div> 
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
<?php
 
}
 
?>