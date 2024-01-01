<?php
session_start();

if (isset($_SESSION['userId']) && isset($_SESSION['userEmail'])) {

    include 'connection/db_connection.php';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Add Event Form | Jafer Books</title>
        <link rel="stylesheet" href="css/addEvent.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <main>
            <div class="left">
                <div class="uleft">
                    <div class="uuleft">
                        <i class="fa-solid fa-user"></i> <a> Mr. Someone </a>
                    </div>
                    <div class="luleft">
                        <a href="#"> <i class="fa-solid fa-layer-group"></i> Dashboard </a>
                        <a href="./adminBooks.php">
                            <i class="fa-solid fa-book"></i> Books
                        </a>
                        <a href="#"> <i class="fa-solid fa-cart-shopping"></i>Order </a>
                        <a href="./users.html"> <i class="fa-solid fa-users"></i> Users </a>
                    </div>
                </div>
                <div class="lleft">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="./adminLogin"> Logout </a>
                </div>
            </div>
            <div class="right">
                <div class="uright">
                    <p><i class="fa-solid fa-list"></i> Events</p>
                    <?php
                    if (isset($_GET['success'])) { ?>
                        <div class="successDiv">
                            <span><?= htmlspecialchars($_GET['success']); ?></span>
                            <i class="fa fa-close" id="closeIcon"></i>
                        </div>
                    <?php }

                    if (isset($_GET['error'])) { ?>
                        <div class="errorDiv">
                            <span><?= htmlspecialchars($_GET['error']); ?></span>
                            <i class="fa fa-close" id="closeIcon"></i>
                        </div>

                    <?php } ?>
                </div>
                <div class="lright">
                    <div class="midu">
                        <div class="umid">
                            <p class="p1">Add Event</p>
                        </div>
                        <div class="lmid">
                            <form id="bookForm" action="php/addEvent.php" method="POST" enctype="multipart/form-data">
                                <label for="eventId">Event ID</label>
                                <input type="text" id="eventId" name="eventId" />
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" />

                                <label for="schedule">Schedule</label>
                                <input type="datetime-local" id="schedule" name="schedule" />

                                <label for="description">Description</label>
                                <textarea type="text" id="description" name="description" rows="5"></textarea>

                                <label for="eventImage">Event Image</label>
                                <input type="file" id="eventImage" name="eventImage" accept="image/*" />

                                <div class="xr">
                                    <button type="submit">
                                        <i class="fa-solid fa-check"></i> Add Event
                                    </button>
                                    <button type="reset">
                                        <i class="fa-solid fa-file"></i> New
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="js/script.js"></script>

    </body>
<?php } else {
    header("Location: adminLogin.php");
    exit;
} ?>

    </html>