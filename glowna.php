
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Strategie giełdowe E-mini S&P500</title>
  <meta name="description" content="Strategie giełdowe na indeks giełdy amerykańskiej S&P 500 oparte na rachunku prawdopodobieństwa">
  <meta name="keywords" content="strategie-giełdowe, giełda, giełda-amerykańska, jak zarabiać na giełdzie, opcje-kupna, opcje-sprzedaży, opcje-amerykańskie, indeks-S&P500, profit-factor, zysk, zarobek, inwestycje">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gojs/1.6.7/go-debug.js"></script>


</head>

  <?php include 'import_NightEdge.php';?>
  <?php include 'import_GapOpt.php';?>
  <?php include 'import_BrkOut.php';?>
  <?php include 'import_DailyEdge.php';?>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"  >

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
       
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Strategie-giełdowe</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#EminiBox">EminiBox</a></li> 
        <li><a href="#Nocka">Nocka</a></li> 
        <li><a href="#Luki">Luki</a></li> 
        <li><a href="#Sesja">Sesja</a></li> 
        <li><a href="#Wybicia">Wybicia</a></li> 
        <li><a href="#kontakt">Kontakt</a></li>
        <li><a href="./tabelki.php" target="blank">Zestawienie tabel</a></li>
        <li><a href="http://www.strategie-gieldowe.blogspot.com" target="blank ">Blog</a></li>
        <li><a href="regulamin.pdf" target="blank">Regulamin</a></li> 
      </ul>
    </div>
  </div>
</nav>

<section>
<div class='container-fluid col-xs-12' style="background-image: url(images/to-2000x1125-22.png)">
<div class='row main-caption'>
  <div class='row'>
    <span><h1 class='text-center'>Strategie giełdowe</h1><span/>
    <p class='text-center'><i>podejście probabilistyczne<i></p>
    <p id="btn1" style='padding-top: 150px;'>
    <a href='#about' ><button type='button' class='btn btn-info' >
    <span class='glyphicon glyphicon-menu-down' style='font-size: 24px;'></span>
    </button></a>
    </p>
  </div >
</div>
</div>
</section >


<section>
<div class="container-fluid bg-grey " >
  <div class="row">
    <div class="col-sm-8">
            <h2 class="pad-up" id="about">Podejście probabilistyczne</h2><br>
      <h4><i>"Na Wall Street nie ma niczego nowego. I nie może być, gdyż spekulacja jest tak stara, jak świat. Cokolwiek dzieje się dziś na rynku, zdarzyło się już wcześniej i zdarzy się znowu za jakiś czas."</i><br>Wspomnienia gracza giełdowego, Edwin Lefevre.
      </h4><br>
      <p>Odnoszenie sukcesów na rynkach finansowych w długim terminie uwarunkowane jest wieloma czynnikami a jednym z podstawowych czynników jest obiektywne określenie przewagi rynkowej.<br>
      Aby więc z dużym prawdopodobieństwem określić czy nasza strategia będzie skuteczną i faktyczną przewagą rynkową zdolną przezwyciężyć krótkoterminową przypadkowość rynków finansowych, należy poddać obiektywnej analizie dużą ilość danych transakcyjnych.<br>
      I tym jest EminiBox - zestawem strategii określających przewagi rynkowe na kontrakcie terminowym e-mini na indeks S&P 500 giełdy amerykańskiej a podstawą określania tych przewag jest analiza dużych zestawów danych typu „big data”.</p>
      
    </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-signal logo  glyph-box slideanim" ></span>
        </div>
  </div>
</div>

</section >

<section>
  <div class="container-fluid" >
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h2 class="text-center pad-up" id="EminiBox">Strategie EminiBox</h2><br>
              <h4>Zestaw strategii EminiBox są to strategie jednodniowe ( "day trading" ) które można zaliczyć do typu „probability trading” a ich podstawą jest analiza wykresu sesyjnego notowań historycznych kontraktów terminowych E-mini na indeks S&P 500 giełdy amerykańskiej z ostatnich 20 lat.</h4><br>
        <p>W skład EminiBox wchodzą 4 oddzielne strategie pozwalające na kompleksową analizę notowań kontraktów terminowych emini na indeks S&P 500 w pełnym zakresie notowań, czyli zarówno notowań sesyjnych jak i pozasesyjnych w kluczowych punktach tych notowań.<br>Wykaz strategii w zestawie EminiBox: </p>
              <ul>
          <li>Strategia Nocka</li>
          <li>Strategia Luki</li>
          <li>Strategia Sesja</li>
          <li>Strategia Wybicia</li>
        </ul>
        
        <p>Każdego dnia, na koniec sesji amerykańskiej prowadzimy identyfikację bieżącej sytuacji kontraktów emini S&P500 w sposób skwantyfikowany i powtarzalny z bardzo ograniczoną możliwością indywidualnej interpretacji, wyłącznie na podstawie wykresu cenowego. Bieżące parametry wykresu określamy jako 3 składowe:</p>
        <ul>
          <li>Sezonowość</li>
          <li>Trend</li>
          <li>Formacje</li>
        </ul>

        <p>Następnie prowadzimy analizę danych historycznych dla wszystkich strategii. Analiza jest przeprowadzana oddzielnie dla zidentyfikowanych 3 składowych określając ich siłę a następnie określana jest wartość średnia tych parametrów dla poszczególnych scenariuszy w poszczególnych strategiach.<br>Wynikiem analizy są Indeksy dla poszczególnych scenariuszy w poszczególnych strategiach.<br> 
        Rozkład siły indeksu:</p>

        <ul>
          <li>Indeks równy 0: sytuacja neutralna, brak wskazań kierunkowych.</li>
          <li>Indeks pomiędzy -20 a 30: sytuacja niepewna, niewystarczający poziom prawdopodobieństwa na ruch w danym kierunku.</li>
          <li>Indeks powyżej 30: analiza historyczna wskazuje, że ruch ceny w danym kierunku jest wysoko prawdopodobny. </li>
          <li>Indeks poniżej -20: analiza historyczna wskazuje, że ruch ceny we wskazanym kierunku jest mało prawdopodobny a wręcz wskazuje na prawdopodobieństwo ruchu przeciwnego.</li>
        </ul>
        <p>Ww. poziomy mogą być dostosowywane indywidualnie przez poszczególne osoby w trakcie nabywania doświadczenia z wykorzystania analiz EminiBox oraz w zależności od indywidualnych zasad zarządzania ryzykiem i kapitałem.<br>Strategie EminiBox można traktować jako indywidualne i niezależne od siebie strategie jednak najbardziej efektywnie możemy wykorzystać EminiBox poprzez podejście kompleksowe w którym poszczególne strategie uzupełniają się a Indeksy wskazujące w tym samym kierunku wzmacniają dany sygnał ,natomiast indeksy wskazujące na przeciwne kierunki negują dany sygnał.</p>
        <h4>WAŻNE</h4>
        <p>Kontrakt terminowy e-mini na indeks S&P 500 jest notowany w cyklu 24 godzinnym w ramach sesji GLOBEX, jednak przeważający wolumen obrotów następuje w trakcie trwania głównej sesji rynku amerykańskiego czyli w godzinach pomiędzy 1530 a 2215 naszego czasu i właśnie te notowania sesyjne są podstawą analiz EminiBox. Część notowań sesji GLOBEX poza notowaniami sesji amerykańskiej traktujemy jako notowania pozasesyjne / nocne i objęte one są analizą strategii Nocka. Patrz wykres poniżej:</p>
      
        <div class="iframe-wrapper">
          <iframe src="presentation.html"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid bg-grey" >
    <div class="row">
      <div class="col-sm-4">
      <span class="slideanim glyphicon glyph-box" ><img src="images/nocka.003.png"></span>
      </div>
      <div class="col-sm-8">
                    <h2 class="pad-up" id="Nocka">Strategia Nocka</h2><br>
      <h4>Strategia Nocka obejmuje notowania pozasesyjne a punktem kluczowym będącym jednocześnie punktem otwarcie pozycji jest zamknięcie sesji amerykańskiej, czyli godzina 2215 naszego czasu a ostatecznym punktem zamknięcia pozycji jest godznia 1530 dnia następnego - czyli otwarcie sesji amerykańskiej.</h4><br>
      <p>Jak wcześniej zostało wspomniane strategia Nocka obejmuje analizę notowań poza sesją główną rynku amerykańskiego. Dlaczego warto analizować notowania indeksu S&P 500 poza głównymi godzinami sesji amerykańskiej ? Okazuje się, że duża część ruchu cenowego tego indeksu odbywa się poza główną sesją amerykańską. Pamietajmy, że w czasie gdy Amerykanie śpią trwa sesja azjatycka i europejska. Jednak analiza wszystkich przyczyn fundamentalnych tych ruchów nie jest tematem naszych analiz, dla nas ważne jest to żeby znaleźć przewagę rynkową o wysokim prawdopodobieństwie sukcesu, a przewagi te często zdarzają się poza notowaniami sesji amerykańskiej. Dobrym przykładem może być analiza rajdu Świętego Mikołaja  - patrz wpis na naszym blogu.<br>
      Jako, że rynek w długim terminie posiada tendencję wzrostową to główny nacisk kładziemy na kupno indeksu na Nockę. </p>
      </div>
    </div>
  </div>
</section>


<section>
<div class="container-fluid" >
  <div class="row">
    <div class="col-sm-8">
            <h2 class="pad-up" id="Luki">Strategia Luki</h2><br>
      <h4>Strategia Luki obejmuje analizę luk tworzących się na otwarciu sesji amerykańskiej, a będących rezultatem pozasesyjnej akcji cenowej. Punktem kluczowym i jednocześnie punktem otwarcia pozycji jest moment otwarcia sesji amerykańskiej, czyli godzina 1530 naszego czasu. Punktem zamknięcia pozycji jest zamknięcie luki czyli cena zamknięcia notowań sesji z dnia poprzedniego lub koniec notowań sesyjnych, czyli godzina 2215 naszego czasu.</h4><br>
      <p>Co to są luki ? Luki tak naprawdę to wynik aktywności cenowej indeksu w godzinach pozasesyjnych. Wielkość luki określamy w momencie otwarcia sesji amerykańskiej czyli o godzinie 1530 naszego czasu i mierzymy ją jako różnicę pomiędzy ceną dzisiejszego otwarcia a ceną zamknięcia z dnia poprzedniego.<br>
Np. jeżeli wczorajsza sesja zamknęła się na poziomie 2150.25 a dzisiejsza otwiera się na poziomie       2155.50 to luka wynosi +5.25 punktu.<br>
Celem strategii jest pokrycie luki, czyli ruch ceny do poziomu zamknięcia z dnia poprzedniego. Tym razem Amerykanie się budzą i rozpoczynają notowania sesyjne gdy cena często dość znacznie odbiega od poziomu zamknięcia ostatniej sesji.<br>
W naszych analizach rozróżniamy 4 rodzaje luk w zależności od strefy otwarcia sesji amerykańskiej:</p>
<ol>
  <li>Otwarcie sesji powyżej wczorajszego maksimum tworzy lukę w strefie 1. Luka dodatnia.</li>
  <li>Otwarcie sesji pomiędzy wczorajszym maksimum a wczorajszym zamknięciem tworzy lukę w strefie 2. Luka dodatnia.</li>
  <li>Otwarcie sesji pomiędzy wczorajszym zamknięciem a wczorajszym minimum tworzy lukę w strefie 3. Luka ujemna.</li>
  <li>Otwarcie sesji poniżej wczorajszego minimum tworzy lukę w strefie 4. Luka ujemna.</li>
</ol>
     


    </div>
        <div class="col-sm-4">
      <span class="slideanim glyphicon glyph-box" ><img src="images/luka.001.png"></span>
    </div>
  </div>
</div>
</section>

<section>
  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
      <span class="slideanim glyphicon glyph-box" ><img src="images/sesja.001.png"></span>
      </div>
      <div class="col-sm-8">
                    <h2 class="pad-up" id="Sesja">Strategia Sesja</h2><br>
      <h4>Strategia Sesja US analizuje sentyment na otwarcie sesji amerykańskiej a punktem kluczowym jest również godzina 1530 naszego czasu, czyli otwarcie sesji. Analiza zakłada otwarcie pozycji w momencie otwarcia sesji amerykańskiej, ale w praktyce stosujemy metody potwierdzenia sentymentu poprzez np. wybicie z 15, 30 lub 60 minutowego zakresu otwarcia. Ostatecznym punktem zamknięcia pozycji jest koniec sesji amerykańskiej czyli godzina 2215 naszego czasu.</h4><br>
      <p>Generalnie wynik analiz strategii Sesja można by określić jako możliwy sentyment na rynku w danych  warunkach trendu, formacji cenowej i sezonowości od otwarcia sesji do jej zakończenia. W praktyce, w celu potwierdzenia ruchu cenowego zgodnego z określonym sentymentem stosujemy wejścia na wybicie z zakresu otwarcia 15 min, 30 min lub 60 min. Podobnie jak w strategii Nocka, ze względu na długoterminową tendencję wzrostową indeksu S&P500 główny nacisk kładziemy na zajmowanie pozycji długich.</p>
      </div>
    </div>
  </div>
</section>

<section>
<div class="container-fluid" >
  <div class="row">
    <div class="col-sm-8">
            <h2 class="pad-up" id="Wybicia">Strategia Wybicia</h2><br>
      <h4>Strategia Wybicia obejmuje analizę wybić szczytów i dołków z dnia poprzedniego. Punktem kluczowym jest tutaj moment wybicia i jest on jednocześnie punktem zajęcia pozycji.Ostatecznym punktem zamknięcia pozycji jest koniec sesji amerykańskiej czyli godzina 2215 naszego czasu.</h4><br>
      <p>Podobnie jak we wszystkich pozostałych strategiach EminiBox tak i w strategii Wybicia stosujemy analizę trendu, formacji cenowej i sezonowości lecz tym razem do określenia możliwej dynamiki ruchu cenowego tzn. prawdopodobieństwa skutecznego wybicia powyżej wczorajszego maksimum lub poniżej wczorajszego minimum.<br>
      Rynek indeksu S&P500 jest bardzo wydajny i w dużej mierze opanowany przez trading algorytmiczny przez co dynamiczne wybicia nie są już tak skuteczne a akcja cenowa ma raczej tendencję do tworzenia fałszywych wybić. Dzięki określeniu jak rynek w danych warunkach zachowywał się w przeszłości możemy uniknąć wielu fałszywych wybić lub odpowiednio je wykorzystać.</p>
           
    </div>
        <div class="col-sm-4">
      <span class="slideanim glyphicon glyph-box" ><img src="images/wybicia.001.png"></span>
    </div>
  </div>
</div>
</section>

<!-- Container (Contact Section) -->
<div id="kontakt" class="container-fluid bg-grey">
  <h2 class="text-center">Kontakt</h2>
  <div class="row">
    <div class="col-sm-5">
      <!-- <p></p>
      <p><span class="glyphicon glyphicon-map-marker"></span></p>
      <p><span class="glyphicon glyphicon-phone"></span></p>
      <p><span class="glyphicon glyphicon-envelope"></span></p> -->
    </div>
    
    <div class="col-sm-7 slideanim">
    <form class="form_mail">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control surname_mail" id="name" name="name" placeholder="Imię i Nazwisko" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control email_mail" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control content_mail" id="comments" name="comments" placeholder="Wiadomość" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Wyślij</button>
          </div>
        </div>
        </form>
      </div>
    
  </div>
</div>


<section style='background-color: #282b31; color: white; padding-top: 50px;padding-bottom: 50px; padding: 20px;'>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-xs-12'>
        <p class='text-justify'><i>Inwestowanie na rynkach finansowych wiąże się z ryzykiem poniesienia straty lub utraty całego kapitału. Informacje oraz opracowania przedstawiane na tej stronie nie mogą być traktowane jako doradztwo finansowe, prawne ani inwestycyjne w rozumieniu Ustawy o obrocie instrumentami finansowymi z dnia 29 lipca 2005 roku ( Dz. U. Nr 183, poz 1538 ) z późniejszymi zmianami. Wszelkie treści zawarte na tej stronie są jedynie odzwierciedleniem osobistych poglądów autora i mają charakter informacyjny oraz edukacyjny, i w żadnym wypadku nie mogą być traktowane jako rekomendacje oraz nie stanowią oferty w rozumieniu art. 66 Kodeksu Cywilnego.</i></p>
      </div>
    </div>
  </div>
</section>

<section class="bg-grey">
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Strategie giełdowe</p> 
</footer>
</section>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage'], p a[href='#about']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<script>

$('document').ready(function(){
    $('.form_mail').on('submit', function(ev) {
      var surname = $('.surname_mail').val();
      var email = $('.email_mail').val();
      var content = $('.content_mail').val();
      var captcha = $('#captcha_code').val();

      // if(captcha == 'chlorine dioxcide') {
      //   $.ajax({
      //     url: 'mail.php',
      //     type:'POST',
      //     data: {
      //       email: email,
      //       content: content
      //     },
      //     success: function(ev){
      //       console.log(ev, 'wyslane');
      //       alert("wysłano wiadomość");
      //     }

      //   })     
      // } else {
      //   alert('Podaj prawidłowy tekst captcha!');
      // }
    ev.preventDefault();
  });
});

// Click on the first tablink on load
// document.getElementsByClassName("tablink")[0].click();
</script>


</body>
</html>
