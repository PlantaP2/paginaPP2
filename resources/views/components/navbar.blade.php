<header class="py-0 mt-0">

    {{-- <div class="container-fluid bg-white p-3 py-md-2">
        <div class="row">
            <div class="col-12"><!--logo-->
                <a href="/" class="text-decoration-none text-white">
                    <img src="{{ asset('images/logo2.png') }}" alt="" class="bg-white img-fluid mx-auto d-block">
                </a>     
            </div><!--fin logo-->
        </div>
    </div> --}}
    
    <div class="container-fluid bg-white border-bottom">
        <div class="row justify-content align-items-center">
            <div class="navbar navbar-expand-md navbar-dark col-12 w-100 justify-content-md-center">
                <a href="/" data-bs-toggle="offcanvas" data-bs-target="#navegacion" class="navbar-toggler collapsed">
                    <img src="{{ asset('images/logo2.png') }}" alt="" height="60" width="auto"  class="bg-white mx-auto d-block">
                </a>
                <button class="navbar-toggler collapsed bg-success" data-bs-toggle="offcanvas" data-bs-target="#navegacion">
                    
                    <i class="navbar-toggler-icon"></i>
                </button>
                <nav class="fs-5 offcanvas-body d-none d-md-flex" style="color:#509f4a">

                    <a href="/">
                        <img src="{{ asset('images/logo2.png') }}" alt="" height="60" width="auto"  class="bg-white  mx-auto d-block">
                    </a>
                    <a href="{{ route('index') }}" class="text-decoration-none me-4 barra-link pt-2 nav-link" style="a:hover{color: blue !important;};color:#509f4a">
                        <i class="bi bi-house me-1"></i>
                        Inicio
                    </a>
                    <a href="{{route('docentes')}}" class="text-decoration-none me-4 barra-link pt-2" style="color:#509f4a">
                        <i class="bi bi-briefcase me-1"></i>
                        Docentes
                    </a>
                    <a href="{{route('egresados.index')}}" class="text-decoration-none me-4 barra-link pt-2" style="color:#509f4a">
                        <i class="bi bi-mortarboard me-1"></i>
                        Egresados
                    </a>
                    <a href="{{route('articles.index')}}" class="text-decoration-none me-4 barra-link pt-2" style="color:#509f4a">
                        <i class="bi bi-book me-1"></i>
                        Articulos
                    </a>
                    <a href="{{ route('academicProduction.index') }}" class="text-decoration-none me-4 barra-link pt-2" style="color:#509f4a">
                        <i class="bi bi-graph-up me-1"></i>
                        Producción academica
                    </a>
                    <a href="#" class="text-decoration-none me-4 barra-link pt-2" style="color:#509f4a">
                        <i class="bi bi-hammer me-1"></i>
                        Servicios externos
                    </a>
                    <a href="{{ route('clientes.index') }}" class="text-decoration-none me-4 barra-link pt-2" style="color:#509f4a">
                        <i class="bi bi-person me-1"></i>
                        Clientes
                    </a>
                        
                    @auth
                        <li class="nav-item dropdown" style="list-style-type:none;color:#509f4a">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> 
                    @endauth
                    
                        <a class="navbar-brand" id="facebook" href="">
                            <i class="bi bi-facebook fs-4"></i>
                        </a>

                        <a class="navbar-brand" id="instagram" href="https://www.instagram.com/cttesuami/">
                            <i class="bi bi-instagram fs-4"></i>
                        </a>
                    
                </nav>
            </div>
            <!--copia del de arriba para el offcanvas en pantallas pequeñas-->
            <div class="offcanvas offcanvas-start bg-dark justify-content-center  " id="navegacion">
    
                <!--para poder cerrar el canvas -->
                <p class="navbar-toggler text-end boton-cerrar-canvas mt-2" data-bs-toggle="offcanvas" data-bs-target="#navegacion">
                    <span class="text-white fw-bold fs-5 ">X</span>
                </p>
    
                <a href="./" class="text-decoration-none text-white">
                    <h2 class="">
                        <img src="./images/logo.png" alt="" class="bg-white b img-fluid">

                    </h2>
                </a>   
                
                <ul class="text-white offcanvas-body list-unstyled">
                        <!-- Authentication Links -->
                        
                        <li class="nav-item pt-2">
                            <a href="{{ route('index') }}" class="text-decoration-none text-white me-2 barra-link" >
                                <i class="bi bi-house me-1"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a href="{{route('docentes')}}" class="text-decoration-none text-white me-2 barra-link">
                                <i class="bi bi-briefcase me-1"></i>
                                Docentes
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a href="{{route('egresados.index')}}" class="text-decoration-none text-white me-2 barra-link">
                                <i class="bi bi-mortarboard me-1"></i>
                                Egresados
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a href="{{route('articles.index')}}" class="text-decoration-none text-white me-2 barra-link">
                                <i class="bi bi-book me-1"></i>
                                Articulos
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a href="{{ route('academicProduction.index') }}" class="text-decoration-none text-white me-2 barra-link">
                                <i class="bi bi-graph-up me-1"></i>
                                Producción academica
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a href="#" class="text-decoration-none text-white me-2 barra-link">
                                <i class="bi bi-hammer me-1"></i>
                                Servicios externos
                            </a>
                        </li>
                        <li class="nav-item pt-2">
                            <a href="{{ route('clientes.index') }}" class="text-decoration-none text-white me-2 barra-link">
                                <i class="bi bi-person me-1"></i>
                                Clientes
                            </a>
                        </li>
                        @auth
                            <li class="nav-item dropdown" style="list-style-type:none;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('home') }}" class="dropdown-item">Home</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> 
                        @endauth

                        <li class="nav-item pt-2">
                            <a class="navbar-brand text-white" id="facebook" href="">
                                <i class="bi bi-facebook fs-4"></i>
                            </a>

                            <a class="navbar-brand text-white" id="instagram" href="">
                                <i class="bi bi-instagram fs-4"></i>
                            </a>
                        </li>
                           
                    </ul>
            </div><!--fin del canvas-->
        </div>
    
    
        <!--boton de whatsapp-->
        <a href="https://api.whatsapp.com/send?phone=+525566009087&text=Hola vi su página en internet" class="float" target="_blank" rel="noopener">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
        </a>
        <!--fin de boton de whatsapp-->
    </div><!--fin container-->
</header><!--fin header-->