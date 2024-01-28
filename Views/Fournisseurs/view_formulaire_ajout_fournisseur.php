

<form  class="" action="?controller=fournisseurs&action=ajout_fournisseur_admin" method="POST">

  <div class="mb-3">
    <label for="" class="form-label">Code fournisseur</label>
  <input type="text" class="form-control" id="cf"  name="Code_fournisseur" value=" ">
</div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Raison sociale</label>
    <input type="text" class="form-control" id="rs" name="Raison_sociale" value="">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Rue fournisseur</label>
    <input type="text" class="form-control" id="rf" name="Rue_fournisseur" value="">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Localite</label>
    <input type="text" class="form-control" id="lo" name="Localite" value="">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Pays</label>
    <input type="text" class="form-control" id="ps" name="Pays" value="">
  </div>

  <div class="mb-3">
    <label for="checkbox" class="form-label">Email_fournisseur</label>
    <input type="text" class="form-control" id="na" name="Email_fournisseur" value="">
  </div>

  <div class="mb-3">
    <input type="hidden" class="form-control" id="Idf" name="Id_fournisseur" value="">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>

</form>