

<?php
include("connect.php"); // Include your database connection file
$contact= $_GET['updateid'];
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    // Corrected SQL query
    $sql = "UPDATE `office` set Contact=$contact, Name ='$name', Department='$department', Email='$email', Password ='$password' WHERE Contact=$contact " ;

    $result = mysqli_query($conn, $sql);
    if ($result) {
        //echo "Updated Successfully";
        header('Location: display.php');
    } else {
        die(mysqli_error($conn));
    //(In order to get pre-given values, a slight change in the code should be done)
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Welcome My Friend, Welcome!</h1>
        <form action="" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="department" id="department" name="department" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="tel" id="contact" name="contact" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="submit-btn" name="submit">Update</button>
        </form>
    </div>
</body>

</html>