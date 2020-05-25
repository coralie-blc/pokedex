<?php
require_once __DIR__."/../models/Pokemon.php";
require_once __DIR__."/../models/Type.php";


class DBData {
    /**
     *  Connexion à la base de données
     */
    public function __construct()
    {
        // Récupération des données du fichier de config
        // la fonction parse_ini_file parse le fichier et retourne un array associatif
        // Attention, "config.conf" ne doit pas être versionné,
        // on versionnera plutôt un fichier d'exemple "config.dist.conf" ne contenant aucune valeur
        $configData = parse_ini_file(__DIR__.'/../config.conf');
        
        try {
            $this->dbh = new PDO(
                "mysql:host={$configData['DB_HOST']};dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING) // Affiche les erreurs SQL à l'écran
            );
        }
        catch(\Exception $exception) {
            echo 'Erreur de connexion...<br>';
            echo $exception->getMessage().'<br>';
            echo '<pre>';
            echo $exception->getTraceAsString();
            echo '</pre>';
            exit;
        }

    }

    // Page HOME / Récupérer tous les pokémons.
    public function getPokemons() {
        $sql = "SELECT *
        FROM `pokemon` "; 
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS,"Pokemon");
    }


    // Récupérer 1 pokémon selon l'id.
    public function getPokemonDetails($id) {
        $sql = "SELECT *
        FROM `pokemon`
        WHERE numero = $id"; 
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchObject("Pokemon");
    }


    // Récupérer le type d'un pokémon
    public function getPokemonType($id) {
        $sql = "SELECT `name`, `color`
        FROM pokemon_type
        JOIN type ON `type`.`id` = pokemon_type.type_id
        WHERE pokemon_numero = $id";
        $stmt = $this->dbh->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS,"Type");
    }


    // Récuperer tous les types
    public function getTypes(){
        $sql = "SELECT * FROM type";
        $request = $this->dbh->query($sql);
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    

    /**
     * Récupération d'une liste de pokémon par types
     */
    public function getPokemonsByType($type) {
        // On cherche dans la table de pivot "pokemon_type" les entrées qui correspondent au type fourni
        // puis on joint cette table à la table "pokemon" dont on récupère les champs
        $sql = "SELECT pokemon.*
                FROM pokemon 
                INNER JOIN pokemon_type ON pokemon_type.pokemon_numero = pokemon.numero
                WHERE pokemon_type.type_id = :type
                ";
        $request = $this->dbh->prepare($sql);
        $request->execute([':type' => $type]);
        // On récupère le résultat dans un array associatif ayant pour clés les champs de la table
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


