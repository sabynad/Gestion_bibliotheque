
<form   action="?controller=commandes&action=ajout_commande_admin" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >
        <option selected>Sélectionner Livre</option>
        <?php foreach($commandes as $e): ?>
        <option value="<?=$e->Titre_Livre?>"><?=$e->Titre_Livre?></option>
        <?php endforeach; ?>
    </select>

<select class="select-titre " aria-label="Default select example" name="select-titre" >
        <option selected>Sélectionner Fournisseur</option>
        <?php foreach($commandes as $e): ?>
        <option value="<?=$e->Raison_sociale?>"><?=$e->Raison_Sociale?></option>
        <?php endforeach; ?>
</select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>