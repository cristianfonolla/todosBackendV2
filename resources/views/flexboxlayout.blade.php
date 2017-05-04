<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<style>
	.header {
		background-color: red;
		padding: 10px;
		margin: 10px;
	}
	.article {
		display: flex;
		background-color: blue;
		padding: 10px;
		margin: 10px;;
	}
	.container {
		display: flex;
		margin-left: 220px;
	}

	.nav {
		display: flex;
		position: absolute;
		margin: 10px;
		width: 200px;
		background-color: lightgrey;
		height: 100%;
	}

	.footer
	{
		display: flex;
		position: fixed;
		bottom: 0px;
		height: 20px;
		border: solid black 1px;
		width: 100%;
		background-color: lightblue;
	}
</style>
<body>

<div class="header">Simple Flex Box</div>
<div class="nav">
	<ul>
		<li>link1</li>
		<li>link2</li>
		<li>link3</li>
	</ul>
</div>

<div class="container">
	<div class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aperiam cum ipsum magni minus nemo nostrum omnis quibusdam sint.</div>
	<div class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aperiam cum ipsum magni minus nemo nostrum omnis quibusdam sint.</div>
	<div class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aperiam cum ipsum magni minus nemo nostrum omnis quibusdam sint.</div>

	<div class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aperiam cum ipsum magni minus nemo nostrum omnis quibusdam sint.</div>
	<div class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aperiam cum ipsum magni minus nemo nostrum omnis quibusdam sint.</div>
	<div class="article">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam aperiam cum ipsum magni minus nemo nostrum omnis quibusdam sint.</div>
</div>
<div class="footer">
	@Copyright Roger Inc.
</div>
</body>
</html>
