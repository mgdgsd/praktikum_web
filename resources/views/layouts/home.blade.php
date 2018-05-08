<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

    <style type="text/css">
    .flex-equal > * {
      -ms-flex: 1;
      -webkit-box-flex: 1;
      flex: 1;
    }

    @media (min-width: 768px) {
      .flex-md-equal > * {
        -ms-flex: 1;
        -webkit-box-flex: 1;
        flex: 1;
      }
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .fontawe {
        font-size: 23px;
    }

    footer {
        background-color: rgb(255,152,0);
        color: rgb(255,255,255,255);
    }
    </style>

    @yield('css')

</head>
<body>

    <nav class="navbar overflow-hidden navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Suervei</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbr" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbr">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help">Help</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chart">Chart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="container py-5">
            <div class="row">
                <div class="col-6 col-md">
                    <h5>Contact Me</h5>
                    <p><a class="text-white" href="#"><i class="fas fa-envelope"></i></a> &nbsp; mgdgsd.mgmt@gmail.com</p>
                </div>
                <div class="col-12 col-md">
                    <ul class="list-unstyled fontawe">
                        <li><a class="text-white" href="https://twitter.com/mgdgsd"><i class="fab fa-twitter"></i></a> &nbsp; <a class="text-white" href="https://www.instagram.com/mgdgsd/"><i class="fab fa-instagram"></i></a> &nbsp; <a class="text-white" href="https://github.com/mgdgsd"><i class="fab fa-github"></i></a></li>
                    </ul>
                    <small class="d-block mb-3">Mgdgsd &copy; 2018</small>
                </div>
            </div>
         </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    @yield('js')

</body>
</html>
