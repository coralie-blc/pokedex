<?php
require_once __DIR__."/../utils/DBData.php";

class MainController {

    public function show($viewName, $viewVars=[]) {
        extract($viewVars);
        require_once __DIR__."/../views/header.tpl.php";
        require_once __DIR__."/../views/$viewName.tpl.php";
        require_once __DIR__."/../views/footer.tpl.php";
    }


    public function error() {
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }
    
    // Récupérer tous les pokémons
    // PAGE HOME
    public function pokemon() {
        $db = new DBData();
        $pokemonDetails = $db->getPokemons(); 
        $this->show('home', ['pokemon' => $pokemonDetails]);
    }


    // Récupérer le détail de d'un pokemon
    // PAGE POKEMONDETAIL
    public function pokemondetails($id) {        
        $db = new DBData();
        $pokemonDetails = $db->getPokemonDetails($id);
        $this->show('pokemondetail', ['pokemon' => $pokemonDetails]);
    }


    // Récupérer les pokemons d'1 TYPE
    // PAGE TYPES
    public function pokemontype($type) { 
        $db = new DBData();
        $pokemons = $db->getPokemonsByType($type);
        $this->show('byType', ['types' => $pokemons]);
    }


    // Récupérer tous les types de pokemons
    // PAGE ALLTYPES
    public function allTypes() { 
        $db = new DBData();
        $types = $db->getTypes();
        $this->show('alltypes', ['pokemon' => $types]);
    }
}
