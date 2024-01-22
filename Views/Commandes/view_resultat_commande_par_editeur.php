
<div>
    <p><?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table id='table'>
        <thead>
        <th>Editeur</th>  
        <th>Date achat</th>    
        <th>Prix achat</th>  
         
        </thead>
        <?php  foreach($commandes as $e ): ?>
        <tr>
        <td><?=$e->Editeur?></td>
        <td><?=$e->Date_achat ?></td>
        <td><?=$e->Prix_achat ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              