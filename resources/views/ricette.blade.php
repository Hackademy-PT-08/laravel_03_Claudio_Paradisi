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
        <div class="container-fluid my-5 ml-3">
            <div class="row justify-content-around ">
                <div class="col-6">
                    <figure>
                        <img class="img-fluid"src="{{$recepie['img']}}" alt="">
                        <figcaption class="h4">Tipo di piatto: {{$recepie['type']}} <br>Regione: {{$recepie['region']}} </figcaption>
                    </figure>

                </div>
                <div class="col-6">
                    <h3 class="h2">{{$recepie['name']}}</h3>
                    <p>{{$recepie['details']}}</p>

                </div>
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