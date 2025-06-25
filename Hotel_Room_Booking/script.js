document.getElementById('roomType').addEventListener('change', function() {
    const roomType = this.value;
    let maxHeadCount = 0;
    let unitPrice = 0;

    // Setting maxHeadCount and unitPrice based on room type
    switch (roomType) {
        case 'Single':
            maxHeadCount = 1;
            unitPrice = 100;  // Unit price for Single
            break;
        case 'Double':
            maxHeadCount = 2;
            unitPrice = 150;  // Unit price for Double
            break;
        case 'Superior':
            maxHeadCount = 4;
            unitPrice = 200;  // Unit price for Superior
            break;
    }

    // Updating the input fields
    document.getElementById('maxHeadCount').value = maxHeadCount;
    document.getElementById('unitPrice').value = unitPrice;
    calculateTotalPrice();
});

document.getElementById('noOfRooms').addEventListener('input', function() {
    calculateTotalPrice();
});

// Function to calculate the total price
function calculateTotalPrice() {
    const unitPrice = document.getElementById('unitPrice').value;
    const noOfRooms = document.getElementById('noOfRooms').value;
    const totalPrice = unitPrice * noOfRooms;
    document.getElementById('totalPrice').value = totalPrice;
}

let currentIndex = 0;
const images = document.querySelectorAll('.carousel img');
const totalImages = images.length;

document.querySelector('.carousel-button.right').addEventListener('click', function() {
    currentIndex = (currentIndex + 1) % totalImages; // Loop back to first image
    updateCarousel();
});

document.querySelector('.carousel-button.left').addEventListener('click', function() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages; // Loop to last image
    updateCarousel();
});

function updateCarousel() {
    images.forEach((img, index) => {
        img.style.display = index === currentIndex ? 'block' : 'none'; // Show only the current image
    });
}

// Initialize the carousel to show the first image
updateCarousel();


function updateRoomImage() {
    const roomType = document.getElementById("roomType").value;
    const roomImage = document.getElementById("roomImage");

    // Define image sources for each room type
    const images = {
        "Single": "image/option1.jpg", // Path to Single room image
        "Double": "image/option2.jpg", // Path to Double room image
        "Superior": "image/option3.jpg" // Path to Superior room image
    };

    // Update the image source and display it
    if (roomType in images) {
        roomImage.src = images[roomType];
        roomImage.style.display = "block"; // Show the image
    } else {
        roomImage.style.display = "none"; // Hide if no selection
    }
}
