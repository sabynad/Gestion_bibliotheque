<form   action="?controller=fournisseurs&action=resultat_fournisseur_par_pays" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélectionner le Pays</option>
        <?php foreach($fournisseurs as $f): ?>
        <option value="<?=$f->Pays?>"><?=$f->Pays?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>