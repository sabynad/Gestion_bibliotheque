<form   action="?controller=livres&action=resultat_livre_par_titre" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélection du titre</option>
        <?php foreach($livre as $l): ?>
        <option value="<?=$l->Titre_livre?>"><?=$l->Titre_livre?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>
