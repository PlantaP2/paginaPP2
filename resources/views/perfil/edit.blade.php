<x-layout>
    <h1 class="my-5 text-center">Información del perfil {{ $profesor->nombre }}</h1>


    @if (Session::get('success'))
        <div class="row justify-content-center">
            <div class="col-6">
                <p class="alert alert-success text-center" role="alert">{{ Session::get('success') }}</p>
            </div>
        </div>
    @endif

    <form action="{{ route('perfil.update', $profesor) }}" method="post" class="mb-4">
        @csrf
        @method('PUT')
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                @foreach ($informacionPerfil as $perfil)
                    <input type="text" class="mb-3 form-control" name="informacion" value="{{ $perfil->informacion }}">
                @endforeach

                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-success">Actualizar</button>
                </div>
            </div>
        </div>
    </form>

    <div class="row justify-content-center">
        <div class="col-8">
            <button for="add_info" id="add_info" class="btn btn-outline-secondary mb-3" onclick="mostrar()">Añadir información</button>
            <form action="{{ route('perfil.store') }}" method="post" id="form_info" style="display: none" class="mb-5">
                @csrf
                <input type="text" class="mb-3 form-control" name="informacion" value="">
                <input type="hidden" class="mb-3 form-control" name="profesor_id" value="{{ $profesor->id }}">
                <button type="submit" class="btn btn-outline-success">Agregar</button>
            </form>
        </div>
    </div>
</x-layout>

<script>

let inputInfo = document.querySelector("#form_info");

function mostrar()
{

    if(inputInfo.style.display === 'none'){
        inputInfo.style.display = 'block';
    }else{
        inputInfo.style.display = 'none';
    }
}

</script>