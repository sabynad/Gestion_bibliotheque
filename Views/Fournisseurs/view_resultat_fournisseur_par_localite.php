<div>
    <p><?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table  class="table table-success table-striped" id='table'>
        <thead>
        <th>Raison Sociale</th>
        <th>Localité</th>
        <th>Pays</th>
        <th>Email_fournisseur</th>
        </thead>
        <?php  foreach($fournisseurs as $f ): ?>
        <tr>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Localite?></td>
        <td><?=$f->Pays?></td>
        <td><?=$f->Email_fournisseur?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>            
          