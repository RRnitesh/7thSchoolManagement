<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController{

  public function store(){
    $data = [
      'name' => 'John Doe',
      'email' => 'twotest@gmail.com',
      'age' => 20,
      'enrolled_date' => date('Y-m-d')
    ];
    # create are the static method of eloguetn that is
    # inherited by the Student model
    Student::create($data);
    echo "Student data inserted successfully!";

  }
}