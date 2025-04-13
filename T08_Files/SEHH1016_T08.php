<HTML>

<BODY>
    <P> Second exercise: </P>
    <?php
    // Leung Yam Lam 24161883A
    $numA = 2;
    $numB = 12;
    $txtA = "2";
    $txtB = "12";
    if ($numA == $txtA) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
    if ($numA > $numB) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
    if ($txtA > $txtB) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
    if ($numA > $txtB) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
    if ($txtA > $numB) {
        echo "True";
    } else {
        echo "False";
    }
    echo "<br>";
    $numC = $numA * $numB;
    echo $numC;
    echo "<br>";
    $numC = $txtA + $txtB;
    echo $numC;
    echo "<br>";
    $numC = $numA . $numB;
    echo $numC;
    echo "<br>";
    $numC = $txtA . $txtB;
    echo $numC;
    ?>
</BODY>

</HTML>