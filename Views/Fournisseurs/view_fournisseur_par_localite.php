<form   action="?controller=fournisseurs&action=resultat_fournisseur_par_localite" method="POST">

    <select class="select-titre " aria-label="Default select example" name="select-titre" >

        <option selected>Sélectionner la localité </option>
        <?php foreach($fournisseurs as $f): ?>
        <option value="<?=$f->Localite?>"><?=$f->Localite?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit" class="btn btn-warning">Chercher</button>

</form>