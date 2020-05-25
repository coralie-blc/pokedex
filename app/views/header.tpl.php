<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attrapez-les tous !</title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <h3 class="text-center m-3">
                <a href="<?=$_SERVER['BASE_URI']?>/" class="pokedexhome text-center m-3">Pokedex</a>
            </h3>
            <nav id="navbarhome">
                <ul class="navBar text-center anchornav col-md-6 m-auto">
                    <li><a href="<?=$_SERVER['BASE_URI']?>/" class="nav-link active anchorright">Liste</a></li>
                    <li><a href="<?= $_SERVER['BASE_URI']. '/alltypes' ?>">Types</a></li>
                    <li><a href="<?=$_SERVER['BASE_URI']?>/pokemondetails/1" class="nav-link active anchorright">Individuel</a></li>
                </ul>
            </nav>
        </div>
    </header>
<main>

