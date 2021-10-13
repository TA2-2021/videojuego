<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Menu</title>
</head>
<body >

	<div class="contu">
		<div class="infou">
			<img src="css/img/fondou.png" alt="">
			<h1>Faka</h1>
			<h2>200</h2>
		</div>
	</div>

	<!--lista de opciones izq-->

	<div class="conteiner">

		<img src="css/img/fondom.png">

		<div class="nav lol flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 300px;">
			<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Historial</a>
			<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tienda</a>
			<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Emparejamiento</a>
			<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-personajes" aria-selected="false">Personajes</a>
			<a class="nav-link" href="index.html" >Cerrar Sesion</a>
		
			</div>
	</div>

	

	<!--Contenido principal-->

	<div class="tab-content" id="v-pills-tabContent" style="align-items: center;">

		<!--Contenido de historial-->

		<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		<div class="cont">
					<table class="table table-dark table-hover">
						<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Ganador</th>
							<th scope="col">Perdedor</th>
							<th scope="col">Handle</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr>
						</tbody>
					</table>

		</div>
		</div>

		<!--Contenido de tienda-->

		<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
	
					<a href="#" class="list-group-item list-group-item-action" aria-current="true">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small>3 days ago</small>
						</div>
						<p class="mb-1">Some placeholder content in a paragraph.</p>
						<small>And some small print.</small>
					</a>

					<a href="#" class="list-group-item list-group-item-action" >
						<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-1">List group item heading</h5>
						<small class="text-muted">3 days ago</small>
						</div>
						<p class="mb-1">Some placeholder content in a paragraph.</p>
						<small class="text-muted">And some muted small print.</small>
					</a>

					<a href="#" class="list-group-item list-group-item-action" >
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small class="text-muted">3 days ago</small>
						</div>
						<p class="mb-1">Some placeholder content in a paragraph.</p>
						<small class="text-muted">And some muted small print.</small>
					</a>

					<a href="#" class="list-group-item list-group-item-action" >
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small class="text-muted">3 days ago</small>
						</div>
						<p class="mb-1">Some placeholder content in a paragraph.</p>
						<small class="text-muted">And some muted small print.</small>
					</a>
		</div>

		<!--Contenido de emparejamiento-->

		<div class="tab-pane fade lel" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			
			<div class="contP">

					<h1>Ingrese codigo de jugador</h1>
					<input type="text" placeholder="Codigo">


		
					<h1>Generar codigo</h1>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Codigo" aria-label="Recipient's username" aria-describedby="button-addon2">
						<button class="btn btn-outline-secondary" type="button" id="button-addon2">Generar</button>
					</div>

				<a href="#" class="btn-jugar">Jugar</a>


			</div>

		</div>

		<!---->
		
		<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
		
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
					<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">Humano</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
				</div>
				<div class="col">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">Elfo</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>
				</div>
				</div>
				<div class="col">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">Orco</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
				</div>
				</div>
				<div class="col">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
					<h5 class="card-title">Darkin</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
				</div>
				</div>
			</div>
		
		</div>
	</div>

	<!--lista de opciones derecho, muestra jugadores conectados-->

	<div class="contj">

		<img src="css/img/fondoj.png" alt="" >

			<div class="list-group">

				<a href="#" class="" aria-current="" style="text-decoration: none; text-align: center; font-size: 33px;">
					Jugadores Conectados
				</a>
				<a href="#" class="lol2 list-group-item" id="btn-abrir" >A second link item</a>
				<a href="#" class="lol2 list-group-item" id="btn-abrir" >A second link item</a>
			</div>

			<div class="overlay" id="overlay">
				<div class="popup" id="popup">
	
					<h1>¿Iniciar partida?</h1>
					<input type="submit" class="btn-lol" value="Si">
					<input type="submit" class="btn-cerrar" id="btn-cerrar" value="No">
	
				</div>
			</div>

	</div>

	
		

	<script src="app.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>