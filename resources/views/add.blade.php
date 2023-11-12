<!DOCTYPE html>
<html lang="ES">

@include('layouts.header')

<body>
    @include('layouts.navigation')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                <div class="card overflow-hidden">
                    <div class="card-body pt-3">
                        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">
                                    <span>Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Explore</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Feed</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Añadir datos</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">
                                    <span>About</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how">
                                    <span>Method used</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Estas añdadiendo datos a la base de datos de manera manual
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <hr>
                <div class="mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ url('insert-data') }}" method="POST">
                                @csrf
        
                                <div class="form-group mb-3">
                                    <label for="">Temperatura</label>
                                    <input type="number" name="tem" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Humedad</label>
                                    <input type="number" name="hum" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Subir Datos</button>
                                </div>
        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>