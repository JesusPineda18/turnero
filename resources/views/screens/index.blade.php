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
    <div class="container-x;l">
        <img src="{{asset('fondo.jpg')}}" alt=""  width="100%" >  
    </div>   
    <!-- Contenedor-card turnos --> 
    <div class="position-absolute top-50 start-50 translate-middle text-center"> 
        <div class=" card  text-center  shadow p-3 ">
            <div class="" style="width: 18rem;">
                  <div class="card-body">
                        <h2 class="card-subtitle mb-2 text-muted">Turno actual</h2>
                        <h1 class="card-title text-primary fw-normal">
                            @if ($next == null)
                                No
                            @else
                                {{$attended->id}} 
                            @endif
                            
                        </h1>
                        <h4 class="card-subtitle mb-2 text-muted">Modulo</h4>
                        <h1 class="card-title text-primary fw-normal">
                            @if ($next == null)
                                No
                            @else
                                {{$attended->professionals->module}}    
                            @endif
                            
                        </h1>
                  </div>
            </div>  
                  <hr>          
                  <div class="card-body  ">
                      <h2 class="card-subtitle mb-2 text-muted">Proximo turno</h2>
                      <h1 class="card-title text-primary fw-normal">
                          @if (isset($next))
                              {{$next->id}}
                          @else
                              NO
                          @endif
                      </h1>
                      <h4 class="card-subtitle mb-2 text-muted">Modulo</h4>
                      <h1 class="card-title text-primary fw-normal">
                        @if (isset($next))
                            {{$next->professionals->module}}
                        @else
                            NO
                        @endif
                      </h1>
                </div>           
            </div>                    
        </div>         
    </div>
</body>
</html>


