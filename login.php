<?php
/*
 *
 * login.php
 *
 * MIT Licence
 *  
 * Copyright (c) 2025 TheNyxieCreator <thenyxiecreator@yahoo.com>
 *
 * Permission is hereby granted, free of charge, to any person 
 * obtaining a copy of this software and associated documentation files
 * (the "Software"), to deal in the Software without restriction, 
 * including without limitation the rights to use, copy, modify, merge,
 * publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, 
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be 
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, 
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF 
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND 
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS 
 * BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN 
 * ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN 
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE 
 * SOFTWARE. 
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>[Windstorm | Login]</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, 
	initial-scale=1.0"/>
<title>[Windstorm | Login]</title>
<style>
	body{
		font-family: Tahoma, sans-serif;
		border: 2px solid #70BDA3;
		background-color: #E9EBEE;
		height: auto;
		}
	header{
		font-size: 20px;
		background-color: #70BDA3;
		padding: 18px;
		color: white;
		}
	header h1{
		font-weight: bold;
		}
	nav{
		background-color: #333;
		overflow: hidden;
		}
	nav a{
		float: left;
		display: block;
		color: #f2f2f2;
		padding: 14px 16px;
		text-decoration: none;
		}
	nav a:hover{
		background-image: linear-gradient(#70BDA3, #E9EBEE);
		color: black;
		}
	footer{
		padding: 20px;
		text-align: center;
		background: gray;
		margin-top: 20px;
		padding-bottom: auto:
		}
		footer p{
			color: white;
			}
	footer a{
		 color: #70BDA3;
		}
	.login{
		width: 500px;
		margin: 10px;
		background-color: white;
		text-align: center;
		margin: auto;
		}
	.login h1{
		color: white;
		margin: 0px;
		background-color: #70BDA3;
		padding: 10px;
		font-size: 16px;
		text-align: left;
		}
	.login p{
		margin: 0px;
		padding: 10px;
		}
	.title {
		font-weight: bold;
		font-size: 20px;
		text-align: center;
		}
	.text{
		float: center;
		}
	.input{
		margin-bottom: 20px;
		padding: 50px;
		}
	#text{
		font-size: 18px;
		width: 350px;
		border: 2px solid #7A88BA;
		border-radius: 10px;
		height: 40px;
		}
	#button{
		height: 40px;
		font-size: 20px;
		width: 350px;
		border-radius: 10px;
		border: none;
		font-weight: bold;
		color: white;
		background-color: #70BDA3;
		}
</style>
</head>

	<body>
		<header>
			<h1>[Windstorm]</h1>
			<p>"Simple Like Air" -Webtuner</p>
		</header>
		
		<nav>
			<a href="index.html">Voltar</a>
		</nav>
		<br>
		
		<div class="login">
			<h1>Login</h1>
			<div class="title"><p>Bem-Vindo de Volta!</p></div>
			<div class="input">
				<input type="text" id="text" placeholder="E-Mail ou 
Nickname"><br><br>
				<input type="password" id="text" placeholder="Senha">
				<br><br><br>
				
				<input type="submit" id="button" value="Entrar">
			</div>

		</div>
		
		<footer>
			<a href="/sobre/">Sobre</a>
			<a href="/faq/">Ajuda</a>
			<a href="/contatos/">Contate-me</a>
			<a href="/termos/">Termos</a>
			<a href="/privacidade/">Privacidade</a>
			<p>uma produção de TheNyxieCreator (Adryan Jhonatan)</p>
			<p>
				Copyright (c) 2024-2025 TheNyxieCreator & Windstorm Project com o Projeto Nyxieworld
			</p>
		</footer>
	</body>

</html>

