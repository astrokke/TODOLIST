<?php

namespace Keha\Test\views;

use Keha\Test\App\UrlGenerator;
use Keha\test\controller\Utilisateur;
use Keha\Test\App\Model;

//Class that create the Body
class Body
{
    public function displayBodyProject($projects)
    { var_dump($projects);

        echo "<body>
        <div class='container'>
            <div class='row'>
            <a href ='" . UrlGenerator::generateUrl('FormController', 'ConstructProjectForm') . "'>Ajoutez un projet</a><br>";
        foreach ($projects as $project) {
            echo "<div class='col-4'>
            <h2 class=''> " . $project->getTitre_projet() . "</h2>
            <p class=''>" . $project->getDescription_projet() . "</p>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'displayTaches') . "&Id_Projet=" . $project->getId_projet() . "' class='link'> Lien vers le projet</a><br>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'ConfirmationDelete') . "&Id_Projet=" . $project->getId_projet() . "' class='link'>Supprimez un projet</a>
            
            </div>";
        }


        echo "     
</div>
        </div>
    </body>";
    }

    //Affiche la view avec les différentes taches du projet
    public function displayBodyTaches($task, $project)
    {
        // var_dump($project);
        echo "<body>
<h1>". $project[0]->getTitre_projet()."</h1>
        <div class='container-fluid w-100 m-0'>
            <div class='row'>;
            <div class='col-2'>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'createTache') . "' class=''> Creer une nouvelle Tache</a>
            </div>
            <div class='row col-10'>";


        // a modifier pour ajouter le nom d'utilisateur
        foreach ($task as $data => $key) {
            echo "<div class='col-4'>
            <h2 class=''> " . $key->getNom_tache() . "</h2>
            <h3 class='h4'> Utilisateur en charge de la tache:". $key->getUtilisateur()[0]->getNom_utilisateur()."</h3>
            <p class=''>" . $key->getDescritpion_tache() . "</p>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'displayTache') . "&Id_taches=". $key->getId_taches(). "'class=''> Lien vers la tache</a>
            </div>";
        }

        echo " </div>    
</div>
        </div>
    </body>";
    }

    public function displayBodyTache($data)
    {
        $data= $data[0];
        //Il faudra ajouter le nom du projet
        echo "<body>
<h1>NOM PROJET</h1>";


        // a modifier pour ajouter le nom d'utilisateur, la priorité et le statut de la tache
        echo "<div>
            <h2 class=''> " . $data->getNom_tache() . "</h2>
            <p>Priorité taches, et statut tache<p/>
            <h3 class='h4'> Utilisateur en charge de la tache: ".($data->getUtilisateur())[0]->getNom_utilisateur(). "</h3>
            <p class=''>" . $data->getDescritpion_tache() . "</p>";

        if (($data->getDate_realisation_tache()) === NULL) {
            echo "<p class=''> Tache commencé le : " . $data->getDate_debut_tache() . " et à finir pour le : " . $data->getDate_butoire_tache() . "</p>";
        } else {
            echo "<p class=''> Tache commencé le : " . $data->getDate_debut_tache() . " et fini le : " . $data->getDate_realisation_tache() . "</p>";
        }

        echo "<a href='" . UrlGenerator::generateUrl('ProjectController', 'modifyTache') . "' class=''> Modifier la tache</a><br>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'deleteTache') . "' class=''>Supprimer la tache</a><br>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'updateStatusTache') . "' class=''>Modifier le statut de la tache</a>
            <a href='" . UrlGenerator::generateUrl('ProjectController', 'updateStatusTache') . "' class=''>Modifier le statut de la tache</a>
            </div>


</div>
        </div>
    </body>";
    }


    public function displayProjectConfirmation($data)
    {
       
        echo "<body>
<h1>NOM PROJET</h1>";

        echo "<div>
            <h2 class=''> " . $data->getNom_tache() . "</h2>
            <p>Priorité taches, et statut tache<p/>
            <h3 class='h4'> Utilisateur en charge de la tache: ".($data->getUtilisateur())[0]->getNom_utilisateur(). "</h3>
            <p class=''>" . $data->getDescritpion_tache() . "</p>";

       



    }
}
