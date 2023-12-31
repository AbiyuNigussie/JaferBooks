<?php
session_start();

if (isset($_SESSION['userId']) && isset($_SESSION['userEmail'])) {

    include '../connection/db_connection.php';
    include '../Validation/Validation.php';
    include '../utility/fileUpload.php';

    if (
        isset($_POST['title']) &&
        isset($_POST['author']) &&
        isset($_POST['category']) &&
        isset($_POST['pubDate']) &&
        isset($_POST['pages']) &&
        isset($_POST['description']) &&
        isset($_POST['price']) &&
        isset($_POST['quantity']) &&
        isset($_FILES['cover'])
    ) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $pubDate = $_POST['pubDate'];
        $pages = $_POST['pages'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $userInput = 'title=' . $title . '&categoryId=' . $category . '&desc=' . $description . '&price=' . $price . '&quantity=' . $quantity . '$authorId=' . $author;

        $text = "Book title";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($title, $text, $location, $ms, $userInput);

        $text = "Book description";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($description, $text, $location, $ms, $userInput);

        $text = "Book author";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($author, $text, $location, $ms, $userInput);

        $text = "Book category";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($category, $text, $location, $ms, $userInput);

        $text = "Publcation Date";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($pubDate, $text, $location, $ms, $userInput);

        $text = "Book Pages";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($pages, $text, $location, $ms, $userInput);

        $text = "Book Price";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($price, $text, $location, $ms, $userInput);

        $text = "Book Quantity";
        $location = "../views/bookForm.php";
        $ms = "error";
        isEmpty($quantity, $text, $location, $ms, $userInput);


        $allowedImageExs = array("jpg", "jpeg", "png");
        $path = "cover";
        $bookCover = uploadFiles($_FILES['cover'], $allowedImageExs, $path);

        if ($bookCover['status'] == "error") {
            $em = $bookCover['data'];
            header("Location: ../booForm.php?error=$em&$userInput");
            exit();
        } else {
            $bookCoverUrl = $bookCover['data'];
            $sql = "INSERT INTO books(
                Title,
                AuthorID,
                CategoryID,
                PublicationDate,
                Pages,
                Description,
                Price,
                QuantityAvailable,
                CoverImageURL
                ) values(?,?,?,?,?,?,?,?,?);";

            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "siisssdis", $title, $author, $category, $pubDate, $pages, $description, $price, $quantity, $bookCoverUrl);
            $res = mysqli_stmt_execute($stmt);

            if ($res) {
                $sm = "The book succcessfully created!";
                header("Location: ../views/bookForm.php?success=$sm");
            } else {
                $em = "Unknown Error Ocurred!";
                header("Location: ../views/bookForm.php?error=$em");
                exit();
            }
        }
    } else {
        header("Location ../views/adminLogin.php");
    }
}
