<div class="types_list container">
    <p>Cliquez sur un type pour voir tous les Pokémon de ce type</p>
    <?php  $types = $viewVars['pokemon'];

    if(!$types) {
        echo "Aucun type trouvé !";
    } else { ?>
        <div class="row mx-auto justify-content-center">
            <?php foreach ($types as $type):?>
                <div class="col-md-2 all-types" style="background: #<?= $type['color'] ?>;">
                    <a class="typeAnchor " href="<?= $_SERVER['BASE_URI'] . '/types/' . $type['id'] ?>"><?php echo $type['name'] ?></a>
                </div>
            <?php endforeach;?>
        </div>
    <?php } ?>
</div>
