<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userpackage extends Model
{
   protected $fillable = [
"user_id" ,
"package_id",
"charge_id"
];

protected $table="userpackages";
}
