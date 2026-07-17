<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// bai4
class Student extends Model
{
    use HasFactory;
    //bai8
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'age',
    //     'gender',
    // ];


    
    // bai9
    protected $fillable = [
        'name',
        'email',
        'age',
        'gender',
        'class_name',
    ];
}