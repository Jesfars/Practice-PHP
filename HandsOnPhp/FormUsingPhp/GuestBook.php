<!DOCTYPE html>
<html>
<head>
<title>Guest Book</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .form-container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    form {
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        margin-top: 20px;
    }

    input[type="text"], input[type="email"], textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"], input[type="reset"] {
        background-color: #0056b3;
        color: aliceblue;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover, input[type="reset"]:hover {
        background-color: #0072c6;
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
    }
</style>
<script>
    function resetFormAndDisplay() {
       
        var entriesTable = document.getElementById('entriesTable');
        if (entriesTable) {
            entriesTable.innerHTML = '';
        }
    }
</script>
</head>
<body>

<div class="form-container">
  

    <h2>Guest Book Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name"><br>
        Email ID: <input type="email" name="email"><br>
        Comments: <textarea name="comments"></textarea><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</div>
  <?php
    session_start(); 

    
    if (isset($_POST['submit'])) {


        $name = $_POST['name'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        // Store the data in a session
        $_SESSION['entries'][] = array('name' => $name, 'email' => $email, 'comments' => $comments);

        // Display the form input along with other entries
        echo "<h2>Guest Book</h2>";
    }


    if (isset($_SESSION['entries']) && count($_SESSION['entries']) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Comments</th></tr>";
        foreach ($_SESSION['entries'] as $entry) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($entry['name']) . "</td>";
            echo "<td>" . htmlspecialchars($entry['email']) . "</td>";
            echo "<td>" . nl2br(htmlspecialchars($entry['comments'])) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>
