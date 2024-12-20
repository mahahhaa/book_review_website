<?php
include("database.php");

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search</title>
</head>
<body>
    <h1 align="center">Maha's Book Reviews</h1>

    <!-- search for book review -->
    <h3>Search for a Book</h3>
    <div class="container">
        <form method="post" action="search_results.php">
            <input type="text" placeholder="Search Books by title" name="search" required>
            <button name="submit">Search</button>
        </form>
    </div>

    <br>

    <!-- submitting book review -->
    <div class="container">
        <h3 align="center">Submit a New Book Review</h3>
        <form action="submit_review.php" method="POST" class="review-form">
            <!-- title -->
            <div class="form-group">
                <label for="book_title">Book Title:</label>
                <input type="text" name="book_title" id="book_title" 
                       value="<?php echo htmlspecialchars($book_title ?? ''); ?>" required>
            </div>

            <!-- author -->
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" 
                       value="<?php echo htmlspecialchars($author ?? ''); ?>" required>
            </div>

            <!-- textbox for review -->
            <div class="form-group">
                <label for="review_text">Your Review:</label>
                <textarea name="review_text" id="review_text" required>
                    <?php echo htmlspecialchars($review_text ?? ''); ?>
                </textarea>
            </div>

            <!-- rate from 1-5 -->
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" name="rating" id="rating" min="1" max="5" 
                       value="<?php echo htmlspecialchars($rating ?? ''); ?>" required>
            </div>
            <div class="form-group full-width">
                <button type="submit">Submit Review</button>
            </div>
        </form>
    </div>
</body>
</html>
