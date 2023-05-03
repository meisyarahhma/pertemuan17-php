<?php
    echo "---------------------------------------- TUGAS LATIHAN PHP 2 ---------------------------------------- <br> <br>";
    
    // -------------------- Nomor 1 --------------------
    echo "--------------- Nomor 1 --------------- <br>";

    echo "Triangle Upside Left <br>";
    $size1 = 5;
    for($x = 0; $x < $size1; $x++) {
        // print column
        for($y = 0; $y <= $x; $y++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br> Triangle Downside Left <br>";
    $size2 = 5;
    for($x = 0; $x < $size2; $x++) {
        // print stars
        for($y = 0; $y < $size2 - $x; $y++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br> Triangle Upside Right <br>";
    $size3 = 5;
    for($x = 0; $x < $size3; $x++) {
        // print spaces
        for($y = 1; $y < $size3 - $x; $y++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($z = 0; $z <= $x; $z++) {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br> Triangle Downside Right <br>";
    $size4 = 5;
    for ($x = 0; $x < $size4; $x++) {
        // print spaces
        for($y = 1; $y <= $x; $y++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($z = 0; $z < $size4 - $x; $z++) {
            echo "*";
        }
        echo "<br>";
    }


     // -------------------- Nomor 2 --------------------
    echo "<br>--------------- Nomor 2 --------------- <br>";
    $jenis="downside left";
    switch ($jenis) {
        case "upside left":
            echo "Anda memilih triangle upside left :<br>";
            $size1 = 5;
            for($x = 0; $x < $size1; $x++) {
                // print column
                for($y = 0; $y <= $x; $y++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;

        case "downside left":
            echo "Anda memilih triangle downside left :<br>";
            $size2 = 5;
            for($x = 0; $x < $size2; $x++) {
                // print stars
                for($y = 0; $y < $size2 - $x; $y++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
        
        case "upside right":
            echo "Anda memilih triangle upside right :<br>";
            $size3 = 5;
            for($x = 0; $x < $size3; $x++) {
                // print spaces
                for($y = 1; $y < $size3 - $x; $y++) {
                    echo "&nbsp;&nbsp;";
                }
                // print stars
                for($z = 0; $z <= $x; $z++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;

        case "downside right":
            echo "Anda memilih triangle downside right :<br>";
            $size4 = 5;
            for ($x = 0; $x < $size4; $x++) {
                // print spaces
                for($y = 1; $y <= $x; $y++) {
                    echo "&nbsp;&nbsp;";
                }
                // print stars
                for($z = 0; $z < $size4 - $x; $z++) {
                    echo "*";
                }
                echo "<br>";
            }
            break;
    }

    // -------------------- Nomor 3 --------------------
    echo "<br> --------------- Nomor 3 --------------- <br> (nilai default row = 5 dan simbol = *) <br>";

    echo "Triangle Upside Left <br>";
    // nilai default 5 dan simbol *
    function sum1($size6=5, $simbol="*"){
        for($x = 0; $x < $size6; $x++) {
            // print column
            for($y = 0; $y <= $x; $y++) {
                echo $simbol;
            }
            echo "<br>";
        }
    }
    sum1(6,"$");

    echo "<br> Triangle Downside Left <br>";
    // nilai default 5 dan simbol *
    function sum2($size6=5, $simbol="*"){
        for($x = 0; $x < $size6; $x++) {
            // print stars
            for($y = 0; $y < $size6 - $x; $y++) {
                echo $simbol;
            }
            echo "<br>";
        }
    }
    sum2(10,"@");
    
    echo "<br> Triangle Upside Right <br>";
    // nilai default 5 dan simbol *
    function sum3($size6=5, $simbol="*"){
        for($x = 0; $x < $size6; $x++) {
            // print spaces
            for($y = 1; $y < $size6 - $x; $y++) {
                echo "&nbsp;&nbsp;";
            }
            // print stars
            for($z = 0; $z <= $x; $z++) {
                echo $simbol;
            }
            echo "<br>";
        }
    }
    sum3(9,"#");
    
    echo "<br> Triangle Downside Right <br>";
    // nilai default 5 dan simbol *
    function sum4($size6=5, $simbol="*"){
        for ($x = 0; $x < $size6; $x++) {
            // print spaces
            for($y = 1; $y <= $x; $y++) {
                echo "&nbsp;&nbsp;";
            }
            // print stars
            for($z = 0; $z < $size6 - $x; $z++) {
                echo $simbol;
            }
            echo "<br>";
        }
    }
    sum4(7);
?>