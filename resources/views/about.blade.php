@if (10<5) <!--Con arroba podemos ir poniendo funciones que funcionan gracias a laravel-->
    <p>
        Esto solo aparece porque la funciòn que tenemos nos dice que aparecera solo si 4 es menor que 5.
    </p>
@elseif (2==5)
    <p>
        Esto solo aparec porque se evito el tener un caso anterior con elif.
    </p>
@else
    <p>
        Ninguna de las condiciones se cumplio
    </p>
@endif
@empty($ubicación)
    <!-- Solo se ejecutara si detecta que la ubicación es vacia-->
    <h2>
        No se definio la variable ubicación
    </h2>
@endempty

@isset($record)
    <!--Solo se ejecutarà si una de nuestras variables esta definida-->
@endisset