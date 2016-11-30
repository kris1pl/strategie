
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Strategie E-mini S&P500</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- [if lt IE 9] -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- [endIf] -->

  <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>

<body>

<?php

$tab = "\t";
$ON_Edge_ES_trend=("./Gap_Opt/ON_Edge_ES_trend.txt");
$ON_Edge_ES_form=("./Gap_Opt/ON_Edge_ES_form.txt");
$ON_Edge_ES_season=("./Gap_Opt/ON_Edge_ES_season.txt");
$EoD_ES=("./Gap_Opt/EoD_ES.txt");




$handle1=fopen($ON_Edge_ES_trend, "r");
$handle2=fopen($ON_Edge_ES_form, "r");
$handle3=fopen($ON_Edge_ES_season, "r");
$handle4=fopen($EoD_ES, "r");


$data=array();
$data2=array();
$data3=array();
$data4=array();

   if($handle1) {
      while(!feof($handle1)) {
         $buffer1=fgets($handle1, 4096);
         $data[]=explode($tab, $buffer1);
   
      }
      fclose($handle1);
   } else {
      die("error opening a file ON_Edge_ES_trend.txt");
   }


      if($handle2) {
      while(!feof($handle2)) {
         $buffer2=fgets($handle2, 4096);
         $data2[]=explode($tab, $buffer2);
      }
      fclose($handle2);
   } else {
      die("error opening a file ON_Edge_ES_form.txt");
   }

      if($handle3) {
      while(!feof($handle3)) {
         $buffer3=fgets($handle3, 4096);
         $data3[]=explode($tab, $buffer3);
      }
      fclose($handle3);
   } else {
      die("error opening a file ON_Edge_ES_season.txt");
   }

      if ($handle4) {
         while (!feof($handle4)) {
            $buffer4=fgets($handle4,4096);
            $data4=explode($tab, $buffer4);
         }
         fclose($handle4);
      } else{
            die("error opening a file EoD_ES");
         }

   //print_r($data);
   //print_r($data2);
   //print_r($data3);
   //print_r($data4);

   $open=$data4[0];
   $min=$data4[1];
   $close=$data4[2];
   $max=$data4[3];
   $dateON=$data4[4];
   

   $l1ON=filter_var($data[1][0], FILTER_SANITIZE_STRING);  settype($l1ON, 'int');
   $l2ON=filter_var($data[1][2], FILTER_SANITIZE_STRING);  settype($l2ON, 'int');
   $l3ON=filter_var($data[1][5], FILTER_SANITIZE_STRING);  settype($l3ON, 'int');
   $l4ON=filter_var($data[1][6], FILTER_SANITIZE_STRING);  settype($l4ON, 'double');
   $l5ON=filter_var($data[1][20], FILTER_SANITIZE_STRING); settype($l5ON, 'double');
   $l7ON=$l4ON*$l5ON; settype($l7ON, 'int');

   $l11ON=filter_var($data[2][0], FILTER_SANITIZE_STRING);  settype($l11ON, 'int');
   $l12ON=filter_var($data[2][2], FILTER_SANITIZE_STRING);  settype($l12ON, 'int');
   $l13ON=filter_var($data[2][5], FILTER_SANITIZE_STRING);  settype($l13ON, 'int');
   $l14ON=filter_var($data[2][6], FILTER_SANITIZE_STRING);  settype($l14ON, 'double');
   $l15ON=filter_var($data[2][20], FILTER_SANITIZE_STRING); settype($l15ON, 'double');
   $l17ON=$l14ON*$l15ON; settype($l17ON, 'int');




//---------------------------------------------------------------------------------------

   $m1ON=filter_var($data2[1][0], FILTER_SANITIZE_STRING);  settype($m1ON, 'int');
   $m2ON=filter_var($data2[1][2], FILTER_SANITIZE_STRING);  settype($m2ON, 'int');
   $m3ON=filter_var($data2[1][5], FILTER_SANITIZE_STRING);  settype($m3ON, 'int');
   $m4ON=filter_var($data2[1][6], FILTER_SANITIZE_STRING);  settype($m4ON, 'double');
   $m5ON=filter_var($data2[1][20], FILTER_SANITIZE_STRING); settype($m5ON, 'double');
   $m7ON=$m4ON*$m5ON; settype($m7ON, 'int');

   $m11ON=filter_var($data2[2][0], FILTER_SANITIZE_STRING);  settype($m11ON, 'int');
   $m12ON=filter_var($data2[2][2], FILTER_SANITIZE_STRING);  settype($m12ON, 'int');
   $m13ON=filter_var($data2[2][5], FILTER_SANITIZE_STRING);  settype($m13ON, 'int');
   $m14ON=filter_var($data2[2][6], FILTER_SANITIZE_STRING);  settype($m14ON, 'double');
   $m15ON=filter_var($data2[2][20], FILTER_SANITIZE_STRING); settype($m15ON, 'double');
   $m17ON=$m14ON*$m15ON; settype($m17ON, 'int');



//------------------------------------------------------------------------

   $n1ON=filter_var($data3[1][0], FILTER_SANITIZE_STRING);  settype($n1ON, 'int');
   $n2ON=filter_var($data3[1][2], FILTER_SANITIZE_STRING);  settype($n2ON, 'int');
   $n3ON=filter_var($data3[1][5], FILTER_SANITIZE_STRING);  settype($n3ON, 'int');
   $n4ON=filter_var($data3[1][6], FILTER_SANITIZE_STRING);  settype($n4ON, 'double');
   $n5ON=filter_var($data3[1][20], FILTER_SANITIZE_STRING); settype($n5ON, 'double');
   $n7ON=$n4ON*$n5ON; settype($n7ON, 'int');

   $n11ON=filter_var($data3[2][0], FILTER_SANITIZE_STRING);  settype($n11ON, 'int');
   $n12ON=filter_var($data3[2][2], FILTER_SANITIZE_STRING);  settype($n12ON, 'int');
   $n13ON=filter_var($data3[2][5], FILTER_SANITIZE_STRING);  settype($n13ON, 'int');
   $n14ON=filter_var($data3[2][6], FILTER_SANITIZE_STRING);  settype($n14ON, 'double');
   $n15ON=filter_var($data3[2][20], FILTER_SANITIZE_STRING); settype($n15ON, 'double');
   $n17ON=$n14ON*$n15ON; settype($n17ON, 'int');


   $idx1ON=($l7ON+$m7ON+$n7ON)/3; settype($idx1ON, 'int');
   $idx2ON=($l17ON+$m17ON+$n17ON)/3; settype($idx2ON, 'int');




//    <table id='GapOpt'>
//     <th colspan='6'>Strategia Nocka - składowa trend</th>
//  <tr>

//       <th>Strategia</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
//   </tr>
//   <tr>
//    <td>$l1</td><td>$l2</td><td>$l3</td><td>$l4</td><td>$l5</td><td>$l7</td>
//   </tr>
//    <tr>
//    <td>$l11</td><td>$l12</td><td>$l13</td><td>$l14</td><td>$l15</td><td>$l17</td>
//   </tr> 
// </table>
// <br>
  
 

//    <table id='GapOpt'>
//     <th colspan='6'>Strategia Nocka - składowa formacje</th>
//  <tr>

//     <th>Strategia</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
//   </tr>
//   <tr>
//    <td>$m1</td><td>$m2</td><td>$m3</td><td>$m4</td><td>$m5</td><td>$m7</td>
//   </tr>
//    <tr>
//    <td>$m11</td><td>$m12</td><td>$m13</td><td>$m14</td><td>$m15</td><td>$m17</td>
//   </tr>

 
// </table>
// <br>

//    <table id='GapOpt'>
//     <th colspan='6'>Strategia Nocka - składowa sezonowość</th>
//  <tr>

//     <th>Strategia</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
//   </tr>
//   <tr>
//    <td>$12</td><td>$n2</td><td>$n3</td><td>$n4</td><td>$n5</td><td>$n7</td>
//   </tr>
//    <tr>
//    <td>$n11</td><td>$n12</td><td>$n13</td><td>$n14</td><td>$n15</td><td>$n17</td>
//   </tr>
 
// </table>
// <br>

// echo"

//    <table id='GapOpt'>
//     <th colspan='5'>Indeks strategii Nocka na e-mini S&P500 na dzień: $data4[4]</th>
//  <tr>

//     <th>Kierunek</th><th>Indeks<br>trend</th><th>Indeks<br>formacje</th><th>Indeks<br>sezonowść</th><th>Indeks<br>główny</th>
//   </tr>

//    <tr>
//    <td>kupno</td><td>$l17</td><td>$m17</td><td>$n17</td><td><b>$idx2</b></td>
//   </tr>
 
//    <tr>
//    <td>sprzedaż</td><td>$l7</td><td>$m7</td><td>$n7</td><td><b>$idx1<b></td>
//   </tr>
//   </table>
//   <br>

//   <table id='zasady'>
//   <tr>
//   <th colspan='6'>Zasady</th>
//   </tr>
//   <tr>
//   <td colspan='6'>
//   <ul>
//   <li>
//   Indeks większy niż 80: silny sygnał na zajęcie pozycji w danym kierunku 
//   </li>
//    <li>
//   Indeks pomiędzy 30 i 80: brak sygnału, sytuacja neutralna
//   </li>
//   <li>
//   Indeks poniżej 30: silny sygnał negujący zajęcie pozycji w danym kierunku
//   </li>
//   <li>Indeks cząstkowy mniejszy niż 30 neguje indeks główny nawet jeżeli ten jest większy niż 80
//   </li>
//    <li>
//    Otwarcie pozycji: na koniec sesji US czyli pomiędzy 2200 a 2215 lub pomidzy 2230 a 2300 czasu polskiego
//   </li>
//    <li>
//    Cel pozycji: otwarcie sesji US dnia następnego lub zgodnie z indywidualnym zarządzaniem pozycją
//   </li>
//    <li>
//    Zlecenie zabezpieczające stop loss na otwarcie pozycji: 10 punków
//   </li>
//     </ul>
//   </td>

//   </tr>



 
// </table>
// <br>
// "

// echo "
// <div class='container-fluid' >
//   <div class='row'>
//     <div class='col-xs-12' class='table-responsive' >
//       <table class='table table-bordered' >
//         <caption>Indeks strategii Nocka na e-mini S&P500 na dzień: $dateON </caption> 
//         <thead>
//           <tr class='warning'>
//             <th rowspan='2' style='padding-bottom: 35px'>Kierunek</th>
//             <th colspan='2'>Składowa trend</th>
//             <th colspan='2'>Składowa formacje</th>
//             <th colspan='2'>Składowa sezonowość</th>
//             <th rowspan='2' style='padding-bottom: 25px' >Indeks<br>główny</th>
//           </tr>
//           <tr class='warning' >
//             <th>Ilość<br>transakcji</th>
//             <th>Indeks<br>trend</th>
//             <th>Ilość<br>transakcji</th>
//             <th>Indeks<br>formacje</th>
//             <th>Ilość<br>transakcji</th>
//             <th>Indeks<br>sezonowość</th>
//           </tr>
//         </thead> 
            
//           </tr>
//           <tr class='success'>
//             <td>kupno</td>
//             <td>$l13ON</td>
//             <td>$l17ON</td>
//             <td>$m13ON</td>
//             <td>$m17ON</td>
//             <td>$n13ON</td>
//             <td>$n17ON</td>
//             <td class='idxtd'>$idx2ON</td>
//           </tr>
//           <tr class='danger'>
//             <td>sprzedaż</td>
//             <td>$l3ON</td>
//             <td>$l7ON</td>
//             <td>$m3ON</td>
//             <td>$m7ON</td>
//             <td>$n3ON</td>
//             <td>$n7ON</td>
//             <td class='idxtd'>$idx1ON</td>
//           </tr>
//         </thead>
//         <tbody>
          
//         </tbody>
//       </table>
//     </div>
//   </div>
// </div>
// "

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<body>

<html>
