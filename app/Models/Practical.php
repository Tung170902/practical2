<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practical extends Model
{
    use HasFactory;
    public $table = "feedback";
    public $fillable = ['id','name','email','phone','feedback'];
}
