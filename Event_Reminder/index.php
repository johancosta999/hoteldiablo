<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Reminder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Create Event Reminder</h1>
        <form id="event-form">
            <div>
                <label for="name">Your Name:</label>
                <input type="text" id="name" required>
            </div>
            <div>
                <label for="event-name">Event Name:</label>
                <input type="text" id="event-name" required>
            </div>
            <div>
                <label for="event-date">Event Date:</label>
                <input type="date" id="event-date" required>
            </div>
            <div>
                <label for="event-time">Event Time:</label>
                <input type="time" id="event-time" required>
            </div>
            <button type="submit">Set Reminder</button>
        </form>

        
        <div id="notification-section">
            <p>No notifications yet!</p>
        </div>
        <a href="/hoteldiablo/webhome.php"><button class="btn2" style="background-color: rgb(91, 233, 43); color: black;">Back to Home</button></a>
    </div>

    

    <script src="script.js"></script>
</body>
</html>
