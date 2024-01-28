<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <div class="p-3">
            <thead>
            <th>Titre livre</th>
            <th>Fournisseur</th>
            <th>Editeur</th>
            <th>Date d'achat</th>
            <th>Prix d'achat</th>
            <th>Quantité</th>
            <th>Action</th>
            </thead>
        </div>

        <?php  foreach($commandes as $c ): ?>

            <tr>
            
                <td><?=$c->Titre_livre?></td>
                <td><?=$c->Raison_sociale ?></td>
                <td><?=$c->Editeur?></td>
                <td><?=$c->Date_achat ?></td>
                <td><?=$c->Prix_achat ?></td>
                <td><?=$c->Nbr_exemplaires ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>    