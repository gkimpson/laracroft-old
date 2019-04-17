<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'firstname', 'surname', 'gender', 'age'
    ];

    protected $primaryKey = 'student_id';
}
