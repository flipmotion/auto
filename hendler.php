<?php
    $user=$_POST['user'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $from=$_POST['from'];
    $msg=$_POST['message'];
 	$to = "gal2326612@yandex.ru";
    $subject = "Заявка!";
    if($user){
    	$message = "<br>User: " . $user . "<br>phone:<br>" . $phone . "<br>mail:<br>" . $mail . "<br>Massage:<br>" . $msg;
    }
    else $message = "<br>User: " . $user . "<br>Phone: " . $phone . "<br>mail:<br>" . $mail . "<br>Massage:<br>" . $msg;
    
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: wth\r\n";
    //Если форма была отправлена, то выводим ее содержимое на экран
    if (isset($_POST["user"])) { 

        if (!mail($to, $subject, $message, $headers)) {
            $errors[] = "Ошибка, сообщение не отправлено. Попробуйте позже.";
        }
    }
?>
