<!doctype html>
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
$Brk_Out_ES_trend=("../Gap_Opt/Brk_Out_ES_trend.txt");
$Brk_Out_ES_form=("../Gap_Opt/Brk_Out_ES_form.txt");
$Brk_Out_ES_season=("../Gap_Opt/Brk_Out_ES_season.txt");
$EoD_ES=("../Gap_Opt/EoD_ES.txt");




$handle1=fopen($Brk_Out_ES_trend, "r");
$handle2=fopen($Brk_Out_ES_form, "r");
$handle3=fopen($Brk_Out_ES_season, "r");
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
      die("error opening a file Gap_Opt_ES_trend.txt");
   }


      if($handle2) {
      while(!feof($handle2)) {
         $buffer2=fgets($handle2, 4096);
         $data2[]=explode($tab, $buffer2);
      }
      fclose($handle2);
   } else {
      die("error opening a file Brk_Out_ES_form.txt");
   }

      if($handle3) {
      while(!feof($handle3)) {
         $buffer3=fgets($handle3, 4096);
         $data3[]=explode($tab, $buffer3);
      }
      fclose($handle3);
   } else {
      die("error opening a file Brk_Out_ES_season.txt");
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
   $dateBR=$data4[4];
   

   $l1BR=filter_var($data[1][0], FILTER_SANITIZE_STRING);  settype($l1BR, 'int');
   $l2BR=filter_var($data[1][2], FILTER_SANITIZE_STRING);  settype($l2BR, 'int');
   $l3BR=filter_var($data[1][5], FILTER_SANITIZE_STRING);  settype($l3BR, 'int');
   $l4BR=filter_var($data[1][6], FILTER_SANITIZE_STRING);  settype($l4BR, 'double');
   $l5BR=filter_var($data[1][20], FILTER_SANITIZE_STRING); settype($l5BR, 'double');
   $l7BR=$l4BR*$l5BR-50; settype($l7BR, 'int');

   $l11BR=filter_var($data[2][0], FILTER_SANITIZE_STRING);  settype($l11BR, 'int');
   $l12BR=filter_var($data[2][2], FILTER_SANITIZE_STRING);  settype($l12BR, 'int');
   $l13BR=filter_var($data[2][5], FILTER_SANITIZE_STRING);  settype($l13BR, 'int');
   $l14BR=filter_var($data[2][6], FILTER_SANITIZE_STRING);  settype($l14BR, 'double');
   $l15BR=filter_var($data[2][20], FILTER_SANITIZE_STRING); settype($l15BR, 'double');
   $l17BR=$l14BR*$l15BR-50; settype($l17BR, 'int');




//---------------------------------------------------------------------------------------

   $m1BR=filter_var($data2[1][0], FILTER_SANITIZE_STRING);  settype($m1BR, 'int');
   $m2BR=filter_var($data2[1][2], FILTER_SANITIZE_STRING);  settype($m2BR, 'int');
   $m3BR=filter_var($data2[1][5], FILTER_SANITIZE_STRING);  settype($m3BR, 'int');
   $m4BR=filter_var($data2[1][6], FILTER_SANITIZE_STRING);  settype($m4BR, 'double');
   $m5BR=filter_var($data2[1][20], FILTER_SANITIZE_STRING); settype($m5BR, 'double');
   $m7BR=$m4BR*$m5BR-50; settype($m7BR, 'int');

   $m11BR=filter_var($data2[2][0], FILTER_SANITIZE_STRING);  settype($m11BR, 'int');
   $m12BR=filter_var($data2[2][2], FILTER_SANITIZE_STRING);  settype($m12BR, 'int');
   $m13BR=filter_var($data2[2][5], FILTER_SANITIZE_STRING);  settype($m13BR, 'int');
   $m14BR=filter_var($data2[2][6], FILTER_SANITIZE_STRING);  settype($m14BR, 'double');
   $m15BR=filter_var($data2[2][20], FILTER_SANITIZE_STRING); settype($m15BR, 'double');
   $m17BR=$m14BR*$m15BR-50; settype($m17BR, 'int');



//------------------------------------------------------------------------

   $n1BR=filter_var($data3[1][0], FILTER_SANITIZE_STRING);  settype($n1BR, 'int');
   $n2BR=filter_var($data3[1][2], FILTER_SANITIZE_STRING);  settype($n2BR, 'int');
   $n3BR=filter_var($data3[1][5], FILTER_SANITIZE_STRING);  settype($n3BR, 'int');
   $n4BR=filter_var($data3[1][6], FILTER_SANITIZE_STRING);  settype($n4BR, 'double');
   $n5BR=filter_var($data3[1][20], FILTER_SANITIZE_STRING); settype($n5BR, 'double');
   $n7BR=$n4BR*$n5BR-50; settype($n7BR, 'int');

   $n11BR=filter_var($data3[2][0], FILTER_SANITIZE_STRING);  settype($n11BR, 'int');
   $n12BR=filter_var($data3[2][2], FILTER_SANITIZE_STRING);  settype($n12BR, 'int');
   $n13BR=filter_var($data3[2][5], FILTER_SANITIZE_STRING);  settype($n13BR, 'int');
   $n14BR=filter_var($data3[2][6], FILTER_SANITIZE_STRING);  settype($n14ON, 'double');
   $n15BR=filter_var($data3[2][20], FILTER_SANITIZE_STRING); settype($n15ON, 'double');
   $n17BR=$n14BR*$n15BR-50; settype($n17BR, 'int');


   $idx1BR=($l7BR+$m7BR+$n7BR)/3; settype($idx1BR, 'int');
   $idx2BR=($l17BR+$m17BR+$n17BR)/3; settype($idx2BR, 'int');




//    <table id='GapOpt'>
//     <th colspan='6'>Strategia WYBICIA - składowa trend</th>
//  <tr>

//       <th>Strategia</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
//   </tr>
//   <tr>
//    <td>$l1BR</td><td>$l2BR</td><td>$l3BR</td><td>$l4BR</td><td>$l5BR</td><td>$l7BR</td>
//   </tr>
//    <tr>
//    <td>$l11BR</td><td>$l12BR</td><td>$l13BR</td><td>$l14BR</td><td>$l15BR</td><td>$l17BR</td>
//   </tr> 
// </table>
// <br>
  
 

//    <table id='GapOpt'>
//     <th colspan='6'>Strategia WYBICIA - składowa formacje</th>
//  <tr>

//     <th>Strategia</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
//   </tr>
//   <tr>
//    <td>$m1BR</td><td>$m2BR</td><td>$m3BR</td><td>$m4BR</td><td>$m5BR</td><td>$m7BR</td>
//   </tr>
//    <tr>
//    <td>$m11BR</td><td>$m12BR</td><td>$m13BR</td><td>$m14BR</td><td>$m15BR</td><td>$m17BR</td>
//   </tr>

 
// </table>
// <br>

//    <table id='GapOpt'>
//     <th colspan='6'>Strategia WYBICIA - składowa sezonowość</th>
//  <tr>

//     <th>Strategia</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
//   </tr>
//   <tr>
//    <td>$n1BR</td><td>$n2BR</td><td>$n3BR</td><td>$n4BR</td><td>$n5BR</td><td>$n7BR</td>
//   </tr>
//    <tr>
//    <td>$n11BR</td><td>$n12BR</td><td>$n13BR</td><td>$n14BR</td><td>$n15BR</td><td>$n17BR</td>
//   </tr>
 
// </table>
// <br>

// echo"

//    <table id='GapOpt'>
//     <th colspan='5'>Indeks strategii wybicia na e-mini S&P500 na dzień: $data4[4]</th>
//  <tr>

//     <th>Kierunek</th><th>Indeks<br>trend</th><th>Indeks<br>formacje</th><th>Indeks<br>sezonowść</th><th>Indeks<br>główny</th>
//   </tr>

//    <tr>
//    <td>kupno</td><td>$l17BR</td><td>$m17BR</td><td>$n17BR</td><td><b>$idx2BR</b></td>
//   </tr>
 
//    <tr>
//    <td>sprzedaż</td><td>$l7BR</td><td>$m7BR</td><td>$n7BR</td><td><b>$idx1BR<b></td>
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
//         <caption>Indeks strategii wybicia na e-mini S&P500 na dzień: $dateBR </caption> 
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
//             <td>$l13BR</td>
//             <td>$l17BR</td>
//             <td>$m13BR</td>
//             <td>$m17BR</td>
//             <td>$n13BR</td>
//             <td>$n17BR</td>
//             <td class='idxtd'>$idx2BR</td>
//           </tr>
//           <tr class='danger'>
//             <td>sprzedaż</td>
//             <td>$l3BR</td>
//             <td>$l7BR</td>
//             <td>$m3BR</td>
//             <td>$m7BR</td>
//             <td>$n3BR</td>
//             <td>$n7BR</td>
//             <td class='idxtd'>$idx1BR</td>
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

<body>

<html>
