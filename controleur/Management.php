<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Manager</title>
    <link rel="stylesheet" href="css/knacss.min.css">
    <link rel="stylesheet" href="css/indexSansGrid.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav>
    <head>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #111;
            }
        </style>
    </head>
    <body>

    <ul>
        <li><a class="active" href="http://localhost/MuseumVision/?action=visite">Visite</a></li>
        <li><a href=>Management des visites</a></li>

    </ul>
</nav>


                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center">Gestion des Exposition</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Exposition en cour</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    try {
                        $bdd = new PDO('mysql:host=localhost;dbname=museumvision;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
                    }
                    catch (Exception $e) {
                        die('Erreur : ' . $e->getMessage());
                    }
                    $reponse = $bdd->query('SELECT id,nom FROM exposition');
                    while ($donnees = $reponse->fetch())
                    {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $donnees['id'] ?></th>
                            <td><?php echo $donnees['nom'] ?></td>
                            <td><a href="deletexpo.php?id=<?php echo $donnees['id']?>">Supprimer</a></td>
                        </tr>
                        <?php
                    }
                    $reponse->closeCursor()
                    ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h2 class="text-center">Ajout : </h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="addexpo.php" method="post">
                    <div>
                        <label for="nom">Nom de l'exposition :</label>
                        <br>
                        <input type="text" id="nom" name="nom">
                    </div>
                    <div>
                        <label for="permanent">Exposition Permanente ? :</label>
                        <br>
                        <input type="int" id="permanent" name="permanent" multiple>
                    </div>
                    <div>
                        <label for="tarifEnfant">Tarif Enfant:</label>
                        <br>
                        <input type="decimal" id="tarifEnfant" name="tarifEnfant">
                    </div>
                    <div>
                        <label for="tarifAdulte">Tarif Adulte :</label>
                        <br>
                        <input type="decimal" id="tarifAdulte" name="tarifAdulte">
                    </div>
                    <div>
                        <label for="active">Exposition active ? :</label>
                        <br>
                        <input type="int" id="active" name="active">

                    </div>
                    <br>
                    <button type="submit">VALIDER</button>

                </form>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
