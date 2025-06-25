
document.getElementById("event-form").addEventListener("submit", function(event) {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const eventName = document.getElementById("event-name").value;
    const eventDate = document.getElementById("event-date").value;
    const eventTime = document.getElementById("event-time").value;

    const notificationSection = document.getElementById("notification-section");

   
    notificationSection.innerHTML = '';

    // Create a new notification
    const notification = document.createElement("div");
    notification.className = "notification";
    notification.innerHTML = `<p>${name}, don't forget about the ${eventName} on ${eventDate} at ${eventTime}!</p>`;

    
    notificationSection.appendChild(notification);

    
});



