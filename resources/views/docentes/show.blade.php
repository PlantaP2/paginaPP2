<x-layout>

     
    <h1>Selecciona para editar la información</h1>

    <div class="row">
        <div class="container d-flex">
            <div class="col-6 text-center">
                <h5 class="text-center">{{ $profesorLugo->nombre }}</h5>
                <ul class="m-0 p-0">
                    <li>
                        <a href="{{ route('perfil.edit', $profesorLugo->nombre) }}">Información del perfil</a>
                    </li>
                    <li>
                        <a href="">Semblanza</a>
                    </li>
                    <li>
                        <a href="">Intereses en la docencia</a>
                    </li>
                    <li>
                        <a href="">Intereses en la investigación</a>
                    </li>
                    <li>
                        <a href="">Investigaciones</a>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <h5 class="text-center">Profesor Alejandro</h5>
            </div>
        </div>
    </div>
    
</x-layout>