<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'Employees';
    protected $fillable =[
        'name',
        'email',
        'phone',
        'qualification',       
        'gender',
        'image',
    ];
    public function setQualificationAttribute($value)
    {
        $this->attributes["qualification"] = json_encode($value);
    }

    public function getQualificationAttribute($value)
    {
        return $this->attributes["qualification"] = json_decode($value);
    }
    protected $casts = ['qualification' => 'array'];
}
