function populateStatusDropdown() {
    const statusDropdown = document.getElementById('status');

    // Define options
    const options = [
        { value: "Paid", text: "Paid" },
        { value: "Pending", text: "Pending" },
        { value: "Overdue", text: "Overdue" }
    ];

    // Populate dropdown
    options.forEach(option => {
        const opt = document.createElement('option');
        opt.value = option.value;
        opt.textContent = option.text;
        statusDropdown.appendChild(opt);
    });
}

document.addEventListener('DOMContentLoaded', populateStatusDropdown);

