<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workexperience extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'work_name',
        'work_place',
        'responsibility_work',
        'start_work',
        'finish_work',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
   

}
