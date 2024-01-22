<form   action="?controller=livres&action=resultat_livre_par_auteur" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélection du titre</option>
        <?php foreach($livre as $l): ?>
        <option value="<?=$l->Nom_auteur?>"><?=$l->Nom_auteur?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>