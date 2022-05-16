<x-layout>
    <h1 class="my-5 ms-5">Bienvenido </h1>

    <div class="container">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-center">
                
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Agregar articulo</a>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('egresados.create') }}" class="btn btn-primary">Agregar contacto</a>
                    </div>
                </div>
            </div>

            <!-- Columna 3 -->
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card border border-dark mb-5" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Agregar anuncio</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>