const flashMessage = document.getElementById("flash-message");

if (flashMessage) {
    setTimeout(function () {
        flashMessage.style.display = "none";
    }, 5000); // Hide the message after 5 seconds (5000 milliseconds)
}

// Call the function when the DOM is ready
