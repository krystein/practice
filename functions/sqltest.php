<?php
require_once 'login.php';

function connect()
{
    try {
        $db_hostname = 'localhost';
        $db_database = 'publications';
        $db_username = 'root';
        $db_password = '';

        $dbh = new PDO("mysql:host=$db_hostname;dbname=$db_database", $db_username, $db_password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbh;

    } catch (PDOException $e) {
        // Log the error and provide a user-friendly message
        error_log("Database Connection Error: " . $e->getMessage());
        die("Oops! Something went wrong.");
    }
}

if (isset($_POST['delete']) && isset($_POST['isbn'])) {
    $isbn = $_POST['isbn'];
    $dbh = connect();
    $stmt = $dbh->prepare("DELETE FROM publications WHERE isbn = :isbn");
    $stmt->bindParam(':isbn', $isbn);
    $stmt->execute();
}

if (isset($_POST['author']) && isset($_POST['title']) && isset($_POST['category']) && isset($_POST['year']) && isset($_POST['isbn'])) {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $year = $_POST['year'];
    $isbn = $_POST['isbn'];

    $dbh = connect();
    $stmt = $dbh->prepare("INSERT INTO publications (author, title, category, year, isbn) VALUES (:author, :title, :category, :year, :isbn)");
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':isbn', $isbn);
    $stmt->execute();
}

echo <<<_END
<form action="sqltest.php" method="post"><pre>
Author <input type="text" name="author">
Title <input type="text" name="title">
Category <input type="text" name="category">
Year <input type="text" name="year">
ISBN <input type="text" name="isbn">
<input type="submit" value="ADD RECORD" name="submit">
</pre></form>
_END;
?>