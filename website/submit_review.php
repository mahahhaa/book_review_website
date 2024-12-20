<?php
include("database.php");

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // get the data from the form
        $book_title = mysqli_real_escape_string($conn, $_POST['book_title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $review_text = mysqli_real_escape_string($conn, $_POST['review_text']);
        $rating = intval($_POST['rating']);

        $sql = "INSERT INTO reviews (book_title, author, review_text, rating) 
                VALUES ('$book_title', '$author', '$review_text', '$rating')";
    
        if ($conn->query($sql) === TRUE)
        {
            echo " ";
        }else
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
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
    <title>Review Submission</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Thanks for your review!</h1>
        <p>Your review has been submitted!</p>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>