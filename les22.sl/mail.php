<?php
	//Принимаем постовые данные
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	//Тут указываем на какой ящик посылать письмо
	$to = "diman.b95@mail.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Заявка с 22 урока";
	// Сообщение письма
	$message = "
	Имя пользователя: ".htmlspecialchars($name)."<br />
	Email: ".htmlspecialchars($mail)."<br />
	Password: ".htmlspecialchars($pass);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: less28 <mail@less28.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thank.html');
	exit();
?>