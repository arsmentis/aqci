// Function to display a success message if contactForm submits successfully
function displaySuccessMessage(urlParams) {
  
  // Get form and message elements and assign them to variables
  var form = document.getElementById("contactForm");
  var successMessage = document.getElementById("successMessage");

  // If urlParams is true, hide the contactForm form element and show successMessage div
  if (urlParams.has('submitted') === true) {
    form.style.display = "none";
    successMessage.style.display = "block";
  }
}