<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "dbcrud");

$delete = $_GET['delete'];

$sql = "DELETE FROM student WHERE id = '$delete'";

if (mysqli_query($connection, $sql)) {
    echo '
        <script>
        location.replace("index.php");
        </script>
        ';
} else {
    echo "Something went wrong: " . $connection->error;
}
