<x-layout>

        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-8">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            Eliminado con exito
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                          </tr>
                        </thead>

                        <tbody>

                            @if ( count($contacts) > 0 )
                        
                                @foreach ($contacts as $contact)
                                        
                                    <tr scope="row">
                                        <td class="me-5">{{ $contact->name }}</td>

                                        <td class="ms-5 mt-3">
                                            <a href="{{ route('egresados.edit', $contact->name) }}" type="button" class="btn btn-primary">Editar</a>
                                        </td>

                                        <td class="ms-5 mt-3">
                                            <a href="{{ route('egresados.destroy', $contact->name) }}" type="button" class="btn btn-danger">Eliminar</a>
                                        </td>
                                    </tr>

                                @endforeach

                            @else
                            
                            @endif
                          
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {!! $contacts->links() !!}
            </div>
        </div>

</x-layout>