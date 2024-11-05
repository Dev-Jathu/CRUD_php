<?php
// Establishing a connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'dbcrud');

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];

    $sql = "INSERT INTO student(name, address, mobile) VALUES ('$name', '$address', '$mobile')";

    if (mysqli_query($connection, $sql)) {
        echo '
        <script>
        location.replace("index.php");
        </script>
        ';
    } else {
        echo "Something went wrong: " . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <div class="form flex items-center justify-center">
        <form method="POST">
            <h1 class="text-3xl text-black font-bold mb-4">Add Student</h1>
            <div class="flex gap-4 flex-col">
                <input type="text" name="name" id="name" placeholder="Enter name" class="border w-[300px] h-[50px] p-4" required>
                <input type="text" name="address" id="address" placeholder="Enter address" class="border w-[300px] h-[50px] p-4" required>
                <input type="text" name="mobile" id="mobile" placeholder="Enter mobile" class="border w-[300px] h-[50px] p-4" required>
            </div>
            <div class="pt-4">
                <input type="submit" name="submit" value="Register" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-[300px]">
            </div>
        </form>
    </div>
</body>

</html>