<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Snaq</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/sidebar-collapse.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

	<aside class="sidebar-left-collapse">

		<a href="#" class="company-logo">Logo</a>

		<div class="sidebar-links">

			<div class="link-blue selected">

				<a href="#">
					<i class="fa fa-picture-o"></i>Pedidos
				</a>

				<ul class="sub-links">
					<li><a href="#">Agregar</a></li>
					<li><a href="#">Listar</a></li>
				</ul>

			</div>

			<div class="link-red">

				<a href="#">
					<i class="fa fa-heart-o"></i>Clientes
				</a>

				<ul class="sub-links">
					<li><a href="#">Agregar</a></li>
					<li><a href="#">Listar</a></li>
				</ul>

			</div>

			<div class="link-green">

				<a href="#">
					<i class="fa fa-map-marker"></i>Productos
				</a>

				<ul class="sub-links">
					<li><a href="#">Agregar</a></li>
					<li><a href="#">Listar</a></li>
					<li><a href="#">Promociones</a></li>
				</ul>

			</div>

			<div class="link-yellow">

				<a href="#">
					<i class="fa fa-keyboard-o"></i>Caja
				</a>

				<ul class="sub-links">
					<li><a href="#">Hacer</a></li>
					<li><a href="#">Ver</a></li>
					<li><a href="#">Agregar Movimiento</a></li>
				</ul>

			</div>

		</div>

	</aside>

	<div class="main-content">

		<div class="menu">

			<img class="arrow left" src="assets/images/demo-arrow-left.png" alt="arrow" height="120">
			<img class="arrow up" src="assets/images/demo-arrow-up.png" alt="arrow" height="150">

			<h1>Freebie: 5 Responsive Sidebar Templates</h1>

			<h2><a href="http://tutorialzine.com/2015/04/freebie-5-elegant-and-responsive-sidebar-templates/">Download</a></h2>

			<ul>
				<li><a href="index.html">Basic</a></li>
				<li><a href="sidebar-advanced.html">Advanced</a></li>
				<li><a href="sidebar-left.html">Left</a></li>
				<li><a href="sidebar-collapse.html" class="active">Collapse</a></li>
				<li><a href="sidebar-light.html">Light</a></li>
			</ul>

		</div>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>

		$(function () {

			var links = $('.sidebar-links > div');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			});
		});

	</script>

</body>

</html>
