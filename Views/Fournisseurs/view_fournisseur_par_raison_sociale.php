<form   action="?controller=fournisseurs&action=resultat_fournisseur_par_raison_sociale" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélection nom du fournisseur</option>
        <?php foreach($fournisseurs as $f): ?>
        <option value="<?=$f->Raison_sociale?>"><?=$f->Raison_sociale?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>