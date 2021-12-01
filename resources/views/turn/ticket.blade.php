<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Turno</title>
</head>
<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 ">
                <h2 class="fw-bold mb-2 text-uppercase">Turno</h2>
                <h2 class="fw-bold mb-2 text-uppercase">{{$shift->id}}</h2>
                <h2 class="fw-bold mb-2 text-uppercase">Modulo</h2>
                <h2 class="fw-bold mb-2 text-uppercase">{{$professional->module}}</h2>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>