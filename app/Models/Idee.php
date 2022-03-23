<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idee extends Model
{

    protected $fillable = ['titre', 'description', 'statut'];
}
