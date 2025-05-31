<?php
/*
 *
 * home.php
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
	<title>[Windstorm | Perfil]</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
	body{
		font-family: Tahoma, sans-serif;
		border: 2px solid #70BDA3;
		background-color: #E9EBEE;
		height: auto;
		}
	#header{
		background-color: #70BDA3;
		color: white;
		height: 60px;
		}
	header h1{
		margin: auto;
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
		}d
		#text{
			text-align: center;
			float: right;
			}
		#bar{
			margin: auto;
			width: 800px;
			font-size: 30px;
			}
		#bar p{
			padding-top: 1%;
			margin: 0%;
			font-weight: bold;
			}
		#search_box{
			margin: 0.8%;
			border: 4px solid #70BDA3;
			border-radius: 10px;
			align-content: center;
			height: 25px;
			width: 500px;
			background-image: url(img/search.png);
			}
	</style>
</head>

<body>
	<div id="header">
		<div id="bar">
			<p>[Windstorm]</p>
		</div>
	</div>
		
	<nav>
		<a href="/inicio/inicio.php">Inicio</a>
		<a href="/inicio/posts.php">Posts</a>
		<a href="/inicio/videos.php">Videos</a>
		<a href="/inicio/livros.php">Livros</a>
		<a href="/inicio/musicas.php">Músicas</a>
		<a href="/inicio/fotos.php">Fotos</a>
		<a href="/inicio/pessoas.php">Pessoas</a>
		<a href="/inicio/conversas.php">Conversas</a>
		<a href="/inicio/perfil.php">Meu Perfil</a>
		<input type="text" id="search_box" placeholder="Procure qualquer 
coisa...">
	</nav>
</body>

</html>
