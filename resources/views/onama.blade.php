@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section
      class=" p-5 p-lg-0 pt-lg-5 text-center text-md-start mb-5"
    >
      <div class="container">
        <div class=" d-sm-flex align-items-center justify-content-between">
          <div class="pt-3 animate__animated animate__flipInX">
            <h1>O nama</h1>
            <p class="lead my-4">
              Mi smo studenti treće godine računarstva,više o nama možete saznati u nastavku. Ovaj projekt
              je nastao u sklopu kolegija <span class="text-primary fw-bold">Razvoj Web Aplikacija</span>.
              Motivacija za ovaj projekt dolazi iz činjenice da previše napuštenih životinja luta gradovima
              naše lijepe zemlje, mi to bar u nekoj mjeri želimo smanjiti. Viziju našeg projekta možete pogledati
              na sljedećoj poveznici.
            </p>
            <div class=" button">
              <p>
                <a class="btn text-white btn-primary" href="https://drive.google.com/file/d/1EltDYuz18QMDgf0euSuLa8ZQhwFoZu7m/view?pli=1" role="button">Vizija projekta</a>
              </p>
                
            </div>
            
          </div >
          <img
            class="img-fluid w-50 h-50 d-none d-md-block animate__animated animate__fadeInRightBig"
            src="storage/showcase.png"
            alt=""
          />
        </div>
      </div>
    </section>


    <!-- Podatci o nama-->

    <section class="class py-3 ">
      <div class="container animate__animated animate__slideInUp">
        <div class="row ">
          <div class="col-md-1 "></div>

          <div class="col-md-4 " >
            <div class="card " >
              <img class="card-img-top img-fluid" src="storage/blaz.png" alt="Card image cap">
              <div class="card-body p-4">
                <h4 class="card-title fw-bold">Blaž Stipić</h4>
                <p class="card-text boja ">
                    <p class="card-text boja">Adresa: Put mira, 71330 Vareš</p>
		                <p class="card-text boja">Datum i mjesto rođenja:13.3.2000, Nova Bila</p>
                    <p class="card-text boja">Zanimanje: Student(Fakultet strojarstva, računarstva i elektroike ,smjer: Računarstvo)</p>
                    <p class="card-text boja">E-mail:blaz.stipic7p@gmail.com</p>
                    <p class="card-text boja">Kontakt:063/632-334</p>
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-md-2 "></div>


          <div class="col-md-4">
            <div class="card "  >
              <img class="card-img-top" src="storage/simo.png" alt="Card image cap">
              <div class="card-body p-4">
                <h4 class="card-title fw-bold">Šimun Jelić</h4>
                <p class="card-text">
                  <p class="card-text boja ">Adresa: Jaklići bb, 88440 Prozor</p>
                  <p class="card-text boja ">Datum i mjesto rođenja: 14.4.2000, Mostar</p>
                  <p class="card-text boja ">Zanimanje:Student(Fakultet strojarstva, računarstva i elektroike ,smjer: Računarstvo)</p>
                  <p class="card-text boja ">E-mail: simun.jelic@fsre.sum.ba</p>
                  <p class="card-text boja ">Kontakt:063/432-101</p></p>
                
              </div>
            </div>
            <div class="col-md-1 "></div>
          </div>
          
        </div>
      </div>
      
      </section>

   <!--ike koristenjai-->

   <section class="mt-3 mb-5 animate__animated animate__fadeInRightBig">
    <div class="container mt-3 text-center">
      <h1 class="h1 pb-5">Korištene tehnologije</h1>
      <div class="row">
        <div class="col">
          <img src="storage/html.png" alt="html" class=" img-fluid">
          <h4 class="pt-1 fw-bold">HTML</h4>
        </div>
        <div class="col">
          <img src="storage/css.png" alt="html" class=" img-fluid">
          <h4 class="pt-1 fw-bold">CSS</h4>
        </div>
        <div class="col">
          <img src="storage/bootsrap.png" alt="html" class=" img-fluid">
          <h4 class="pt-1 fw-bold">Bootstrap</h4>
        </div>
        <div class="col">
          <img src="storage/js.png" alt="html" class=" img-fluid">
          <h4 class="pt-1 fw-bold">JavaScript </h4>
        </div>
        <div class="col">
          <img src="storage/laravel.png" alt="html" class=" img-fluid">
          <h4 class="pt-1 fw-bold">Laravel</h4>
        </div>
        <div class="col">
          <img src="storage/mysql.png" alt="html" class=" img-fluid">
          <h4 class="pt-1 fw-bold">MySQL</h4>
        </div>
      </div>
      
        
  </section>
    

      

@endsection