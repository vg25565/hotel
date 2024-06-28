<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $whereTo = $_POST["whereTo"];
    $numberOfGuests = $_POST["numberOfGuests"];
    $arrivalDate = $_POST["arrivalDate"];
    $leavingDate = $_POST["leavingDate"];

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

    // Insert data into the database
    $sql = "INSERT INTO bookings ( where_to, number_of_guests, arrival_date, leaving_date, booking_date_time)
            VALUES ('$whereTo', '$numberOfGuests', '$arrivalDate', '$leavingDate', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Get the last inserted ID
        $bookingId = $conn->insert_id;

        
header("Location: booking_details.php?id=$bookingId");
exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {

    header("Location: error_page.php");
    exit();
}
?>
