<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'school_name',
        'degree',
        'start_date',
        'finish_date',
        'description',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
