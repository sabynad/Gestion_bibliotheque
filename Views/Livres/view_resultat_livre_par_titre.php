
<div>
    <p><?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table-primary" id='table'>
        <thead>
        <th >Titre livre</th>
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
        <td class="table-secondary"><?=$l->Titre_livre?></td>
        <td class="table-danger"><?=$l->Theme_livre?></td>
        <td class="table-warning"><?=$l->Nbr_pages_livre?></td>
        <td class="table-warning"><?=$l->Format_livre?></td>
        <td class="table-warning"><?=$l->Nom_auteur?></td>
        <td class="table-warning"><?=$l->Prenom_auteur?></td>
        <td class="table-warning"><?=$l->Editeur?></td>
        <td class="table-warning"><?=$l->Annee_edition?></td>
        <td class="table-warning"><?=$l->Prix_vente?></td>
        <td class="table-warning"><?=$l->Langue_livre?></td>

        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              