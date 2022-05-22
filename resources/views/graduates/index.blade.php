<x-layout>
    <x-navbar></x-navbar>
    <img src="https://cdn.pixabay.com/photo/2015/10/18/19/04/graduation-995042_960_720.jpg" alt="" class="img-fluid w-100">

    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-10">
                <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNPGs8h_toQDYREMjiX6ezRToDXXBIeF8veQ&usqp=CAU" alt="" class="img-fluid"> -->
            </div>
        </div>
    </div>
    
    {{--Informacion--}}
    <div class="container-xl mb-5">
        <div class="row w-full justify-content-center">
            <div class="col-10">
                <h1 class="my-5 text-center">Egresados</h1>
                <x-underline-text/>
                <p class="fw-light text-center text-sm-start">
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
                </p>
            </div>
        </div>
    </div>

    {{--Cifras--}}

    <div class="container-xl mb-5">
        <div class="row justify-content-center">
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
    <div class="container-xl">
        <div class="row justify-content-center">
            <!-- Columnas -->
            @foreach($contacts as $contact)
                <div class=" tarjeta  col-md-5 col-10   mb-3 bg-success ms-md-2 me-md-2 ">
                    <div class="cuerpo-card mb-2 mt-3 bg-white">
                       <h5 class="card-header bg-white mt-2"><span class="">Nombre</span>: {{$contact->name}}</h5>
                        <div class="card-body bg-white">
                            <p class="card-text"><span class="fs-5">Escuela</span>: {{$contact->school}}</p>
                            <p class="card-text"><span class="fs-5">Correo</span>: {{$contact->email}}</p>
                            <p class="card-text"><span class="fs-5">Télefono</span>: {{$contact->telephone}}</p>
                            <h6 class="fs-5">Sobre mí</h6>
                            <div >
                                {{$contact->information}}
                            </div>
                        </div>
                        
                    </div>
                    <div class=" mb-1">
                        <img src="https://www.comunicacionsocial.uam.mx/identidaduam/images/encabezado.png" alt="" class="img-fluid mt-2  bg-success ">

                    </div> 
                    
                </div>
            @endforeach
            
        </div>
        <div class="d-flex justify-content-center">
            {!! $contacts->links() !!}
        </div>
    </div>
    
    <x-footer></x-footer>
</x-layout>