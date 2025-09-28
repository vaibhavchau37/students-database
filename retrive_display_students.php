<?php
include("db_connect.php");

$sql = "SELECT ID, NAME, ENROLLMENT_NO, COURSE FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Enrollment No</th>
                <th>Course</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["ID"]."</td>
                <td>".$row["NAME"]."</td>
                <td>".$row["ENROLLMENT_NO"]."</td>
                <td>".$row["COURSE"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
