<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
            color: #555;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }
    </style>
    <title>Booking Details</title>
</head>
<body>
    <div class="container">
        <h1>Booking Details</h1>

        <?php
        
        session_start();
    
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }
        
        $bookingId = $_GET["id"];

        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hotel";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve booking details from the database
        $sql = "SELECT * FROM bookings WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $bookingId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Display the booking details
            echo "<p>Destination: " . $row["where_to"] . "</p>";
            echo "<p>Number of Guests: " . $row["number_of_guests"] . "</p>";
            echo "<p>Arrival Date: " . $row["arrival_date"] . "</p>";
            echo "<p>Leaving Date: " . $row["leaving_date"] . "</p>";
        } else {
            echo "<p style='color: red;'>Booking not found</p>";
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>

