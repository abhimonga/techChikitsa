<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    * {
  box-sizing: border-box;
}

body {
  font-family: Tahoma,Verdana,Segoe,sans-serif;
  font-size: 14px;
  background: #f6fffd;
  padding: 20px;
  text-align: center;
}

.wrapper {
  width: 250px;
  height: 350px;
  margin: 60px auto;
  perspective: 600px;
  text-align: left;
}

.rec-prism {
  width: 100%;
  height: 100%;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-100px);
  transition: transform 0.5s ease-in;
}

.face {
  position: absolute;
  width: 250px;
  height: 350px;
  padding: 20px;
  background: rgba(250, 250, 250, 0.96);
  border: 3px solid #07ad90;
  border-radius: 3px;
}
.face .content {
  color: #666;
}
.face .content h2 {
  font-size: 1.2em;
  color: #07ad90;
}
.face .content .field-wrapper {
  margin-top: 30px;
  position: relative;
}
.face .content .field-wrapper label {
  position: absolute;
  pointer-events: none;
  font-size: 0.85em;
  top: 40%;
  left: 0;
  transform: translateY(-50%);
  transition: all ease-in 0.25s;
  color: #999999;
}
.face .content .field-wrapper input[type="text"], .face .content .field-wrapper input[type="password"], .face .content .field-wrapper input[type="submit"], .face .content .field-wrapper textarea {
  -webkit-appearance: none;
  appearance: none;
}
.face .content .field-wrapper input[type="text"]:focus, .face .content .field-wrapper input[type="password"]:focus, .face .content .field-wrapper input[type="submit"]:focus, .face .content .field-wrapper textarea:focus {
  outline: none;
}
.face .content .field-wrapper input[type="text"], .face .content .field-wrapper input[type="password"], .face .content .field-wrapper textarea {
  width: 100%;
  border: none;
  background: transparent;
  line-height: 2em;
  border-bottom: 1px solid #07ad90;
  color: #666;
}
.face .content .field-wrapper input[type="text"]::-webkit-input-placeholder, .face .content .field-wrapper input[type="password"]::-webkit-input-placeholder, .face .content .field-wrapper textarea::-webkit-input-placeholder {
  opacity: 0;
}
.face .content .field-wrapper input[type="text"]::-moz-placeholder, .face .content .field-wrapper input[type="password"]::-moz-placeholder, .face .content .field-wrapper textarea::-moz-placeholder {
  opacity: 0;
}
.face .content .field-wrapper input[type="text"]:-ms-input-placeholder, .face .content .field-wrapper input[type="password"]:-ms-input-placeholder, .face .content .field-wrapper textarea:-ms-input-placeholder {
  opacity: 0;
}
.face .content .field-wrapper input[type="text"]:-moz-placeholder, .face .content .field-wrapper input[type="password"]:-moz-placeholder, .face .content .field-wrapper textarea:-moz-placeholder {
  opacity: 0;
}
.face .content .field-wrapper input[type="text"]:focus + label, .face .content .field-wrapper input[type="text"]:not(:placeholder-shown) + label, .face .content .field-wrapper input[type="password"]:focus + label, .face .content .field-wrapper input[type="password"]:not(:placeholder-shown) + label, .face .content .field-wrapper textarea:focus + label, .face .content .field-wrapper textarea:not(:placeholder-shown) + label {
  top: -35%;
  color: #42509e;
}
.face .content .field-wrapper input[type="submit"] {
  -webkit-appearance: none;
  appearance: none;
  cursor: pointer;
  width: 100%;
  background: #07ad90;
  line-height: 2em;
  color: #fff;
  border: 1px solid #07ad90;
  border-radius: 3px;
  padding: 5px;
}
.face .content .field-wrapper input[type="submit"]:hover {
  opacity: 0.9;
}
.face .content .field-wrapper input[type="submit"]:active {
  transform: scale(0.96);
}
.face .content .field-wrapper textarea {
  resize: none;
  line-height: 1em;
}
.face .content .field-wrapper textarea:focus + label, .face .content .field-wrapper textarea:not(:placeholder-shown) + label {
  top: -25%;
}
.face .thank-you-msg {
  position: absolute;
  width: 200px;
  height: 130px;
  text-align: center;
  font-size: 2em;
  color: #07ad90;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
}
.face .thank-you-msg:after {
  position: absolute;
  content: '';
  width: 50px;
  height: 25px;
  border: 10px solid #07ad90;
  border-right: 0;
  border-top: 0;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(0deg) scale(0);
  transform: translate(-50%, -50%) rotate(0deg) scale(0);
  -webkit-animation: success ease-in 0.15s forwards;
  animation: success ease-in 0.15s forwards;
  animation-delay: 2.5s;
}
.face-front {
  transform: rotateY(0deg) translateZ(125px);
}
.face-top {
  height: 250px;
  transform: rotateX(90deg) translateZ(125px);
}
.face-back {
  transform: rotateY(180deg) translateZ(125px);
}
.face-right {
  transform: rotateY(90deg) translateZ(125px);
}
.face-left {
  transform: rotateY(-90deg) translateZ(125px);
}
.face-bottom {
  height: 250px;
  transform: rotateX(-90deg) translateZ(225px);
}

.nav {
  margin: 20px 0;
  padding: 0;
}
.nav li {
  display: inline-block;
  list-style-type: none;
  font-size: 1em;
  margin: 0 10px;
  color: #42509e;
  position: relative;
  cursor: pointer;
}
.nav li:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 20px;
  border-bottom: 1px solid #42509e;
  transition: all ease-in 0.25s;
}
.nav li:hover:after {
  width: 100%;
}

.psw, .signup, .singin {
  display: block;
  margin: 20px 0;
  font-size: 0.75em;
  text-align: center;
  color: #42509e;
  cursor: pointer;
}

small {
  font-size: 0.7em;
}

@-webkit-keyframes success {
  from {
    -webkit-transform: translalet prism = document.querySelector(".rec-prism");

function showSignup(){
  prism.style.transform = "translateZ(-100px) rotateY( -90deg)";
}
function showLogin(){
  prism.style.transform = "translateZ(-100px)";
}
function showForgotPassword(){
  prism.style.transform = "translateZ(-100px) rotateY( -180deg)";
}

function showSubscribe(){
  prism.style.transform = "translateZ(-100px) rotateX( -90deg)";
}

function showContactUs(){
  prism.style.transform = "translateZ(-100px) rotateY( 90deg)";
}

function showThankYou(){
  prism.style.transform = "translateZ(-100px) rotateX( 90deg)";
}te(-50%, -50%) rotate(0) scale(0);
  }
  to {
    -webkit-transform: translate(-50%, -50%) rotate(-45deg) scale(1);
  }
}

    </style>
    <script>
    
    </script>
</head>
<body>
<ul class="nav">
  <li onclick="showLogin()">Login</li>
  <li onclick="showSignup()">Sign up</li>
  <li onclick="showForgotPassword()">Forgot password</li>
  <li onclick="showSubscribe()">Subscribe</li>
  <li onclick="showContactUs()">Contact us</li>
</ul>
<div class="wrapper">
  <div class="rec-prism">
    <div class="face face-top">
      <div class="content">
        <h2>Subscribe</h2>
        <small>Enter your email so we can send you the latest updates!</small>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <input type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-front">
      <div class="content">
        <h2>Sign in</h2>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="username" placeholder="username">
            <label>username</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password" placeholder="password" autocomplete="new-password">
            <label>password</label>
          </div>
          <div class="field-wrapper">
            <input type="submit" onclick="showThankYou()">
          </div>
          <span class="psw" onclick="showForgotPassword()">Forgot Password?   </span>
          <span class="signup" onclick="showSignup()">Not a user?  Sign up</span>
        </form>
      </div>
    </div>
    <div class="face face-back">
      <div class="content">
        <h2>Forgot your password?</h2>
        <small>Enter your email so we can send you a reset link for your password</small>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <input type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-right">
      <div class="content">
        <h2>Sign up</h2>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password" placeholder="password" autocomplete="new-password">
            <label>password</label>
          </div>
          <div class="field-wrapper">
            <input type="password" name="password2" placeholder="password" autocomplete="new-password">
            <label>re-enter password</label>
          </div>
          <div class="field-wrapper">
            <input type="submit" onclick="showThankYou()">
          </div>
          <span class="singin" onclick="showLogin()">Already a user?  Sign in</span>
        </form>
      </div>
    </div>
    <div class="face face-left">
      <div class="content">
        <h2>Contact us</h2>
        <form onsubmit="event.preventDefault()">
          <div class="field-wrapper">
            <input type="text" name="name" placeholder="name">
            <label>Name</label>
          </div>
          <div class="field-wrapper">
            <input type="text" name="email" placeholder="email">
            <label>e-mail</label>
          </div>
          <div class="field-wrapper">
            <textarea placeholder="your message"></textarea>
            <label>your message</label>
          </div>
          <div class="field-wrapper">
            <input type="submit" onclick="showThankYou()">
          </div>
        </form>
      </div>
    </div>
    <div class="face face-bottom">
      <div class="content">
        <div class="thank-you-msg">
          Thank you!
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>
	<meta charset="UTF-8">
	<title>AnimaForm</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
	background: #3b4465;
}

.forms-section {
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.section-title {
	font-size: 32px;
	letter-spacing: 1px;
	color: #fff;
}

.forms {
	display: flex;
	align-items: flex-start;
	margin-top: 30px;
}

.form-wrapper {
	animation: hideLayer .3s ease-out forwards;
}

.form-wrapper.is-active {
	animation: showLayer .3s ease-in forwards;
}

@keyframes showLayer {
	50% {
		z-index: 1;
	}
	100% {
		z-index: 1;
	}
}

@keyframes hideLayer {
	0% {
		z-index: 1;
	}
	49.999% {
		z-index: 1;
	}
}

.switcher {
	position: relative;
	cursor: pointer;
	display: block;
	margin-right: auto;
	margin-left: auto;
	padding: 0;
	text-transform: uppercase;
	font-family: inherit;
	font-size: 16px;
	letter-spacing: .5px;
	color: #999;
	background-color: transparent;
	border: none;
	outline: none;
	transform: translateX(0);
	transition: all .3s ease-out;
}

.form-wrapper.is-active .switcher-login {
	color: #fff;
	transform: translateX(90px);
}

.form-wrapper.is-active .switcher-signup {
	color: #fff;
	transform: translateX(-90px);
}

.underline {
	position: absolute;
	bottom: -5px;
	left: 0;
	overflow: hidden;
	pointer-events: none;
	width: 100%;
	height: 2px;
}

.underline::before {
	content: '';
	position: absolute;
	top: 0;
	left: inherit;
	display: block;
	width: inherit;
	height: inherit;
	background-color: currentColor;
	transition: transform .2s ease-out;
}

.switcher-login .underline::before {
	transform: translateX(101%);
}

.switcher-signup .underline::before {
	transform: translateX(-101%);
}

.form-wrapper.is-active .underline::before {
	transform: translateX(0);
}

.form {
	overflow: hidden;
	min-width: 260px;
	margin-top: 50px;
	padding: 30px 25px;
  border-radius: 5px;
	transform-origin: top;
}

.form-login {
	animation: hideLogin .3s ease-out forwards;
}

.form-wrapper.is-active .form-login {
	animation: showLogin .3s ease-in forwards;
}

@keyframes showLogin {
	0% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
}

@keyframes hideLogin {
	0% {
		background-color: #fff;
		transform: translate(35%, -20px);
	}
	50% {
		transform: translate(0, 0);
	}
	100% {
		background: #d7e7f1;
		transform: translate(40%, 10px);
	}
}

.form-signup {
	animation: hideSignup .3s ease-out forwards;
}

.form-wrapper.is-active .form-signup {
	animation: showSignup .3s ease-in forwards;
}

@keyframes showSignup {
	0% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
}

@keyframes hideSignup {
	0% {
		background-color: #fff;
		transform: translate(-35%, -20px) scaleY(1);
	}
	50% {
		transform: translate(0, 0) scaleY(.8);
	}
	100% {
		background: #d7e7f1;
		transform: translate(-40%, 10px) scaleY(.8);
	}
}

.form fieldset {
	position: relative;
	opacity: 0;
	margin: 0;
	padding: 0;
	border: 0;
	transition: all .3s ease-out;
}

.form-login fieldset {
	transform: translateX(-50%);
}

.form-signup fieldset {
	transform: translateX(50%);
}

.form-wrapper.is-active fieldset {
	opacity: 1;
	transform: translateX(0);
	transition: opacity .4s ease-in, transform .35s ease-in;
}

.form legend {
	position: absolute;
	overflow: hidden;
	width: 1px;
	height: 1px;
	clip: rect(0 0 0 0);
}

.input-block {
	margin-bottom: 20px;
}

.input-block label {
	font-size: 14px;
  color: #a1b4b4;
}

.input-block input {
	display: block;
	width: 100%;
	margin-top: 8px;
	padding-right: 15px;
	padding-left: 15px;
	font-size: 16px;
	line-height: 40px;
	color: #3b4465;
  background: #eef9fe;
  border: 1px solid #cddbef;
  border-radius: 2px;
}

.form [type='submit'] {
	opacity: 0;
	display: block;
	min-width: 120px;
	margin: 30px auto 10px;
	font-size: 18px;
	line-height: 40px;
	border-radius: 25px;
	border: none;
	transition: all .3s ease-out;
}

.form-wrapper.is-active .form [type='submit'] {
	opacity: 1;
	transform: translateX(0);
	transition: all .4s ease-in;
}

.btn-login {
	color: #fbfdff;
	background: #a7e245;
	transform: translateX(-30%);
}

.btn-signup {
	color: #a7e245;
	background: #fbfdff;
	box-shadow: inset 0 0 0 2px #a7e245;
	transform: translateX(30%);
}

</style>
<script>
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})

</script>
<body>
<section class="forms-section">
  <h1 class="section-title">Animated Forms</h1>
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form class="form form-login">
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="login-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="login-password" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>
      <form class="form form-signup">
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" required>
          </div>
          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="signup-password" type="password" required>
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="signup-password-confirm" type="password" required>
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
</body>
</html>