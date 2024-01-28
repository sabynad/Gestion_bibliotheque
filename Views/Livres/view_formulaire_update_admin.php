<?php
// var_dump($livre);
?>


<form  class="" action="?controller=livres&action=update_livre_admin" method="POST">

  <div class="mb-3">
    <label for="ISBN" class="form-label">ISBN</label>
  <input type="text" class="form-control" id="ISBN"  name="ISBN" value=" <?=$livre[0]->ISBN?> ">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Titre livre</label>
    <input type="text" class="form-control" id="tl" name="Titre_livre" value=" <?=$livre[0]->Titre_livre?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Thème du livre</label>
    <input type="text" class="form-control" id="tl" name="Theme_livre" value=" <?=$livre[0]->Theme_livre?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Nombres de pages</label>
    <input type="text" class="form-control" id="np" name="Nbr_pages_livre" value=" <?=$livre[0]->Nbr_pages_livre?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Format du livre</label>
    <input type="text" class="form-control" id="fl" name="Format_livre" value=" <?=$livre[0]->Format_livre?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Nom de l'auteur</label>
    <input type="text" class="form-control" id="na" name="Nom_auteur" value=" <?=$livre[0]->Nom_auteur?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Prénom de l'auteur</label>
    <input type="text" class="form-control" id="pa" name="Prenom_auteur" value=" <?=$livre[0]->Prenom_auteur?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Editeur</label>
    <input type="text" class="form-control" id="e" name="Editeur" value=" <?=$livre[0]->Editeur?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Année édition</label>
    <input type="text" class="form-control" id="ae" name="Annee_edition" value=" <?=$livre[0]->Annee_edition?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Prix de vente</label>
    <input type="text" class="form-control" id="pv" name="Prix_vente" value=" <?=$livre[0]->Prix_vente?>">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Langue</label>
    <input type="text" class="form-control" id="lv" name="Langue_livre" value=" <?=$livre[0]->Langue_livre?>">
  </div>

  <div class="mb-3">
    <input type="hidden" class="form-control" id="Id_Livre" name="Id_Livre" value=" <?=$livre[0]->Id_Livre?>">
  </div>


<div class="mb-5">
  <button type="submit" class="nb-5 btn btn-primary">Submit</button>
</div>

</form>