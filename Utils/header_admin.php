
<div class="collapse navbar-collapse " id="">
    <a class="nav-link dropdown-toggle  " href="?controller=livres&action=livre_admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Livres
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item text-bg-warning " href="?controller=livres&action=all_livres_admin">Tous les livres</a></li>  
    </ul>

    <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_fournisseurs_admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Fournisseurs
    </a>

    <ul class="dropdown-menu">
        <li><a class="dropdown-item text-bg-warning "  href="?controller=fournisseurs&action=all_fournisseurs_admin">Tous les Fournisseurs</a></li>   
    </ul>

    <a class="nav-link dropdown-toggle " href="?controller=livres&action=all_commandes_admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Commandes
    </a>

    <ul class="dropdown-menu">
      <li><a class="dropdown-item text-bg-warning " href="?controller=commandes&action=all_commandes_admin">Toutes les commandes</a></li> 
    </ul> 
</div>

<div class="mx-5">
  <?php
    if (isset($_SESSION['nom']))
      {
        echo $_SESSION['nom']." ".$_SESSION['prenom']. " <br>".$_SESSION['Statut'];   
      }
  ?>
</div>
<a class="btn btn-warning" href="?controller=home&action=user_deconnexion" > Deconnexion </a> 
