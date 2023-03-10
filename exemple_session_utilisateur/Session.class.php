<?php

class Session
{

    private function connexion(): PDO
    {
        // Connexion et sélection de la base de données :
        try {
            $conn = new PDO("mysql:host=localhost;dbname=mydb1", "root", "Mysql5*");
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die;
        }
        return $conn;
    }

    /**
     * Fonction qui vérifie que l'identification saisie est correcte.
     */
    function utilisateur_existe($identifiant, $mot_de_passe): bool
    {
        $conn = $this->connexion();

        $sql = 'SELECT 1 FROM utilisateurs ';
        $sql .= 'WHERE identifiant = :login AND mot_de_passe = :mdp';

        // prepare and bind
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":login", $identifiant);
        $stmt->bindParam(":mdp", $mot_de_passe);

        // Exécution
        $stmt->execute();

        // L'identification est bonne si la requête a retourné
        // une ligne (l'utilisateur existe et le mot de passe
        // est bon).
        // Si c'est le cas $existe contient 1, sinon elle est
        // vide. (Il faudrait le renvoyer sur une page inscription.) Il suffit de la retourner en tant que booléen.
        if ($stmt->rowCount() > 0) {
            // ok, il existe
            $existe = true;
        } else {
            $existe = false;
        }
        return (bool) $existe;
    }

    function register(string $pseudo, string $psw): bool
    {
        $conn = $this->connexion();
        $psw = password_hash($psw, PASSWORD_BCRYPT);
        $sql = "INSERT INTO utilisateurs (`identifiant`, `mot_de_passe`) VALUES (:pseudo, :psw);";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":pseudo", $pseudo);
        $stmt->bindParam(":psw", $psw);

        
        return $stmt->execute();
    }

    function checkPassword(string $pseudo, string $psw)
    {
        $conn = $this->connexion();
        $sql = "SELECT id, mot_de_passe FROM utilisateurs WHERE identifiant = :pseudo";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":pseudo", $pseudo);

        $stmt->execute();

        $data = $stmt->fetch();
        $psw_bdd = $data["mot_de_passe"];

        
        if(!password_verify($psw, $psw_bdd))
        {
            $data["id"] = false;
        }
        
        return $data["id"];
    }
}
