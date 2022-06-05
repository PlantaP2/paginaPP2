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
                <x-register-link href="{{ route('egresados.show') }}">Actualizar información.</x-register-link>
                
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

    <x-footer></x-footer>
</x-layout>