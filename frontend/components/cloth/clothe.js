function toggleContent(element, phoneNumber) {
  // Toggle text and styles for the clicked element only
  if (element.textContent === "SHOW PHONE") {
    element.textContent = phoneNumber; // Show the specific phone number
    element.classList.add("clicked"); // Add clicked style
  } else {
    element.textContent = "SHOW PHONE"; // Reset to default text
    element.classList.remove("clicked"); // Remove clicked style
  }
}
