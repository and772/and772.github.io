<?php
$phone = $_POST['phone'];
if(empty($phone)) {
?>
<html>
<head><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><title>Спасибо!</title>


    
    </head>
    
    
    
<body style="color: rgb(0, 0, 0); max-width: 980px; min-width: 300px; width: auto; margin: 0px auto; background-color: rgb(255, 255, 255); font-family: pt sans,arial;">
<br><br>
<center style="padding: 15px 30px; border: 3px solid rgb(63, 63, 63); background-color: rgb(255, 161, 161);">
<h1 style="font-size: 1.4rem;">Вы не ввели необходимые данные!<br>
Вернитесь на сайт и заполните контакнутю форму.<br>
</h1></center><br><br>
<a style="display: inline-block;height: 53px;height: 5.3rem;margin: 0px 0 0px;padding: 0 24px; font-size: 1.8rem; letter-spacing: 0.02em; line-height: 53px; line-height: 5.3rem; text-align: center; text-decoration: none; color: black; transition: background-color 0.2s ease-out 0s; border-radius: 7px; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); -webkit-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); -moz-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); background: rgb(196, 255, 161); width:500px;margin:0 auto;display:block; border: 1px solid #ccc;" href="./" class='hover'>
Вернуться на сайт</a>
</body>
</html>
<?
}else {
	
$email2="and772150@gmail.com"; // почта
$headers  =  'MIME-Version: 1.0' . "\r\n";
	$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .=  'To: <'.$email2.'>, '."\r\n";
	$headers .=  'From: <site.ru>' . "\r\n"; // -заголовок
$subject2    = "Заказ на браслет м2"; // ----------------------------------------- заголовок письма
$message2    = "
<br>Имя: ".$_POST['name']."
<br>Телефон: ".$_POST['phone']."

<br>IP-адрес посетителя: ".@$_SERVER['REMOTE_ADDR']."
<br>Время заказа: ".date('Y-m-d H:i:s').";
";
$mail=mail($email2, $subject2, $message2, $headers);
if($mail==true){
?>
<html>
<head>
	<title>Заявка принята</title>
	<meta charset="utf-8">

	<style type="text/css">
		main {
			width: 900px;
			margin: auto;
			text-align: center;
		}

		header {
			color: red;
			font-size: 50px;
			margin-bottom: 40px;
			margin-top: 20px;
		}

		section {
			font-size: 34px;
		}

		footer {
			margin-top: 30px;
			font-size: 24px;
		}

		footer a {
			color: blue;
		}
	</style>
	

</head>
    
<body>
<main>
	<header>
		Спасибо! Ваша заявка принята!
	</header>
	<section>
		В скором времени с вами свяжется наш менеджер для уточнения деталей заказа.
	</section>
	<footer>
		<a href="/">Вернуться на главную сайта</a>
	</footer>
</main>
</body>
</html>
<?
}else{
    echo "no";
}
}
?>
