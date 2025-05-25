<?php
$class=$_POST['class']??'';
$subject=$_POST['subject']??'';
echo $class;
echo $subject;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <div>
<form action="submit.php" method="POST">
<label for="name">Student name:</label>
<input type="text" name="name" id="name" required>
<br>
<label for="marks">Marks</label>
<input type="number" id="marks" name="marks" required min="0" max="100" >

<button type="submit" onsubmit="alert('You submitted student name and marks' )">Submit</button>
</form>
</div>
    
</body>
</html>