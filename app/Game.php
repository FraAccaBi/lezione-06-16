<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //serve a permettere il recupero di immagini in blocco senza dare l'errore _token
    protected $fillable = ['title', 'description', 'thumb','cover_image'];

}
