<?php

namespace App\Models\views;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class views extends Model
{
    use HasFactory;
    protected $table="views";

    protected $fillable=[
        "post_id",
        "user_id",

       

       
    ];
}
