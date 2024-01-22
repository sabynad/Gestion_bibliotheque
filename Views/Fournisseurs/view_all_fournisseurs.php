<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <thead>
        <th>Code_fournisseurs</th>
        <th>Raison sociale</th>
        <th>Rue fournisseurs</th>
        <th>Localité</th>
        <th>Pays</th>
        <th>Email fournisseur</th>
        <th>Action</th>
        </thead>

        <?php  foreach($fournisseurs as $f ): ?>

            <tr>
                <td><?=$f->Code_fournisseur?></td>
                <td><?=$f->Raison_sociale?></td>
                <td><?=$f->Rue_fournisseur?></td>
                <td><?=$f->Localite?></td>
                <td><?=$f->Pays?></td>
                <td><?=$f->Email_fournisseur?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>            
              