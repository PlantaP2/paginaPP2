<x-layout>
    <x-navbar></x-navbar>

        <img src="https://scontent.fmex16-1.fna.fbcdn.net/v/t1.6435-9/174346622_103436921886170_2994299914921642913_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=e3f864&_nc_ohc=LB5bFutcsjoAX9QJloz&_nc_ht=scontent.fmex16-1.fna&oh=00_AT_vZNrum9voaaBZcVd5Mvw-x-IzAzdOdfabEb9xk4ORRg&oe=62ACE1E0" 
        alt="" class="img-fluid">
        <h1 class="text-center my-5">Datos del articulo</h1>

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

            
            <form action="{{ route('articles.store') }}" method="post" class="row g-3 border border-ligth rounded-2 d-flex justify-content-center bg-white">
            @csrf    
                <div class="mb-3 row d-flex justify-content-center">
                    <div class="col-12 mt-3 text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf7N8WwhcOCEt3wJ8zD2L59yHlL7L46o0t-sM4cBz4oj7uwiTwRHP4DVOJ6_OzpIfxcw&usqp=CAU" alt="" class="img-fluid bg-transparent">
                    </div>
                    <div class="col-12">
                        <label for="title" class="col-sm-2 col-form-label">Titulo</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">

                        <label for="author" class="col-sm-2 col-form-label">Autor (es)</label>
                        <input type="text" name="author"  class="form-control" value="{{ old('author') }}">

                        <label for="date" class="col-sm-2 col-form-label">Fecha de publicación</label>
                        <input type="date" name="date" class="form-control" value="{{ old('date') }}">

                        <label for="link" class="col-sm-2 col-form-label">Liga</label>
                        <input type="text" name="link" class="form-control" value="{{ old('link') }}">

                        <label for="abstract" class="col-sm-2 col-form-label">Abstract</label>
                        <textarea name="abstract" id="" cols="50" rows="10" class="form-control" placeholder="Máximo 1,000 caracteres."></textarea>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary my-3">Agregar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    

    <x-footer/>
</x-layout>