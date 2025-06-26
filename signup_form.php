<?php
if(isset($_SESSION["uid"])){
	header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Регистрация</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"/>

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="css/login_reg.css">
<link rel="stylesheet" type="text/css" href="css/utils.css">

</head>
	<body style="background-color: #999999;">
		<div class="limiter">
		<div class="container-login100">
		<div class="login100-more" style="background-image: url('img/erik-mclean-nfoRa6NHTbU-unsplash.jpg');-webkit-transform: scaleX(-1);
  transform: scaleX(-1);"></div>
		<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
		<form id="signup_form" onsubmit="return false" class="login100-form validate-form">
		<span class="login100-form-title p-b-59">
		Регистрация
		</span>
		<div class="wrap-input100 validate-input" data-validate="Name is required">
		<span class="label-input100">Имя</span>
		<input class="input100" type="text" name="f_name" id="f_name" placeholder="Ваше имя">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Name is required">
		<span class="label-input100">Фамилия</span>
		<input class="input100" type="text" name="l_name" id="l_name" placeholder="Ваша фамилия">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Ошибка ввода почты: ex@abc.xyz">
		<span class="label-input100">Email</span>
		<input class="input100" type="email" name="email"  placeholder="электронная почта...">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Mobile no is required">
		<span class="label-input100">Номер телефона</span>
		<input class="input100" type="text" name="mobile" id="mobile" placeholder="номер телефона....">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Пароль не безопасен">
		<span class="label-input100">Пароль</span>
		<input class="input100" type="password" name="password" id="password" placeholder="*************">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Пароль не соответствует">
		<span class="label-input100">Повторите пароль</span>
		<input class="input100" type="password" name="repassword" id="repassword" placeholder="*************">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Адрес неправильно указан">
		<span class="label-input100">Адрес</span>
		<input class="input100" type="text" name="address1" id="address1" placeholder="Улица, дом">
		<span class="focus-input100"></span>
		</div>
		<div class="wrap-input100 validate-input" data-validate="Неправильный город">
		<span class="label-input100">Город</span>
		<input class="input100" type="text" name="address2" id="address2" placeholder="Город">
		<span class="focus-input100"></span>
		</div>
		<div class="flex-m w-full p-b-33">
		<div class="contact100-form-checkbox">
		<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
		<label class="label-checkbox100" for="ckb1">
		<span class="txt1">
		Я согласен с
		<a href="#" class="txt2 hov1">
		Правилами пользования
		</a>
		</span>
		</label>
		</div>
		</div>
		<div class="container-login100-form-btn">
		<div class="wrap-login100-form-btn">
			<div class="login100-form-bgbtn"></div>
			<button class="login100-form-btn" type="submit">
				Зарегистрироваться
			</button>
			
		</div>
		
		<a href="signin_form.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
		Авторизация
		<i class="fa fa-long-arrow-right m-l-5"></i>
		</a>

		<a href="index.php" class="dis-block txt3 hov1 p-r-30 p-t-40 p-b-10 p-l-180">
		Пропустить регистрацию
		<i class="fa fa-long-arrow-right m-l-5"></i>
		</a>
		<div class="col-md-8" id="signup_msg"></div>
		</div>
		</form>
		</div>
		</div>
		</div>

		<script src="js/jquery.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				
				<script src="js/login_reg.js"></script>
				<script src="js/actions.js"></script>

		
	</body>
</html>