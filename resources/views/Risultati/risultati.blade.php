<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <div class="container-fluid risultati">
        <div class="row justify-content-center align-items-center">
            <div class="row">
                <h2 class="mb-5 text-white text-center" >Ultimi risultati</h2>
            </div>
            @foreach ($risultati as $risultato)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$risultato['img']}}" class="card-img-top card-img">
                    <div class="card-body">
                    <h5 class="card-title">{{$risultato['titolo']}}</h5>
                    <p class="card-text">{{$risultato['risultato']}}</p>
                    <a href="{{route('risultati.detail', ['id'=>$risultato['id']])}}" class="btn btn-primary">Leggi di piu'</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
</header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>