<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student CRUD Application</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <div class="flex items-center justify-center mt-10 px-[100px]">
        <div class="table w-[100%]  justify-center items-center ">
            <div class="flex  justify-between items-center mb-5">
                <h1 class="text-3xl text-black font-bold">Student CRUD Application</h1>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    <a href="add.php"> Add Student </a>
                </button>
            </div>

            <table class="w-full">
                <thead>
                    <tr class="bg-white border ">
                        <th class="p-4">ID</th>
                        <th class="p-4">Name</th>
                        <th class="p-4">Address</th>
                        <th class="p-4">Phone</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $connection = mysqli_connect('localhost', 'root', "");
                    $db = mysqli_select_db($connection, "dbcrud");

                    $sql = 'select * FROM student';
                    $run = mysqli_query($connection, $sql);
                    $id = 1;
                    while ($row = mysqli_fetch_array($run)) {
                        $uid = $row['id'];
                        $name = $row['name'];
                        $address = $row['address'];
                        $mobile = $row['mobile'];

                    ?>
                        <tr class="bg-white border text-center">
                            <th class="p-4"><?php echo $id; ?></th>
                            <th class="p-4"><?php echo $name; ?></th>
                            <th class="p-4"><?php echo $address; ?></th>
                            <th class="p-4"><?php echo $mobile; ?></th>
                            <td class="p-4">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="edit.php?edit=<?php echo $uid; ?>">Edit </a>
                                </button>
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="delete.php?delete=<?php echo $uid; ?>">Delete</a>
                                </button>

                            </td>

                        </tr>

                    <?php $id++;
                    } ?>
                </tbody>

        </div>
    </div>
</body>

</html>