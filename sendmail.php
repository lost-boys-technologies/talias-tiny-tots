<?php
if(isset($_POST['sender_email'])){
    $to      = 'kenhoward11@gmail.com';
    $headers = "From: ".$_POST['sender_nam‌​e​']." <".$_POST['sender_em‌​ail‌​'].">\r\n"; $headers = "Reply-To: ".$_POST['sender_ema‌​il‌​']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    if(mail($to, $subject, $message, $headers)) echo json_encode(['success'=>true]); 
    else echo json_encode(['success'=>false]);
    exit;
 }
?>
