<?PHP
include "../entities/reclamation.php";
include "../cores/reclamation.php";

if (isset($_POST['username'])  and isset($_POST['sujet']) and isset($_POST['message'])and isset($_POST['email']))
{


					 $reclamation=new reclamation($_POST['username'],$_POST['email'],$_POST['sujet'],$_POST['message'],"","","");




							$reclamationC=new ReclamationC();
							$reclamationC->ajouterReclamation($reclamation);
		                    echo "vous avez ajouter une reclamation";

date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "ahmeddraiss8@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "mnhsairj";

//Set who the message is to be sent from
$mail->setFrom('ahmeddraiss8@gmail.com', 'Friandise');

//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'ahmed rais');

//Set who the message is to be sent to
$mail->addAddress('ahmeddraiss8@gmail.com', 'ahmed');

//Set the subject line
$mail->Subject = 'une nouvelle reclamation a ete depose';

$message='
		<html>
				<head>
				  <meta charset="utf-8" />
				</head>
				<body>
				 <div>utilisateur: <b>'.$_POST['username'].'</b>,</div>
				
				 <td align="center">
							<font size="2">
							  consulter la pager pour voir les details.
							</font>
							
				 </td>
				
				 				</body>
				</html>';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<!DOCTYPE html><html><body>'.$message.'</body></html>');

//Replace the plain text body with one created manually
$mail->AltBody = 'higy';

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

















		                     echo "<script> window.location.href='reclamation.php'</script>";




	}

else
{
	
		  echo "jjjjjj";
}

function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}


?>

