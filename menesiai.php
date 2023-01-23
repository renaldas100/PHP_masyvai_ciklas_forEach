<?php

$menesiuVardai = array(1 => 'Sausis', 2 => 'Vasaris', 3 => 'Kovas', 4 => 'Balandis', 5 => 'Gegužė', 6 => 'Birželis', 7 => 'Liepa', 8 => 'Rugpjutis', 9 => 'Rugsėjis', 10 => 'Spalis', 11 => 'Lapkritis', 12 => 'Gruodis');

$menesiuDienos = array(1 => 31, 2 => 28, 3 => 31, 4 => 30, 5 => 31, 6 => 30, 7 => 31, 8 => 31, 9 => 30, 10 => 31, 11 => 30, 12 => 31);


$d31 = [];
$d30 = [];
$d28 = [];
$sum = 0;
foreach ($menesiuDienos as $key => $value) {
    $sum += $value;
    if ($value == 31) {
        array_push($d31, $menesiuVardai[$key]);
    }
    if ($value == 30) {
        array_push($d30, $menesiuVardai[$key]);
    }
    if ($value == 28) {
        array_push($d28, $menesiuVardai[$key]);
    }
//    echo $menesiuVardai[$key] . " yra " . $key . " mėnuo jis turi " . $value . " d.<br>";
}

//echo $sum."<br>";
//echo implode(',',$d31);
//echo sizeof($d31)."<br>";
//echo implode(',',$d30);
//echo sizeof($d30)."<br>";
//echo implode(',',$d28);
//echo sizeof($d28)."<br>";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mėnesiai</title>
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
    <div class="row mt-4">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Dviejų masyvų su kalendoriaus duomenimis analizė
                </div>
                <div class="card-body">
                    <div class="mt-3">
                        <div>
                            Metuose yra <b><?= sizeof($d31) ?></b> mėnesiai turintys 31 dieną
                            (<b><?= implode(',', $d31) ?></b>)<br>
                            Metuose yra <b><?= sizeof($d30) ?></b> mėnesiai turintys 30 dienų
                            (<b><?= implode(',', $d30) ?></b>)<br>
                            Metuose yra <b><?= sizeof($d28) ?></b> mėnesiai turintys 28 dienas
                            (<b><?= implode(',', $d28) ?></b>)
                        </div>
                        <div class="my-3">
                            Iš viso metuose yra <b><?= $sum ?></b> dienos
                        </div>
                        <div>
                            <?php foreach ($menesiuDienos as $key => $value) { ?>
                                <b><?= $menesiuVardai[$key] ?></b> yra <b><?= $key ?></b> mėnuo, jis turi <b><?= $value ?></b> d.<br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>
