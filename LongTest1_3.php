<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Even</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="longtest.css">
</head>
<body class="container">
    <div class="row mt-2">   
        <div class="col-12 mb-3">
            <h1>
                Even Values
            </h1>
        </div> 
        <div class="col-12 heroEven pt-2">
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
                            echo "<h2> Value is empty </h2>";
                        } else {
                            echo is_numeric($value) ? isEven($value) : "<h2> Value of $value is not a number </h2>";
                        }

                    }
                    function isEven($valueEven){
                        is_float($valueEven) ? $num = round($valueEven) : $num = $valueEven;
                        if(($num % 2) == 0){
                            echo "<h2> Is Even </h2>";
                            $isEven = " and it is even. \n";
                        } else {
                            echo "<h2> Is Not Even </h2>";
                            $isEven = " and it is not even. \n";
                        }
                        echo "<p>";
                        echo "The number is \n" .$num .$isEven;
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