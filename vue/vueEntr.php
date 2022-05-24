<h1 xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">Museum Vision</h1>

<p>Type d'exposition </p>
<form action="./?action=visite" method="post">

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-5 "><h3>Expositions</h3>

        <?php
        for ($i = 0; $i < count($listeExpos); $i++) {
?>
<input type="checkbox" id="expo<?php echo $listeExpos[$i]['ID']?>" name="expo<?php echo $listeExpos[$i]['ID']?>" value="expo">
<label for="expo<?php echo $listeExpos[$i]['ID']?>"><?php echo $listeExpos[$i]['nom']?></label>
<br>
<?php
}
?>
            </select>

        </div>
    </div>

    <div class="row">
        <label> Nombre de place de place enfant</label>

        <input name="nbenfant" type="number" id="number" value="0" ng-model="nbenfant">
        <label> Nombre de place de place adulte</label>

        <input name="nbadulte" type="number" id="number" value="0"ng-model="nbadulte">

    </div>
    <div class="row">

        <div class="col-sm-12 "><button name="valider" type="submit">Calculer le prix</button></div>

        <input type="button" value="Valider" onclick="document.location.href='vue/ManageVisite.php';">


    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-1 "> </div>
        <div class="col-sm-9 "><label for="tarif"><label>A partir de 50 personnes, vente/enregistrement des visites terminées</label></div>
    </div>
</form>
<br>
<br>
            <p><b>Total de(s) place(s) :
                    <?php echo $nbPlace?> </b></p>
            <p><b>Total du prix :
                    <?php echo $prix ?> €</b></p>

        </div>






    </div>
    <br>
    </body>








