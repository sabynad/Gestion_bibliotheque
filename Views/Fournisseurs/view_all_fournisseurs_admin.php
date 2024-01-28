<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table class="table table-striped-columns" id='table'>
        <div class="p-3">
            <thead>
            <th>Code_fournisseurs</th>
            <th>Raison sociale</th>
            <th>Rue fournisseurs</th>
            <th>Localité</th>
            <th>Pays</th>
            <th>Email fournisseur</th>
            <th>Action</th>
            </thead>
        </div>

        <?php  foreach($fournisseurs as $f ): ?>

            <tr>
                <td><?=$f->Code_fournisseur?></td>
                <td><?=$f->Raison_sociale?></td>
                <td><?=$f->Rue_fournisseur?></td>
                <td><?=$f->Localite?></td>
                <td><?=$f->Pays?></td>
                <td><?=$f->Email_fournisseur?></td>
                <td>
                    <div class="">        
                        <button  class="btn btn-info" type="submit"> <i class="bi bi-plus-square"></i> </button> 
                        <form action="?controller=fournisseurs&action=formulaire_fournisseur_admin" method="POST">
                            <input type="hidden" value="<?= $f->Id_fournisseur?>" name="Id_fournisseur">    
                            <button class="btn btn-secondary" type="submit"><i class="bi bi-pencil-square"></i></button>    
                        </form>  
                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>                   
                    </div>
                 </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>            
              