<?php
$host = 'localhost';
$dbname = 'museumvision';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

$sql = "SELECT * FROM visite";

try{
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if($stmt === false){
        die("Erreur");
    }

}catch (PDOException $e){
    echo $e->getMessage();
}
?>

<body>
<h1>Liste des visites</h1>
<table>
    <thead>

    </thead>
    <tbody>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <tr>

            <td>L'expo ID <?php echo htmlspecialchars($row['ID']); ?></td>
            <td>comportant <?php echo htmlspecialchars($row['nbAdulte']); ?> adulte(s)</td>
            <td>et <?php echo htmlspecialchars($row['nbEnfant']); ?>enfant(s),</td>
            <td>à commencer le : <?php echo htmlspecialchars($row['dateHeureEntree']); ?></td>
            <td>et s'est terminé le : <?php echo htmlspecialchars($row['dateHeureSortie']); ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
</body>
