<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

# allows the Student model to use Eloquent ORM features
class Student extends Model{
    # tells the elogquent to use the students table
    protected $table = 'students';

    public $timestamps = false; //  disables created_at and updated_at

    # allows mass assignment for these fields
    protected $fillable = ['name', 'email', 'age', 'enrolled_date'];
}