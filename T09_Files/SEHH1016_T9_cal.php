<html>
    <head>
        <title>Calculation Result</title>
</head>
    <body>
    Hello,
    <?php
    echo $_POST["username"] . ".<br>"; 
    $d = date("d/m/y");
    echo "Today is " . $d . ".<br>";
    echo "The result of the operation is ";
    switch ($_POST["operation"]) {
        case "add":
            echo $_POST["operand1"] + $_POST["operand2"] . ".<br>";
            break;
        case "sub":
            echo $_POST["operand1"] - $_POST["operand2"] . ".<br>";
            break;
        case "mul":
            echo $_POST["operand1"] * $_POST["operand2"] . ".<br>";
            break;
        case "div":
            echo $_POST["operand1"] / $_POST["operand2"] . ".<br>";
            break;
    }
    ?>