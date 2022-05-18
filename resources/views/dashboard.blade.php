<x-layout>
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Bienvenido') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-center">
                    
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2013/07/12/15/18/manuscript-149606_960_720.png" class="card-img-top" alt="Articulo" style="height:18rem">
                    <div class="card-body">
                        <h5 class="card-title">Articulos</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2016/09/16/19/16/hat-1674894_960_720.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Egresados</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('egresados.create') }}" class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2012/04/14/14/30/newspaper-34126_960_720.png" class="card-img-top" alt="..." style="height:18rem">
                    <div class="card-body">
                        <h5 class="card-title">Anuncios</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</x-layout>