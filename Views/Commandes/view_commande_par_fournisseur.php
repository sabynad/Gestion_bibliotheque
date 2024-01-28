<form   action="?controller=commandes&action=resultat_commande_par_fournisseur" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélectionner fournisseur </option>
        <?php foreach($commandes as $e): ?>
        <option value="<?=$e->Raison_sociale?>"><?=$e->Raison_sociale?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>