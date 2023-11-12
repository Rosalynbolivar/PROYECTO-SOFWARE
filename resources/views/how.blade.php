<!DOCTYPE html>
<html lang="ES">

@include('layouts.header')

<body>
    @include('layouts.navigation')
    <div class="container py-4">
        <h1>
            Método usado:
        </h1>
        <p>
            Para el desarrollo de este proyecto, se realizó mediante el uso de un microcontrolador esp32 que hace uso de un dht11 para poder obtener los datos deseados de humedad
            y temperatura, para asi poder tener los datos en variables distintas, las cuales serán enviadas a una base de datos mediante el metodo POST.

            <center>
                <div style="width: 1000px; height: 600px;">
                    <img src="https://cdn.shopify.com/s/files/1/0609/6011/2892/files/doc-breadboard-wiring-dht11-esp32-arduino-schematic.png" width="50%" alt="Cableado de esp32 y dht11">
                </div>
            </center>

            Los codigos usados para la implementación de estos está disponible en la siguiente página de Github:

            <a href=""></a>

            
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>