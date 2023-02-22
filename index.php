<?php
function generateRandomPassword($length = 8) {
    // Caractères possibles pour le mot de passe
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    
    // Initialisation du mot de passe
    $password = '';
    
    // Boucle pour ajouter des caractères aléatoires au mot de passe
    for ($i = 0; $i < $length; $i++) {
        // Génère un index aléatoire dans la chaîne $chars
        $index = rand(0, strlen($chars) - 1);
        
        // Ajoute le caractère aléatoire au mot de passe
        $password .= $chars[$index];
    }
    
    // Retourne le mot de passe généré
    return $password;
}

// Génère un mot de passe aléatoire de longueur 12
$password = generateRandomPassword(12);

// Affiche le mot de passe généré
echo "Mot de passe aléatoire : " . $password;
?>
