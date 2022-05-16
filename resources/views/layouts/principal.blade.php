@extends('layouts.navbar')

@section('navbar')
  <div><!--inicio carrusel-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner carrusel-principal">
        <div class="carousel-item active" data-bs-interval="8000">
          <img src="https://cdn.pixabay.com/photo/2015/11/15/07/47/geometry-1044090_960_720.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="8000">
          <img src="https://cdn.pixabay.com/photo/2016/04/25/18/59/lithuania-1352632_960_720.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="8000">
          <img src="https://cdn.pixabay.com/photo/2019/04/14/10/27/book-4126483_960_720.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
    </div>
  </div><!--fin carrusel-->

  <main class="container-xl mt-4 "><!--contenido principal-->
    <h1 class="text-center">Bienvenido a la PP2</h1>
        
    <div class="  shadow-lg pb-5 mb-3 ">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row justify-content-center my-5 align-items-center" id="bienvenida"><!--inicio contenido pestaña-->
              <h2 class="text-center fw-bold  mb-5">Te damos la bienvenida</h2>
              <img src="https://cdn.pixabay.com/photo/2016/11/22/18/55/technology-1850021_960_720.jpg" class="img-fluid col-md-5 mb-5 mb-md-0" alt="">
              <div class="col-md-6">
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
              </div> 
            </div><!--fin contenido pestaña-->
          </div>
          <div class="carousel-item" data-bs-interval="10000">
            <div class="row justify-content-center my-5 align-items-center" id="bienvenida"><!--inicio contenido pestaña-->
              <h2 class="text-center fw-bold  mb-5">Impacto social</h2>
              <img src="https://cdn.pixabay.com/photo/2016/10/09/08/32/digital-marketing-1725340_960_720.jpg" class="img-fluid col-md-5 mb-5 mb-md-0" alt="">
              <div class="col-md-6">
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
              </div> 
            </div><!--fin contenido pestaña-->
          </div>
            <div class="carousel-item  data-bs-interval="10000"">
              <div class="row justify-content-center my-5 align-items-center" id="bienvenida"><!--inicio contenido pestaña-->
                <h2 class="text-center fw-bold  mb-5">Alianzas</h2>
                <img src="https://cdn.pixabay.com/photo/2020/03/17/17/46/engineer-4941342_960_720.jpg" class="img-fluid col-md-5 mb-5 mb-md-0 " alt="">
                <div class="col-md-6">
                  <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                  <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, suscipit similique ab quam quasi non nostrum possimus dignissimos ad in cupiditate laborum sed repudiandae impedit voluptas cumque modi? Necessitatibus, exercitationem.</p>
                </div> 
              </div><!--fin contenido pestaña-->
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
    </div>
  </main>
  <div class="container-xl mb-5"><!--experiencia-->
    <h1 class="text-center text-success fw-bold">Nuestra Experiencia</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nobis et unde soluta atque similique laboriosam blanditiis delectus numquam, consequatur fuga, ab eos ex nam dolorem corporis recusandae! Voluptatibus, similique.</p>
  </div>
  <!--inicio informacion-->
  <div class="informacion bg-dark pt-4 mb-0">
    <div class="row justify-content-center"><!--inicio tarjetas-->
    
      <div class="card col-md-4 mb-5 me-3"><!--inicio tarjeta-->
        <a href="#" class="text-decoration-none  ">
          <img src="https://cdn.pixabay.com/photo/2018/01/26/09/04/mathematics-3108152_960_720.jpg" class="card-img-top mt-2 " alt="...">
          <div class="card-body ">
            <h5 class="card-title text-center">Nuestros Docentes</h5>
            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nihil perferendis accusantium animi reiciendis ut</p>
          </div>
        </a> 
      </div><!--fin tarjeta-->
      <div class="card col-md-4 mb-5 me-3"><!--inicio tarjeta-->
        <a href="#" class="text-decoration-none ">
          <img src="https://cdn.pixabay.com/photo/2018/05/26/06/46/graduation-cap-3430714_960_720.jpg" class="card-img-top mt-2 " alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Egresados</h5>
            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nihil perferendis accusantium animi reiciendis ut</p>
          </div>
        </a> 
      </div><!--fin tarjeta-->
      <div class="card col-md-4 mb-5 me-3"><!--inicio tarjeta-->
        <a href="#" class="text-decoration-none  ">
          <img src="https://cdn.pixabay.com/photo/2014/06/17/16/53/construction-370588_960_720.jpg" class="card-img-top mt-2 " alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Proyectos</h5>
            <p class="card-text text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nihil perferendis accusantium animi reiciendis ut</p>
          </div>
        </a> 
      </div><!--fin tarjeta-->
    </div><!--fin tarjetas-->
  </div><!--Fin informacion-->

  <!--inicio footer-->
  <footer class="bg-success pt-3 ">
    <div class="row  justify-content-center text-white" >
      <div class="col-md-6 text-center mb-5  ">
        <h2 class="fw-bold ">Siguenos en nuestras redes</h2>
        <div class="row justify-content-lg-center">
          <div class="col-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </div>
          <div class="col-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </div>
        </div>
      </div ><!--fin siguenos en nuestras redes-->

      <div class="col-md-6 text-center mb-5">
        <h2 class="fw-bold">¿Dudas o comentarios?</h2>
        <ul>
          <li>
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
              </svg>
              San Rafael Atlixco... 
            </p>
          </li>
          <li>
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
              contacto@ppp2.com
            </p>
          </li>
          <li>
            <p>              
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
              </svg>
              5512345678

            </p>
          </li>
        </ul>
      </div>

    </div>
  </footer>

      



@endsection   




