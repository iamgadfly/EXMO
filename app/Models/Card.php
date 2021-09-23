<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use DB;
// use App\Models\Card;
class Card extends Model
{
    protected $fillable = ['income','outcome'];

    use HasFactory;


  

}
