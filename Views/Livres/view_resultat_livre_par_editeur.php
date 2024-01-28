
<div>
    <p><?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table  class="table table-success table-striped  table table-bordered border-primary" id='table'>
        <thead>
        <th>Titre livre</th>
        <th>Theme livre</th>
        <th>Nombre de pages</th>
        <th>Format</th>
        <th>Nom de l'auteur</th>
        <th>Prénom de l'auteur</th>
        <th>Éditeur</th>
        <th>Année d'édition</th>
        <th>Prix</th>
        <th>Langue</th>
        </thead>
        <?php  foreach($livre as $l ): ?>
        <tr>
        <td><?=$l->Titre_livre?></td>
        <td><?=$l->Theme_livre?></td>
        <td><?=$l->Nbr_pages_livre?></td>
        <td><?=$l->Format_livre?></td>
        <td><?=$l->Nom_auteur?></td>
        <td><?=$l->Prenom_auteur?></td>
        <td><?=$l->Editeur?></td>
        <td><?=$l->Annee_edition?></td>
        <td><?=$l->Prix_vente?></td>
        <td><?=$l->Langue_livre?></td>

        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              