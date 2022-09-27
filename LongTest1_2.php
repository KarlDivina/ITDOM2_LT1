<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rounded Values</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="longtest.css">
</head>
<body class="container">
    <div class="row mt-2">  
        <div class="col-12 mb-3">
            <h1>
                Rounded Values
            </h1>
        </div>
        <div class="col-12 heroForm pt-2">
            <form
                method="post"
                action="<?php
                    echo $_SERVER['PHP_SELF'];
                ?>"
            >
                Enter Value:
                <input type="text" name="value">
                <input type="submit">
            </form>
            <div class="mt-2">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $value = $_POST['value'];
                        if (empty($value)){
                            echo "Value is empty";
                        } else if (!is_numeric($value)){
                            echo "<h2> Value is not a number </h2>";
                        } else {
                            roundValue($value);
                            roundUp($value);
                            roundDown($value);
                        }
                    }

                    function roundValue($valueRound){
                        echo "<p>";
                        echo "<h3> Round </h3>";
                        echo "Round = " .round($valueRound). "<br>";
                        echo "</p>";
                    }
                    function roundUp($valueCeiling){
                        echo "<p>";
                        echo "<h3> Ceiling </h3>";
                        echo "Ceiling = " .ceil($valueCeiling). "<br>";
                        echo "</p>";
                    }
                    function roundDown($valueFloor){
                        echo "<p>";
                        echo "<h3> Floor </h3>";
                        echo "Floor = " .floor($valueFloor). "<br>";
                        echo "</p>";
                    }  
                ?>
            </div>
        </div>
    </div>
    <div class="row footer">
        <p class="col-12 text-align-center">
            Created by: Collado, Divina, Gamboa, Sison
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>