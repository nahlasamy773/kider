<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Teacher extends Model
{


    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'designation',
        'facebook',
        'twitter',
        'instgram',
        'image',
        'published',
    ];


    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
