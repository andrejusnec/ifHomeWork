 <h1>Uzduotis</h1>

 <?php
 //Task1
 echo '<br>Task1<br> <br>';
   $vardas = 'Andrejus'; $pavarde = 'Necvetnas'; $gimMetai = 1990; $gimMen = 12; $esamiMetai = 2021; $esamasMen = 1;
   $amzius = $esamiMetai - $gimMetai;
   if($esamasMen < $gimMen){
      $amzius--;
   }
   $galutinisSakynis = "As esu $vardas $pavarde. Man yra $amzius metu.";
   echo $galutinisSakynis;
//Task2
echo '<br><br>Task2<br><br>';
   $sk1 = rand(0, 4);
   $sk2 = rand(0, 4);
   echo  "Pirmas skaicius: $sk1" . '<br>' . "Antras skaicius: $sk2" . '<br>';

   if($sk1 >= $sk2) {
      if($sk2 != 0) {
     $rezultatas =  $sk1 / $sk2;
     echo 'Rezultatas ' . round($rezultatas, 2);
      } else {
         echo 'Negalim dalynti is nulio! Bandyk vel';
      }
   }
   if($sk2 > $sk1) {
      if($sk1 != 0) {
      $rezultatas =  $sk2 / $sk1;
      echo 'Rezultatas ' . round($rezultatas, 2);
      } else {
         echo 'Negalim dalynti is nulio! Bandyk vel';
      }
   }
//Task3
echo '<br><br>Task3<br><br>';

   $num1 = rand(0, 25); $num2 = rand(0, 25); $num3 = rand(0, 25);
   echo  "Pirmas skaicius: $num1" . '<br>' . "Antras skaicius: $num2" . '<br>' . "Trecias skaicius: $num3" . '<br><br>';
   if($num1 >= $num2 && $num2 >= $num3) {
      echo "Vidurinis skaicius yra $num2";
   } else if($num2 >= $num1 && $num1 >= $num3){
      echo "Vidurinis skaicius yra $num1";
   } else if($num3>= $num2 && $num2 >= $num1){
      echo "Vidurinis skaicius yra $num2";
   } else if($num2 >= $num3 && $num3 >= $num1) {
      echo "Vidurinis skaicius yra $num3";
   } else if($num3 >= $num1 && $num1 >= $num2) {
      echo "Vidurinis skaicius yra $num1";
   } else if($num1 >= $num3 && $num3 >= $num2) {
      echo "Skaicius su vidurine reiksme yra  $num3";
   }

//Task4
echo '<br><br>Task4<br><br>';
$a = rand(1, 10);
$b = rand(1, 10); 
$c = rand(1, 10);
echo "a = $a <br> b = $b <br> c = $c <br><br>";
if($a + $b > $c && $a + $c > $b && $b + $c > $a) {
   echo "Galima sudaryti Trikampi";
} else {
   echo "Negalima sudaryti Trikampio";
}
//Task5
echo '<br><br>Task5<br><br>';
$kint1 = rand(0, 2);
$kint2 = rand(0, 2);
$kint3 = rand(0, 2);
$kint4 = rand(0, 2);
echo "Sugeneruoti skaiciai: $kint1, $kint2, $kint3, $kint4 <br>";
$nulis = 0; $vienas = 0; $du = 0;
   if($kint1 === 0){
      $nulis++;
   } else if($kint1 === 1) {
      $vienas++;
   } else {
      $du++;
   }
   if($kint2 === 0){
      $nulis++;
   } else if($kint2 === 1) {
      $vienas++;
   } else {
      $du++;
   }
   if($kint3 === 0){
      $nulis++;
   } else if($kint3 === 1) {
      $vienas++;
   } else {
      $du++;
   }
   if($kint4 === 0){
      $nulis++;
   } else if($kint4 === 1) {
      $vienas++;
   } else {
      $du++;
   }
echo "Nuliu: $nulis <br>Vienetu: $vienas <br> Dvejetu: $du<br>";
 ?>