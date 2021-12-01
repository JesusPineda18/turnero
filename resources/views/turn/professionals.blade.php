@php
  use App\Models\Professional;
  $professionals = Professional::all();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuario</title>
</head>
<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 ">
                    <h2 class="fw-bold mb-2 text-uppercase">Profesional</h2>
                    <form action="{{route('turn.store')}}" method="post">
                        @csrf
                        <div class="row" style="margin-bottom: 15px">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <label for="name">Identificacion</label>
                                  <input type="text" name='identification' class='form-control' readonly value="{{$verify[0]->identification}}">
                              </div>
                          </div>
                      </div>
                        <div class="row" style="margin-bottom: 15px">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                  <label for="name">Profesional</label>
                                    <select name="professional" class="form-control">
                                      @foreach ($professionals as $professional)
                                          <option value="{{$professional->id}}">{{$professional->name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%">ENVIAR</button>
                              </div>
                            </div>
                            
                          </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>