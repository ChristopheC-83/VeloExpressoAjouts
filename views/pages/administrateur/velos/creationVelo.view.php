<div class="pageCreationVelo">

    <h1>Création d'un vélo</h1>
    <!-- <?= afficherTableau($marques)  ?> -->

    <form action="<?= URL ?>admin/velos/validationCreationVelo" method="post" enctype="multipart/form-data">

        <!-- Marque -->
        <div class="creation-velo-form inputFromCreation">
            <label for="marque">Marque : </label>
            <select name="marque" id="marque" required>
                <option value=""></option>
                <?php foreach ($marques as $marque) : ?>
                    <option value="<?= $marque['marque_id']  ?>"> <?= $marque['marque']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <!-- Modele -->
        <div class="creation-velo-form inputFromCreation">
            <label for="modele">Modèle : </label>
            <input type="text" id="modele" name="modele" required>
        </div>
        <!-- Prix -->
        <div class="creation-velo-form inputFromCreation">
            <label for="prix">Prix : </label>
            <input type="text" id="prix" name="prix" required>
        </div>

        <!-- Description -->
        <div class="creation-velo-form inputFromCreation">
            <label for="description">Description :</label>
            <textarea type="text" id="description" name="description" cols="30" rows="8" required></textarea>
        </div>
        <!-- Message Perso -->
        <div class="creation-velo-form inputFromCreation">
            <label for="message_perso">Message Perso :</label>
            <textarea type="text" id="message_perso" name="message_perso" cols="30" rows="8"></textarea>
        </div>

        <!-- Nb_Vitesses -->
        <div class="creation-velo-form inputFromCreation">
            <label for="nb_vitesses">Nombre de Vitesses : </label>
            <select name="nb_vitesses" id="nb_vitesses" required>
                <option value=""></option>
                <?php foreach ($nb_vitesses as $vitesses) : ?>
                    <option value="<?= $vitesses['vitesses_id']  ?>"> <?= $vitesses['nb_vitesses']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>
        <!-- Cadre -->
        <div class="creation-velo-form inputFromCreation">
            <label for="cadre">Taille Cadre : </label>
            <select name="cadre" id="cadre" required>
                <option value=""></option>
                <?php foreach ($taille_cadre as $cadre) : ?>
                    <option value="<?= $cadre['taille_cadre_id']  ?>"> <?= $cadre['taille_cadre']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <!-- Roues -->
        <div class="creation-velo-form inputFromCreation">
            <label for="roues">Taille Roues : </label>
            <select name="roues" id="roues" required>
                <option value=""></option>
                <?php foreach ($taille_roues as $roues) : ?>
                    <option value="<?= $roues['taille_roues_id']  ?>"> <?= $roues['taille_roues']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <!-- Type -->
        <div class="creation-velo-form inputFromCreation">
            <label for="type">Type de Vélo : </label>
            <select name="type" id="type" required>
                <option value=""></option>
                <?php foreach ($type_velo as $type) : ?>
                    <option value="<?= $type['type_id']  ?>"> <?= $type['type_velo']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>

        <!-- Suspension -->
        <div class="creation-velo-form inputFromCreation">
            <label for="suspension">Type de Suspension : </label>
            <select name="suspension" id="suspension" required>
                <option value=""></option>
                <?php foreach ($suspension as $susp) : ?>
                    <option value="<?= $susp['suspension_id']  ?>"> <?= $susp['suspension']  ?> </option>
                <?php endforeach ?>
            </select>
        </div>
        
        <!-- Electrique -->
        <div class="creation-velo-form radio-form inputFromCreation">
            <label> Electrique ?</label> 
            <input type="radio" name="electrique" id="electriqueO" value=1><label for="electrique" required>oui</label>
            <input type="radio" name="electrique" id="electriqueN" value=0 required><label for="electrique">non</label>
        </div>

        <!-- Vendu -->
        <div class="creation-velo-form radio-form inputFromCreation">
            <label> Vendu ?</label> 
            <input type="radio" name="vendu" id="venduO" value=1 required><label for="vendu">oui</label>
            <input type="radio" name="vendu" id="venduN" value=0 required><label for="vendu">non</label>
        </div>

        <!-- Neuf -->
        <div class="creation-velo-form radio-form inputFromCreation">
            <label> Neuf ?</label> 
            <input type="radio" name="neuf" id="neufO" value=1 required><label for="neuf">neuf</label>
            <input type="radio" name="neuf" id="neufN" value=0 required><label for="neuf">occasion</label>
        </div>

        <!-- Promo -->
        <div class="creation-velo-form radio-form inputFromCreation">
            <label> Promotion ?</label> 
            <input type="radio" name="promo" id="promoO" value=1 required>
            <label for="promo">oui</label>
            <input type="radio" name="promo" id="promoN" value=0 required><label for="promo">non</label>
        </div>

        <!-- photo -->
        <div class="creation-velo-form inputFromCreation">
            <label for="photo">Photo :</label>
            <input type="file" name="photo" id="photo">
        </div>




        <div class="entryForm">
            <!-- Pour éviter d'envoyer à l'appui de la touche ENTER -->
            <!-- <input class="buttonEntryForm" type="button" value="Connexion"onclick="submit()"> -->
            <!-- sinon : -->
            <button type="submit" id="btnCreationVelo">Création</button>
        </div>
        <div class="entryForm">
            <button><a href="<?= URL ?>admin/accueilAdmin">Retour</a></button>
        </div>


    </form>

</div>