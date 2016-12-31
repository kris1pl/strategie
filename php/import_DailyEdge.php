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
$Daily_Edge_ES_trend=("../Gap_Opt/Daily_Edge_ES_trend.txt");
$Daily_Edge_ES_form=("../Gap_Opt/Daily_Edge_ES_form.txt");
$Daily_Edge_ES_season=("../Gap_Opt/Daily_Edge_ES_season.txt");

$EoD_ES=("../Gap_Opt/EoD_ES.txt");


$handle1=fopen($Daily_Edge_ES_trend, "r");
$handle2=fopen($Daily_Edge_ES_form, "r");
$handle3=fopen($Daily_Edge_ES_season, "r");
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
      die("error opening a file Daily_Edge_ES_trend.txt");
   }


      if($handle2) {
      while(!feof($handle2)) {
         $buffer2=fgets($handle2, 4096);
         $data2[]=explode($tab, $buffer2);
      }
      fclose($handle2);
   } else {
      die("error opening a file Daily_Edge_ES_trend.form");
   }

      if($handle3) {
      while(!feof($handle3)) {
         $buffer3=fgets($handle3, 4096);
         $data3[]=explode($tab, $buffer3);
      }
      fclose($handle3);
   } else {
      die("error opening a file Daily_Edge_trend.season");
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

   $open=$data4[0];
   $min=$data4[1];
   $close=$data4[2];
   $max=$data4[3];
   $dateD=$data4[4];
   //print_r($data);
   //print_r($data2);
   //print_r($data3);
  

   // $l1G=filter_var($data[1][0], FILTER_SANITIZE_STRING);  settype($l1G, 'int');
   // $l2G=filter_var($data[1][1], FILTER_SANITIZE_STRING);  settype($l2G, 'int');
   // $l3G=filter_var($data[1][3], FILTER_SANITIZE_STRING);  settype($l3G, 'int');
   // $l4G=filter_var($data[1][6], FILTER_SANITIZE_STRING);  settype($l4G, 'int');
   // $l5G=filter_var($data[1][7], FILTER_SANITIZE_STRING);  settype($l5G, 'double');
   // $l6G=filter_var($data[1][21], FILTER_SANITIZE_STRING); settype($l6G, 'double');
   // $l7G=$l5G*$l6G; settype($l7G, 'int');

   $l11D=filter_var($data[2][0], FILTER_SANITIZE_STRING);  settype($l11D, 'int');
   $l12D=filter_var($data[2][1], FILTER_SANITIZE_STRING);  settype($l12D, 'int');
   $l13D=filter_var($data[2][3], FILTER_SANITIZE_STRING);  settype($l13D, 'int');
   $l14D=filter_var($data[2][6], FILTER_SANITIZE_STRING);  settype($l14D, 'int');
   $l15D=filter_var($data[2][7], FILTER_SANITIZE_STRING);  settype($l15D, 'double');
   $l16D=filter_var($data[2][21], FILTER_SANITIZE_STRING); settype($l16D, 'double');
   $l17D=$l15D*$l16D-50; settype($l17D, 'int');

   // $l21G=filter_var($data[3][0], FILTER_SANITIZE_STRING);  settype($l21G, 'int');
   // $l22G=filter_var($data[3][1], FILTER_SANITIZE_STRING);  settype($l22G, 'int');
   // $l23G=filter_var($data[3][3], FILTER_SANITIZE_STRING);  settype($l23G, 'int');
   // $l24G=filter_var($data[3][6], FILTER_SANITIZE_STRING);  settype($l24G, 'int');
   // $l25G=filter_var($data[3][7], FILTER_SANITIZE_STRING);  settype($l25G, 'double');
   // $l26G=filter_var($data[3][21], FILTER_SANITIZE_STRING); settype($l26G, 'double');
   // $l27G=$l25G*$l26G; settype($l27G, 'int');

   $l31D=filter_var($data[4][0], FILTER_SANITIZE_STRING);  settype($l31D, 'int');
   $l32D=filter_var($data[4][1], FILTER_SANITIZE_STRING);  settype($l32D, 'int');
   $l33D=filter_var($data[4][3], FILTER_SANITIZE_STRING);  settype($l33D, 'int');
   $l34D=filter_var($data[4][6], FILTER_SANITIZE_STRING);  settype($l34D, 'int');
   $l35D=filter_var($data[4][7], FILTER_SANITIZE_STRING);  settype($l35D, 'double');
   $l36D=filter_var($data[4][21], FILTER_SANITIZE_STRING); settype($l36D, 'double');
   $l37D=$l35D*$l36D-50; settype($l37D, 'int');

   // $l41D=filter_var($data[5][0], FILTER_SANITIZE_STRING);  settype($l41D, 'int');
   // $l42D=filter_var($data[5][1], FILTER_SANITIZE_STRING);  settype($l42D, 'int');
   // $l43D=filter_var($data[5][3], FILTER_SANITIZE_STRING);  settype($l43D, 'int');
   // $l44D=filter_var($data[5][6], FILTER_SANITIZE_STRING);  settype($l44D, 'int');
   // $l45D=filter_var($data[5][7], FILTER_SANITIZE_STRING);  settype($l45D, 'double');
   // $l46D=filter_var($data[5][21], FILTER_SANITIZE_STRING); settype($l46D, 'double');
   // $l47D=$l45D*$l46D; settype($l47D, 'int');

   // $l51G=filter_var($data[6][0], FILTER_SANITIZE_STRING);  settype($l51G, 'int');
   // $l52G=filter_var($data[6][1], FILTER_SANITIZE_STRING);  settype($l52G, 'int');
   // $l53G=filter_var($data[6][3], FILTER_SANITIZE_STRING);  settype($l53G, 'int');
   // $l54G=filter_var($data[6][6], FILTER_SANITIZE_STRING);  settype($l54G, 'int');
   // $l55G=filter_var($data[6][7], FILTER_SANITIZE_STRING);  settype($l55G, 'double');
   // $l56G=filter_var($data[6][21], FILTER_SANITIZE_STRING); settype($l56G, 'double');
   // $l57G=$l55G*$l56G; settype($l57G, 'int');

   // $l61D=filter_var($data[7][0], FILTER_SANITIZE_STRING);  settype($l61D, 'int');
   // $l62D=filter_var($data[7][1], FILTER_SANITIZE_STRING);  settype($l62D, 'int');
   // $l63D=filter_var($data[7][3], FILTER_SANITIZE_STRING);  settype($l63D, 'int');
   // $l64D=filter_var($data[7][6], FILTER_SANITIZE_STRING);  settype($l64D, 'int');
   // $l65D=filter_var($data[7][7], FILTER_SANITIZE_STRING);  settype($l65D, 'double');
   // $l66D=filter_var($data[7][21], FILTER_SANITIZE_STRING); settype($l66D, 'double');
   // $l67D=$l65D*$l66D; settype($l67D, 'int');

   // $l71G=filter_var($data[8][0], FILTER_SANITIZE_STRING);  settype($l71G, 'int');
   // $l72G=filter_var($data[8][1], FILTER_SANITIZE_STRING);  settype($l72G, 'int');
   // $l73G=filter_var($data[8][3], FILTER_SANITIZE_STRING);  settype($l73G, 'int');
   // $l74G=filter_var($data[8][6], FILTER_SANITIZE_STRING);  settype($l74G, 'int');
   // $l75G=filter_var($data[8][7], FILTER_SANITIZE_STRING);  settype($l75G, 'double');
   // $l76G=filter_var($data[8][21], FILTER_SANITIZE_STRING); settype($l76G, 'double');
   // $l77G=$l75G*$l76G; settype($l77G, 'int');

//---------------------------------------------------------------------------------------

   // $m1G=filter_var($data2[1][0], FILTER_SANITIZE_STRING);  settype($m1G, 'int');
   // $m2G=filter_var($data2[1][1], FILTER_SANITIZE_STRING);  settype($m2G, 'int');
   // $m3G=filter_var($data2[1][3], FILTER_SANITIZE_STRING);  settype($m3G, 'int');
   // $m4G=filter_var($data2[1][6], FILTER_SANITIZE_STRING);  settype($m4G, 'int');
   // $m5G=filter_var($data2[1][7], FILTER_SANITIZE_STRING);  settype($m5G, 'double');
   // $m6G=filter_var($data2[1][21], FILTER_SANITIZE_STRING); settype($m6G, 'double');
   // $m7G=$m5G*$m6G; settype($m7G, 'int');

   $m11D=filter_var($data2[2][0], FILTER_SANITIZE_STRING);  settype($m11D, 'int');
   $m12D=filter_var($data2[2][1], FILTER_SANITIZE_STRING);  settype($m12D, 'int');
   $m13D=filter_var($data2[2][3], FILTER_SANITIZE_STRING);  settype($m13D, 'int');
   $m14D=filter_var($data2[2][6], FILTER_SANITIZE_STRING);  settype($m14D, 'int');
   $m15D=filter_var($data2[2][7], FILTER_SANITIZE_STRING);  settype($m15D, 'double');
   $m16D=filter_var($data2[2][21], FILTER_SANITIZE_STRING); settype($m16D, 'double');
   $m17D=$m15D*$m16D-50; settype($m17D, 'int');

   // $m21G=filter_var($data2[3][0], FILTER_SANITIZE_STRING);  settype($m21G, 'int');
   // $m22G=filter_var($data2[3][1], FILTER_SANITIZE_STRING);  settype($m22G, 'int');
   // $m23G=filter_var($data2[3][3], FILTER_SANITIZE_STRING);  settype($m23G, 'int');
   // $m24G=filter_var($data2[3][6], FILTER_SANITIZE_STRING);  settype($m24G, 'int');
   // $m25G=filter_var($data2[3][7], FILTER_SANITIZE_STRING);  settype($m25G, 'double');
   // $m26G=filter_var($data2[3][21], FILTER_SANITIZE_STRING); settype($m26G, 'double');
   // $m27G=$m25G*$m26G; settype($m27G, 'int');

   $m31D=filter_var($data2[4][0], FILTER_SANITIZE_STRING);  settype($m31D, 'int');
   $m32D=filter_var($data2[4][1], FILTER_SANITIZE_STRING);  settype($m32D, 'int');
   $m33D=filter_var($data2[4][3], FILTER_SANITIZE_STRING);  settype($m33D, 'int');
   $m34D=filter_var($data2[4][6], FILTER_SANITIZE_STRING);  settype($m34D, 'int');
   $m35D=filter_var($data2[4][7], FILTER_SANITIZE_STRING);  settype($m35D, 'double');
   $m36D=filter_var($data2[4][21], FILTER_SANITIZE_STRING); settype($m36D, 'double');
   $m37D=$m35D*$m36D-50; settype($m37D, 'int');

   // $m41D=filter_var($data2[5][0], FILTER_SANITIZE_STRING);  settype($m41D, 'int');
   // $m42D=filter_var($data2[5][1], FILTER_SANITIZE_STRING);  settype($m42D, 'int');
   // $m43D=filter_var($data2[5][3], FILTER_SANITIZE_STRING);  settype($m43D, 'int');
   // $m44D=filter_var($data2[5][6], FILTER_SANITIZE_STRING);  settype($m44D, 'int');
   // $m45D=filter_var($data2[5][7], FILTER_SANITIZE_STRING);  settype($m45D, 'double');
   // $m46D=filter_var($data2[5][21], FILTER_SANITIZE_STRING); settype($m46D, 'double');
   // $m47D=$m45D*$m46D; settype($m47D, 'int');

   // $m51G=filter_var($data2[6][0], FILTER_SANITIZE_STRING);  settype($m51G, 'int');
   // $m52G=filter_var($data2[6][1], FILTER_SANITIZE_STRING);  settype($m52G, 'int');
   // $m53G=filter_var($data2[6][3], FILTER_SANITIZE_STRING);  settype($m53G, 'int');
   // $m54G=filter_var($data2[6][6], FILTER_SANITIZE_STRING);  settype($m54G, 'int');
   // $m55G=filter_var($data2[6][7], FILTER_SANITIZE_STRING);  settype($m55G, 'double');
   // $m56G=filter_var($data2[6][21], FILTER_SANITIZE_STRING); settype($m56G, 'double');
   // $m57G=$m55G*$m56G; settype($m57G, 'int');

   // $m61D=filter_var($data2[7][0], FILTER_SANITIZE_STRING);  settype($m61D, 'int');
   // $m62D=filter_var($data2[7][1], FILTER_SANITIZE_STRING);  settype($m62D, 'int');
   // $m63D=filter_var($data2[7][3], FILTER_SANITIZE_STRING);  settype($m63D, 'int');
   // $m64D=filter_var($data2[7][6], FILTER_SANITIZE_STRING);  settype($m64D, 'int');
   // $m65D=filter_var($data2[7][7], FILTER_SANITIZE_STRING);  settype($m65D, 'double');
   // $m66D=filter_var($data2[7][21], FILTER_SANITIZE_STRING); settype($m66D, 'double');
   // $m67D=$m65D*$m66D; settype($m67D, 'int');

   // $m71G=filter_var($data2[8][0], FILTER_SANITIZE_STRING);  settype($m71G, 'int');
   // $m72G=filter_var($data2[8][1], FILTER_SANITIZE_STRING);  settype($m72G, 'int');
   // $m73G=filter_var($data2[8][3], FILTER_SANITIZE_STRING);  settype($m73G, 'int');
   // $m74G=filter_var($data2[8][6], FILTER_SANITIZE_STRING);  settype($m74G, 'int');
   // $m75G=filter_var($data2[8][7], FILTER_SANITIZE_STRING);  settype($m75G, 'double');
   // $m76G=filter_var($data2[8][21], FILTER_SANITIZE_STRING); settype($m76G, 'double');
   // $m77G=$m75G*$m76G; settype($m77G, 'int');

//------------------------------------------------------------------------

   // $n1G=filter_var($data3[1][0], FILTER_SANITIZE_STRING);  settype($n1G, 'int');
   // $n2G=filter_var($data3[1][1], FILTER_SANITIZE_STRING);  settype($n2G, 'int');
   // $n3G=filter_var($data3[1][3], FILTER_SANITIZE_STRING);  settype($n3G, 'int');
   // $n4G=filter_var($data3[1][6], FILTER_SANITIZE_STRING);  settype($n4G, 'int');
   // $n5G=filter_var($data3[1][7], FILTER_SANITIZE_STRING);  settype($n5G, 'double');
   // $n6G=filter_var($data3[1][21], FILTER_SANITIZE_STRING); settype($n6G, 'double');
   // $n7G=$n5G*$n6G; settype($n7G, 'int');

   $n11D=filter_var($data3[2][0], FILTER_SANITIZE_STRING);  settype($n11D, 'int');
   $n12D=filter_var($data3[2][1], FILTER_SANITIZE_STRING);  settype($n12D, 'int');
   $n13D=filter_var($data3[2][3], FILTER_SANITIZE_STRING);  settype($n13D, 'int');
   $n14D=filter_var($data3[2][6], FILTER_SANITIZE_STRING);  settype($n14D, 'int');
   $n15D=filter_var($data3[2][7], FILTER_SANITIZE_STRING);  settype($n15D, 'double');
   $n16D=filter_var($data3[2][21], FILTER_SANITIZE_STRING); settype($n16D, 'double');
   $n17D=$n15D*$n16D-50; settype($n17D, 'int');

   // $n21G=filter_var($data3[3][0], FILTER_SANITIZE_STRING);  settype($n21G, 'int');
   // $n22G=filter_var($data3[3][1], FILTER_SANITIZE_STRING);  settype($n22G, 'int');
   // $n23G=filter_var($data3[3][3], FILTER_SANITIZE_STRING);  settype($n23G, 'int');
   // $n24G=filter_var($data3[3][6], FILTER_SANITIZE_STRING);  settype($n24G, 'int');
   // $n25G=filter_var($data3[3][7], FILTER_SANITIZE_STRING);  settype($n25G, 'double');
   // $n26G=filter_var($data3[3][21], FILTER_SANITIZE_STRING); settype($n26G, 'double');
   // $n27G=$n25G*$n26G; settype($n27G, 'int');

   $n31D=filter_var($data3[4][0], FILTER_SANITIZE_STRING);  settype($n31D, 'int');
   $n32D=filter_var($data3[4][1], FILTER_SANITIZE_STRING);  settype($n32D, 'int');
   $n33D=filter_var($data3[4][3], FILTER_SANITIZE_STRING);  settype($n33D, 'int');
   $n34D=filter_var($data3[4][6], FILTER_SANITIZE_STRING);  settype($n34D, 'int');
   $n35D=filter_var($data3[4][7], FILTER_SANITIZE_STRING);  settype($n35D, 'double');
   $n36D=filter_var($data3[4][21], FILTER_SANITIZE_STRING); settype($n36D, 'double');
   $n37D=$n35D*$n36D-50; settype($n37D, 'int');

   // $n41D=filter_var($data3[5][0], FILTER_SANITIZE_STRING);  settype($n41D, 'int');
   // $n42D=filter_var($data3[5][1], FILTER_SANITIZE_STRING);  settype($n42D, 'int');
   // $n43D=filter_var($data3[5][3], FILTER_SANITIZE_STRING);  settype($n43D, 'int');
   // $n44D=filter_var($data3[5][6], FILTER_SANITIZE_STRING);  settype($n44D, 'int');
   // $n45D=filter_var($data3[5][7], FILTER_SANITIZE_STRING);  settype($n45D, 'double');
   // $n46D=filter_var($data3[5][21], FILTER_SANITIZE_STRING); settype($n46D, 'double');
   // $n47D=$n45D*$n46D; settype($n47D, 'int');

   // $n51G=filter_var($data3[6][0], FILTER_SANITIZE_STRING);  settype($n51G, 'int');
   // $n52G=filter_var($data3[6][1], FILTER_SANITIZE_STRING);  settype($n52G, 'int');
   // $n53G=filter_var($data3[6][3], FILTER_SANITIZE_STRING);  settype($n53G, 'int');
   // $n54G=filter_var($data3[6][6], FILTER_SANITIZE_STRING);  settype($n54G, 'int');
   // $n55G=filter_var($data3[6][7], FILTER_SANITIZE_STRING);  settype($n55G, 'double');
   // $n56G=filter_var($data3[6][21], FILTER_SANITIZE_STRING); settype($n56G, 'double');
   // $n57G=$n55G*$n56G; settype($n57G, 'int');

   // $n61D=filter_var($data3[7][0], FILTER_SANITIZE_STRING);  settype($n61D, 'int');
   // $n62D=filter_var($data3[7][1], FILTER_SANITIZE_STRING);  settype($n62D, 'int');
   // $n63D=filter_var($data3[7][3], FILTER_SANITIZE_STRING);  settype($n63D, 'int');
   // $n64D=filter_var($data3[7][6], FILTER_SANITIZE_STRING);  settype($n64D, 'int');
   // $n65D=filter_var($data3[7][7], FILTER_SANITIZE_STRING);  settype($n65D, 'double');
   // $n66D=filter_var($data3[7][21], FILTER_SANITIZE_STRING); settype($n66D, 'double');
   // $n67D=$n65D*$n66D; settype($n67D, 'int');

   // $n71G=filter_var($data3[8][0], FILTER_SANITIZE_STRING);  settype($n71G, 'int');
   // $n72G=filter_var($data3[8][1], FILTER_SANITIZE_STRING);  settype($n72G, 'int');
   // $n73G=filter_var($data3[8][3], FILTER_SANITIZE_STRING);  settype($n73G, 'int');
   // $n74G=filter_var($data3[8][6], FILTER_SANITIZE_STRING);  settype($n74G, 'int');
   // $n75G=filter_var($data3[8][7], FILTER_SANITIZE_STRING);  settype($n75G, 'double');
   // $n76G=filter_var($data3[8][21], FILTER_SANITIZE_STRING); settype($n76G, 'double');
   // $n77G=$n75G*$n76G; settype($n77G, 'int');

   $idx4D=($l17D+$m17D+$n17D)/3; settype($idx4D, 'int');
   $idx3D=($l37D+$m37D+$n37D)/3; settype($idx3D, 'int');
   // $idx2D=($l47D+$m47D+$n47D)/3; settype($idx2D, 'int');
   // $idx1D=($l67D+$m67D+$n67D)/3; settype($idx1D, 'int');



/*
   <table id='GapOpt'>
    <th colspan='7'>Strategia GapOpt - składowa trend</th>
 <tr>

    <th>Strategia</th><th>Strefa</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
  </tr>
  <tr>
   <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
  </tr>
   <tr>
   <td>$l11G</td><td>$l12G</td><td>$l13G</td><td>$l14G</td><td>$l15G</td><td>$l16G</td><td>$l17G</td>
  </tr>
   <tr>
   <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
  </tr>
   <tr>
   <td>$l31G</td><td>$l32G</td><td>$l33G</td><td>$l34G</td><td>$l35G</td><td>$l36G</td><td>$l37G</td>
  </tr>
   <tr>
   <td>$l41G</td><td>$l42G</td><td>$l43G</td><td>$l44G</td><td>$l45G</td><td>$l46G</td><td>$l47G</td>
  </tr>
   <tr>
   <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
  </tr>
   <tr>
   <td>$l61G</td><td>$l62G</td><td>$l63G</td><td>$l64G</td><td>$l65G</td><td>$l66G</td><td>$l67G</td>
  </tr>
   <tr>
   <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
  </tr>
 
</table>
<br>



   <table id='GapOpt'>
    <th colspan='7'>Strategia GapOpt - składowa formacje</th>
 <tr>

    <th>Strategia</th><th>Strefa</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
  </tr>
  <tr>
   <td>$m1</td><td>$m2</td><td>$m3</td><td>$m4</td><td>$m5</td><td>$m6</td><td>$m7</td>
  </tr>
   <tr>
   <td>$m11</td><td>$m12</td><td>$m13</td><td>$m14</td><td>$m15</td><td>$m16</td><td>$m17</td>
  </tr>
   <tr>
   <td>$m21</td><td>$m22</td><td>$m23</td><td>$m24</td><td>$m25</td><td>$m26</td><td>$m27</td>
  </tr>
   <tr>
   <td>$m31</td><td>$m32</td><td>$m33</td><td>$m34</td><td>$m35</td><td>$m36</td><td>$m37</td>
  </tr>
   <tr>
   <td>$m41</td><td>$m42</td><td>$m43</td><td>$m44</td><td>$m45</td><td>$m46</td><td>$m47</td>
  </tr>
   <tr>
   <td>$m51</td><td>$m52</td><td>$m53</td><td>$m54</td><td>$m55</td><td>$m56</td><td>$m57</td>
  </tr>
   <tr>
   <td>$m61</td><td>$m62</td><td>$m63</td><td>$m64</td><td>$m65</td><td>$m66</td><td>$m67</td>
  </tr>
   <tr>
   <td>$m71</td><td>$m72</td><td>$m73</td><td>$m74</td><td>$m75</td><td>$m76</td><td>$m77</td>
  </tr>
 
</table>
<br>

   <table id='GapOpt'>
    <th colspan='7'>Strategia GapOpt - składowa sezonowość</th>
 <tr>

    <th>Strategia</th><th>Strefa</th><th>Wynik netto</th><th>Ilość transakcji</th><th>% zyskownych</th><th>Profit faktor</th><th>Indeks</th>
  </tr>
  <tr>
   <td>$n1</td><td>$n2</td><td>$n3</td><td>$n4</td><td>$n5</td><td>$n6</td><td>$n7</td>
  </tr>
   <tr>
   <td>$n11</td><td>$n12</td><td>$n13</td><td>$n14</td><td>$n15</td><td>$n16</td><td>$n17</td>
  </tr>
   <tr>
   <td>$n21</td><td>$n22</td><td>$n23</td><td>$n24</td><td>$n25</td><td>$n26</td><td>$n27</td>
  </tr>
   <tr>
   <td>$n31</td><td>$n32</td><td>$n33</td><td>$n34</td><td>$n35</td><td>$n36</td><td>$n37</td>
  </tr>
   <tr>
   <td>$n41</td><td>$n42</td><td>$n43</td><td>$n44</td><td>$n45</td><td>$n46</td><td>$n47</td>
  </tr>
   <tr>
   <td>$n51</td><td>$n52</td><td>$n53</td><td>$n54</td><td>$n55</td><td>$n56</td><td>$n57</td>
  </tr>
   <tr>
   <td>$n61</td><td>$n62</td><td>$n63</td><td>$n64</td><td>$n65</td><td>$n66</td><td>$n67</td>
  </tr>
   <tr>
   <td>$n71</td><td>$n72</td><td>$n73</td><td>$n74</td><td>$n75</td><td>$n76</td><td>$n77</td>
  </tr>
 
</table>
<br>
*/


//   <tr>
//   <td colspan='7'>zasady:
//   <ul>
//   <li>
//   Indeks większy niż 80: silny sygnał na zapełnienie luki
//   </li>
//    <li>
//   Indeks pomiędzy 30 i 80: brak sygnału, sytuacja neutralna
//   </li>
//      <li>
//   Indeks poniżej 30: silny sygnał na kontynuację ruchu z notowań pozasesyjnych
//   </li>
//   <li>jeżeli którykolwiek z indeksów cząstkowych jest mniejszy niż 30 to nie zajmujemy pozycji nawet jeżeli indeks główny jest większy niż 80
//   </li>
//    <li>
//    cel pozycji: zapełnienie luki
//   </li>
//    <li>
//    zlecenie zabezpieczające stop loss na otwarcie pozycji: 10 punków
//   </li>
//      <li>
//    minimalna luka: 1 punkt
//   </li>
//   </ul>

//   </td>
//   </tr>

 
// </table>
// <br>
// "

// echo"
// <div class='container-fluid' class='table-responsive'>
//   <div class='row'>
//     <div class='col-xs-12' class='table-responsive' >
//       <table class='table table-bordered ' class='table-condensed' >
//         <caption>Indeks strategii sesja US na e-mini S&P500 na dzień: $dateD</caption> 
//         <thead>
//           <tr class='warning'>
//             <th rowspan='2' style='padding-bottom: 35px'>Kierunek</th>
//             <th rowspan='2' style='padding-bottom: 35px'>Strefa</th>
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
//         </tr>
//         </thead>    
            


//           <tr class='success'>
//             <td>kupno</td>
//             <td>$l32D</td>
//             <td>$l34D</td>
//             <td>$l37D</td>
//             <td>$m34D</td>
//             <td>$m37D</td>
//             <td>$n34D</td>
//             <td>$n37D</td>
//             <td class='idxtd'>$idx3D</td>
//           </tr>
//                     <tr class='success'>
//             <td>kupno</td>
//             <td>$l12D</td>
//             <td>$l14D</td>
//             <td>$l17D</td>
//             <td>$m14D</td>
//             <td>$m17D</td>
//             <td>$n14D</td>
//             <td>$n17D</td>
//             <td class='idxtd'>$idx4D</td>
//           </tr>
//     </div>
//   </div>
// </div>
// "

?>

<body>

<html>
