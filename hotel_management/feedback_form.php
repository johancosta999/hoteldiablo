<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Feedback</title>
    <style>
        .header {
    background-image: url('image/imagebb.jpg');
    background-size: cover;
    height: 700px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
}

.banner h1 {
    font-size: 45px;
    margin-bottom: 20px;
}

.faq-container {
    width: 80%;
    margin: 20px auto;
    font-family: 'Arial', sans-serif;
}

.faq-container h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 32px;
}

.faq {
    background-color: #c4b7c3;
    margin: 10px 0;
    padding: 15px;
    border: 1px solid #ddd;
}

.faq-question {
    font-weight: bold;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-arrow {
    font-size: 18px;
    transition: transform 0.3s ease; 
}

.faq-answer {
    display: none; 
    margin-top: 10px;
}

.faq-answer.show {
    display: block;
}
.faq-answer.show + .faq-question .faq-arrow {
    transform: rotate(180deg); 
}

.faq-question:hover {
    background-color: #eaeaea;
}

/* Feedback Section */
.feedback-container {
    width: 80%;               /* Set the width of the feedback section */
    margin: 20px auto;       /* Center the feedback section with margin */
    font-family: 'Arial', sans-serif; /* Set the font for the feedback section */
}

.feedback-item {
    background-color: #f9f9f9; /* Background color for feedback items */
    margin: 10px 0;           /* Margin between feedback items */
    padding: 10px;            /* Padding inside feedback items */
    border: 1px solid #ddd;   /* Border for feedback items */
    position: relative;        /* Positioning for the delete button */
}

.delete-btn {
    position: absolute;        /* Absolute positioning for delete button */
    top: 10px;                /* Position from the top */
    right: 10px;              /* Position from the right */
    background-color: red;    /* Background color for delete button */
    color: white;             /* Text color for delete button */
    border: none;             /* Remove border for delete button */
    cursor: pointer;          /* Change cursor to pointer on hover */
    padding: 5px 10px;       /* Padding inside the delete button */
}

.feedback-item h4 {
    margin: 0;                /* Remove margin from the heading inside feedback items */
}

/* Feedback Form */
#feedback-form {
    display: flex;
    flex-direction: column;    /* Stack form elements vertically */
    margin-bottom: 20px;       /* Space below the form */
}

#feedback-form input, 
#feedback-form textarea {
    margin-bottom: 10px;       /* Space below each input field */
    padding: 10px;             /* Padding inside input fields */
    border: 1px solid #ccc;    /* Border for input fields */
}

#feedback-form button {
    background-color: gold;     /* Button color */
    color: black;               /* Button text color */
    border: none;               /* Remove border for button */
    cursor: pointer;            /* Change cursor to pointer on hover */
    padding: 10px;             /* Padding inside button */
}

#feedback-form button:hover {
    background-color: darkgoldenrod; /* Button hover effect */
}





        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        td a {
            text-decoration: none;
            color: #007bff;
            padding: 8px 12px;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        td a.delete {
            color: #dc3545;
        }
        td a:hover {
            background-color: #e2e6ea;
        }
        td a.delete:hover {
            background-color: #f8d7da;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>



<body>

    <div class="header">
        <div class="banner">
            <h1>Hotel Diablo</h1>
        </div>
    </div>

    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>

        <div class="faq">
            <div class="faq-question">How do I get to Diablo Hotel?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">Diablo hotel is about 25 minutes from the airport.</div>
        </div>

        <div class="faq">
            <div class="faq-question">Are there power cuts across Sri Lanka? Do you have power generators in the hotels?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">The country is not facing frequent power cuts anymore - however, our property operates with power generators, therefore there is no disruption of power at our hotel.</div>
        </div>

        <div class="faq">
            <div class="faq-question">Is breakfast available at Diablo Hotel?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">Yes, delicious breakfast options are available.</div>
        </div>

        <div class="faq">
            <div class="faq-question">Can I pay my bill in installments?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">Yes, please contact our billing department to arrange a payment plan.</div>
        </div>

        <div class="faq">
            <div class="faq-question">How do I get a copy of my receipt?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">You can download a digital copy from your billing history after payment.</div>
        </div>

        <div class="faq">
            <div class="faq-question">Is my payment information secure?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">Yes, all transactions are encrypted for your protection.</div>
        </div>

        <div class="faq">
            <div class="faq-question">How do I sign up for event reminders?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">During booking, choose the "Event Reminders" option or enable it in your account settings.</div>
        </div>

        <div class="faq">
            <div class="faq-question">When will I receive reminders for my upcoming event?
                <span class="faq-arrow">↓</span>
            </div>
            <div class="faq-answer">You'll receive reminders 24 hours and 1 hour before the event.</div>
        </div>
    </div>   

<div class="container">
    <h1>Customer Feedback</h1>

    <!-- Feedback Form for Submission and Update -->
    <form action="submit_feedback.php" method="POST">
        <h2>Submit or Update Feedback</h2>

        <input type="hidden" id="feedback_id" name="feedback_id" value="">

        <label for="feedback_date">Date:</label>
        <input type="date" id="feedback_date" name="feedback_date" required>

        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" rows="4" required></textarea>

        <label for="rate">Rate (1 to 5):</label>
        <input type="number" id="rate" name="rate" min="1" max="5" required>

        <button type="submit">Submit Feedback</button>
    </form>
    <a href="/hoteldiablo/webhome.php"><button>Back to Home</button>
</div>

<script src="script.js"></script>

</body>
</html>
