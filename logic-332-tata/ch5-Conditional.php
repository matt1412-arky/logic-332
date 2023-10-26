<?php

    // - - -      If Statement       - - - //
    $score = 85;

    if ($score >= 60){
        echo "anda lulus!\n";
    }                           // - - <<-- <expected = "anda lulus!"> karena score >= 60

    // - - -   If / Else Statement   - - - //
    $score = 50;

    if ($score >= 60){
        echo "anda Lulus!";
    } else{
        echo "anda kurang beruntung!\n";    // - - <<-- <expected = "anda kurang beruntung"> karena score < 60
    }

    // - - - If / Else / If Statement - - - //
    $score = rand(0, 100); $grade = "";

    echo "score = " . $score . "\n";

    if ($score >= 90){
        $grade = "A";
    } elseif ($score >= 80){
        $grade = "B";
    } elseif ($score >= 70){
        $grade = "C";
    } elseif ($score >= 60){
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo $grade . "\n";

    // - - -     Switch Statement     - - - //
    $hari = "senin";

    switch ($hari){
        case "senin":
            echo "hari ini adalah hari senin";
            break;
        case "selasa":
            echo "hari ini adalah hari selasa";
            break;
        case "rabu":
            echo "hari ini adalah hari rabu";
            break;
        default:
            echo "default";
            break;
    }

?>