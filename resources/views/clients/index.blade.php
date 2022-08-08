<x-layout>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-5 text-center">Selecciona un proyecto</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            
                @foreach($clients as $client)
                <div class="col-12 mb-3 border-top p-3">
                    <div class="d-flex flex-column flex-md-row ">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('/images/logo.png') }}" class="card-img-top" alt="...">
                        </div>
                        
                        <div class="col-12 col-md-8 border-md-start">
                            <div class="card-body">
                                
                                    <h5 class="card-title text-success">{{ $client->name }}</h5>
                                    <p class="card-text justify">{{ $client->description }}</p>
                                    <a href="{{ route('clientes.show', $client) }}" id="button-hover" class="btn btn-outline-success">Ver más</a>
                                    @guest
                                        @else
                                            <a href="{{ route('clientes.edit', $client) }}" class="btn btn-outline-primary">Editar</a>

                                    @endguest
                                        
                                    
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
        </div>
    </div>

    {{--Pagination--}}
    <div class="d-flex justify-content-center">
        {{ $clients->links() }}
    </div>

</x-layout>