<?php
    $name = $_POST[&#039name&#039];
    $email = $_POST[&#039email&#039];
    $message = $_POST[&#039message&#039];
    $from = &#039From: YourWebsite&#039;
    $to = &#039your@mail.com&#039;
    $subject = &#039Hello&#039;
    $thankyou = &#039YourContactsite.html&#039;
    $human = $_POST[&#039human&#039;];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST[&#039;submit&#039;] && $human == &#039;4&#039;) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST[&#039;submit&#039;] && $human != &#039;4&#039;) {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>