<h1>Uzduotis, antra dalis</h1>
<?php
    //Task6
echo '<br><br>Task6<br><br>';
$randomTagas = rand(1, 6);
echo "<h3>$randomTagas</h3>";

//Task7
echo '<br><br>Task7<br><br>';
$num1 = rand(-10, 10);
$num2 = rand(-10, 10);
$num3 = rand(-10, 10);
//
if($num1 < 0) {
    echo "<font color='green'>".$num1."</font>";
    } else if($num1 == 0) {
    echo "<font color='red'>".$num1."</font>";
        } else {
    echo "<font color='blue'>".$num1."</font>";
    }
    echo ' ';
    if($num2 < 0) {
        echo "<font color='green'>".$num2."</font>";
        } else if($num1 == 0) {
        echo "<font color='red'>".$num2."</font>";
        } else {
        echo "<font color='blue'>".$num2."</font>";
        }
        echo ' ';
        if($num3 < 0) {
            echo "<font color='green'>".$num3."</font>";
            } else if($num1 == 0) {
            echo "<font color='red'>".$num3."</font>";
            } else {
            echo "<font color='blue'>".$num3."</font>";
            }
    //Task8
echo '<br><br>Task8<br><br>';
$randomCandles = rand(5, 3000);
$riba1 = 1000; $riba2 = 2000;
$kaina;
$nuolaida;
if($randomCandles > $riba1 && $randomCandles <= $riba2) {
    $nuolaida = ($randomCandles * 3) / 100;
    $kaina = $randomCandles - $nuolaida;
    echo "Perkama $randomCandles zvakiu uz $kaina EUR";
    echo "<br>Nuolaida: $nuolaida EUR";
} else if($randomCandles > $riba2) {
    $nuolaida = ($randomCandles * 4) / 100;
    $kaina = $randomCandles - $nuolaida;
    echo "Perkama $randomCandles zvakiu uz $kaina EUR";
    echo "<br>Nuolaida: $nuolaida EUR";
} else {
    echo "Perkama $randomCandles zvakiu uz $randomCandles EUR";
}
//Task9
echo '<br><br>Task9<br><br>';
$sk1 = rand(0, 100);
$sk2 = rand(0, 100);
$sk3 = rand(0, 100);
echo "Pirmas skaicius: $sk1 <br>Antras skaicius: $sk2 <br>Trecias skaicius: $sk3 <br><br>";
$vidurkis = ($sk1 + $sk2 + $sk3) / 3;
$vidurkis2;
$flag = true;
if(($sk1 >= 10 && $sk1 <= 90) && ($sk2 >= 10 && $sk2 <= 90) && ($sk3 >= 10 && $sk3 <= 90)) {
    $vidurkis2 = ($sk1 + $sk2 + $sk3) / 3;
} else if(($sk1 >= 10 && $sk1 <= 90) && ($sk2 >= 10 && $sk2 <= 90)) {
    $vidurkis2 = ($sk1 + $sk2) / 2;
} else if(($sk1 >= 10 && $sk1 <= 90) && ($sk3 >= 10 && $sk3 <= 90)) {
    $vidurkis2 = ($sk1 + $sk3) / 2;
} else if(($sk3 >= 10 && $sk3 <= 90) && ($sk2 >= 10 && $sk2 <= 90)) {
    $vidurkis2 = ($sk3 + $sk2) / 2;
} else {
        if($sk1 >= 10 && $sk1 <= 90) {
            $vidurkis2 = $sk1;
        }
        else if($sk2 >= 10 && $sk2 <= 90) {
            $vidurkis2 = $sk2;
        }
        else if($sk3 >= 10 && $sk3 <= 90) {
            $vidurkis2 = $sk3;
        } else {
            $vidurkis2 = 'O gi neturim skaiciu intervale nuo 10 iki 90, todel nera ir vidurkio';
            $flag = false;
        }
}
echo 'Vidurkis: ' . round($vidurkis) . '<br>'; //intval() funkcija grazina int reiksme kintamojo";
if($flag) {
echo 'Vidurkis2: ' . round($vidurkis2);
} else {
    echo $vidurkis2;
}

//Task10
echo '<br><br>Task10<br><br>';
$val = rand(0, 23);
$min = rand(0, 59);
$sec = rand(0, 59);
//Sukuriu laikinus kintamuosius, kad neperasyneti kodo su iffais
$cheatVal = $val;
$cheatMin = $min;
$cheatSec = $sec;
if($cheatVal >= 0 && $cheatVal < 10) {
    $cheatVal = '0'.$cheatVal;
}
if($cheatMin >= 0 && $cheatMin < 10) {
    $cheatMin = '0'.$cheatMin;
}
if($cheatSec >= 0 && $cheatSec < 10) {
    $cheatSec = '0'.$cheatSec;
}

echo "$cheatVal:$cheatMin:$cheatSec<br>";

$randomSec = rand(0, 300);
echo "Sugeneruotos sekundes: $randomSec<br>";
if($randomSec < 60 && $randomSec >= 0) {
    $laikinas = $sec + $randomSec;
    if($laikinas >= 60) {
        $min+=1;
        if($min == 60) {
            $val += 1;
            $min = 0;
        }
        $sec = $laikinas - 60;
    } else {
        $sec = $laikinas;
    }
} else if($randomSec >= 60 && $randomSec < 120) {
    $laikinas = $sec + $randomSec;
    if($laikinas > 120) {
        $min+=2;
        $sec = $laikinas - 120;
    } else {
        $min += 1;
        $sec = $laikinas % 60;
    }
            if($min > 60) {
                $val += 1;
                $min = $min - 60;
            }
} else if($randomSec >= 120 && $randomSec < 180 ) {
    $laikinas = $sec + $randomSec;
    if($laikinas > 180) {
        $min+=3;
        $sec = $laikinas - 180;
    } else {
        $min += 2;
        $sec = $laikinas % 60;
    }
    if($min > 60) {
        $val += 1;
        $min = $min - 60;
    }
} else if($randomSec >= 180 && $randomSec < 240 ) {
    $laikinas = $sec + $randomSec;
    if($laikinas > 240) {
        $min+=4;
        $sec = $laikinas - 240;
    } else {
        $min += 3;
        $sec = $laikinas % 60;
    }
    if($min > 60) {
        $val += 1;
        $min = $min - 60;
    }
} else if($randomSec >= 240 && $randomSec <= 300 ) {
    $laikinas = $sec + $randomSec;
    if($laikinas > 300) {
        $min+=5;
        $sec = $laikinas - 300;
    } else {
        $min += 4;
        $sec = $laikinas % 60;
    }
    if($min > 60) {
        $val += 1;
        $min = $min - 60;
    }
}
//Jei virsitos valandos, tai prasidejo nauja diena ;p
if($val == 24) {
    $val = 0;
}
// Patikros kad isvesti kaip digital laikrodi
if($val >= 0 && $val < 10) {
    $val = '0'.$val;
}
if($min >= 0 && $min < 10) {
    $min = '0'.$min;
}
if($sec >= 0 && $sec < 10) {
    $sec = '0'.$sec;
}
echo "$val:$min:$sec<br>";

//Task11
echo '<br><br>Task11<br><br>';
$number1 = rand(1000, 9999);
$number2 = rand(1000, 9999);
$number3 = rand(1000, 9999);
$number4 = rand(1000, 9999);
$number5 = rand(1000, 9999);
$number6 = rand(1000, 9999);
$stringas;
if($number1 >= $number2 && $number1 >= $number3 && $number1 >= $number4 && $number1 >= $number5 && $number1 >= $number6) {
$stringas = $number1;
    if( $number2 >= $number3 && $number2 >= $number4 && $number2 >= $number5 && $number2 >= $number6) {
        $stringas = $stringas . ' ' . $number2;
            if($number3 >= $number4 && $number3 >= $number5 && $number3 >= $number6) {
                $stringas = $stringas . ' ' . $number3;
                    if($number4 >= $number5 && $number4 >= $number6) {
                        $stringas = $stringas . ' ' . $number4;
                        if($number5 >= $number6) {
                            $stringas = $stringas . ' ' . $number5 .' '. $number6;
                        } else {
                            $stringas = $stringas . ' ' . $number6 . ' ' . $number5;
                        }
                        /******************************pabaiga vieno varianto************************* */
                    } else if($number5 >= $number4 && $number5 >= $number6) {
                        $stringas = $stringas . ' ' . $number5;
                        if($number4 >= $number6) {
                            $stringas = $stringas . ' ' . $number4 .' '.  $number6;
                        } else {
                            $stringas = $stringas . ' ' . $number6 . ' ' . $number4;
                        }
                    } else {
                        $stringas = $stringas . ' ' . $number6;
                        if($number5 >= $number4) {
                            $stringas = $stringas . ' ' . $number5 .' '.  $number4;
                        } else {
                            $stringas = $stringas . ' ' . $number4 . ' ' . $number5;
                        }
                    }
                    /*************************************************************** */
            } else if($number4 >= $number3 && $number4 >= $number5 && $number4 >= $number6) {
                $stringas = $stringas . ' ' . $number4;
                if($number3 >= $number5 && $number3 >= $number6) {
                        $stringas = $stringas . ' ' . $number3;
                        if($number5 >= $number6) {
                            $stringas = $stringas . ' ' . $number5 .' '. $number6;
                        } else {
                            $stringas = $stringas . ' ' . $number6 . ' ' . $number5;
                        }
                        /******************************pabaiga vieno varianto************************* */
                    } else if($number5 >= $number3 && $number5 >= $number6) {
                        $stringas = $stringas . ' ' . $number5;
                        if($number3 >= $number6) {
                            $stringas = $stringas . ' ' . $number3 .' '.  $number6;
                        } else {
                            $stringas = $stringas . ' ' . $number6 . ' ' . $number3;
                        }
                    } else {
                        $stringas = $stringas . ' ' . $number6;
                        if($number5 >= $number3) {
                            $stringas = $stringas . ' ' . $number5 .' '.  $number3;
                        } else {
                            $stringas = $stringas . ' ' . $number3 . ' ' . $number5;
                        }
                    }
                    /*************************************************************** */
            } else if($number5 >= $number3 && $number5 >= $number4 && $number5 >= $number6) {
                $stringas = $stringas . ' ' . $number5;
                if($number3 >= $number4 && $number3 >= $number6) {
                    $stringas = $stringas . ' ' . $number3;
                    if($number4 >= $number6) {
                        $stringas = $stringas . ' ' . $number4 .' '. $number6;
                    } else {
                        $stringas = $stringas . ' ' . $number6 . ' ' . $number4;
                    }
                    /******************************pabaiga vieno varianto************************* */
                } else if($number4 >= $number3 && $number4 >= $number6) {
                    $stringas = $stringas . ' ' . $number4;
                    if($number3 >= $number6) {
                        $stringas = $stringas . ' ' . $number3 .' '.  $number6;
                    } else {
                        $stringas = $stringas . ' ' . $number6 . ' ' . $number3;
                    }
                } else {
                    $stringas = $stringas . ' ' . $number6;
                    if($number3 >= $number4) {
                        $stringas = $stringas . ' ' . $number3 .' '.  $number4;
                    } else {
                        $stringas = $stringas . ' ' . $number4 . ' ' . $number3;
                    }
                }
                /*************************************************************** */
            } else {
                $stringas = $stringas . ' ' . $number6;
                if($number4 >= $number3 && $number4 >= $number5) {
                    $stringas = $stringas . ' ' . $number4;
                    if($number5 >= $number3) {
                        $stringas = $stringas . ' ' . $number5 .' '. $number3;
                    } else {
                        $stringas = $stringas . ' ' . $number3 . ' ' . $number5;
                    }
                    /******************************pabaiga vieno varianto************************* */
                } else if($number3 >= $number4 && $number3 >= $number5) {
                    $stringas = $stringas . ' ' . $number3;
                    if($number4 >= $number5) {
                        $stringas = $stringas . ' ' . $number4 .' '.  $number5;
                    } else {
                        $stringas = $stringas . ' ' . $number5 . ' ' . $number4;
                    }
                } else {
                    $stringas = $stringas . ' ' . $number5;
                    if($number3 >= $number4) {
                        $stringas = $stringas . ' ' . $number3 .' '.  $number4;
                    } else {
                        $stringas = $stringas . ' ' . $number4 . ' ' . $number3;
                    }
                }
                /*************************************************************** */
            }
    } else if( $number3 >= $number2 && $number3 >= $number4 && $number3 >= $number5 && $number3 >= $number6) {
        $stringas = $stringas . ' ' . $number3;
      //daug kopinimo.....      

    } else if( $number4 >= $number2 && $number4 >= $number3 && $number4 >= $number5 && $number4 >= $number6) {
        $stringas = $stringas . ' ' . $number4;
    } else if( $number5 >= $number2 && $number5 >= $number3 && $number5 >= $number4 && $number5 >= $number6) {
        $stringas = $stringas . ' ' . $number5;
    } else {
        $stringas = $stringas . ' ' . $number6;
    }
    /**************************************************************/
} else if($number2 >= $number1 && $number2 >= $number3 && $number2 >= $number4 && $number2 >= $number5 && $number2 >= $number6) {
    $stringas = $number2;
    } else if($number3 >= $number1 && $number3 >= $number2 && $number3 >= $number4 && $number3 >= $number5 && $number3 >= $number6) {
        $stringas = $number3;
        } else if($number4 >= $number1 && $number4 >= $number2 && $number4 >= $number3 && $number4 >= $number5 && $number4 >= $number6) {
            $stringas = $number4;
            } else if($number5 >= $number1 && $number5 >= $number2 && $number5 >= $number3 && $number5 >= $number4 && $number5 >= $number6) {
                $stringas = $number5;
                } else {
                    $stringas = $number6;
                }


echo $stringas;
?>