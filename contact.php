<?php 
if(isset($_POST['submit'])){
    $to = "cristhian.huertos@gmail.com"; // this is your Email address
    $from = $_POST['emailcontact']; // this is the sender's Email address
    $first_name = $_POST['namecontact'];
    $ruc_name = $_POST['ruccontact'];
    $phone_number = $_POST['phonecontact'];
    $business_type = $_POST['business']
    $subject = "Nuevo cliente";
    $subject2 = "Cuscosquare";
    $message = $first_name . " " . $ruc_name . " Ha enviado esta informacion:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>