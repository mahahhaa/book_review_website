<?php
include("database.php");

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $search = $_POST['search'];

    if (!empty($search))
    {
        // partial match
        $sql = "SELECT * FROM `reviews` WHERE `book_title` LIKE ?";
        $stmt = $conn->prepare($sql);
        $search = "%" . $search . "%";
        $stmt->bind_param("s", $search);

        $stmt->execute();
        $result = $stmt->get_result();

        echo "<h2>Search Results:</h2>";
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                echo "<p>ID: " . htmlspecialchars($row["id"]) . "</p>";
                echo "<p>Book Title: " . htmlspecialchars($row["book_title"]) . "</p>";
                echo "<p>Author: " . htmlspecialchars($row["author"]) . "</p>";
                echo "<p>Review: " . htmlspecialchars($row["review_text"]) . "</p>";
                echo "<p>Rating: " . htmlspecialchars($row["rating"]) . "</p>";
            }
        }else
        {
            echo "<p>No books found matching the title: " . htmlspecialchars($_POST['search']) . ".</p>";
        }
        $stmt->close();
    }
    else
    {
        echo "<p>Please enter a book title to search.</p>";
    }
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
</body>
</html>