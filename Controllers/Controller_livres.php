<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// liste de tous les livres
    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres()];
        $this->render("all_livres",$data);
    }


//liste de tous les titres
    public function action_livre_par_titre()
    {
        $m=Model::get_model();                       // appelle le model
        $data=['livre'=>$m->get_livre_par_titre()];  // recuperation de la base de donnée
        $this->render("livre_par_titre",$data);      // le render pointe sur une vue
    }

 //resultat d'un titre selectionner
    public function action_resultat_livre_par_titre()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_resultat_livre_par_titre()];
        $this->render("resultat_livre_par_titre",$data);

    }

//liste de tous les auteurs 
    public function action_livre_par_auteur()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_livre_par_auteur()];
        $this->render("livre_par_auteur",$data);

    }
//resultat d'un Auteur selectionner
public function action_resultat_livre_par_auteur()
    {
    $m=Model::get_model();
    $data=['livre'=>$m->get_resultat_livre_par_auteur()];
    $this->render("resultat_livre_par_auteur",$data);

    }


//liste de tous les editeurs
public function action_livre_par_editeur()
    {
    $m=Model::get_model();
    $data=['livre'=>$m->get_livre_par_editeur()];
    $this->render("livre_par_editeur",$data);
    }

//resultat d'un Editeur selectionner
public function action_resultat_livre_par_editeur()
    {
    $m=Model::get_model();
    $data=['livre'=>$m->get_resultat_livre_par_editeur()];
    $this->render("resultat_livre_par_editeur",$data);
    }

// tous les livres session admin
public function action_all_livres_admin()
    {
    $m=Model::get_model();
    $data=['livres'=>$m->get_all_livres_admin()];
    $this->render("all_livres_admin",$data);
    }  
    
// formulaire update livre
public function action_formulaire_update_admin()
    {
    $m=Model::get_model();
    $data=['livre'=>$m->get_formulaire_update_admin()];
    $this->render("formulaire_update_admin",$data);
    }  

// update livre
public function action_update_livre_admin()
    {
    $m=Model::get_model();
    $data=['livres'=>$m->get_update_livre_admin()];
    $this->render("livre_update_done",$data);
    }  

// formulaire ajout livre
public function action_formulaire_ajout_admin()
    {
    $m=Model::get_model();
    $data=['livres'=>$m->get_formulaire_ajout_admin()];
    $this->render("formulaire_ajout_admin",$data);
    }  

// ajout livre
public function action_ajout_livre_admin()
    {
    $m=Model::get_model();
    $data=['livres'=>$m->get_ajout_livre_admin()];
    $this->render("livre_ajout_done",$data);
    }  


}