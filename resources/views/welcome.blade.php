<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ricette.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    </head>

  <body class="my-font-text">
    <main>
            <header>
                <nav class="navbar navbar-expand-lg bg-success fixed-top" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Ricette.it</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"      data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('homepage') }}">Home
                                        <span class="visually-hidden">(current)</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-sm-2" type="search" placeholder="Search">
                                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </header>
        <!-- hero -->
        <div id="hero" class="mb-5">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="h1 text-white text-center">Le ricette dello chef Roland</h1>
                            <br>
                            <br>
                            <br>
                            <h3 class="h3 text-white text-center">Dopo il successo dello show Cucinare Guidando lo chef Roland ci insegnerà alcune delle ricette tipiche del nostro paese</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blur"></div>
        </div>
        <div id="card" class="container mt-5">
            <div class="row">
                @foreach($recepies as $recepie)
                <div class="col-12 col-md-4">
                    <div class="card m-3">
                        <h3 class="card-header">{{ $recepie['name'] }}</h3>
                        <div class="card-body">
                            <h5 class="card-title">{{$recepie['type']}}</h5>
                            <h6 class="card-subtitle text-muted">{{$recepie['region']}}</h6>
                        </div>
                        <div xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <img class="img-fluid" src="{{$recepie['img']}}" alt="" style="height: 300px; width:100%"/>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{$recepie['presentation']}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Filtra per regione o tipo di piatto:</li>
                            <li class="list-group-item"><a href="{{route('region', [$recepie['region']])}}"> {{$recepie['region']}}</a></li>
                            <li class="list-group-item"><a href="{{route('tipo', [$recepie['type']])}}"> {{$recepie['type']}}</a></li></li>
                        </ul>
                        <div class="card-body">
                        <a class="btn btn-success text-white" href="{{route('ricette', [$recepie['id']])}}" role="button">Le ricette</a>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <footer>
            <div class="container-fluid bg-success">
                <div class="row">
                    <div class="col-12">
                        <p class="text-white text-center">@all right reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>