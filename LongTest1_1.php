<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="longtest.css">
</head>
<body class="container">
    <div class="row heroDays mt-2">
        <div class="col-12 mb-3">
            <h1>
                The Days of the Week
            </h1>
        </div>
        <div class="col-12 days">
            <?php
                $daysEnglish = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                $daysFrench = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

                echo "<h3>The days of the week in English:</h3>";
                $Days = $daysEnglish;
                printDays($Days);

                echo "<h3> The days of the week in French: </h3>";
                $Days = $daysFrench;
                printDays($Days);

                function printDays($Days){
                    echo "<p>";
                    for($i = 0; $i < 7; $i++){
                    echo "$Days[$i] <br>";
                    }
                    echo "</p>";
                }
            ?>
        </div>
    </div>
    <div class="row footer">
        <p class="col-12">
            Created by: Collado, Divina, Gamboa, Sison
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>