<?php
session_start();
if (isset($_SESSION['userId']) && isset($_SESSION['userEmail'])) {
    include 'connection/db_connection.php';
    include 'php/event.php'; // Include the file that contains functions for handling events

    if (isset($_GET['eventId'])) {
        $eventId = $_GET['eventId'];
    } else $eventId = 0;
    $events = getAllEvents($conn); // Assuming you have a function named getAllEvents to fetch all events
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Events | Jafer Books</title>
    <link rel="stylesheet" href="css/adminEvents.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <?php
        include 'layout/sideBar.php';
        ?>
        <div class="right">
            <div class="uright">
                <p>
                    <i class="fa-solid fa-list" id="burgerNav"></i> Events
                </p>
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

                        <p class="p1">All Events</p>
                        <a href="./addEvent.php">
                            <i class="fa-solid fa-square-plus"></i>
                        </a>
                    </div>
                    <div class="lmid">
                        <div class="ulmid">
                            <p>#</p>
                            <p>Event Title</p>
                            <p>Description</p>
                            <p>Schedule</p>
                            <p class="fa">Action</p>
                        </div>
                        <div class="llmid">
                            <?php
                            if ($events == 0) {
                            } else {
                                foreach ($events as $event) {
                                    $eventId = $event['event_id'];
                                    $eventTitle = $event['event_title'];
                                    $description = $event['description'];
                                    $schedule = $event['schedule'];
                            ?>
                                    <div class="content" id="page">
                                        <p><?php echo $eventId; ?></p>
                                        <p><?php echo $eventTitle; ?></p>
                                        <p><?php echo $description; ?></p>
                                        <p><?php echo $schedule; ?></p>
                                        <div>
                                            <a href="php/deleteEvent.php?eventId=<?php echo $eventId; ?>" onclick="return confirm('Are you sure you want to delete this event?');">
                                                <i class="fa-solid fa-square-xmark" id="x"></i>
                                            </a>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
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
