<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbList extends Model
{
    use HasFactory;
    protected $fillable = ['income_route','outcome_route', 'income_sum', 'outcome_sum'];

}
