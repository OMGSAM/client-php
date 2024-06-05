<?php
// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

$sql = "SELECT id_client,  cin, nom, prenom, email, pass FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les données de chaque ligne
    echo "<table border='1'>";
    echo "<tr><th>ID Hôtel</th><th>ID Client</th><th>cin</th><th>Nom</th><th>prenom</th><th>email</th><th>pass</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id_client"] . "</td>";
        echo "<td>" . $row["cin"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["pass"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
