
<form  action="?controller=livres&action=livre_admin" method="POST">

  <div class="mb-3">
    <label for="checkbox" class="form-label">ISBN</label>
    <input type="text" class="form-control" id="ISBN" aria-describedby="" name="ISBN">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Titre livre</label>
    <input type="text" class="form-control" id="tl" name="Titre_livre">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Thème du livre</label>
    <input type="text" class="form-control" id="tl" name="Theme_livre">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Nombres de pages</label>
    <input type="text" class="form-control" id="np" name="Nbr_pages_livre">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Format du livre</label>
    <input type="text" class="form-control" id="fl" name="Format_livre">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Nom de l'auteur</label>
    <input type="text" class="form-control" id="na" name="Nom_auteur">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Prénom de l'auteur</label>
    <input type="text" class="form-control" id="pa" name="Prenom_auteur">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Editeur</label>
    <input type="text" class="form-control" id="e" name="Editeur">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Année édition</label>
    <input type="text" class="form-control" id="ae" name="Année_edition">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Prix de vente</label>
    <input type="text" class="form-control" id="pv" name="Prix_vente">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Langue</label>
    <input type="text" class="form-control" id="lv" name="Langue_livre">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>