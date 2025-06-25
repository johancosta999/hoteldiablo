<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> 
    <script src="script.js"></script>
    <title>Event Booking Page</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php 
            session_start(); 
            include("config.php");
            $bookingSuccess = false;  
            
            if(isset($_POST['submit'])){
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Phone_Number = $_POST['Phone_Number'];
                $Event_Type = $_POST['Event_Type'];
                $Event_Date = $_POST['Event_Date'];

               
                $query = "INSERT INTO booking(Name, Email, Phone_Number, Event_Type, Event_Date) 
                          VALUES('$Name','$Email','$Phone_Number','$Event_Type','$Event_Date')";
                
                if(mysqli_query($con, $query)){
                    // Get the last inserted ID (User_Id)
                    $_SESSION['userid'] = mysqli_insert_id($con); 
                    $bookingSuccess = true;  
                    echo "<div class='message'>
                            <p>Booking Successful!</p>
                          </div><br>";
                      
                    echo "<a href='details.php'><button class='btn'>View Booking Details</button></a>";  
                      
                } else {
                    echo "<p>Error Occurred: " . mysqli_error($con) . "</p>";
                }
            }
        ?>

        <?php if(!$bookingSuccess):  ?>
            <header>Event Booking Form</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" id="Name" required>
                </div>
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" required>
                </div>
                <div class="field input">
                    <label for="Phone_Number">Phone Number</label>
                    <input type="text"  name="Phone_Number" id="Phone_Number" required>
                </div>
                <div class="field input">
                    <label for="Event_Type">Event Type</label>
                    <input type="text" placeholder="(Wedding/ Birthday Party/ Anninversary)" name="Event_Type" id="Event_Type" required>
                </div>
                <div class="field input">
                    <label for="Event_Date">Event Date</label>
                    <input type="date" name="Event_Date" id="Event_Date" required>
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Book Now">
                     
                </div>
            </form>
        <?php endif; ?>
        
        </div>
    </div>
</body>
</html>