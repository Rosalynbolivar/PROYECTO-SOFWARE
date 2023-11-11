<!DOCTYPE html>
<html lang="ES">

@include('layouts.header')

<body>
    @include('layouts.navigation')
    <div class="container py-4">
        <h1>
            La página fue creada por:
        </h1>
        @foreach ($admins as $admin)
            <h3>
                {{ $admin['usuario'] }}
            </h3>
        @endforeach
        <p>
            El objetivo de esta pagina fue creada como un proyecto de laravel para poder realizar el mapeo de la temperatura
             y humedad de distintos lugares haciendo que estos datos acaben dirigiendose a una base de datos desde la que se podria ir procesando para su analisis
        </p>
        <center>
            <div style="width: 1000px; height: 600px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/LOGO_UNSA.png" width="50%" alt="Logo de la UNSA">
            </div>
        </center>
        
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>