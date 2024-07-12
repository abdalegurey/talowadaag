<?php

namespace App\Models\following;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class following extends Model
{
    use HasFactory;

    protected $fillable=[
        "post_id",
       
        "user_id",
         "post_image",
        "post_username",
        "post_letter",

       

       
    ];
}
