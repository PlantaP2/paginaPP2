<x-layout>


    <h1 class="my-4 text-center">Selecciona para editar la información</h1>

    @if (Session::get('success'))
        <div class="row justify-content-center">
            <div class="col-6">
                <p class="alert alert-success text-center" role="alert">{{ Session::get('success') }}</p>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="container d-flex">
            @foreach ($profesores as $profesor)
                <div class="col-6 text-center mb-4">
                    <h5 class="text-center">{{ $profesor->nombre }}</h5>
                    <ul class="m-0 p-0">
                        <li class="mb-3">
                            <a href="{{ route('perfil.edit', $profesor->nombre) }}" class="btn btn-primary">Información del perfil</a>
                        </li>
                        <li class="mb-3">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseSemblanza-{{ $profesor->id }}" role="button" aria-expanded="false" aria-controls="collapseSemblanza-{{ $profesor->id }}">
                                Semblanza
                            </a>

                            <x-informacion action="{{ route('semblanza.update', $profesor) }}" 
                            name="semblanza" id="collapseSemblanza-{{ $profesor->id }}" :informacion="$profesor->semblanza" />
                            
                        </li>
                        <li class="mb-3">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseDocencia-{{ $profesor->id }}" role="button" aria-expanded="false" aria-controls="collapseDocencia-{{ $profesor->id }}">
                                Intereses en la docencia
                            </a>

                            <x-informacion action="{{ route('docencia.update', $profesor) }}" 
                            name="intereses_doc" id="collapseDocencia-{{ $profesor->id }}" :informacion="$profesor->Int_docencia" />
                        </li>
                        <li class="mb-3">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseIntInvestigaciones-{{ $profesor->id }}" role="button" aria-expanded="false" aria-controls="collapseIntInvestigaciones-{{ $profesor->id }}">
                                Intereses en la investigación
                            </a>

                            <x-informacion action="{{ route('investigacion.update', $profesor) }}" 
                            name="Int_investigaciones" id="collapseIntInvestigaciones-{{ $profesor->id }}" :informacion="$profesor->Int_investigacion" />
                        </li>
                        <li>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseInvestigaciones-{{ $profesor->id }}" role="button" aria-expanded="false" aria-controls="collapseInvestigaciones-{{ $profesor->id }}">
                                Investigaciones
                            </a>

                            <x-informacion action="{{ route('investigaciones.update', $profesor) }}" 
                            name="investigaciones" id="collapseInvestigaciones-{{ $profesor->id }}" :informacion="$profesor->investigaciones" />
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>

<script>
    let inputInfo = document.querySelector("#form_info");

    function mostrar() {

        if (inputInfo.style.display === 'none') {
            inputInfo.style.display = 'block';
        } else {
            inputInfo.style.display = 'none';
        }
    }
</script>