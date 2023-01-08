<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_score';
    protected $fillable = ['score'];
    public $timestamps = false;
}