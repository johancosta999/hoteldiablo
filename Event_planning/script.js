

    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            
            const name = document.getElementById('Name').value;
            const email = document.getElementById('Email').value;
            const phoneNumber = document.getElementById('Phone_Number').value;
            const eventType = document.getElementById('Event_Type').value;
            const eventDate = document.getElementById('Event_Date').value;
            
            
            if (!name || !email || !phoneNumber || !eventType || !eventDate) {
                alert('Please fill out all fields.');
                event.preventDefault(); 
            }
        });
    });



    