<?php
//Created for Justin Lee by Stewart Hering on March 31, 2016
//Copyright (c) Snapp Developent LLC 2016
//Justin Lee has the permission to use and modify the below code to his needs
//Any usage of the code must include credit given to Snapp Development LLC in the form of a link to www.snappdev.net


if (isset($_POST['email'])) {
    //who to send the email to  
    
    $email_to = "justinivip@gmail.com";
     
    //Get data from form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_from = $_POST['email'];
    $phone = $_POST['phone'];
    $email_subject = $_POST['subject'];
    $message = $_POST['message'];


    //Create Email Content
    $email_message = "";
    $email_message .= "First Name: ".$first_name."\n";
    $email_message .= "Last Name: ".$last_name."\n";
    $email_message .= "Email: ".$email_from."\n";
    $email_message .= "Telephone: ".$phone."\n";
    $email_message .= "Subject: ".$email_subject."\n";
    $email_message .= "Details: ".$message."\n";
    

    //Make headers
    $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    //Send Email
    @mail($email_to, $email_subject, $email_message, $headers); 
}
?>

<!--Page to go to once php has been executed-->
  <html>
    <head>
      
    </head>
      
    <body>
        GG WP!!!
    </body>
  </html>

<?php
die();
?>