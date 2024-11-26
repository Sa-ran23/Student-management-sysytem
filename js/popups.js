document.addEventListener("DOMContentLoaded", function() {
    // Get references to the trigger, overlay, and popup content
    var trigger = document.getElementById("popup-trigger");
    var overlay = document.getElementById("overlay");
    var popupContent = document.getElementById("popup-content");

    // Function to open the popup
    function openPopup() {
        overlay.style.display = "block";
    }

    // Function to close the popup
    function closePopup() {
        overlay.style.display = "none";
    }

    // Attach click event to the trigger
    trigger.addEventListener("click", function(event) {
        event.preventDefault();
        openPopup();
    });
});