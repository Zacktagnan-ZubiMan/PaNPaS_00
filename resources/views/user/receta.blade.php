<!DOCTYPE html>
<html>
<head>
	<title>Receta</title>

	<link rel="stylesheet" type="text/css" href="css/user/receta.css">
</head>
<body>

<!-- RECETA -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">

<div class="col-md-6 black" style="padding: 0; height: 40vh;">
<img src="http://www.viajejet.com/wp-content/viajes/Quesadillas.jpg" class="img-grande">
</div>
<div class="col-md-6 red"style="padding: 0; height: 40vh;"></div>
<div class="col-md-12">
<div class="container receta"> 
  <div class="row row-receta">
    <h1 class="titulo frijole"> {{$receta->titulo}}  </h1> <a href="/user/perfil/{{$receta->user->id}}">{{$receta->user->nick}}</a>
  </div>
  <div class="row row-receta">
    <div class="col-md-6">
      <h2 class="frijole"> Ingredientes: </h2>

      @foreach ($receta->ingredientes as $ingrediente)
      		<p><input type="checkbox"> {{$ingrediente->nombre}}</p>
      @endforeach

      
    </div>

    <div class="col-md-6 vertical-line">
      <h2 class="frijole"> Preparación </h2>
      
        <p> <input type="checkbox"><span class="frijole"> 1.</span> Precalienta el horno a 180°C </p>
        <p> <input type="checkbox"><span class="frijole"> 2.</span> Corta la pasta de hojaldre en cuadros del mismo               tamaño, espolvorealos con azúcar glass y perforalos                 con un tenedor. Hórnealos hasta que estén dorados. </p>
        <p> <input type="checkbox"><span class="frijole"> 3.</span> En una olla, coloca la crema la mantequilla y la             mitad del azúcar. Abrir la vaina de vainilla y poner                 las semillas en la preparación. Tenerla a fuego                     medio hasta que comience a hervir. </p>
        <p> <input type="checkbox"><span class="frijole"> 4.</span> En un bowl mezcla el restante del azúcar, las yemas,         el harina de maíz y la leche. Mezclando                             perfectamente todo. </p>
        <p> <input type="checkbox"><span class="frijole"> 5.</span> Precalienta el horno a 180°C </p>
      
    <img src="http://www.viajejet.com/wp-content/viajes/Quesadillas.jpg" class="img-receta">
    </div>
</div>
<!-- FIN RECETA -->

	<hr>











	<!-- COMENTARIOS -->
		<!-- Contenedor Principal -->
	<div class="comments-container">
		<h1 class="frijole">Comentarios</h1>

		<ul id="comments-list" class="comments-list">


			@foreach($comentarios as $comentario)
				<li>
					<div class="comment-main-level">
						<!-- Avatar -->
						<div class="comment-avatar"><img src="https://tutorsnearyou.co.za/tutors/wp-content/uploads/2017/12/user-icon-2098873.png" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">{{$comentario->user->nick}}</a></h6>
								<span>hace 20 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								{{$comentario->mensaje}}
							</div>
							<div class="right"><i class="far fa-star"></i></div>
						</div>
					</div>
				</li>
			@endforeach
			
		</ul>
	</div>
<!-- FIN COMENTARIOS -->

























</body>
</html>
















@php /*

	<!-- COMENTARIOS -->
		<!-- Contenedor Principal -->
	<div class="comments-container">
		<h1 class="frijole">Comentarios</h1>

		<ul id="comments-list" class="comments-list">
			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Eneko Vázquez</a></h6>
							<span>hace 20 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
						<div class="right"><i class="far fa-star"></i></div>
					</div>
				</div>
				<!-- Respuestas de los comentarios -->
				<ul class="comments-list reply-list">
					<li>
						<!-- Avatar -->
						<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name"><a href="http://creaticode.com/blog">Pedro José</a></h6>
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
							<div class="right"><i class="far fa-star"></i></div>
						</div>
					</li>

					<li>
						<!-- Avatar -->
						<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt=""></div>
						<!-- Contenedor del Comentario -->
						<div class="comment-box">
							<div class="comment-head">
								<h6 class="comment-name by-author"><a href="http://creaticode.com/blog">Eneko Vázquez</a></h6>
								<span>hace 10 minutos</span>
								<i class="fa fa-reply"></i>
								<i class="fa fa-heart"></i>
							</div>
							<div class="comment-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
							</div>
							<div class="right"><i class="far fa-star"></i></div>
						</div>
					</li>




				</ul>
			</li>

			<li>
				<div class="comment-main-level">
					<!-- Avatar -->
					<div class="comment-avatar"><img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg" alt=""></div>
					<!-- Contenedor del Comentario -->
					<div class="comment-box">
						<div class="comment-head">
							<h6 class="comment-name"><a href="http://creaticode.com/blog">Pedro José</a></h6>
							<span>hace 10 minutos</span>
							<i class="fa fa-reply"></i>
							<i class="fa fa-heart"></i>
						</div>
						<div class="comment-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
<!-- FIN COMENTARIOS -->

@endphp