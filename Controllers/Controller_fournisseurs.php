<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

  
  // liste de tous les fournisseurs
    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);
    }

// liste des fournisseurs par Nom
    public function action_fournisseur_par_raison_sociale()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_par_raison_sociale()];
        $this->render("fournisseur_par_raison_sociale",$data);
    }

 //resultat recherche nom fournisseur
    public function action_resultat_fournisseur_par_raison_sociale()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_resultat_fournisseur_par_raison_sociale()];
        $this->render("resultat_fournisseur_par_raison_sociale",$data);
    }

// liste des fournisseurs par localité
public function action_fournisseur_par_localite()
    {
        echo "action localite";
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_par_localite()];
        $this->render("fournisseur_par_localite",$data);
    }

 //resultat recherche des fournisseurs par localite
 public function action_resultat_fournisseur_par_localite()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_resultat_fournisseur_par_localite()];
        $this->render("resultat_fournisseur_par_localite",$data);
    }
   
// liste des fournisseurs par Pays
public function action_fournisseur_par_pays()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_fournisseur_par_pays()];
        $this->render("fournisseur_par_pays",$data);
    }

//resultat recherche des fournisseurs par pays
public function action_resultat_fournisseur_par_pays()
    {
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_resultat_fournisseur_par_pays()];
    $this->render("resultat_fournisseur_par_pays",$data);
    }


// tous les fournisseurs session admin
public function action_all_fournisseurs_admin()
    {
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_all_fournisseurs_admin()];
    $this->render("all_fournisseurs_admin",$data);

    }  

    // formulaire update fournisseur
public function action_formulaire_fournisseur_admin()
    {
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_formulaire_fournisseur_admin()];
    $this->render("formulaire_fournisseur_admin",$data);
    } 
    
    // update fournisseur
public function action_update_fournisseur_admin()
    {
    $m=Model::get_model();
    $data=['fournisseurs'=>$m->get_update_fournisseur_admin()];
    $this->render("fournisseur_update_done",$data);
    }  

    // formulaire ajout fournisseur
public function action_formulaire_ajout_fournisseur()
{
$m=Model::get_model();
$data=['fournisseurs'=>$m->get_formulaire_ajout_fournisseur()];
$this->render("formulaire_ajout_fournisseur",$data);
}  

// ajout fournisseur
public function action_ajout_fournisseur_admin()
    {
    $m=Model::get_model();
    $data=['livres'=>$m->get_ajout_fournisseur_admin()];
    $this->render("fournisseur_ajout_done",$data);
    }  

}