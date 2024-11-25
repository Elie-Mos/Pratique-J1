<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Conditions et Fonctions</title>
</head>
<body>
    <!-- Formulaire  -->
    <form method="POST" action="">
        <label for="prenom">Entrez votre prénom :</label>
        <input type="text" name="prenom" id="prenom" required>
        <br><br>
        <label for="age">Entrez votre âge :</label>
        <input type="number" name="age" id="age" min="0" required>
        <br><br>
        <button type="submit">Soumettre</button>
    </form>

    <?php
    // Vérification si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //Je récupération les données du formulaire
        $prenom = htmlspecialchars($_POST["prenom"]); //  j'utilise htmlspecialchars poour securiser 
        $age = intval($_POST["age"]); // Conversion en entier pour l'âge

        // Fonction  qui verifier si on n'est majeur ou mineur
        function verifierAge($age) {
            return $age >= 18 ? "Majeur" : "Mineur";
        }

       // on affcihe un 
        echo "<h2>Bonjour, $prenom !</h2>";
        echo "<p>Vous êtes " . verifierAge($age) . ".</p>";
    }
    ?>
</body>
</html>
