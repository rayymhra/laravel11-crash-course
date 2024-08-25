<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;
    // nama table di database yg ingin dituju
    protected $table = "todo";
    // kolom yg bisa dimasukin data
    protected $fillable = ['task', 'is_done'] ;
}
