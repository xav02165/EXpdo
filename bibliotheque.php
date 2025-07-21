<?php

        //connexion a la bdd
        session_start();
        $host = 'localhost';
        $dbname = 'bibliotheque';
        $user = 'root';
        $password = '';


        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie !";


?>