<x-layout>

        <img src="/images/principal/carrusel/carrusel1.jpg" 
        alt="" class="img-fluid carrusel-principal w-100">

        <div class="container-xl mt-5">
            <h1 class="text-center my-3">Datos del proyecto</h1>

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="bg-secondary mb-5" style="height:1px;"></div>
                </div>
            </div>
        </div>

        @if ($errors->any())
            
            <div class="container-xl my-5 alert ">
                <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="container my-5">
                <div class="row">
                    <div class="col-sm-3"></div>
                        <div class="col-12 col-sm-6">
                            <h4 class="text-center alert alert-success  w-100 mx-0" role="alert">
                                {{$message}}
                            </h4>
                        </div>
                    <div class="col-sm-3"></div>
                </div>
            </div>
        @endif
                        
        <div class="d-flex justify-content-center mb-5 ">

            
            <form action="{{ route('clientes.store') }}" method="post" class="row g-3 border border-ligth rounded-2 d-flex justify-content-center bg-white">
            @csrf    
                <div class="mb-3 row d-flex justify-content-center">
                    <div class="col-12 mt-3 text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf7N8WwhcOCEt3wJ8zD2L59yHlL7L46o0t-sM4cBz4oj7uwiTwRHP4DVOJ6_OzpIfxcw&usqp=CAU" alt="" class="img-fluid bg-transparent">
                    </div>
                    <div class="col-12">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <input type="name" name="name" class="form-control" value="{{ old('name') }}">

                        <label for="company" class="col-sm-2 col-form-label">Empresa</label>
                        <input type="text" name="company"  class="form-control" value="{{ old('company') }}">

                        <div class="row">
                            <div class="col-6">
                                <label for="start-date" class="col-sm-2 col-form-label">Fecha inicio</label>
                                <input type="date" name="start-date" class="form-control" value="{{ old('start-date') }}">
                            </div>
                            <div class="col-6">
                                    <label for="finish-date" class="col-sm-2 col-form-label">Fecha fin</label>
                                <input type="date" name="finish-date" class="form-control" value="{{ old('finish-date') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                                <textarea name="description" id="" 
                                cols="20" rows="10" class="form-control" placeholder="Máximo 1,000 caracteres." 
                                value="{{ old('description') }}" style="height:80px;"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="problem" class="col-sm-2 col-form-label">Problema</label>
                                <textarea name="problem" id="" cols="20" rows="10" class="form-control" placeholder="Máximo 1,000 caracteres." 
                                value="{{ old('solution') }}" style="height:80px;"></textarea>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <label for="solution" class="col-sm-2 col-form-label">Solución</label>
                                <textarea name="solution" id="" cols="20" rows="10" class="form-control" placeholder="Máximo 1,000 caracteres." 
                                value="{{ old('solution') }}" style="height:80px;"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="implementations" class="col-sm-2 col-form-label">Implementaciones</label>
                                <textarea name="implementations" id="" cols="20" rows="10" class="form-control" placeholder="Máximo 1,000 caracteres." 
                                value="{{ old('description') }}" style="height:80px;"></textarea>
                            </div>
                        </div>

                        <label for="benefits" class="col-sm-2 col-form-label">Beneficios</label>
                        <textarea name="benefits" id="" cols="20" rows="10" class="form-control" placeholder="Máximo 1,000 caracteres." 
                        value="{{ old('description') }}" style="height:80px;"></textarea>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline-success  my-3">Agregar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</x-layout>