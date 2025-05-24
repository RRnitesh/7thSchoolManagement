<?php

namespace Core;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
class DatabaseConnection {

    private $conn;

    public function __construct() {
        $this->conn = new \mysqli(
            $_ENV['DB_HOST'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'] ,
            $_ENV['DB_NAME'] 
        );

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

$con = new DatabaseConnection();

$sql = "SELECT * FROM students";
$result = $con->getConnection()->query($sql);


if ($result) {
    
      echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Enrolled Date</th>
            </tr>";

    // Loop through each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["enrolled_date"] . "</td>
              </tr>";
    }
    echo "</table>";

} else {
    echo "Connection failed!";
}