
<div class="">
    <p><?= isset($search)?'Recherche par '.$search:'' ?></p>
    <table  class="table table-success table-striped" id='table'>
        <thead>
        <th>Raison sociale</th>  
        <th>Date achat</th>    
        <th>Prix achat</th>  
         
        </thead>
        <?php  foreach($commandes as $e ): ?>
        <tr>
        <td><?=$e->Raison_sociale?></td>
        <td><?=$e->Date_achat ?></td>
        <td><?=$e->Prix_achat ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>            
              