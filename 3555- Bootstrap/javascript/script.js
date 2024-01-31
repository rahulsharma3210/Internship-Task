
function toggleMode() {
    var body = document.body;
    body.classList.toggle('dark-mode');

    // Get all elements with the class 'card'
    var cards = document.querySelectorAll('.card');

    // Loop through each card and update background and text color based on the theme
    cards.forEach(function (card) {
        if (body.classList.contains('dark-mode')) {
            // Dark theme
            card.style.backgroundColor = '#343a40'; // Dark background color
            card.style.color = '#00f'; // Blue text color
        } else {
            // Light theme
            card.style.backgroundColor = ''; // Reset background color
            card.style.color = '#000'; // Black text color
        }
    });
}
//check git