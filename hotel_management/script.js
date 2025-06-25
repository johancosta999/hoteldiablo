document.addEventListener("DOMContentLoaded", () => {
    const faqs = document.querySelectorAll('.faq-question');

    faqs.forEach(faq => {
        faq.addEventListener('click', () => {
            const answer = faq.nextElementSibling;
            const arrow = faq.querySelector('.faq-arrow');
            
            // Toggle visibility of answer
            if (answer.style.display === "block") {
                answer.style.display = "none";
                arrow.textContent = "↓"; // Reset arrow to down
            } else {
                answer.style.display = "block";
                arrow.textContent = "↑"; // Change arrow to up
            }
        });
    });

    // Initially hide all answers
    const answers = document.querySelectorAll('.faq-answer');
    answers.forEach(answer => {
        answer.style.display = 'none';
    });
});