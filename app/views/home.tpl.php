<?php

require_once __DIR__."/../models/Pokemon.php";
require_once __DIR__."/../models/Type.php";

$pokem =  $viewVars['pokemon'];
?>

<section>
    <div class="container-fluid">
        <div class="row mx-0">
            <?php foreach ($pokem as $pokemon) : ?>
                <div class="col-md-4 mt-3">
                    <div class="card border-0 text-center mb-2">
                        <a class="pokemon-click" href="<?=$_SERVER['BASE_URI']?>/pokemondetails/<?=$pokemon->getNumero()?>">
                            <img class="image" src="<?= $_SERVER['BASE_URI'] ;?>/img/<?= $pokemon->getNumero();?>.png" alt="Personnages">
                            <p class="pokemon-click"><?=  ' #' . $pokemon->getId() . ' ' . $pokemon->getNom()?> </p>
                        </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
</section>



        
