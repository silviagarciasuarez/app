<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>In-Travel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>

            body {
                font-family: 'Nunito', sans-serif;

            }


            /* Creamos una imagen con un título centrado utilizando con varias clases */


            h1, h2 {
                font-family: 'Alfa Slab One', cursive;
                color: grey;
                  font-variant: small-caps;
              
                text-align: center;

                font-size: 300%;
                letter-spacing: 10px;

            }

        h2{
            font-size: large;
            color: grey;
            font-weight: bold; 
        }

        .contenedor {
            height: 600px;
            width: 100%;
            background-image: url("https://cdn.pixabay.com/photo/2016/11/22/22/21/adventure-1850912_1280.jpg");
        }

        .card{
            margin-top: 5%;
          
        }
        
        .parrafo_uno{
             
                border-radius: 25px;
                margin: 2%;
                padding: 4%;
            
            }

            .parrafo_dos{
            
                align: center;
                padding: 2%;
                font-variant: small-caps;
              text-align: center;
              letter-spacing: 10px;
              margin: 2%;
              font-size: 150%;
              margin-top: 2%;
            }

            #dos_columnas{
              margin: 2%;
            }

            #parrafo_youtube{
              font-variant: small-caps;
          
              letter-spacing: 10px;
              margin: 2%;
              font-size: 150%;
            }

            #centrado{
              align: center;
            }

            .fondo_imagen{
                border: 0.5px solid black;
                border-radius: 25px;
                margin: 2%;
                height: 500px;
                align-content: center;
                padding: 10%;
                background-image: url("https://cdn.pixabay.com/photo/2021/07/15/08/44/town-6467851_1280.jpg");
                background-repeat: no-repeat;
                background-size: cover; 
                color: white;
            }

            .background_texto{
              font-variant: small-caps;
          
          letter-spacing: 10px;
          font-size: large;
            color: black;
            font-weight: bold; 
            
           
            }

            footer{
              padding-top: 5%;
            }

        

        </style>

        
    </head>

    
    <body class="antialiased">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">In-Travel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('welcome')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('viaje')}}">Viajes</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('actividad')}}">Actividades</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="nav-item nav-link active" href="{{route('login')}}">Entrar <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{route('register')}}">Registrarse</a>
    </form>
  </div>
</nav>

<div class="contenedor">

		<h1>In-Travel </h1>
        <hr>
        <h2>Never stop exploring</h2>
	</div>

  <div class="card text-center">
  <p class="parrafo_dos">  Asturias es honesta, auténtica, vital, respetuosa con el pasado y con el presente, servicial, valiente, acogedora, moderna y cosmopolita. <hr></p>
          </div>
<!-- 
          tabla de imagenes  -->

          <div class="container" id="tabla_imagenes">
  <div class="row">
    <div class="col-3">
    <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2018/06/22/19/11/river-3491418_1280.jpg" alt="Third slide" width="300" height="200">
    </div>
    <div class="col-3">
    <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/03/18/22/17/beach-4945627_1280.jpg" alt="Third slide" width="300" height="200">
    </div>
    <div class="col-3">
    <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2021/07/24/10/08/naranjo-de-bulnes-6489260_1280.jpg" alt="Third slide" width="300" height="200">

    </div>
    <div class="col-3">
    <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2021/07/15/08/44/town-6467851_1280.jpg" alt="Third slide" width="300" height="200">
    </div>
  </div>
</div>

</div>


    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Todo tipo de aventuras</h5>
        <p class="card-text">¿Quieres saber todo lo que esta dispuesto a ofrecerte este paraíso?</p>
        <a href="{{route('actividad')}}" class="btn btn-primary">Ver actividades</a>
      </div>
    </div>
  </div>

  <!-- cards  -->

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Viajes por el mundo</h5>
        <p class="card-text">¿No sabes dónde, cómo ni con quién? ¡Te damos ideas!</p>
        <a href="{{route('viaje')}}" class="btn btn-primary">Ver viajes</a>
      </div>
    </div>
  </div>
</div>

<hr>

<h1>Las mejores ideas para un día de aventuras </h1>

<hr>
<!-- carousel  -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2020/09/04/12/32/kayak-5543935_1280.jpg" alt="First slide" width="100%" height="600">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/06/07/00/55/bike-trial-2378985_1280.jpg" alt="Second slide" width="100%"height="600">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2017/06/06/00/02/adventure-2375717_1280.jpg" alt="Third slide" width="100%" height="600">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
<!-- columna con video youtube -->

<div class="card text-center"  >
  
<h5 class="card-title" id="parrafo_youtube">Por si aún tienes dudas...</h5>
    <p class="card-text">     <iframe width="560" height="315" src="https://www.youtube.com/embed/T_7b-u84Kvg" title="YouTube video player"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>


     </div>

    
<!-- 
tarjetas con imagenes y texto -->

<div class="card-group">
  <div class="card">
    <img src="https://cdn.pixabay.com/photo/2015/08/20/19/34/rowing-898008_1280.jpg" class="card-img-top" alt="piraguismo">
    <div class="card-body">
      <h5 class="card-title">Descenso del sella</h5>
      <p class="card-text">El descenso del Sella en canoa es la aventura de turismo activo más popular de Asturias y consiste en descender en una canoa por el río Sella desde Arriondas hasta Llovio en un trayecto en el que disfrutaremos de un río que te sorprenderá con rincones y lugares únicos. </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img src="https://cdn.pixabay.com/photo/2018/08/17/06/29/jeep-3612162_1280.jpg" class="card-img-top" alt="Jeep">
    <div class="card-body">
      <h5 class="card-title">Ruta en Jeep</h5>
      <p class="card-text">La Ruta del Cares, que atraviesa los Picos de Europa, permite adentrarse en los bellos parajes asturianos y leoneses. Animaos a descubrirlos con esta ruta de senderismo y en jeep. ¡Atrévete a conocer Asturias en un todoterreno!</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
  <div class="card">
    <img src="https://cdn.pixabay.com/photo/2016/09/04/19/27/paraglider-1644986_1280.jpg" class="card-img-top" alt="parapente">
    <div class="card-body">
      <h5 class="card-title">Parapente en playa o montaña </h5>
      <p class="card-text">
¿Quieres ver nuestro interior o las costas asturianas desde un punto de vista diferente?
¿Quieres volar, sentir el viento en la cara, la emoción de despegar los pies del suelo por un rato y la descarga de adrenalina que genera esta actividad, pero sin renunciar a la seguridad?

¿Quieres sentirte más cerca de las nubes, las aves? ¡Ahora puedes!</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
</div>


<div class="fondo_imagen">
    
              <p class="background_texto">
              Es solo un aperitivo de una experiencia para la que se necesitan los cinco sentidos. Sin ellos no se puede saborear su gastronomía, deslumbrarse con la arquitectura, respirar su naturaleza, escuchar el latido de su corazón urbano o disfrutar la hospitalidad              </div>



  <!-- Footer -->
<footer class="bg-dark text-center text-white">
   
  
   <!-- Section: Form -->
   <section class="section_footer">
     <form action="">
       <!--Grid row-->
       <div class="row d-flex justify-content-center">
         <!--Grid column-->
         <div class="col-auto">
           <p class="pt-2">
             <strong>Suscribete a nuestra newsletter</strong>
           </p>
         </div>
         <!--Grid column-->

         <!--Grid column-->
         <div class="col-md-5 col-12">
           <!-- Email input -->
           <div class="form-outline form-white mb-4">
             <input type="email" id="form5Example21" class="form-control" />
             <label class="form-label" for="form5Example21">Dirección de email </label>
           </div>
         </div>
         <!--Grid column-->

         <!--Grid column-->
         <div class="col-auto">
           <!-- Submit button -->
           <button type="submit" class="btn btn-outline-light mb-4">
             ¡Suscribete!
           </button>
         </div>
         <!--Grid column-->
       </div>
       <!--Grid row-->
     </form>
   </section>

   <section class="mb-4">
     <p>
     EL PARAÍSO NATURAL AL ALCANCE DE TU MANO <br><br>

    Sociedad Pública de Gestión y Promoción Turística y Cultural del Principado de Asturias S.A.U. Todos los derechos reservados <br>
         
    
     </p>
   </section>



 <!-- Copyright -->
 <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   © 2020 Copyright

 </div>
 <!-- Copyright -->
</footer>


    </body>
</html>
