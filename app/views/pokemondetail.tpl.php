<?php

require_once __DIR__."/../models/Pokemon.php";
require_once __DIR__."/../models/Type.php";

$pokem =  $viewVars['pokemon'];
$pokemtype =  $viewVars['pokemon']->getType();
?>

<section>
  <div class="container-fluid">
    <div class="row mx-0 d-flex">
      <div class="col-md-6">
        <p class="presentation text-center">#<?= $pokemon->getNumero() . ' ' . $pokemon->getNom();?></p> 
        <div class="card border-0 text-center">
          <a class="pokemon-click" href="<?=$_SERVER['BASE_URI']?>/pokemondetails/<?=$pokemon->getNumero()?>">
            <img class="image" src="<?= $_SERVER['BASE_URI'] ;?>/img/<?= $pokemon->getNumero();?>.png" alt="Personnages">
          </a>
        </div>
      </div>

<section id="pokestats" class="col-md-6">
  <div class="unique">
  <?php
    foreach ($pokemtype as $type):?>
      <p class="types" style="background-color:#<?= $type->getColor(); ?>"><?= $type->getName(); ?></p> 
  <?php endforeach; ?>
      <p class="stats mt-3">Statistiques</p>

      <table class="tableau w-100 mb-4">
        <tbody class="">
          <tr>
            <td class="leftTd">Pv</td> <td class="rightTd"><?= $pokemon->getPv() ?></td> <td class="progressBar"><div class="progress">
              <div class="progress-bar bg-white" role="progressbar" style="width: <?=$pokemon->getPv().'%'?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255"></div>
              </div>
            </td>
              </tr>
          <tr>
            <td class="leftTd">Attaque</td> <td class="rightTd"><?= $pokemon->getAttaque() ?></td><td class="progressBar"><div class="progress">
              <div class="progress-bar bg-white" role="progressbar" style="width: <?=$pokemon->getAttaque().'%'?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255"></div>
              </div>
            </td>
              </tr>
          <tr>
            <td class="leftTd">Defense</td> <td class="rightTd"><?= $pokemon->getDefense() ?></td><td class="progressBar"><div class="progress">
              <div class="progress-bar bg-white" role="progressbar" style="width: <?=$pokemon->getDefense().'%'?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255"></div>
              </div>
            </td>
          </tr>
          <tr>
            <td class="leftTd">Attaque Spé</td> <td class="rightTd"><?= $pokemon->getAttaque_spe() ?></td><td class="progressBar"><div class="progress">
              <div class="progress-bar bg-white" role="progressbar" style="width: <?=$pokemon->getAttaque_spe().'%'?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255"></div>
              </div>
            </td>
            </tr>
              <tr>
                <td class="leftTd">Défense Spé</td> <td class="rightTd"><?= $pokemon->getDefense_spe() ?></td><td class="progressBar"><div class="progress">
                  <div class="progress-bar bg-white" role="progressbar" style="width: <?=$pokemon->getDefense_spe().'%'?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="leftTd">Vitesse</td> <td class="rightTd"><?= $pokemon->getVitesse() ?></td><td class="progressBar"><div class="progress">
                  <div class="progress-bar bg-white" role="progressbar" style="width: <?=$pokemon->getVitesse().'%'?>" aria-valuenow="50" aria-valuemin="0" aria-valuemax="255"></div>
                  </div>
                </td>
              </tr>     
          </tbody>
      </table> 
  </div>
</section>
