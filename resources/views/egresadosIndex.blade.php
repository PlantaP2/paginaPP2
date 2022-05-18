<x-layout>
    <x-navbar></x-navbar>

    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <img src="https://cdn.pixabay.com/photo/2015/10/18/19/04/graduation-995042_960_720.jpg" alt="" class="img-fluid">
                <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNPGs8h_toQDYREMjiX6ezRToDXXBIeF8veQ&usqp=CAU" alt="" class="img-fluid"> -->
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    
    {{--Informacion--}}
    <div class="container mb-5">
        <div class="row w-full">
            <div class="col-1"></div>
            <div class="col-10">
                <h1 class="my-5 text-center">Egresados</h1>
                <div class="container">
                    <div class="row d-flex flex-row justify-content-between">
                        <div class="col-1 col-sm-2"></div>
                        <div class="col-10 col-sm-8">
                            <div class="bg-secondary mb-5" style="height:1px;"></div>
                        </div>
                        <div class="col-1 col-sm-2"></div>
                    </div>
                </div>
                <p class="fw-light text-center text-sm-start">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    {{--Cifras--}}

    <div class="container mb-5">
        <div class="row d-flex flex-column flex-md-row ">
            <div class="col-12 col-md-4 px-0 background-img-1 d-flex justify-content-center">
            </div>

            <div class="col-12 col-md-4 col-lg px-0 bg-image background-img-2" style="height:267px;">
                <!-- <img src="http://elemblob.blob.core.windows.net/institucion/uam-i-csh545aaccc91bd9_500w.jpg" alt="" class="img-fluid" style="width:380px;height:267px;"> -->
            </div>

            <div class="col-12 col-md-4 px-0 background-img-3">
                <!-- <img src="http://elemblob.blob.core.windows.net/institucion/uam-i-csh545aaccc91bd9_500w.jpg" alt="" class="img-fluid" style="width:380px;height:267px;"> -->
            </div>
        </div>
    </div>


    {{--Tarjetas egresados--}}
    <div class="container">
        <div class="row">
            <!-- Columnas -->
            @foreach($contacts as $contact)
                <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center">
                    <div class="card border border-dark mb-5" style="height: 20rem">
                        <div class="card-body overflow-auto" >
                            <h5 class="card-title text-decoration-underline"><span class="fs-5 text-decoration-none">Nombre</span>: {{$contact->name}}</h5>
                            <p class="card-text"><span class="fs-5">Escuela</span>: {{$contact->school}}</p>
                            <p class="card-text"><span class="fs-5">Correo</span>: {{$contact->email}}</p>
                            <p class="card-text"><span class="fs-5">Télefono</span>: {{$contact->telephone}}</p>
                            <h6 class="fs-5">Sobre mí</h6>
                            <div  style="possition:absolute;">
                                {{$contact->information}}
                            </div>
                            <!-- <a href="#" class="btn btn-primary"></a> -->
                        </div>
                        
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="d-flex justify-content-end">
            {!! $contacts->links() !!}
        </div>
    </div>
    
    <x-footer></x-footer>
</x-layout>