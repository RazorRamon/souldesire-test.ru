<?php
if ((isset($_POST['event']))&&($_POST['event']=="sviaz")) {
	$name=$_POST['name'];
	$phone=$_POST['tel'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	if(isset($_POST["photo_da"]) && $_POST["photo_da"]=="1"){$photo_da="Да!";}
	else $photo_da="Нет!";

	if(isset($_POST["nayti"]) && $_POST["nayti"]=="1"){$nayti="Да!";}
	else $nayti="Нет!";

	if(isset($_POST["soglasie"]) && $_POST["soglasie"]=="1"){$soglasie="Дано!";}
	else $soglasie="Не дано!";

	$mailheaders = "Content-Type: text/html; charset=utf-8\r\n";
	$mailheaders.= "From: ".$name." <".$email.">\r\n";
	$mailheaders.= "Reply-To: ".$name." <".$email.">\r\n";
	$mailheaders.= "X-Mailer: PHP/".phpversion()."";
	$subject = "Поступило новое сообщение";
	$msg="<span style=\"font-size: 12px; color: #333333; font-family: Tahoma\"><b>Имя:</b> ".$name."<br><b>E-mail:</b> ".$email."<br><b>Телефон:</b> ".$phone."<br><br><b>Сообщение:</b><br>".$message."<br><br><b>Согласие на рассылку:</b> ".$soglasie."<br><br><i>Пользователь запросил</i><br><b>Фотографии:</b> ".$photo_da."<br><b>Найти себя:</b> ".$nayti."</span>";
	mail("info@souldesire.ru", $subject, $msg, $mailheaders);
	header('Location: http://souldesire.ru/vashe-soobshhenie-otprvleno/'); 
	exit;
}
echo"Access denied!";
?>