<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Tableau associatif des utilisateurs enregistrés
    
    $utilisateurs = array(
        "user1@example.com" => "password1",
        "user2@example.com" => "password2",
        "user3@example.com" => "password3"
    );

    if (isset($utilisateurs[$email]) && $utilisateurs[$email] == $password) {
        echo "Bienvenue, vous êtes connecté !";
    } else {
        echo "Erreur: Email ou mot de passe incorrect.";
    }
}
?>