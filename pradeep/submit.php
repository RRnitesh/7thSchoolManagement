<?php
$host="localhost";
$user="root";
$pass="";
$db="school";

$conn = new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$class=$_POST['class']??'';
$subject=$_POST['subject']??'';
$name=$_POST['name']??'';
$marks=$_POST['marks']??'';

$sql="INSERT INTO student_marks (class, subject,student_name,marks) VALUES(?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssi",$class,$subject,$student,$marks);

if($stmt->execute()){
    echo"<h3> Data inserted successfully!!!</h3>";
    echo"Error : ".$stmt->error;
}

$stmt->close();
$conn->close();
?>