<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <header>      
        <div class="navbar bg-ligth shadow-sm p-3 " >
          <div class="container">
            <h1 class="text-primary" >TurnPass</h1>          
       </div>
       <a href="login" type="button" class="btn btn-primary" style="margin-right: 30px;">Iniciar sesion</a>
    </header>

    <div class="position-absolute top-50 start-50 translate-middle text-center " > 

      <div class="container" >
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        

        <div class="carousel-inner shadow p-3 "width="80%" >
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{asset('slide1.jpeg')}}"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>TurnPass</h3>
              <p>Sistema indicador de turnos</p>
            </div>
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{asset('slide2.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Sistema moderno</h4>
              <p>Turnos asignados luego de la lectura de un codigo Qr</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{asset('slide3.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Autonomia</h4>
              <p>El usuario elige el tipo de solicitud y llena el formulario antes de ser atendido (si es requerido) para mayor rendimiento del tiempo</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>