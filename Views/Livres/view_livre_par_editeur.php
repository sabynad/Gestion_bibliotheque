<form   action="?controller=livres&action=resultat_livre_par_editeur" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélection de l'éditeur</option>
        <?php foreach($livre as $l): ?>
        <option value="<?=$l->Editeur?>"><?=$l->Editeur?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>