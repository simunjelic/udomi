@extends('layouts.app')

@section('content')

<!-- Page Content -->
<section class="p-4 text-center  mt-1">
    <div class="container">
      <div class="container">
    <div class="d-md-flex text-center justify-content-center">
      <div class="pt-5">
        <h1  class="animate__animated animate__flipInX">Udomi u par <span class="text-primary ">KLIKOVA</span></h1>
        <p class="lead animate__animated animate__flipInX">Dobrodošli na mjesto gdje možete pronaći ljubimca pogodnog za vas u samo par klikova.</p>
      </div>
      <img src="storage/dogPocetna-removebg-preview.png" alt="dog" class="img-fluid dog1 d-none d-md-block animate__animated animate__fadeInRightBig">
    </div>
  </div>
</div>
  </section>

    <!-- Slike životinja-->

    <section class="class animate__animated animate__slideInUp">
    <div class="container  mb-5  ">
      <div class="row mt-1">

        <div class="col-md jump">
          <div class="card m-1">
            <img src="storage/dog1.png" alt="dog1" class="card-img-top ">
            <div class="card-body p-4 rouneded-bottom ">
              <h5 class="card-title fw-bold">Max i njegova braća</h5>
              <p class="card-text boja">
                Moja braća i ja smo pronašli  sreću, evo kako.
            Riki, Rex i ja, Max, doskora smo živjeli na ulici i kada smo izgubili svaku nadu da ćemo imati dom po nas je došao on, naš spasitelj. 
            Sretni smo i zahvalni što postoje ljudi koji su spremni učiniti velike stvari za naše male živote, ali i mi to stostruko vratimo svojom ljubavlju i razigranošću.

              </p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card rounded m-1">
            <img src="storage/cat1.png" alt="dog1" class="card-img-top">
            <div class="card-body p-4 rouneded-bottom">
              <h5 class="card-title fw-bold">Fiona</h5>
              <p class="card-text boja pb-4">Ja sam Fiona! Odrasla sam uz kante za smeće i preživjela zahvaljujući njihovim sadržajima.
                 Jedan dan se dogodilo čudo. Neki dvonošci su me uspjeli uloviti, nahranili me, očistili i smjestili u svoju kuću.
                  Bilo je doista čudesno doživjeti da me netko nakon dugo vremena voli, mazi i čuva. Hvala što ste me spasili samoće.</p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card m-1">
            <img src="storage/dog2.png" alt="dog1" class="card-img-top">
            <div class="card-body p-4 rouneded-bottom">
              <h5 class="card-title fw-bold">Charli</h5>
              <p class="card-text pb-4 boja">
                Iako sam još jako mali doživio sam puno loših iskustava otkako sam izgubio majku.Moje život je bilo jako teško i bolno,
                    sve dok se nisu pojavili Oni,moji prvi vlasnici i moji novi prijatelji.
                   Sada sam sretan! Udomila me divna obitelj koja mi pruža obilje ljubavi, a ja odrastam u zdravog i umiljatog psića.

              </p>
            </div>
          </div>
        </div>

        <div class="col-md">
          <div class="card m-1">
            <img src="storage/cat2.png" alt="dog1" class="card-img-top">
            <div class="card-body p-4 rouneded-bottom">
              <h5 class="card-title fw-bold ">Garfild</h5>
              <p class="card-text boja pb-4">
                Ja sam lijeni mačak koji jako voli da spava i jede.
                Na žalost nisam mogao spavati ugodno na ulici od hladnoće,
                a hrana je bila jako loša.Jednog dana dvoje  ljudi pokupilo me i odvelo u svoj dom,gdje su mi dali krevetić.
                Po svojim karakteristikama moji novi vlasnici nazvali su me Garfild, meni se sviđa, a Vama?

              </p>
            </div>
          </div>
        </div>
        
          
        </div>
      </div>

      </section>

   <!--Tekst zašto udomiti-->
      <section class="mt-3 mb-5">
        <div class="container mt-3 text-center animate__animated animate__fadeInRightBig">
          <h1 class="h1 mb-3 ">Zašto udomiti psa ili mačku?</h1>
            <div class="rounded border-primary card mb-2 ">
              <div class="card-body ">
              <p class="text-justify p-2"> Ljudi su oduvijek imali potrebu stvarati veze sa životinjama, a odnos ljudi i životinja predstavlja važnu sastavnicu njihovih života od 
				Još oko 12000 godine p.n.e započeo je proces domestifikacije životinja, a kućni ljubimac kakvog danas poznajemo izrazito je važan za čovjeka, te smatran članom obiteljidavnih vremena.
				Osim toga, on ima niz funkcionalnih uloga, čovjekov je pomagač, prijatelj i suputnik. U posljednje vrijeme sve više raste svijest ljudi o dobrobiti koju kućni ljubimci imaju na njihovo psihičko i fizičko zdravlje te dolazi do sve većeg priznanja njihove terapeutske vrijednosti i razvoja kliničke terapije potpomognute životinjama 
				Ljudi koriste životinje na brojnim područjima svog djelovanja i rada. Kroz godine, i u različitim istraživanjima pokušala se istražiti dobrobit kućnih ljubimaca na djecu i odrasle osobe.Poznato je da se ljudi često znaju predstavljati kao osobe sklonije psima (engl. dog person) ili osobe sklonije mačkama (engl. cat person), sugerirajući time da njihove crte ličnosti odgovaraju ili psima ili mačkama.
      </p> </div>
            </div>
            
              
            

            <div class="rounded border-primary card">
              <div class="card-body ">
                <p class="text-justify ">
                Takvo predstavljanje temeljeno je na kulturalnom vjerovanju i stereotipima da vrsta kućnog ljubimca (pas ili mačka) prema kojoj pojedinac ima jači afinitet, govori nešto i o ličnosti tog pojedinca.
				        Neki autori zaključuju da vlasnici kućnih ljubimaca pokazuju manje razine usamljenosti, imaju veće samopouzdanje te su skloni više se baviti tjelesnom aktivnošću. Ukratko, kućni ljubimci veliki su izvor socijalne podrške te fizičke i psihološke dobrobiti za svoje vlasnike. Tako stereotipno vjerovanje pretpostavlja da su vlasnici pasa energičniji, društveniji i skloniji pravilima, a vlasnici mačaka otvorenijih pogleda na život i povučeniji.
				          Ljudi su skloni stvarati tople emotivne i privržene veze sa svojim kućnim ljubimcima (posebice s psima i mačkama koji za privržene veze imaju najviše potencijala) što doprinosi njihovoj općoj dobrobiti, ali i osjećaju sigurnosti .Woodward i Bauer (2007) došli su do zaključka da ljudi koji su manje hostilni i submisivni predstavljaju psa kao svoju idealnu životinju. 
                </p>   </div>
            </div>

          </div>
        </div>
      </section>

      

@endsection