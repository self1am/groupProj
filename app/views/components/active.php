<script>
    // Get the current URL or set an identifier for the current page
var currentURL = window.location.pathname;

// Select all links in the navigation bar
var navLinks = document.querySelectorAll('.sidebar a');

// Loop through the links and check if their href matches the current URL
navLinks.forEach(function(link) {
    if (link.getAttribute('href') === currentURL) {
        link.classList.add('active'); // Add the "active" class to the current page link
    }
});

</script>