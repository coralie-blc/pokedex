<div class="types_list container-fluid">
    <p>Dans ce type, il y a ces pokemons:</p>
    <?php  $pokemons = $viewVars['types'];
    if(!$types) {
        echo "Oups, aucun type trouvé !";
    } else { ?>
        <div class="row mx-0">
            <?php foreach ($pokemons as $pokemon): ?>
                <div class="col-md-4 mt-3">
                    <div class="border-0 text-center mb-2">
                    <a class="pokemon-click" href="<?=$_SERVER['BASE_URI']?>/pokemondetails/<?=$pokemon['numero'];?>">
                        <img class="pokemon-mini" src="<?= $_SERVER['BASE_URI'] ;?>/img/<?= $pokemon['numero'];?>.png" alt="Personnages">
                        <p class="pokemon-click"><?=  ' #' . $pokemon['id'] . ' ' . $pokemon['nom']?> </p>
                    </a>
                    </div>
                </div>
            <?php endforeach;?>
        </div> 
    <?php } ?>
</div>
