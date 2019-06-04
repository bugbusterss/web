<?php 
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['comments']

    $email_from = 'mpk.1998mj@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User name: $name.\n".
                        "User email: $visitor_email.\n".
                            "User message: $message.\n";

    $to = "pradeep17115@ece.ssn.edu.in";

    $headers = "From $email_from \r\n";

    $headers .= "Reply to $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: mark2.html");

?>