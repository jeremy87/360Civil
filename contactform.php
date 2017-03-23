<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: 360Civil Website'; 
    $to = 'jeremy.pike87@gmail.com'; 
    $subject = 'Website Contact Form';
			
    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
				
    if ($_POST['submit']) {
    if ($name != '' && $email != '' && $phone != '') {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Thanks! We will be in contct shortly.</p>';
        } else { 
            echo '<p>Something went wrong, try again!</p>'; 
        } 
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>