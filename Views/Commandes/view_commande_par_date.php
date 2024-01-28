<form   action="?controller=commandes&action=resultat_commande_par_date" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélectionner la date </option>
        <?php foreach($commandes as $e): ?>
        <option value="<?=$e->Date_achat?>"><?=$e->Date_achat?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>