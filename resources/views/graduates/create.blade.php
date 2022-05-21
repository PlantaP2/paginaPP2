<x-layout>
    <x-navbar></x-navbar>

        <img src="https://scontent.fmex16-1.fna.fbcdn.net/v/t1.6435-9/174346622_103436921886170_2994299914921642913_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_ohc=LB5bFutcsjoAX9QJloz&_nc_ht=scontent.fmex16-1.fna&oh=00_AT_vZNrum9voaaBZcVd5Mvw-x-IzAzdOdfabEb9xk4ORRg&oe=62ACE1E0" 
        alt="" class="img-fluid">
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
                        
        <div class="d-flex justify-content-center mb-5 ">

            
            <form action="{{ route('egresados.store') }}" method="post" class="row g-3 border border-ligth rounded-2 d-flex justify-content-center bg-white">
            @csrf    
                <div class="mb-3 row d-flex justify-content-center">
                    <div class="col-12 mt-3 text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf7N8WwhcOCEt3wJ8zD2L59yHlL7L46o0t-sM4cBz4oj7uwiTwRHP4DVOJ6_OzpIfxcw&usqp=CAU" alt="" class="img-fluid bg-transparent">
                    </div>
                    <div class="col-12">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <input type="name" name="name" class="form-control" value="{{ old('name') }}">

                        <label for="school" class="col-sm-2 col-form-label">Escuela</label>
                        <input type="text" name="school"  class="form-control" value="{{ old('school') }}">

                        <label for="email" class="col-sm-2 col-form-label">Correo</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">

                        <label for="telephone" class="col-sm-2 col-form-label">Telefono</label>
                        <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}">

                        <label for="information" class="col-sm-2 col-form-label">Información</label>
                        <textarea name="information" id="" cols="50" rows="10" class="form-control" placeholder="Máximo 250 caracteres."></textarea>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary my-3">Agregar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    

    <x-footer/>
</x-layout>