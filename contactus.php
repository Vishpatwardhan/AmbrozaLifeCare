<?php
if(isset($_POST['name'])){
    $to = "ambrozalifecare@gmail.com"; // this is your Email address
    $from = "ambrozalifecare@gmail.com"; // this is the sender's Email address
	$name = $_POST['name'];
    $number = $_POST['number'];
	$Email=$_POST['email'];
	$query=$_POST['query'];
    $subject = "Ambroza Enquiry";
	$body='<html><body>';
    $body.='<img src="http://www.ambrozalifecare.com/images/transparent2.png" style="text-align:left;"/>';
    $body.='<br><br>';
    $body.='<table border="0">';
    $body.='<tr><td>Name:</td><td>' . strip_tags($_POST['name']) . '</td></tr>';
    $body.='<tr><td>Mobile Number:</td><td>' . strip_tags($_POST['number']) . '</td></tr>';
    $body.='<tr><td>EmailID:</td><td>' . strip_tags($_POST['email']) . '</td></tr>';
    $body.='<tr><td>Query:</td><td>' . strip_tags($_POST['query']) . '</td></tr>';
    $body.='</table></body>';
    $body.='</html>';
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From:'. $name .'<'.$Email.'>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    mail($to,$subject,$body,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo '<script language="javascript">';
	//echo 'alert("We Received your query, will get back to you! Thank you!")window.location.href="/bags"';
	//echo '</script>';
	
	
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
    else{
		echo "Mail Not Sent!";
	}
?>
