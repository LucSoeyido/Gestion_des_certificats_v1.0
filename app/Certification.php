<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
      protected $fillable = ['nom','prenom','sexe','categorie','club','assurance','sang','medical','tel','licence','photo','date_valide'];
}

				