<x-layout>
    <x-navbar/>

    
    <div class="container m-0 mx-lg-4 my-5 p-0">
        <div class="row bg-white">
            {{-- Lateral menu --}}
            {{-- <div class="col-4 col-mb-2 mt-5 mt-md-0 pe-0">
                <p class="h6 mb-4 ms-1 p-2 bg-success btn-lg dissabled text-white text-center w-100" >Proyectos</p>
                <ul class="ps-4 p-0 overflow-auto" style="list-style:circle;">
                    @foreach($clients as $client)
                        <li ><a class="h6 text-dark" href="{{ route('clientes.show', $client) }}">{{ $client->name }}</a></li>
                    @endforeach
                </ul>
                
            </div> --}}

            <div class="col-4 col-md-2 text-center p-2 p-md-3">
                <x-slide-bar :clients="$clients">
                    <a class="btn bg-success text-white" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        Proyectos
                    </a>
                </x-slide-bar>
            </div>

            {{-- Content --}}
            <div class="col-8 col-md-10 mb-5 p-2 p-md-3">

                {{--Title--}}
                <div class="row d-flex flex-column-reverse flex-md-row align-items-center mb-5">
                    <div class="col-12 col-md-6">
                        <p class="m-0 mb-md-5 text-center h3">{{ $project->company }}</p>
                    </div>

                    <div class="col-12 col-md-6 mb-4">
                        <img src="{{ asset('/images/logo.png') }}" alt="" class="img-fluid text-center">
                    </div>
                </div>

                {{--information--}}
                <div class="row">

                    {{--name--}}
                    <div class="col-12">
                        <p class="h3">Proyecto:</p>
                        <p class="justify">{{ $project->name }}</p>
                    </div>

                    {{--description--}}
                    <div class="col-12">
                        <p class="h3">Descripción:</p>
                        <p class="justify">{{ $project->description }}</p>
                    </div>

                    {{--problem--}}
                    <div class="col-12">
                        <p class="h3">Problema:</p>
                        <p class="justify">{{ $project->problem }}</p>
                    </div>

                    {{--solution--}}
                    <div class="col-12">
                        <p class="h3">Solución:</p>
                        <p class="justify">{{ $project->solution }}</p>
                    </div>

                    {{--Implementations--}}
                    <div class="col-12">
                        <p class="h3">Implementación:</p>
                        <p class="justify">{{ $project->implementations }}</p>
                    </div>

                    {{--benefits--}}
                    <div class="col-12">
                        <p class="h3">Beneficios:</p>
                        <p class="justify">{{ $project->benefits }}</p>
                    </div>

                    {{--regresar--}}
                    <div class="col-8 col-mb-10">
                        <a href="{{ route('clientes.index') }}" id="button-hover" class="btn btn-outline-success my-3">Regresar</a>
                    </div>

                </div>
            </div>
        </div>
        {{--regresar--}}
        {{-- <div class="row">
            <div class="col-4 col-mb-2"></div>
            <div class="col-8 col-mb-10">
                <a href="{{ route('clientes.index') }}" id="button-hover" class="btn btn-outline-success my-3">Regresar</a>
            </div>
        </div> --}}
    </div>

    <x-footer/>
</x-layout>