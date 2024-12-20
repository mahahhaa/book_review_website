CREATE DATABASE book_reviews;

USE book_reviews;

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    review_text TEXT NOT NULL,
    rating INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'The Lord of the Rings', 'J.R.R. Tolkien', 'Pretty boring', '2', current_timestamp());

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'To Kill a Mockingbird', 'Harper Lee', 'Amazing book. Very powerful.', '5', current_timestamp());

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'Pride and Prejudice', 'Jane Austen', 'Lovely romance! Need me a Mr.Darcy </3', '4', current_timestamp());

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'The Great Gatsby', 'F. Scott Fitzgerald', 'Beautifully written. Def recommend.', '5', current_timestamp());

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'Harry Potter and the Sorcerers Stone', 'J.K. Rowling', 'I hate fantasy and j.k rowling so idk why i read it', '1', current_timestamp());

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'The Catcher in the Rye', 'J.D. Salinger', 'Love this book it is so slayy. ', '5', current_timestamp());

INSERT INTO `reviews`(`id`, `book_title`, `author`, `review_text`, `rating`, `created_at`)
VALUES (NULL, 'Moby-Dick', 'Herman Melville', 'Very naturey', '3', current_timestamp());
