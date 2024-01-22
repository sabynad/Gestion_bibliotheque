<form   action="?controller=commandes&action=resultat_commande_par_editeur" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélectionner l'éditeur </option>
        <?php foreach($commandes as $e): ?>
        <option value="<?=$e->Editeur?>"><?=$e->Editeur?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>