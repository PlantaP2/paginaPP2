<x-layout>
    <x-navbar></x-navbar>
        <h1 class="text-center my-5">Datos del contacto</h1>

        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="bg-secondary mb-5" style="height:1px;"></div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>

        @if ($errors->any())
            
            <div class="container my-5 alert ">
                <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="col-12 col-sm-6 alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        @endif

        @if (session('status'))
            <div class="container my-5">
                <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="col-12 col-sm-6">
                            <h4 class="text-center alert alert-success  w-100 mx-0" role="alert">
                                {{$status}}
                            </h4>
                        </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        @endif
                        
        <div class="d-flex justify-content-center mb-5">

            <form action="{{ route('egresados.store') }}" method="post" class="row border border-ligth rounded-2 d-flex justify-content-center">
            @csrf    
                <div class="mb-3 row d-flex justify-content-center">
                    <div class="col-12">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <input type="name" name="name" class="form-control" value="{{ old('name') }}">

                        <label for="school" class="col-sm-2 col-form-label">Escuela</label>
                        <input type="text" name="school"  class="form-control" value="{{ old('school') }}">

                        <label for="email" class="col-sm-2 col-form-label">Correo</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">

                        <label for="telephone" class="col-sm-2 col-form-label">Telefono</label>
                        <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}">

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary my-3">Agregar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    

    <x-footer/>
</x-layout>