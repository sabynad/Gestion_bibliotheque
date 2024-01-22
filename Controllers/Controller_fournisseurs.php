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


}