<?php

class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=gestion_librairie_mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

    
// ********************************************************************************************
// ----------------------------------PARTIE LIVRE--------------------------------------------//
// ********************************************************************************************

    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

                                    // titre livre
    public function get_livre_par_titre(){
        try {
            $requete = $this->bd->prepare('SELECT Titre_livre FROM livres ORDER BY Titre_livre ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

                                    //resultat titre livre selectionner

    public function get_resultat_livre_par_titre(){
        $choixTitre = $_POST["select-titre"];
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Titre_livre = :T');
            $requete->execute(array(':T'=>$choixTitre));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

                                    // Auteur

    public function get_livre_par_auteur(){
        try {
            $requete = $this->bd->prepare('SELECT Nom_auteur FROM livres ORDER BY Nom_auteur ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

                                    //resultat auteur selectionner

    public function get_resultat_livre_par_auteur(){
    $choixAuteur = $_POST["select-titre"];
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres WHERE Nom_auteur = :T');
        $requete->execute(array(':T'=>$choixAuteur));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);

}

                                    // Editeur
public function get_livre_par_editeur(){
    try {
        $requete = $this->bd->prepare('SELECT Editeur FROM livres ORDER BY Editeur ASC');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);

}
                                    // resultat editeur selectionner

public function get_resultat_livre_par_editeur(){
    $choixEditeur = $_POST["select-titre"];
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres WHERE Editeur = :E');
        $requete->execute(array(':E'=>$choixEditeur));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);

}

                                    // livre session admin

public function get_all_livres_admin()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

                                    //  formulaire pour modifier livre
public function get_formulaire_update_admin()
{
        $id = $_POST['Id_Livre'];
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres WHERE Id_Livre=:d');
        $requete->execute(array(':d'=>$id));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() .'</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}




                                    // update livre
public function get_update_livre_admin()
{
   
   try {
       $requete = $this->bd->prepare("UPDATE livres SET ISBN= :i, Titre_livre= :tl, Theme_livre=:t,
       Nbr_pages_livre= :np, Format_livre=:fl, Nom_auteur=:na, Prenom_auteur=:pa, Editeur=:e,
       Annee_edition=:ae, Prix_vente=:pv, Langue_livre=:lv WHERE Id_Livre=:idl ");

       $requete->execute(array(':i'=>$_POST["ISBN"], ':tl'=>$_POST["Titre_livre"],
     ':t'=>$_POST["Theme_livre"], ':np'=>$_POST["Nbr_pages_livre"], 
    ":fl"=>$_POST["Format_livre"], ":na"=>$_POST["Nom_auteur"],
    ":pa"=>$_POST["Prenom_auteur"], ":e"=>$_POST["Editeur"],
    ":ae"=>$_POST["Annee_edition"], ":pv"=>$_POST["Prix_vente"],
    ":lv"=>$_POST["Langue_livre"], ":idl"=> $_POST["Id_Livre"] ));   
       
   } catch (PDOException $e) {
       die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
   }
   return $requete->fetchAll(PDO::FETCH_OBJ);
}

                                            // formulaire pour ajouter livre
public function get_formulaire_ajout_admin()
{
        
    try {
        $requete = $this->bd->prepare('SELECT * FROM livres WHERE Id_Livre=:d');
        
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() .'</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


                                    // Ajout livre 

public function get_ajout_livre_admin()
{
   
   try {
       $requete = $this->bd->prepare("INSERT INTO livres SET ISBN= :i, Titre_livre= :tl, Theme_livre=:t,
       Nbr_pages_livre= :np, Format_livre=:fl, Nom_auteur=:na, Prenom_auteur=:pa, Editeur=:e,
       Annee_edition=:ae, Prix_vente=:pv, Langue_livre=:lv");

       $requete->execute(array(':i'=>$_POST["ISBN"],
    ':tl'=>$_POST["Titre_livre"],
     ':t'=>$_POST["Theme_livre"],
      ':np'=>$_POST["Nbr_pages_livre"], 
    ":fl"=>$_POST["Format_livre"],
     ":na"=>$_POST["Nom_auteur"],
    ":pa"=>$_POST["Prenom_auteur"], 
    ":e"=>$_POST["Editeur"],
    ":ae"=>$_POST["Annee_edition"],
     ":pv"=>$_POST["Prix_vente"],
    ":lv"=>$_POST["Langue_livre"]));   
       
   } catch (PDOException $e) {
       die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
   }
   return $requete->fetchAll(PDO::FETCH_OBJ);
}



// ***************************************************************************************************
// ----------------------------------PARTIE FOURNISSEURS--------------------------------------------//
// ***************************************************************************************************

    public function get_all_fournisseurs(){

        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

                                    // liste  noms des fournisseurs
    public function get_fournisseur_par_raison_sociale(){
        try {
            $requete = $this->bd->prepare('SELECT Raison_sociale FROM fournisseurs ORDER BY Raison_sociale ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

                                    // resultat nom fournisseur selectionne
    public function get_resultat_fournisseur_par_raison_sociale(){
        $choixFournisseur = $_POST["select-titre"];
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Raison_sociale = :F');
            $requete->execute(array(':F'=>$choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    
    }

                                    // liste fournisseur par localité
    public function get_fournisseur_par_localite(){
        try {
            $requete = $this->bd->prepare('SELECT Localite FROM fournisseurs ORDER BY Localite ASC');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

                                    // resultat fournisseur par localite
    public function get_resultat_fournisseur_par_localite(){
        $choixFournisseur = $_POST["select-titre"];
        try {
            $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Localite = :F');
            $requete->execute(array(':F'=>$choixFournisseur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// liste fournisseur par pays
public function get_fournisseur_par_pays(){
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Pays FROM fournisseurs ORDER BY Pays ASC');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

  // resultat fournisseur par pays
  public function get_resultat_fournisseur_par_pays(){
    $choixFournisseur = $_POST["select-titre"];
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Pays = :F');
        $requete->execute(array(':F'=>$choixFournisseur));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
    }

                               // fournisseurs session admin

    public function get_all_fournisseurs_admin()
    {
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs ORDER BY Raison_sociale ASC');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_formulaire_fournisseur_admin()
{
        $id = $_POST['Id_fournisseur'];
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Id_fournisseur=:f');
        $requete->execute(array(':f'=>$id));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() .'</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


    // update fournisseur
    public function get_update_fournisseur_admin()
    {
        
        try {
            $requete = $this->bd->prepare("UPDATE fournisseurs SET Code_fournisseur= :cf, Raison_sociale= :rs, Rue_fournisseur=:rf,
            Localite=:lo, Pays=:p, Email_fournisseur=:ef WHERE Id_fournisseur=:idf");
    
            $requete->execute(array(':cf'=>$_POST["Code_fournisseur"], ':rs'=>$_POST["Raison_sociale"],
        ':rf'=>$_POST["Rue_fournisseur"], ':lo'=>$_POST["Localite"], 
        ":p"=>$_POST["Pays"], ":ef"=>$_POST["Email_fournisseur"],
        ":idf"=>$_POST["Id_fournisseur"]));   
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

                                               // formulaire pour ajouter fournisseur
public function get_formulaire_ajout_fournisseur()
{
        
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Id_fournisseur=:idf');
        
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() .'</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


                        // ajout fournisseur

public function get_ajout_fournisseur_admin()
{
   
   try {
       $requete = $this->bd->prepare("INSERT INTO fournisseurs SET Code_fournisseur= :cf, Raison_sociale= :rs, Rue_fournisseur=:rf,
       Localite=:lo, Pays=:p, Email_fournisseur=:ef");

    $requete->execute(array(':cf'=>$_POST["Code_fournisseur"],
    ':rs'=>$_POST["Raison_sociale"],
    ':rf'=>$_POST["Rue_fournisseur"],
    ':lo'=>$_POST["Localite"], 
    ":p"=>$_POST["Pays"],
    ":ef"=>$_POST["Email_fournisseur"]));   
        
   } catch (PDOException $e) {
       die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
   }
   return $requete->fetchAll(PDO::FETCH_OBJ);
}


// ****************************************************************************************************
    // ----------------------------------PARTIE COMMANDES--------------------------------------------//
// ****************************************************************************************************
    public function get_all_commandes(){

        try {
            $requete = $this->bd->prepare('SELECT Titre_livre, Date_achat, Raison_sociale, Editeur, Prix_achat, Nbr_exemplaires FROM commander JOIN livres ON commander.Id_Livre = livres.Id_Livre JOIN fournisseurs ON commander.Id_fournisseur = fournisseurs.Id_fournisseur;');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

// Liste commande par editeur
    public function get_commande_par_editeur(){
        try {
            $requete = $this->bd->prepare('SELECT Editeur FROM livres JOIN commander ON livres.Id_Livre = commander.Id_Livre;');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);

    }

 // resultat commande par editeur
 public function get_resultat_commande_par_editeur()
 {
    $choixEditeur = $_POST["select-titre"];
    echo $choixEditeur;
    try {
        $requete = $this->bd->prepare('SELECT l.Editeur, c.Date_achat, c.Prix_achat FROM livres AS l JOIN commander c ON c.Id_Livre = l.Id_Livre WHERE l.Editeur = :e;');
        $requete->execute(array(':e'=>$choixEditeur));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


    // commandes session admin

    public function get_all_commandes_admin(){

        try {
            $requete = $this->bd->prepare('SELECT Titre_livre, Date_achat, Raison_sociale, Editeur, Prix_achat, Nbr_exemplaires FROM commander JOIN livres ON commander.Id_Livre = livres.Id_Livre JOIN fournisseurs ON commander.Id_fournisseur = fournisseurs.Id_fournisseur;');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    
    
    public function get_formulaire_commande_admin()
    {
            $id = $_POST['Id_commande'];
        try {
            $requete = $this->bd->prepare('SELECT * FROM commander WHERE Id_commande=:c');
            $requete->execute(array(':c'=>$id));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() .'</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }





// connexion user
public function get_user_connecter()
{
    // saisie du champ
    $email= $_POST['Email'];
    $MdP= $_POST['MdP'];
    try { 
        $requete = $this->bd->prepare('SELECT * FROM utilisateur WHERE Email = :Email AND MdP = :MdP');
    
        $requete->execute(array(":MdP"=>$MdP, ":Email"=>$email));   
        $utilisateur = $requete->fetchAll(PDO::FETCH_OBJ);
        if(!$utilisateur){
            echo"<script> alert('le login ou le mot de passe est incorrect. Connectez-vous a nouveau!')</script>";
            echo"<script> document.location='?controller=home&action=user_connexion'</script>";
        }
        return $utilisateur;
        } 
        catch (PDOException $e) 
        {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        
    // TODO : hash le mot de passe saisi par l'utilisateur puis le comparer au mot de passe de l'utilisateur trouvé avec le couple nom et prénom

}




}