<?php

$mailto = 'music@nikaleonimusic.com' ;
$subject = 'mailinglist' ;

$formurl = "http://www.nikaleoni.com/flameandshadow/mailinglist_signup.html" ;
$thankyouurl = "http://www.nikaleoni.com/flameandshadow/mailinglist_thankyou.html" ;

// -------------------- END OF CONFIGURABLE SECTION ---------------

$firstname = $_POST['firstname'] ;
$lastname = $_POST['lastname'] ;
$email = $_POST['email'] ;
$comments = $_POST['comments'] ;
$checkbox = $_POST['checkbox'] ;

if (!isset($_POST['email'])) {
	header( "Location: $formurl" );
	exit ;
}
if (get_magic_quotes_gpc()) {
	$comments = stripslashes( $comments );
}

$messageproper =

	"The following message has been sent via the nikaleoni.com Website\n\n" .
	"FIRST NAME\n" .
	$firstname .
	"\n\nLAST NAME\n" .
	$lastname .
	"\n\nEMAIL\n" .
	$email .
	"\n\nCOMMENTS\n" .
	$comments ;
	
if (!($checkbox)) {header( "Location: $thankyouurl" ); } else {header( "Location: $thankyouurl" ); }
	
mail($mailto, $subject, $messageproper, "From: \"$email\" <$email>\nReply-To: \"$email\" <$email>\nX-Mailer: chfeedback.php 2.02" );
header( "Location: $thankyouurl" );



exit ;

?>