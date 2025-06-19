<?php
include "connection.php";
$sql = "SELECT * FROM userdetails";
$result = mysqli_query($conn, $sql);

// 3. Check if query has results
if(isset($_POST['addauser'])){

  header('Location: CRUD.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
  <form method="POST">
    <button type="submit" name="addauser" class="btn btn-success">Add a User</button>
</form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <?php
            if (mysqli_num_rows($result) > 0) {

                // 4. Loop through each row using fetch_assoc
                while ($row = mysqli_fetch_assoc($result)) {

echo "<tr>
        <th scope='row'>{$row['id']}</th>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['password']}</td>
        <td>{$row['address']}</td>
        <td>
            <button class='btn btn-primary'>Update</button>
            <button class='btn btn-danger'>Delete</button>
        </td>
    </tr>";

                }

            } else {
                echo "No records found.";
            }

            // 5. Close the connection
            mysqli_close($conn);
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
</body>

</html>