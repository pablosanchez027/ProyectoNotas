<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notas</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="{{ route('notas.index') }}" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item ">
                        <a href="{{ url('agregar') }}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>


        @yield('content')


        <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
            </div>
        </main>
        <footer class="foot">
            <div class="ad">
                <p>
                    Esta aplicación es desarrollada en el cursos de IPM
                    <a href="https://twitch.tv/drinkz">Primeros pasos con Laravel </a>.
                </p>
            </div>
            <div class="license">
                <p>© 2021 Derechos Reservados - MAWE TECNOLOGIAS</p>
            </div>
        </footer>
    </div>
</body>
</html>