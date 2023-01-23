<?php

if (isset($_POST['temp'])) {
    $temp = explode(',', $_POST['temp']);

    $sum = 0;
    $maxmax = -100;
    $max = -100;
    $minmin = 100;
    $min = 100;
    foreach ($temp as $c) {
        $sum += $c;
        if ($c >= $maxmax) {
            $maxmax = $c;
        }
        if ($c <= $minmin) {
            $minmin = $c;
        }
    }

//    echo $maxmax;
//    echo $minmin;

    foreach ($temp as $c) {
        if ($c >= $max && $c < $maxmax) {
            $max = $c;
        }
        if ($c <= $min && $c > $minmin) {
            $min = $c;
        }

    }
//    echo $max;
//    echo $min;


    $vidutinė = $sum / sizeof($temp);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masyvai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Meniu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Temperatūra</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menesiai.php">Kalendorius</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-md">
    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Temperatūros duomenų analizė
                </div>
                <div class="card-body">
                    <div>Įveskite temperatūros duomenis</div>
                    <form method="post">
                        <input name="temp" style="width: 100%">
                        <div class="text-center">
                            <button class="btn btn-success mt-3" type="submit">Skaičiuoti</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3">
                <?php if (isset($maxmax) && $c!=null) { ?>
                    Vidutinė temperatūra yra: <?= $vidutinė ?><br>
                    Viso nuoskaitų yra: <?= sizeof($temp) ?><br>
                    Dvi didžiausios temperatūros: <?= $maxmax.",".$max ?><br>
                    Dvi mažiausios temperatūros:<?= $minmin.",".$min ?><br>
                    Pateiktos temperatūrų vertės yra:<?= implode(',', $temp) ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>




