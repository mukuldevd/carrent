<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'rentalcar');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' is set in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM usercarstatus WHERE id = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("i", $carid);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
            alert('Record deleted successfully');
            window.location.href = 'YourBookingDetails.php';
            </script>";
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid ID";
}

// Close the connection
$conn->close();
?>