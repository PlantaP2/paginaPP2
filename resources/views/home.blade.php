<x-layout>
    <x-navbar></x-navbar>
    <div class="container-xl mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Bienvenido') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 d-flex flex-column flex-md-row">
        <div class="row">
            {{--Egresados--}}
            <div class="col-12 col-md-4 mb-4 m-md-0">
                
                <x-icon class="bi bi-mortarboard-fill"/>

                <h2>Egresados</h2>

                <p>Registra un nuevo alumno egresado para mantener su contacto.</p>

                <x-register-link href="{{ route('egresados.create') }}">Registrar</x-register-link>
                
            </div>

            {{--Articulos--}}
            <div class="col-12 col-md-4 mb-4 m-md-0">
                
                <x-icon class="bi bi-file-earmark"/>

                <h2>Articulos</h2>

                <p>Registra un nuevo articulo publicado.</p>

                <x-register-link href="{{ route('articles.create') }}">Registrar</x-register-link>
            </div>

            {{--Clientes--}}
            <div class="col-12 col-md-4 mb-4 m-md-0">
                
                <x-icon class="bi bi-easel3"/>

                <h2>Clientes</h2>

                <p>Agrega la información sobre los nuevos proyectos en los que hayan trabajado.</p>

                <x-register-link href="{{ route('clientes.create') }}">Registrar</x-register-link>
            </div>
        </div>
    </div>

    {{-- <div class="container-xl mt-5">
        <div class="row justify-content-around">
            <!-- Columna 1 -->
            <div class=" col-md-6 col-lg-4  ">
                    
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2013/07/12/15/18/manuscript-149606_960_720.png" class="card-img-top" alt="Articulo" style="height:18rem">
                    <div class="card-body">
                        <h5 class="card-title">Articulos</h5>
                        <p class="card-text">Rellena un formulario para crear una vista rápida de un artículo científico en el área de artículo</p>
                        <a href="{{ route('articles.create') }}" class="btn btn-outline-success d-grid ">Agregar</a>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2016/09/16/19/16/hat-1674894_960_720.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Egresados</h5>
                        <p class="card-text">Rellena un formulario con la información de un ex-alumno para agregarlo al directorio </p>
                        <a href="{{ route('egresados.create') }}" class="btn btn-outline-success d-grid">Agregar</a>
                    </div>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class=" col-md-12 col-lg-4">
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2012/04/14/14/30/newspaper-34126_960_720.png" class="card-img-top" alt="..." style="height:18rem">
                    <div class="card-body">
                        <h5 class="card-title">Anuncios</h5>
                        <p class="card-text">Rellena un formulario para crear transmitir información importante para la comunidad</p>
                        <a href="#" class="btn btn-outline-success d-grid">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <x-footer></x-footer>
</x-layout>