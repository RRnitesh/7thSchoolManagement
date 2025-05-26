<?php

namespace App\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\Request;

class StudentController{
  // create

  public function store(Request $request){

    // $data = [
    //   'name' => 'John Doe',
    //   'email' => 'twotest@gmail.com',
    //   'age' => 20,
    //   'enrolled_date' => date('Y-m-d')
    // ];
    // # create are the static method of eloguetn that is
    // # inherited by the Student model
    // Student::create($data);
    // echo "Student data inserted successfully!";

$data =[
  'name' => $request->input('name'),
  'email' => $request->input('email'),
  'age' => $request->input('age'),
  'enrolled_date' => $request->input('enrolled_date')
];

Student::create($data);
echo "Student data inserted successfully!";

  }

  //Read 
  public function index(){
    ;
    $students = Student::all();
    
    foreach($students as $student){
      echo "Name: " . $student->name . "<br>";
      echo "Email: " . $student->email . "<br>";
      echo "Age: " . $student->age . "<br>";
      echo "Enrolled Date: " . $student->enrolled_date . "<br><br>";
    }

  }

  //Update
  public function update(Request $request, $id){
    $student = Student::find($id);
    if($student){
      $student->name = $request->input('name');
      $student->email = $request->input('email');
      $student->age = $request->input('age');
      $student->enrolled_date = $request->input('enrolled_date');
      $student->save();
      echo "Student data updated successfully!";
    } else {
      echo "Student not found!";
    }


  


}
  //Delete
  public function delete($id){
    $student = Student::find($id);
    if($student){
      $student->delete();
      echo "Student data deleted successfully!";
    } else {
      echo "Student not found!";
    }
  }
}