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
if (isset($_GET['carid']) && is_numeric($_GET['carid'])) {
    $carid = $_GET['carid'];

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM carprice WHERE carid = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("i", $carid);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
            alert('Record deleted successfully');
            window.location.href = 'page_products.php';
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