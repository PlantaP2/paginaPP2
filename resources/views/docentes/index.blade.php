<x-layout>

    <h1 class="fw-bold my-3 text-center">Conoce a nuestros representantes</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active  fw-bold fs-5" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Raúl L. Leyte</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  fw-bold fs-5" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Alejandro T. Aldaco</button>
            </li>
        </ul>

        <div class="tab-content my-5" id="myTabContent">
           <!--inicia informacion profesor--> 
            <div class="tab-pane fade show active container-xl" id="home" role="tabpanel" aria-labelledby="home-tab">
                <h2 class="text-center">Dr. Raul Lugo Leyte</h2>
                <div class="row align-items-top">
                    <div class="col-md-3 ms-md-4">
                        <img src="images/docentes/lugoleyte.jpg" alt="Imagen profesor Raúl Lugo Leyte" class="img-fluid mt-md-4 pt-md-3 rounded-3">
                            <div class="links mt-2 row ">
                                <h3 class="text-primary col-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                    </svg>
                                </h3>
                            </div>
                    </div>
                        
                    <div class=" col-md-8">
                        <h3 class="mt-4 mt-md-0">Perfil</h3>
                        <ul class="list-group">
                                @foreach ($informacionPerfilProfesorLugo as $perfil)
                                    <li class="list-group-item">{{ $perfil->informacion }}</li>
                                @endforeach
                        </ul>
                    </div>
                </div><!--fin encabezado profe-->

                <div class="container-xl mt-5 info-docentes">
                    <h3 class="fw-bold">Semblanza</h3>
                    <p class="fs-5">Obtuvo el título de ____ de la __nombre universidad____. Posteriormente, obtuvo el grado de   ______  del ______nombre Instituto_____ y el grado de Doctorado en Ingeniería mecánica del __________.</p>
                </div>
                
                <div class="container-xl mt-5 info-docentes">
                    <h3>Intereses en la docencia</h3>
                    <p>//Que le gusta enseñar </p>
                    <h3>Intereses en la investigación</h3>
                    <p>//que temas le apasionan mas </p>
                </div>

                <div class="container-xl mt-5 info-docentes mt-5">
                    <h3 class="fw-bold mb-3 text-center text-md-start">Investigaciones</h3>
                    <ul class="list-group mb-3">
                        <li class="list-group-item ">
                            <h4 class="articulo">Thermoeconomic Diagnosis of the Sequential Combustion Gas Turbine ABB/Alstom GT24.</h4>
                        </li>
                        <li class="list-group-item">
                            <h4 class="articulo">Comparative Thermodynamic Analysis of the Performance ofan Organic Rankine Cycle Using Different Working Fluids.</h4>
                        </li>
                        <li class="list-group-item">
                            <h4 class="articulo">Comparison of the Parameters of the Exergoeconomic Environmental Analysis of Two Combined Cycles of Three Pressure Levels with and without Postcombustion.</h4>
                        </li>
                        <li class="list-group-item">
                            <h4 class="articulo">Synthesis of biodiesel from coconut oil and characterization of its blends.</h4>
                        </li>
                        <li class="list-group-item">
                            <h4 class="articulo">Interstage Pressures of a Multistage Compressor with Intercooling.</h4>
                        </li>
                    </ul>
                </div>
            </div><!--termina informacion profesor--> 
        
            <!--inicia informacion profesor-->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h2 class="text-center">M. Alejandro Torres Aldaco</h2>
                <div class="row align-items-top">
                    <div class=" col-md-3 ms-md-4">
                        <img src="images/docentes/torresAldaco.jpg" alt="Imagen Alejandro Torres Aldaco" class="img-fluid mt-md-4 pt-md-3 rounded-3">
                        <div class="links mt-2 row ">
                            <h3 class="text-primary col-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                </svg>
                            </h3>
                        </div>
                    </div>
                    <div class=" col-md-8">
                        <h3 class="mt-4 mt-md-0">Perfil</h3>
                        <ul class=" list-group">
                            @foreach ($informacionPerfilProfesorAlejandro as $perfil)
                                    <li class="list-group-item">{{ $perfil->informacion }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div><!--fin encabezado profe-->
                <div class="container-xl mt-5 info-docentes">
                    <h3 class="fw-bold">Semblanza</h3>
                    <p class="fs-5">Obtuvo el título de ____ de la __nombre universidad____. Posteriormente, obtuvo el grado de   ______  del ______nombre Instituto_____ y el grado de Doctorado en Ingeniería mecánica del __________.</p>
                </div>
                <div class="container-xl mt-5 info-docentes">
                    <h3>Intereses en la docencia</h3>
                    <p>//Que le gusta enseñar </p>
                    <h3>Intereses en la investigación</h3>
                    <p>//que temas le apasionan mas </p>
                </div>
                <div class="container-xl mt-5 info-docentes mt-5">
                    <h3 class="fw-bold mb-3 text-center text-md-start " >Investigaciones</h3>
                    <ul class="list-group mb-3">
                        <li class="list-group-item ">
                            <h4 class="articulo">Comparacion energetica entre los refrigerantes R-134a y R-22. FECHA DE ACEPTACION: 11/18/2003. FECHA DE PUBLICACION: 03/15/2004. REVISTA: Cientifica: The Mexican Journal of Electromechanical Engineering. ESIME. IPN.. VOLUMEN: 8. NUMERO: 1. PAGINA.</h4>
                        </li>
                        <li class="list-group-item">
                            <h4 class="articulo">THERMAL PERFORMANCE OF COMPOSED PIPE IN A PARABOLIC TROUGH COLLECTOR FECHA DE ACEPTACION: 30/04/2005 FECHA DE PUBLICACION: 06/08/2005 REVISTA: PROCEEDING OF THE 2005 SOLAR WORLD CONGRESS PAGINA INICIAL: 1 PAGINA FINAL: 6 PAIS: USA IDIOMA:.</h4>
                        </li>
                    </ul>
                </div>
            </div><!--termina informacion profesor-->
        </div>
</x-layout>