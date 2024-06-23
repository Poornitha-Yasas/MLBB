<?php
include 'connect.php';  // Make sure to include your database connection settings

// Determine the type of CRUD operation from the request
$action = isset($_POST['action']) ? $_POST['action'] : '';

switch ($action) {
    case 'create':
        createHero($conn);
        break;
    case 'read':
        readHeroes($conn);
        break;
    case 'update':
        updateHero($conn);
        break;
    case 'delete':
        deleteHero($conn);
        break;
    default:
        echo "Invalid action";
}

// Close the database connection
$conn->close();

// Function to create a new hero
function createHero($conn) {
    $name = $conn->real_escape_string($_POST['name']);
    $role = $conn->real_escape_string($_POST['role']);
    $description = $conn->real_escape_string($_POST['description']);

    $sql = "INSERT INTO heroes (name, role, description) VALUES ('$name', '$role', '$description')";
    if ($conn->query($sql) === TRUE) {
        echo "New hero added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Function to read heroes
function readHeroes($conn) {
    $sql = "SELECT id, name, role, description FROM heroes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Role: " . $row["role"]. " - Description: " . $row["description"] . "<br>";
        }
    } else {
        echo "No heroes found";
    }
}

// Function to update a hero
function updateHero($conn) {
    $hero_id = $_POST['id'];
    $role = $conn->real_escape_string($_POST['role']);

    $sql = "UPDATE heroes SET role='$role' WHERE id=$hero_id";
    if ($conn->query($sql) === TRUE) {
        echo "Hero updated successfully";
    } else {
        echo "Error updating hero: " . $conn->error;
    }
}

// Function to delete a hero
function deleteHero($conn) {
    $hero_id = $_POST['id'];

    $sql = "DELETE FROM heroes WHERE id=$hero_id";
    if ($conn->query($sql) === TRUE) {
        echo "Hero deleted successfully";
    } else {
        echo "Error deleting hero: " . $conn->error;
    }
}
?>

