<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    use HasFactory;
    
 /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'service',
        'personaldescription',
        'servicedescription',
        'image',
        'review',
        'download_algo',
        'do',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getGettimageAttribute($key)
    {
     if($this->image){
         return url("storage/$this->image");
     }
    }   
}
