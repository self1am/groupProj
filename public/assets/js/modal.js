// Get the modal and buttons
var purchaseButton = document.getElementById("purchaseButton");
var purchaseModal = document.getElementById("purchaseModal");
var closeModal = document.getElementById("closeModal");
var purchaseForm = document.getElementById("purchaseForm");

// Add event listener to open the modal when the "Purchase Now" button is clicked
purchaseButton.addEventListener("click", function() {
    purchaseModal.style.display = "block";
});

// Close the modal when the close button is clicked
closeModal.addEventListener("click", function() {
    purchaseModal.style.display = "none";
});

// Close the modal when clicking outside the modal content
window.addEventListener("click", function(event) {
    if (event.target == purchaseModal) {
        purchaseModal.style.display = "none";
    }
});

// Handle form submission
purchaseForm.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;

    // Process the form data (you can customize this part)
    alert("Purchase information submitted:\nName: " + name + "\nEmail: " + email);

    // Close the modal after form submission
    purchaseModal.style.display = "none";
});
