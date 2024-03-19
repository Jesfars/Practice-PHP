<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mt-5">Login</h2>
            <form id="registrationForm" class="mt-4" onsubmit="fetchUserDetails(event)">
    <div class="mb-3">
        <label for="aadhar_card_number" class="form-label">Aadhar Card Number</label>
        <input type="text" class="form-control" id="aadhar_card_number" name="aadhar_card_number" placeholder="Enter Aadhar Card Number">
    </div>
    <!-- Add other input fields as needed -->
    <button type="submit" class="btn btn-primary">Login</button>
</form>
<div id="userDetails" class="mt-3"></div>

            <div id="msg" class="mt-3"></div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve Aadhar number
    $aadhar_card_number = $_POST['aadhar_card_number'];

    // Query database for user details
    $sql = "SELECT * FROM ration_card_registrations WHERE aadhar_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $aadhar_card_number);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Output user details
            echo "Name: " . $row['user_name'] . "<br>";
            echo "Family Name: " . $row['family_name'] . "<br>";
            echo "Address: " . $row['address'] . "<br>";
            echo "Pincode: " . $row['pincode'] . "<br>";
            echo "Family Members: " . $row['family_members'] . "<br>";
            echo "Job: " . $row['job'] . "<br>";
        }
    } else {
        echo "No user found with this Aadhar number.";
    }
    $stmt->close();
}
?>
<script>
function fetchUserDetails(event) {
    event.preventDefault(); // Prevent form submission
    var aadharNumber = document.getElementById('aadhar_card_number').value;
    if (aadharNumber) {
        $.ajax({
            url: 'fetch_user_details.php',
            type: 'POST',
            data: {aadhar_number: aadharNumber},
            success: function(response) {
                document.getElementById('userDetails').innerHTML = response;
            }
        });
    }
}
</script>






</body>
</html>

</body>
</html>
