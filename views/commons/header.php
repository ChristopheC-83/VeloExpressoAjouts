<header>

    <div class="spacer_header"></div>

    <div class="barre-fixe">
        <div class="btn-hamburger" type="button">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <h1><a href="<?= URL ?>accueil">Vélo-Expresso</a></h1>

        <h3 class="modal-contact">Contact</h3>
    </div>

    <?php require_once("views/commons/menu.php") ?>


    <div class="fenetre-modale dnone">
        <?php require_once("views/commons/modaleContact.view.php") ?>
    </div>

</header>