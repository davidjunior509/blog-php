<?php

    $db_host = "localhost";
    $db_name = "blog-php";  // Assure-toi que cette base existe !
    $db_user = "root";
    $db_password = "";
    $db_port = "3306"; // XAMPP utilise en général le port 3306 pour MySQL

    try {
            $pdo = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user, $db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //echo "<h3 style='color: green;'>✅ Connexion réussie à la base de données '$db_name' !</h3>";
    } catch (PDOException $error) {
        echo "<h3 style='color: red;'>❌ Erreur de connexion : " . $error->getMessage() . "</h3>";
    }
?>    