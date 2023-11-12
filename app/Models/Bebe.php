<?php
// app/Models/Bebe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bebe extends Model
{
    // Définissez les attributs de votre modèle ici
    protected $table = 'bebes'; // Le nom de la table dans la base de données
    protected $fillable = [
        'nom', 'prenom', 'nombre_ordonnel', 'sexe', 'date_de_naissance', 'lieu', 'date_acceptation', 'date_integration', 'nom_mere_biologique', 'nom_pere_biologique', 'tel_biologique', 'adresse_biologique', 'nom_mere_adoption', 'nom_pere_adoption', 'tel_adoption', 'adresse_adoption',
    ];
    // Définissez les relations avec d'autres modèles ici (le cas échéant)
}
?>
