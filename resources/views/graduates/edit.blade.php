<x-layout>

    <x-navbar></x-navbar>

    <div class="container">
        
        <div class="row justify-content-center">

            @if ($message = Session::get('success'))
                <div class="col-8 mt-5">
                    <div class="col-12">
                        <h4 class="text-center alert alert-success  w-100 mx-0" role="alert">
                            {{$message}}
                        </h4>
                    </div>
                </div>
            @endif

            <div class="col-8">
                
                <div class="card my-5">
                    <div class="card-body">
                        <form action="{{ route('egresados.update', $contact) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="col-12 mt-3 text-center">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSf7N8WwhcOCEt3wJ8zD2L59yHlL7L46o0t-sM4cBz4oj7uwiTwRHP4DVOJ6_OzpIfxcw&usqp=CAU" alt="" class="img-fluid bg-transparent">
                            </div>
                            
                            <div class="form-gorup mt-3">
                                <label for="name">Nombre*</label>
                                <input type="text" name="name" class="form-control" required value="{{ old('title', $contact->name) }}">
                            </div>
        
                            <div class="form-gorup mt-3">
                                <label for="school">Escuela*</label>
                                <input type="text" name="school" class="form-control" required value="{{ old('school', $contact->school) }}">
                            </div>
        
                            <div class="form-gorup mt-3">
                                <label for="telephone">Teléfono*</label>
                                <input type="text" name="telephone" class="form-control" required value="{{ old('telephone', $contact->telephone) }}">
                            </div>
        
                            <div class="form-gorup mt-3">
                                <label for="email">Correo*</label>
                                <input type="email" name="email" class="form-control" required value="{{ old('email', $contact->email) }}">
                            </div>
        
                            <div class="form-gorup mt-3">
                                <label for="information">Información*</label>
                                <textarea name="information" id="info-text" cols="30" rows="10" class="form-control" 
                                required value="{{ old('information', $contact->information) }}">{{ $contact->information }}</textarea>
                            </div>

                            <div class="col-auto text-end">
                                <button type="submit" id="button-hover" class="btn btn-outline-success  my-3">Actualizar</button>
                                <a href="{{ route('egresados.show') }}" id="button-hover" type="button" class="btn btn-outline-primary my-3 ms-3">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <x-footer></x-footer>

</x-layout>