<x-layout>
    <x-navbar></x-navbar>

    {{--Articles image--}}
    <section class="text-center">
        <img src="https://static.inaturalist.org/projects/10984-cover.jpg?1488264031"
            alt="" style="width:100%" class="h-75">
    </section>

    {{--Articles image--}}
    <section class="text-center mt-5">
        <h2 class="mb-5">Publicaciones</h2>
        <x-underline-text/>
    </section>
    
    {{--Article cards--}}
    <div class="container my-5">
        @foreach($articles as $article )
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-12 col-md-10">
                <div class="card border-top-0 border-end-0 border-start-0 border border-2">
                    <div class="card-body">
                        <a class="card-title fs-4 text text-decoration-none" href="{{ $article->link }}" target="_blank" rel="noreferrer">
                            {{$article->title}}
                        </a>
                        {{--Authors--}}
                        <div class="pt-2">
                            <h6>Autor(es)</h6>
                            <p>{{$article->author}}.</p>
                            
                        </div>
                        {{--Abstrat--}}
                        <div>
                            <h6>Abstract</h6>
                            <p>{{ $article->abstract }}</p>
                        </div>

                        {{--Year--}}
                        <div class="d-flex flex-row">
                            <h6>Fecha de publicación: <span>{{ $article->date }}</span></h6>
                            
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        @endforeach
        
    </div>

    {{--Pagination--}}
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
    
    {{--End article cards--}}

    <x-footer></x-footer>
</x-layout>