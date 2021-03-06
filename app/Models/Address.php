<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable=[
        'id','user_id','name','is_default','phone','address','status','pincode'
        ];

    // public static function getAddress(){
    //     return Address::all();
    // }

}
