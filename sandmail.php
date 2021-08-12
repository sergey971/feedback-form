<?php

if($_POST['capcha'] !=10) {
   header('location:index.php');
   exit;
}

if($_POST['subject'] == 1) {
   $subject = 'Тема письма';
} elseif($_POST['subject'] == 2) {
   $subject = 'Вопрос о продукте';
} elseif($_POST['subject'] == 3) {
   $subject = 'Личный вопрос';
} elseif($_POST['subject'] == 4) {
   $subject = 'Консультация';
} elseif($_POST['subject'] == 5) {
   $subject = 'Благодарность';
} elseif($_POST['subject'] == 6) {
   $subject = 'Жалоба';
}else{
   $subject = 'Тема письма';
}

$to = "murin.89@list.ru";
$from = trim($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($_POST['message']);

$headers = "From: $from" . "\r\n" . 
"Reply-To: $from" . "\r\n" . 
"X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) {
   echo "Письмо отправленно";
}else{
   echo "Письмо не отправленно";
}



?>