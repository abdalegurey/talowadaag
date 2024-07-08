<?php

namespace App\Models\posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table="posts";


    protected $fillable=[
        "post",
        "image",
        "username"
        

       
       
    ];


    public $timestamps = true;
}
