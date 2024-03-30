import './bootstrap';




document.addEventListener("DOMContentLoaded", function() {
    var slidingDiv = document.getElementById("slidingDiv");
  
    // Add a class to display the div and initiate the slide-out animation
    slidingDiv.classList.remove("hidden");
  
    // After a short delay, reset the left property to its final position
    setTimeout(function() {
        slidingDiv.style.left = "0";
    }, 10);
  });




  document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('header');

    // Listen for scroll events
    window.addEventListener('scroll', function () {
        // Check if the user has scrolled down a certain amount (adjust as needed)
        if (window.scrollY > 250) {
            // Slide down the sticky div by changing the 'top' property
            header.style.top = '0';
        } else {
            // Move the sticky div back above the viewport when scrolling up
            header.style.top = '-100px';
        }
    });
});

