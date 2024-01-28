<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

// liste de toutes les commandes
    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }


// liste des commandes par éditeur
public function action_commande_par_editeur()
    {   echo "je suis dans la metyhode";
        $m=Model::get_model();
        $data=['commandes'=>$m->get_commande_par_editeur()];
        $this->render("commande_par_editeur",$data);
    }

 //resultat  commande par editeur
 public function action_resultat_commande_par_editeur()
 {
    $m=Model::get_model();
    $data=['commandes'=>$m->get_resultat_commande_par_editeur()];
    $this->render("resultat_commande_par_editeur",$data);
}


// toutes les commandes session admin
public function action_all_commandes_admin()
    {
    $m=Model::get_model();
    $data=['commandes'=>$m->get_all_commandes_admin()];
    $this->render("all_commandes_admin",$data);

    }  
    

// formulaire update commande
public function action_formulaire_commande_admin()
    {
    $m=Model::get_model();
    $data=['commandes'=>$m->get_formulaire_commande_admin()];
    $this->render("formulaire_commande_admin",$data);

    }  



}