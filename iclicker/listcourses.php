<?php
require_once("pageutils.php");
require_once("dbutils.php");

$conn = connect();

$query="
SELECT course_name, course_id
FROM courses
";

$stmt = $conn->prepare($query) or die("Couldn't prepare query. " . $conn->error);
$stmt->execute() or die("Couldn't execute query. " . $conn->error);

$stmt->bind_result($course_name, $course_id);

echo "course_name\tcourse_id\n";
while ($stmt->fetch()) {
	echo "$course_name\t$course_id\n";
}

?>