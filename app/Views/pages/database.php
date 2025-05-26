<!-- write html code here -->
 create form for name, email, age and enrolled date
<h1>this is database table </h1>

<form action="/SchoolManagementSystem/public/submit-student" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="enrolled_date">Enrolled Date:</label>
    <input type="date" id="enrolled_date" name="enrolled_date" required><br><br>
    
    <button type="submit">Submit</button>
    
</form>