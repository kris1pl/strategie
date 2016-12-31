
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

</head>

  <?php include 'import_NightEdge.php';?>
  <?php include 'import_GapOpt.php';?>
  <?php include 'import_BrkOut.php';?>
  <?php include 'import_DailyEdge.php';?>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



<section>
<div class='container-fluid col-xs-12' style="background-image: url(images/to-2000x1125-22.png)">
<div class='row main-caption'>
  <div class='row'>
    <h1 class='text-center'>Strategie giełdowe</h1>
    <p class='text-center'>EminiBox - zestawienie tabel</p>
    <p style='padding-top: 150px;'>
    <a href='#EminiBox' ><button type='button' class='btn btn-info' id="btn1" >
    <span class='glyphicon glyphicon-menu-down' style='font-size: 24px;'></span>
    </button></a>
    </p>
  </div >
</div>
</div>
</section>

<section class="bgcolor" >

 <div class='container-fluid'>
   <div class='row'>
   <div class='col-xs-12 col-lg-10 col-lg-offset-1'>
     <div class='table-responsive' id='EminiBox' >
       <table class='table table-bordered' class='table-condensed' >
		<caption class='caption'>EminiBox S&P500 na dzień:<?php echo " $dateG"; ?> </caption>
    <thead>
      <tr class="warning">
        <th colspan="4" class="text-center" style="padding: 20px;">Strategia Nocka na: <?php echo " $dateON"; ?></th>
        <th colspan="2" class="text-center" style="padding: 20px;">Kierunek</th>
        <th colspan="1" class="text-center">Indeks<br>nocka</th>
      </tr>
      <tr class="active">
        <td colspan="4" ><i>kupno na koniec sesji amerykańskiej</i></td>
        <td colspan="2" style='background-color: #66ff66' >kupno</td>
        <td colspan="1" class="text-center"><span><b><?php echo "$idx2ON";?></b></span></td> 
      </tr>
    </thead>
		<thead>
		<tr class='warning'>
			<th rowspan='2' class='text-center' style='padding-bottom: 25px'>Słupek cenowy<br>dnia wczorajszego</th>
			<th colspan='2' class='text-center'>Luka otwarcia</th>
			<th colspan='2' class='text-center'>Sesja US</th>
			<th colspan='2' class='text-center'>Wybicia sesja US</th>

		</tr>
		<tr class='warning'>
			<th class='text-center'>Kierunek<br>transakcji</th>
			<th class='text-center'>Indeks<br>luki</th>
			<th class='text-center'>Strefa<br>otwarcia</th>
			<th class='text-center'>Indeks<br>sesja US</th>
			<th class='text-center'>Kierunek<br>wybicia</th>
			<th class='text-center'>Indeks<br>wybicia</th>
		</tr>
		</thead>
    <tbody>
		<tr class='active'>
			<td><i>Strefa 1: otwarcie sesji US powyżej maksimum</i></td>
			<td style='background-color: #ff6666'>sprzedaż</td>
			<td class='text-center'><span><b><?php echo "$idx1G";?></b></span></td>
			<td rowspan='2'><i>Strefa 1: kupno, jeżeli otwarcie sesji US<br>nastąpi powyżej poziomu<br>wczorajszego zamknięcia</i></td>
			<td rowspan='3' class='text-center' style='padding-top: 40px'><span><b><?php echo"$idx3D";?></b></span></td>
			<td style='background-color: #66ff66'>kupno</td>

			<td rowspan='3' class='text-center' style='padding-top: 40px'><span><b><?php echo"$idx2BR";?></b></span></td>
		</tr>
		<tr class='active'>
			<td style='background-color: #85e085'>Szczyt wczorajszej sesji</td>
			<td colspan='2' class='text-center' style='background-color: #85e085'><?php echo"$max";?></td>
			<td rowspan='2'><i>cena wybija się<br>powyżej maksimum<br>wczorajszej sesji US</i></td>

		</tr>
		<tr class='active'>
			<td><i>Strefa 2: otwarcie sesji US pomiedzy zamknięciem i maksimum</i></td>
			<td style='background-color: #ff6666'>sprzedaż</td>
			<td class='text-center'><span><b><?php echo "$idx2G";?></b></span></td>
			<td style='background-color: #66ff66'>Kupno</td>
		</tr>
		<tr class='active'>
			<td style='background-color: #99ccff'>Zamknięcie wczorajszej sesji</td>
			<td colspan='7' style= 'background-color: #99ccff' class='text-center'><?php echo"$close";?></td>

		</tr>
		<tr class='active'>
			<td><i>Strefa 3: otwarcie sesji US pomiedzy zamknięciem i minimum</i></td>
			<td style='background-color: #66ff66'>kupno</td>
			<td class='text-center'><span><b><?php echo "$idx3G";?></b></span></td>
			<td style='background-color: #66ff66'>Kupno</td>
			<td rowspan='3' style='padding-top: 40px;' class='text-center'><span><b><?php echo"$idx4D";?></b></span></td>
			<td rowspan='2'><i>cena wybija się<br>poniżej minimum<br>wczorajszej sesji US</i></td>
			<td rowspan='3' style='padding-top: 40px;' class='text-center'><span><b><?php echo"$idx1BR";?></b></span></td>
		</tr>
		<tr class='active'>
			<td style='background-color: #ff8080'>Minimum wczorajszej sesji</td>
			<td colspan='2' class='text-center' style=' background-color: #ff8080'><?php echo"$min";?></td>
			<td rowspan='2'><i>Strefa 2: kupno, jeżeli otwarcie sesji US<br>nastąpi poniżej poziomu<br>wczorajszego zamknięcia</i></td>

		</tr>
		<tr class='active'>
			<td><i>Strefa 4: otwarcie sesji US poniżej minimum</i></td>
			<td style='background-color: #66ff66'>kupno</td>
			<td class='text-center'><span><b><?php echo "$idx4G";?></b></span></td>
			<td style='background-color: #ff6666'>sprzedaż</td>

		</tr>
		<tr class='active'>
		<td colspan='7'>
		<ul class='row_sum'>
   <li>
   Indeks większy niż 30: silny sygnał na zajęcie pozycji w danym kierunku
   </li>
   <li>
   	Indeks równy 0: sytuacja neutralna
   </li>
    <li>
   Indeks pomiędzy -20 i 30: brak sygnału, sytuacja niepewna
   </li>
     <li>
   Indeks poniżej -20: silny sygnał na zajęcie pozycji w przeciwnym kierunku niż wskazany w tabeli
   </li>
    <li>
    Zlecenie zabezpieczające stop loss na otwarcie pozycji: 10 punków
   </li>
   </ul>
		</td>
		</tr>
    </tbody>
		</table>
	</div>
	</div>
</div>
</div>
<!-- <div class='row' style='margin-top: 160px;'></div> -->
</section>

<section class="bgcolor">
 <div class='container-fluid' >
   <div class='row'>
   <div class='col-xs-12 col-lg-10 col-lg-offset-1'>
     <div class='table-responsive' >
       <table class='table table-bordered' class='table-condensed' >
        <caption class='caption'>Indeks strategii Nocka na e-mini S&P500 na dzień: <?php echo "$dateON";?></caption>
        <thead>
          <tr class='warning'>
            <th rowspan='2' style='padding-bottom: 35px'>Kierunek</th>
            <th colspan='2'>Składowa trend</th>
            <th colspan='2'>Składowa formacje</th>
            <th colspan='2'>Składowa sezonowość</th>
            <th rowspan='2' style='padding-bottom: 25px' >Indeks<br>główny</th>
          </tr>
          <tr class='warning' >
            <th>Ilość<br>transakcji</th>
            <th>Indeks<br>trend</th>
            <th>Ilość<br>transakcji</th>
            <th>Indeks<br>formacje</th>
            <th>Ilość<br>transakcji</th>
            <th>Indeks<br>sezonowość</th>
        </tr>
        </thead>
         <tbody>
          </tr>
          <tr class='success'>
            <td>kupno</td>
            <td><?php echo "$l13ON";?></td>
            <td><?php echo "$l17ON";?></td>
            <td><?php echo "$m13ON";?></td>
            <td><?php echo "$m17ON";?></td>
            <td><?php echo "$n13ON";?></td>
            <td><?php echo "$n17ON";?></td>
            <td><span><b><?php echo "$idx2ON";?></b></span></td>
          </tr>
          <tr class='danger'>
            <td>sprzedaż</td>
            <td><?php echo "$l3ON";?></td>
            <td><?php echo "$l7ON";?></td>
            <td><?php echo "$m3ON";?></td>
            <td><?php echo "$m7ON";?></td>
            <td><?php echo "$n3ON";?></td>
            <td><?php echo "$n7ON";?></td>
            <td ><span><b><?php echo "$idx1ON";?></b></span></td>
          </tr>
          </tbody>
          </table>
    </div>
  </div>
</div>
</div>

<div class='container-fluid'>
   <div class='row'>
   <div class='col-xs-12 col-lg-10 col-lg-offset-1'>
     <div class='table-responsive' >
       <table class='table table-bordered' class='table-condensed' >
        <caption class='caption'>Indeks strategii Luki na e-mini S&P500 na dzień: <?php echo "$dateG";?></caption>
        <thead>
          <tr class='warning'>
            <th rowspan='2' style='padding-bottom: 35px'>Kierunek</th>
            <th rowspan='2' style='padding-bottom: 35px'>Strefa</th>
            <th colspan='2'>Składowa trend</th>
            <th colspan='2'>Składowa formacje</th>
            <th colspan='2'>Składowa sezonowość</th>
            <th rowspan='2' style='padding-bottom: 25px' >Indeks<br>główny</th>
          </tr>
          <tr class='warning' >
            <th>Ilość<br>transakcji</th>
            <th>Indeks<br>trend</th>
            <th>Ilość<br>transakcji</th>
            <th>Indeks<br>formacje</th>
            <th>Ilość<br>transakcji</th>
            <th>Indeks<br>sezonowość</th>
        </tr>
        </thead>
        <tbody>
          </tr>
          <tr class='danger'>
            <td>sprzedaż</td>
            <td><?php echo "$l62G";?></td>
            <td><?php echo "$l64G";?></td>
            <td><?php echo "$l67G";?></td>
            <td><?php echo "$m64G";?></td>
            <td><?php echo "$m67G";?></td>
            <td><?php echo "$n64G";?></td>
            <td><?php echo "$n67G";?></td>
            <td><span><b><?php echo "$idx1G";?></b></span></td>
          </tr>
          <tr class='danger'>
            <td>sprzedaż</td>
            <td><?php echo "$l42G";?></td>
            <td><?php echo "$l44G";?></td>
            <td><?php echo "$l47G";?></td>
            <td><?php echo "$m44G";?></td>
            <td><?php echo "$m47G";?></td>
            <td><?php echo "$n44G";?></td>
            <td><?php echo "$n47G";?></td>
            <td><span><b><?php echo "$idx2G";?></b></span></td>
          </tr>
          <tr class='success'>
            <td>kupno</td>
            <td><?php echo "$l32G";?></td>
            <td><?php echo "$l34G";?></td>
            <td><?php echo "$l37G";?></td>
            <td><?php echo "$m34G";?></td>
            <td><?php echo "$m37G";?></td>
            <td><?php echo "$n34G";?></td>
            <td><?php echo "$n37G";?></td>
            <td><span></span><b><?php echo "$idx3G";?></b><span></span></td>
          </tr>
                    <tr class='success'>
            <td>kupno</td>
            <td><?php echo "$l12G";?></td>
            <td><?php echo "$l14G";?></td>
            <td><?php echo "$l17G";?></td>
            <td><?php echo "$m14G";?></td>
            <td><?php echo "$m17G";?></td>
            <td><?php echo "$n14G";?></td>
            <td><?php echo "$n17G";?></td>
            <td><span><b><?php echo "$idx4G";?></b></span></td>
          </tr>
          </tbody>
          </table>
    </div>
  </div>
</div>
</div>

<!-- ------------------------------------------------------------- -->
 <div class='container-fluid' >
   <div class='row'>
   <div class='col-xs-12 col-lg-10 col-lg-offset-1'>
     <div class='table-responsive' >
       <table class='table table-bordered' class='table-condensed' >
         <caption class='caption'>Indeks strategii sesja US na e-mini S&P500 na dzień: <?php echo "$dateD"?></caption>
         <thead>
           <tr class='warning'>
             <th rowspan='2' style='padding-bottom: 35px'>Kierunek</th>
             <th rowspan='2' style='padding-bottom: 35px'>Strefa</th>
             <th colspan='2'>Składowa trend</th>
             <th colspan='2'>Składowa formacje</th>
             <th colspan='2'>Składowa sezonowość</th>
             <th rowspan='2' style='padding-bottom: 25px' >Indeks<br>główny</th>
           </tr>
           <tr class='warning' >
             <th>Ilość<br>transakcji</th>
             <th>Indeks<br>trend</th>
             <th>Ilość<br>transakcji</th>
             <th>Indeks<br>formacje</th>
             <th>Ilość<br>transakcji</th>
             <th>Indeks<br>sezonowość</th>
         </tr>
         </thead>

          <tr class='success'>
             <td>kupno</td>
             <td><?php echo "$l32D"?></td>
             <td><?php echo "$l34D"?></td>
             <td><?php echo "$l37D"?></td>
             <td><?php echo "$m34D"?></td>
             <td><?php echo "$m37D"?></td>
             <td><?php echo "$n34D"?></td>
             <td><?php echo "$n37D"?></td>
             <td><span><b><?php echo "$idx3D"?></b></span></td>
           </tr>
          <tr class='success'>
             <td>kupno</td>
             <td><?php echo "$l12D"?></td>
             <td><?php echo "$l14D"?></td>
             <td><?php echo "$l17D"?></td>
             <td><?php echo "$m14D"?></td>
             <td><?php echo "$m17D"?></td>
             <td><?php echo "$n14D"?></td>
             <td><?php echo "$n17D"?></td>
             <td><span><b><?php echo "$idx4D"?></b></span></td>
           </tr>
           </table>
     </div>
   </div>
   </div>
   </div>
 </div>

<!-- ------------------------------------------------------------------ -->
 <div class='container-fluid' >
   <div class='row'>
   <div class='col-xs-12 col-lg-10 col-lg-offset-1'>
     <div class='table-responsive' >
       <table class='table table-bordered' class='table-condensed' >
         <caption class='caption'>Indeks strategii wybicia na e-mini S&P500 na dzień: <?php echo "$dateBR"?> </caption>
         <thead>
           <tr class='warning'>
             <th rowspan='2' style='padding-bottom: 35px'>Kierunek</th>
             <th colspan='2'>Składowa trend</th>
             <th colspan='2'>Składowa formacje</th>
             <th colspan='2'>Składowa sezonowość</th>
             <th rowspan='2' style='padding-bottom: 25px' >Indeks<br>główny</th>
           </tr>
           <tr class='warning' >
             <th>Ilość<br>transakcji</th>
             <th>Indeks<br>trend</th>
             <th>Ilość<br>transakcji</th>
             <th>Indeks<br>formacje</th>
             <th>Ilość<br>transakcji</th>
             <th>Indeks<br>sezonowość</th>
           </tr>
         </thead>

           </tr>
           <tr class='success'>
             <td>kupno</td>
             <td><?php echo "$l13BR"?></td>
             <td><?php echo "$l17BR"?></td>
             <td><?php echo "$m13BR"?></td>
             <td><?php echo "$m17BR"?></td>
             <td><?php echo "$n13BR"?></td>
             <td><?php echo "$n17BR"?></td>
             <td><span><b><?php echo "$idx2BR"?></b></span></td>
           </tr>
           <tr class='danger'>
             <td>sprzedaż</td>
             <td><?php echo "$l3BR"?></td>
             <td><?php echo "$l7BR"?></td>
             <td><?php echo "$m3BR"?></td>
             <td><?php echo "$m7BR"?></td>
             <td><?php echo "$n3BR"?></td>
             <td><?php echo "$n7BR"?></td>
             <td><span><b><?php echo "$idx1BR"?></b></span></td>
           </tr>
       </table>
     </div>
   </div>
 </div>
 </div>
</section>

<section style='background-color: #282b31; color: white; padding-top: 50px;padding-bottom: 50px; padding: 20px;'>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-xs-12'>
        <p class='text-justify'><i>Inwestowanie na rynkach finansowych wiąże się z ryzykiem poniesienia straty lub utraty całego kapitału. Informacje oraz opracowania przedstawiane na tej stronie nie mogą być traktowane jako doradztwo finansowe, prawne ani inwestycyjne w rozumieniu Ustawy o obrocie instrumentami finansowymi z dnia 29 lipca 2005 roku ( Dz. U. Nr 183, poz 1538 ) z późniejszymi zmianami. Wszelkie treści zawarte na tej stronie są jedynie odzwierciedleniem osobistych poglądów autora i mają charakter informacyjny oraz edukacyjny, i w żadnym wypadku nie mogą być traktowane jako rekomendacje oraz nie stanowią oferty w rozumieniu art. 66 Kodeksu Cywilnego.</i></p>
      </div>
    </div>
  </div>
</section>

<section class="bgcolor">
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
  $(".navbar a, footer a[href='#myPage'], p a[href='#EminiBox']").on('click', function(event) {
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



</body>
</html>
