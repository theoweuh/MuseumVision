<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=museumvision;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION));
}
catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>


<h1>Museum Vision</h1>

<label for ="entr_texte">Nombre de place adulte </label>
<input type="number" id="entr"
       min="0" max="50"
       </input>
<br>
<br>

<label for ="entr_texte">Nombre de place enfant </label>
<input type="number" id="entr"
       min="0" max="50"

<br>
<br>
<?php
for ($i = 0; $i < count($listeExpos); $i++) {
$listeExpos = getExpos($listeExpos[$i]['nom']);
?>
<p>Type d'exposition </p>
<form action="/action_page.php">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 "><label for="tarif"><input type="checkbox" id="expo" name="expo" value="expo">
                <label for="expo"><?php echo $listeExpos ?></label>
                <br>



        </div>


    </select>
</form>
<form>
    <form action="" method="get">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-1 "> </div>
            <div class="col-sm-6 "><label for="tarif"><button type="submit">Valider l'enregistrement / calculer tarif et N° visite</button></label></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-1 "> </div>
            <div class="col-sm-9 "><label for="tarif"><label>A partir de 50 personnes, vente/enregistrement des visites terminées</label></div>
        </div>

    </form>
</form>

<br>
<br>





    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>




    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-5 "> </div>
        <div class="col-sm-2 "><label for="tarif">Tarif à payer : </label></div>
        <div class="col-sm-3"><form action="">

                <input type="text" id="tarif" name="tarif"><br><br></div>



    </div>
    <br>
    </body>








