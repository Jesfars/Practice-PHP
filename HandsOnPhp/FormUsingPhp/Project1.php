<!DOCTYPE html>
<html>
<head>
    <title>Student Details Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin: 0 auto;
            border-color: black;
            
            
            
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .form-group label {
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group input[type="submit"] {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        

    </style>
</head>
<body>

<div class="form-container">
    <h3>Student Details Form</h3>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>
    </div>
    <div class="form-group">
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select...</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="pinCode">Pin Code:</label>
        <input type="text" id="pinCode" name="pinCode" required>
    </div>
    <div class="form-group">
        <label for="qualification">Qualification:</label>
        <input type="text" id="qualification" name="qualification" required>
    </div>
    <div class="form-group">
        <input type="submit" name="submit" value="Submit">
    </div>
</form>

  
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
       
        $firstName = $_POST['firstName']; 
        $lastName = $_POST['lastName']; 
        $email = $_POST['email']; 
        $gender = $_POST['gender']; 
        $phoneNumber = $_POST['phoneNumber']; 
        $address = $_POST['address']; 
        $pinCode = $_POST['pinCode']; 
        $qualification = $_POST['qualification']; 


        // Output Form
        echo "<style>
            .success-message {
                color: green;
                font-size: 24px;
                font-weight: bold;
                text-align: center;
                margin-top: 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
                color: black;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>";

        echo "<div class='success-message'>Your Registration is Complete Successfully!</div>";

        echo "<table>";
        echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Gender</th>
        <th>Phone Number</th><th>Address</th><th>Pin Code</th><th>Qualification</th></tr>";
        echo "<tr><td>$firstName</td><td>$lastName</td><td>$email</td><td>$gender</td>
        <td>$phoneNumber</td><td>$address</td><td>$pinCode</td><td>$qualification</td></tr>";
        echo "</table>";

    } catch (Exception $e) {
        
        echo "<div class='error-message'>An error occurred: " . $e->getMessage() . "</div>";
    }
}
?>




</body>
</html>
