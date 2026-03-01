<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('Homepage')}}">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chisiamo">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/servizi">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/risultati">Risultati</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 p-5">
            <h2 class="text-white text-center">Chi siamo</h2>
            <p class="text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit iure culpa nostrum inventore atque aspernatur eligendi minus minima id aliquam itaque tenetur labore maxime vitae, reiciendis error nesciunt non provident.</p>
            </div>
            <div class="col-6 text-center p-5">
                <img src="https://picsum.photos/200" >
            </div>
        </div>
</div>
</header>

<section class= "pt-5">
    <div class="container pt-5">
        <div class="row">
            @foreach ($users as $user)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                        <a href="{{route('chisiamodetail', ['name'=>$user['name']])}}" class="card-link">Approfondisci</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>