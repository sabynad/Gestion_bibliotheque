<div class="collapse navbar-collapse fs-4" id="">

    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?controller=livres&action=all_livres" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livres
            </a>
            <ul class="dropdown-menu ">
                <li><a class="dropdown-item" href="?controller=livres&action=all_livres">Tous les livres</a></li>
                <li><a class="dropdown-item" href="?controller=livres&action=livre_par_titre">Par titre</a></li>
                <li><a class="dropdown-item" href="?controller=livres&action=livre_par_auteur">Par auteur</a></li>
                <li><a class="dropdown-item" href="?controller=livres&action=livre_par_editeur">Par éditeur</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="?controller=fournisseurs&action=all_fournisseurs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Fournisseurs
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?controller=fournisseurs&action=all_fournisseurs">Tous les fournisseurs</a></li>
                <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_par_raison_sociale">Par raison sociale</a></li>
                <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_par_localite">Par localité</a></li>
                <li><a class="dropdown-item" href="?controller=fournisseurs&action=fournisseur_par_pays">Par pays</a></li>
            </ul>
        </li>


        <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="?controller=commandes&action=all_commandes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Commandes
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?controller=commandes&action=all_commandes">Toutes les commandes</a></li>
                <li><a class="dropdown-item" href="?controller=commandes&action=commande_par_editeur">Par éditeur</a></li>
                <li><a class="dropdown-item" href="?controller=commandes&action=commande_par_fournisseur">Par fournisseur</a></li>
                <li><a class="dropdown-item" href="?controller=commandes&action=commande_par_date">Par date</a></li>
            </ul>  
        </li>
    </ul>
   
</div>
<div class="mx-5">
        <?php
            echo "Bonjour, <br>". $_SESSION['nom']." ".$_SESSION['prenom']. " <br>".$_SESSION['Statut'];  
        ?>
</div>
    <a class="btn btn-warning" href="?controller=home&action=user_deconnexion"> Deconnexion </a>






